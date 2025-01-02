const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const CopyPlugin = require('copy-webpack-plugin');
const ImageminWebpWebpackPlugin = require("imagemin-webp-webpack-plugin");
const { CleanWebpackPlugin } = require('clean-webpack-plugin');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

module.exports = {
  mode: 'development',
  entry: './_src/index.js',
  output: {
    path: path.resolve(__dirname, 'dist'),
    filename: './js/bundle.js',
    assetModuleFilename: 'assets/images/[name][ext]',
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        use: [
          {
            loader: "babel-loader",
            options: {
              presets: ["@babel/preset-env"],
            },
          },
        ],
      },
      {
        test: /\.(png|jpe?g|gif|svg|webp)$/i,
        type: 'asset/resource',
        generator: {
          filename: 'assets/images/[name][ext]',
        }
      },
      {
        test: /\.scss$/i,
        use: [
          {
            loader: MiniCssExtractPlugin.loader,
            options: {
              publicPath: '../../'
            }
          },
          {
            loader: 'css-loader',
            options: {
              url: true,
            }
          },
          {
            loader: 'postcss-loader',
            options: {
              postcssOptions: {
                plugins: [
                  require('autoprefixer')(),
                  require('css-declaration-sorter')({
                    order: 'smacss'
                  }),
                  require('postcss-sort-media-queries')({
                    sort: 'desktop-first',
                  })
                ],
              }
            }
          },
          {
            loader: 'sass-loader',
            options: {
              sassOptions: {
                outputStyle: 'expanded',
              },
            },
          },
          {
            loader: 'webpack-dart-sass-glob',
          },
        ]
      },
    ]
  },
  plugins: [
    new CleanWebpackPlugin({
      cleanOnceBeforeBuildPatterns: ['**/*', '!style.css'],
    }),
    new MiniCssExtractPlugin({
      filename: 'assets/css/style.css',
      ignoreOrder: true,
    }),
    new CopyPlugin({
      patterns: [
        {
          context: '_src/images',
          from: "**/*.{png,jpg,jpeg}",
          to: "assets/images/[name].webp",
          noErrorOnMissing: true,
          force: true
        },
        {
          context: '_src/images',
          from: "**/*.{svg,gif,ico,mp4,webp}",
          to: "assets/images/[name][ext]",
          noErrorOnMissing: true,
          force: true
        }
      ]
    }),
    new ImageminWebpWebpackPlugin({
      config: [{
        test: /\.(png|jpe?g)$/i,
        options: {
          quality: 75
        }
      }],
      overrideExtension: true,
      silent: false,
      detailedLogs: true
    }),
    new CopyPlugin({
      patterns: [
        {
          context: '_src',
          from: './**/*.php',
          to: '[path][name][ext]',
        }
      ]
    }),
    new BrowserSyncPlugin({
      proxy: 'http://localhost:10029/',
      files: [
        'dist/**/*.php',
        'dist/assets/css/**/*.css',
        'dist/assets/js/**/*.js'
      ]
    })
  ],

  resolve: {
    alias: {
      'images': path.resolve(__dirname, 'dist/assets/images/'),
    },
  },
};