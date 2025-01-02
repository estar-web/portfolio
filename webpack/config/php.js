const CopyPlugin = require('copy-webpack-plugin');
const paths = require('../paths');

module.exports = {
  plugins: [
    new CopyPlugin({
      patterns: [{
        from: '**/*.php',
        context: paths.src.root,
        to: '[path][name][ext]'
      }]
    })
  ]
};