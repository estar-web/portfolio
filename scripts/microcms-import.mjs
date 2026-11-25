#!/usr/bin/env node
/**
 * WordPress 時代の実績データ（src/data/fixtures）を microCMS へ登録する移行スクリプト。
 *
 *   npm run microcms:import              … 登録内容の確認のみ（何も書き込まない）
 *   npm run microcms:import -- --execute … 実際に登録する
 *
 * 必要な環境変数（.env）:
 *   MICROCMS_SERVICE_DOMAIN  サービスID
 *   MICROCMS_WRITE_API_KEY   コンテンツの PUT 権限と「メディアのアップロード」権限を付けたキー
 *
 * 実行すると、公開中の WordPress サイトから実績のサムネイル画像をダウンロードし、
 * microCMS のメディアにアップロードしてから実績を登録します。1 回だけ実行してください。
 */
import { readFile } from 'node:fs/promises';
import { basename } from 'node:path';

const EXECUTE = process.argv.includes('--execute');
const MAX_MEDIA_BYTES = 5 * 1024 * 1024; // マネジメント API のアップロード上限

try {
  process.loadEnvFile('.env');
} catch {
  // .env がなければ環境変数をそのまま使う
}

const serviceDomain = process.env.MICROCMS_SERVICE_DOMAIN;
const writeKey = process.env.MICROCMS_WRITE_API_KEY;

if (EXECUTE && (!serviceDomain || !writeKey)) {
  console.error('MICROCMS_SERVICE_DOMAIN と MICROCMS_WRITE_API_KEY を .env に設定してください。');
  process.exit(1);
}

const readJson = async (path) => JSON.parse(await readFile(new URL(path, import.meta.url), 'utf8'));
const categories = await readJson('../src/data/fixtures/categories.json');
const works = await readJson('../src/data/fixtures/works.json');

const sleep = (ms) => new Promise((resolve) => setTimeout(resolve, ms));

/** コンテンツ ID を指定して公開状態で登録する */
async function putContent(endpoint, id, content) {
  const res = await fetch(`https://${serviceDomain}.microcms.io/api/v1/${endpoint}/${encodeURIComponent(id)}`, {
    method: 'PUT',
    headers: { 'X-MICROCMS-API-KEY': writeKey, 'Content-Type': 'application/json' },
    body: JSON.stringify(content),
  });
  if (!res.ok) throw new Error(`${endpoint}/${id} の登録に失敗しました: HTTP ${res.status} ${await res.text()}`);
}

/** 画像をダウンロードして microCMS のメディアにアップロードし、その URL を返す */
async function uploadImage(sourceUrl) {
  const res = await fetch(sourceUrl);
  if (!res.ok) throw new Error(`画像の取得に失敗しました: ${sourceUrl} (HTTP ${res.status})`);
  const blob = await res.blob();
  if (blob.size > MAX_MEDIA_BYTES) {
    throw new Error(`画像が 5MB を超えています: ${sourceUrl}（管理画面から手動でアップロードしてください）`);
  }
  const form = new FormData();
  form.append('file', blob, decodeURIComponent(basename(new URL(sourceUrl).pathname)));
  const upload = await fetch(`https://${serviceDomain}.microcms-management.io/api/v1/media`, {
    method: 'POST',
    headers: { 'X-MICROCMS-API-KEY': writeKey },
    body: form,
  });
  if (!upload.ok) throw new Error(`画像のアップロードに失敗しました: HTTP ${upload.status} ${await upload.text()}`);
  return (await upload.json()).url;
}

console.log(EXECUTE ? '== microCMS へ登録します ==' : '== 確認のみ（--execute を付けると登録します） ==');

// 1. カテゴリ
for (const category of categories) {
  console.log(`[categories] ${category.id}: ${category.name}`);
  if (EXECUTE) await putContent('categories', category.id, { name: category.name, order: category.order });
}

// 2. 実績（公開日時の並びを保つため、古いものから順に登録する）
const oldestFirst = [...works].sort((a, b) => a.publishedAt.localeCompare(b.publishedAt));
for (const work of oldestFirst) {
  console.log(`[works] ${work.id}: ${work.customer}${work.thumbnail ? `（画像: ${work.thumbnail.url}）` : ''}`);
  if (!EXECUTE) continue;

  const thumbnail = work.thumbnail ? await uploadImage(work.thumbnail.url) : undefined;
  await putContent('works', work.id, {
    title: work.title,
    customer: work.customer,
    thumbnail,
    categories: work.categories.map((category) => category.id),
    url: work.url,
    pages: work.pages,
    area: work.area,
    period: work.period,
    price: work.price,
    comment: work.comment,
  });
  await sleep(1000);
}

console.log(EXECUTE ? '登録が完了しました。' : `カテゴリ ${categories.length} 件、実績 ${works.length} 件を登録予定です。`);
