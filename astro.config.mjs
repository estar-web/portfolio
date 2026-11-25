// @ts-check
import { defineConfig, envField } from 'astro/config';
import sitemap from '@astrojs/sitemap';

export default defineConfig({
  site: 'https://free-star-work.com',
  trailingSlash: 'always',
  build: {
    format: 'directory',
  },
  // Astro 7 の既定値 'jsx' はタグ間の空白を詰めてしまうため、従来どおりの圧縮にする
  compressHTML: true,
  integrations: [
    sitemap({
      filter: (page) => !page.includes('/contact/thanks/'),
    }),
  ],
  env: {
    schema: {
      // 未設定の場合は src/data/fixtures のローカルデータでビルドする
      MICROCMS_SERVICE_DOMAIN: envField.string({ context: 'server', access: 'secret', optional: true }),
      MICROCMS_API_KEY: envField.string({ context: 'server', access: 'secret', optional: true }),
      // お問い合わせフォームの送信先（Formspree などのエンドポイント）
      PUBLIC_FORM_ENDPOINT: envField.string({ context: 'client', access: 'public', optional: true }),
    },
  },
});
