const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const paths = require('../paths');
const sassGlobImporter = require('sass-glob-importer');

module.exports = {
  module: {
    rules: [{
      test: /\.scss$/,
      use: [
        MiniCssExtractPlugin.loader,
        {
          loader: 'css-loader',
          options: {
            sourceMap: true,
            importLoaders: 2
          }
        },
        {
          loader: 'postcss-loader',
          options: {
            sourceMap: true,
            postcssOptions: {
              plugins: [
                ['autoprefixer'],
                'css-mqpacker',
                ['css-declaration-sorter', { order: 'alphabetical' }]
              ]
            }
          }
        },
        {
          loader: 'sass-loader',
          options: {
            sourceMap: true,
            implementation: require('sass'),
            sassOptions: {
              importer: sassGlobImporter(),
              fiber: false,
              outputStyle: 'compressed'
            }
          }
        }
      ]
    }]
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: 'style.css'
    })
  ],
  ignoreWarnings: [/asset size limit/],
  entry: {
    style: {
      import: `${paths.src.scss}/style.scss`,
      filename: 'assets/css/[name].css'
    }
  },
  optimization: {
    splitChunks: {
      cacheGroups: {
        styles: {
          name: 'styles',
          type: 'css/mini-extract',
          chunks: 'all',
          enforce: true,
        },
      },
    }
  }
};

// const MiniCssExtractPlugin = require('mini-css-extract-plugin');
// const paths = require('../paths');
// const dartSassGlob = require('webpack-dart-sass-glob');

// module.exports = {
//   module: {
//     rules: [{
//       test: /\.scss$/,
//       use: [
//         MiniCssExtractPlugin.loader,
//         {
//           loader: 'css-loader',
//           options: {
//             sourceMap: true,
//             importLoaders: 2
//           }
//         },
//         {
//           loader: 'postcss-loader',
//           options: {
//             sourceMap: true,
//             postcssOptions: {
//               plugins: [
//                 ['autoprefixer'],
//                 'css-mqpacker',
//                 ['css-declaration-sorter', { order: 'alphabetical' }]
//               ]
//             }
//           }
//         },
//         {
//           loader: 'sass-loader',
//           options: {
//             sourceMap: true,
//             implementation: require('sass'),
//             sassOptions: {
//               importer: dartSassGlob
//             }
//           }
//         },
//         'glob-import-loader'
//       ]
//     }]
//   },
//   plugins: [
//     new MiniCssExtractPlugin({
//       filename: 'style.css'
//     })
//   ],
//   ignoreWarnings: [/asset size limit/],
//   entry: {
//     style: {
//       import: `${paths.src.scss}/style.scss`,
//       filename: 'assets/css/[name].css'
//     }
//   },
//   optimization: {
//     splitChunks: {
//       cacheGroups: {
//         styles: {
//           name: 'styles',
//           type: 'css/mini-extract',
//           chunks: 'all',
//           enforce: true,
//         },
//       },
//     }
//   }
// };