const path = require('path');

// プロジェクトのルートディレクトリを取得
const rootDir = path.resolve(__dirname, '../');

// パスの設定をオブジェクトとして管理
module.exports = {
  // ソースファイルのパス
  src: {
    root: path.join(rootDir, '_src'),
    js: path.join(rootDir, '_src/js'),
    scss: path.join(rootDir, '_src/scss'),
    images: path.join(rootDir, '_src/images')
  },
  // 出力先のパス
  dist: {
    root: path.join(rootDir, 'dist'),
    assets: path.join(rootDir, 'dist/assets'),
    js: path.join(rootDir, 'dist/assets/js'),
    css: path.join(rootDir, 'dist/assets/css'),
    images: path.join(rootDir, 'dist/assets/images')
  }
};