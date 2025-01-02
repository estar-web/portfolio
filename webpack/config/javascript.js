const paths = require('../paths');

module.exports = {
  // JavaScriptの処理設定
  module: {
    rules: [{
      test: /\.js$/,
      exclude: /node_modules/,
      use: [{
        loader: 'babel-loader',
        options: {
          presets: ['@babel/preset-env']
        }
      }]
    }]
  },
  // エントリーポイントの設定
  entry: {
    bundle: `${paths.src.js}/app.js`
  },
  // 出力の設定
  output: {
    path: paths.dist.root,
    filename: 'assets/js/[name].js'
  }
};