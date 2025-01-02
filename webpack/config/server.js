const BrowserSyncPlugin = require('browser-sync-webpack-plugin');
const paths = require('../paths');

module.exports = {
  devServer: {
    static: {
      directory: paths.dist.root
    },
    watchFiles: {
      paths: [`${paths.src.root}/**/*.*`],
      options: {
        usePolling: true
      }
    }
  },
  plugins: [
    new BrowserSyncPlugin({
      proxy: 'http://localhost:10029/',
      files: [
        `${paths.dist.root}/**/*.php`,
        `${paths.dist.css}/**/*.css`,
        `${paths.dist.js}/**/*.js`
      ]
    })
  ]
};