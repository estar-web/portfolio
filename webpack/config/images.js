const ImageMinimizerPlugin = require('image-minimizer-webpack-plugin');

module.exports = {
  module: {
    rules: [{
      test: /\.(png|jpe?g|gif|svg|webp)$/i,
      type: 'asset/resource',
      generator: {
        filename: 'assets/images/[name][ext]'
      }
    }]
  },
  optimization: {
    minimizer: [
      new ImageMinimizerPlugin({
        minimizer: {
          implementation: ImageMinimizerPlugin.imageminMinify,
          options: {
            plugins: [
              ['imagemin-mozjpeg', { quality: 80 }],
              ['imagemin-pngquant', { quality: [0.75, 0.8] }],
              ['imagemin-gifsicle', { optimizationLevel: 3 }],
              ['imagemin-svgo', {}]
            ]
          }
        },
        generator: [{
          preset: 'webp',
          implementation: ImageMinimizerPlugin.imageminGenerate,
          options: {
            plugins: ['imagemin-webp']
          }
        }]
      })
    ]
  }
};