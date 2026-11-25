// WordPress テーマ時代（webpack）と同じ PostCSS 構成
import autoprefixer from 'autoprefixer';
import cssDeclarationSorter from 'css-declaration-sorter';
import sortMediaQueries from 'postcss-sort-media-queries';

export default {
  plugins: [
    autoprefixer(),
    cssDeclarationSorter({ order: 'smacss' }),
    sortMediaQueries({ sort: 'desktop-first' }),
  ],
};
