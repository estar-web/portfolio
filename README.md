# Code:HOSHI ポートフォリオ（Astro + microCMS）

https://free-star-work.com/ のソースです。WordPress のオリジナルテーマから、Astro（静的サイト）+ microCMS に作り直しました。
見た目は公開中の WordPress 版と同じになるよう、SCSS（FLOCSS）をそのまま移植しています。

| 役割 | 使っているもの |
| --- | --- |
| サイト生成 | Astro 7（静的出力。`dist/` に HTML を書き出す） |
| 制作実績の管理 | microCMS（`works` と `categories` の 2 API） |
| スタイル | Sass + PostCSS（autoprefixer / css-declaration-sorter / postcss-sort-media-queries） |
| スライダー | Swiper |
| お問い合わせ | 外部フォームサービス（Formspree など）へ送信 |

```
src/
  pages/            … ページ（/、/works/、/works/[id]/、/works/category/[id]/、/contact/）
  components/       … ヘッダー・フッター・実績一覧などの部品
  layouts/          … <head>（タイトル・OGP・GA・GTM）を含む共通レイアウト
  lib/microcms.ts   … microCMS からのデータ取得（未設定時は仮データを使う）
  data/fixtures/    … 仮データ兼、移行データ（WordPress から抽出した実績 21 件）
  scripts/          … ブラウザで動く JS（メニュー、スライダー、フォーム送信）
  styles/           … WordPress テーマから移した SCSS
public/             … 画像・.htaccess（旧 URL からの転送）
microcms/schema/    … microCMS にインポートする API スキーマ
scripts/            … 移行スクリプト・デプロイスクリプト
deploy/             … rsync で消してはいけないファイルの一覧
```

## 開発

Node.js 22.23 以上が必要です（`.nvmrc` は 24）。

```bash
nvm use
```

```bash
npm ci
```

```bash
npm run dev
```

http://localhost:4321/ で確認できます。`.env` に microCMS の設定がなければ、`src/data/fixtures/` の仮データで表示されます。

```bash
npm run build
```

`dist/` に公開用のファイルが出力されます。

## 環境変数

`.env.example` を参考に `.env` に追記してください（`.env` は Git 管理外です）。

| 変数 | 用途 |
| --- | --- |
| `MICROCMS_SERVICE_DOMAIN` | microCMS のサービスID |
| `MICROCMS_API_KEY` | 読み取り用 API キー（GET 権限のみ） |
| `MICROCMS_WRITE_API_KEY` | 移行スクリプト専用（PUT 権限＋メディアのアップロード権限） |
| `PUBLIC_FORM_ENDPOINT` | お問い合わせフォームの送信先 URL |

## microCMS の準備

1. microCMS でサービスを作成します（Hobby プランで足ります。API は 2 つしか使いません）。
2. API を **categories → works の順に** 作ります（works がカテゴリを参照するため）。どちらも「リスト形式」です。

   | API 名 | エンドポイント | スキーマ |
   | --- | --- | --- |
   | カテゴリ | `categories` | `microcms/schema/api-categories.json` をインポート |
   | 制作実績 | `works` | `microcms/schema/api-works.json` をインポート |

   インポートできない場合は、JSON の内容（フィールドID・種類）どおりに手で作ってください。works の「カテゴリ」は「複数コンテンツ参照」で、参照先は `categories` です。

3. 「API キー」で 2 つのキーを作ります。
   - 読み取り用：`categories` と `works` の GET のみ → `MICROCMS_API_KEY`
   - 移行用：`categories` と `works` の GET・PUT、マネジメント API の「メディアのアップロード」 → `MICROCMS_WRITE_API_KEY`
4. WordPress の実績を移行します。まず確認だけ行い、内容に問題がなければ `--execute` を付けて実行します。実行すると、公開中の WordPress サイトからサムネイル画像をダウンロードして microCMS にアップロードします。登録済みの ID は飛ばすので、途中で失敗したらそのまま再実行してください。
   - 非公開実績の「管理用タイトル」は、公開リポジトリに実名を載せないよう案件概要と同じ文言にしてあります。必要なら移行後に管理画面で書き換えてください。

   ```bash
   npm run microcms:import
   ```

   ```bash
   npm run microcms:import -- --execute
   ```

5. 移行が終わったら、移行用キーは microCMS の管理画面で削除してください。

### 実績の入力ルール

- **カテゴリ「非公開実績」（ID: `private`）** を付けると、カードにも詳細ページにも出さず、実績一覧（`/works/`）の下の「その他の実績」の表にだけ出します。トップのスライダーにも出ません。
  - 表の列は「サイト概要（クライアント様 / 案件概要）・業務内容（担当領域）・担当ページ数（ページ数）・期間（制作期間）」です。サムネイル・サイト URL・目安価格・コメントはサイトに出ません。
  - 絞り込みナビにも「非公開実績」は出しません。
- **クライアント様 / 案件概要** がサイト上の見出しとページタイトル（非公開実績では表の「サイト概要」）になります。非公開実績では社名を伏せて書いてください。**管理用タイトル** はサイトに出ません。
- 一覧と表は公開日の新しい順です。トップのスライダーは非公開実績を除いた新しい 10 件です。
- カテゴリの並び順は「並び順」の数字の小さい順です。

## お問い合わせフォーム

Contact Form 7 の代わりに、外部のフォームサービスへ送信します（Formspree を想定）。

1. Formspree でフォームを作り、送信先 URL（`https://formspree.io/f/xxxxxxxx`）を `PUBLIC_FORM_ENDPOINT` に設定します。
2. 送信に成功すると `/contact/thanks/` に移動します。失敗したときはフォームの下に案内が出ます。
3. 送信される項目名：`name`（お名前）、`kana`（フリガナ）、`company`（会社名）、`email`、`tel`、`message`。`_gotcha` はスパム対策用の見えない欄です。

## デプロイ

今のサーバーのドキュメントルートへ、`dist/` を rsync で差分転送します。

> WordPress 時代の `.env` の接続設定は FTP（ポート 21）です。rsync には SSH 接続が必要なので、サーバー側で SSH を有効にして公開鍵を登録してください。SSH が使えないサーバーの場合は、デプロイ方法（FTP/SFTP での差分反映）を見直します。`deploy/rsync-exclude.txt` に書いたもの（`/sobolon/`、`/demo-lp/` など、サーバーにだけあるもの）は転送も削除もされません。

### 手動で反映する

`.env.deploy.local` に `DEPLOY_HOST` / `DEPLOY_USER` / `DEPLOY_PORT` / `DEPLOY_DOCROOT`（ドキュメントルート）を書いてから実行します。引数なしは dry-run です。

```bash
npm run build && scripts/deploy.sh
```

```bash
scripts/deploy.sh --execute
```

### microCMS の更新で自動反映する（GitHub Actions）

`.github/workflows/deploy.yml` が、master への push・手動実行・microCMS の Webhook でビルドと rsync を行います。**本番切り替えまでは動かないよう止めてあります**（リポジトリの Variables で `DEPLOY_ENABLED` を `true` にすると有効）。

- Secrets：`MICROCMS_SERVICE_DOMAIN`、`MICROCMS_API_KEY`、`PUBLIC_FORM_ENDPOINT`、`DEPLOY_HOST`、`DEPLOY_USER`、`DEPLOY_PORT`、`DEPLOY_DOCROOT`、`DEPLOY_SSH_KEY`（デプロイ用の秘密鍵）、`DEPLOY_KNOWN_HOSTS`（`ssh-keyscan -p ポート ホスト` の結果）
- microCMS 側：`works` と `categories` の両方の API で「API設定 → Webhook → GitHub Actions」を追加し、トリガーイベント名を `microcms_update` にします。GitHub のトークンは、このリポジトリの Contents に読み書き権限を付けた fine-grained token を使います。

## WordPress からの切り替え手順

1. microCMS の準備と移行を済ませ、実データで `npm run build` が通ることを確認する。
2. Formspree を設定し、ローカルで送信テストをする。
3. サーバーのドキュメントルートを一覧し、`deploy/rsync-exclude.txt` を確定する。サーバーの既存 `.htaccess`（HTTPS 転送など）と `public/.htaccess` を見比べ、必要な設定を移す。
4. `scripts/deploy.sh` の dry-run で転送・削除の内容を確認してから反映する。
5. 旧 URL の転送（下表）と各ページを確認し、Search Console に `/sitemap-index.xml` を送信する。
6. WordPress 本体を削除するかどうかは、問題がないことを確認してから判断する。

### URL の変更

| WordPress | Astro |
| --- | --- |
| `/2025/05/04/createe/` など | `/works/createe/`（一覧は `public/.htaccess`） |
| 非公開実績の記事（`/2025/04/15/private6/` など） | `/works/`（詳細ページはなくなり、一覧の表にまとめる） |
| `/category/lp/` など | `/works/category/lp/` |
| `/category/uncategorized/` | `/works/category/other/` |
| `/category/private/` | `/works/` |
| `/works/`、`/contact/`、`/contact/thanks/` | 変更なし |

## WordPress 版からの主な変更点

- jQuery・WOW.js・animate.css をやめ、素の JavaScript に書き直しました（動きは同じです）。
- 非公開実績は、ダミー画像のカードと詳細ページをやめ、実績一覧の下の「その他の実績」の表にまとめました（2023 年 11 月〜2024 年 5 月の WordPress テーマと同じ見せ方です。当時の表にあった、ログイン中だけ出る URL の列は、静的サイトにはログインがないためなくしました）。
- フッターの Works リンクが `/work/`（存在しないページ）になっていたのを `/works/` に直しました。
- トップの Skills（3 項目）と、Check セクションを載せない構成は、公開中のサイトに合わせています。Check セクションへのナビのリンクも外しました。
- All in One SEO の代わりに、タイトル・説明文・OGP・canonical・サイトマップを Astro 側で出力しています。
- OGP 画像・ファビコン・ホーム画面用アイコンは、WordPress の「サイトアイコン」と All in One SEO に設定されていた画像（`wp-content/uploads/2025/04/`）を `public/assets/images/` に移しました。ホーム画面用アイコンはテーマのクラゲの絵ではなく、サイトアイコンの「CODE:HOSHI」ロゴです。
