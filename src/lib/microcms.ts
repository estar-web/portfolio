import { createClient } from 'microcms-js-sdk';
import type { MicroCMSImage, MicroCMSListContent } from 'microcms-js-sdk';
import { MICROCMS_API_KEY, MICROCMS_SERVICE_DOMAIN } from 'astro:env/server';
import categoriesFixture from '../data/fixtures/categories.json';
import worksFixture from '../data/fixtures/works.json';

/** カテゴリ（microCMS: categories API） */
export type Category = MicroCMSListContent & {
  name: string;
  /** 一覧ナビの並び順（昇順） */
  order?: number;
};

/** 制作実績（microCMS: works API） */
export type Work = MicroCMSListContent & {
  /** 管理用タイトル。サイト上には表示しない */
  title: string;
  /** クライアント様 / 案件概要。一覧・詳細の見出しとして表示する */
  customer: string;
  thumbnail?: MicroCMSImage;
  categories: Category[];
  url?: string;
  /** ページ数（非公開実績の表にのみ表示） */
  pages?: number;
  area?: string;
  period?: string;
  /** 目安価格（税抜） */
  price?: number;
  comment?: string;
};

/** このカテゴリが付いた実績はカードと詳細ページを作らず、/works/ の「その他の実績」の表にだけ出す */
export const PRIVATE_CATEGORY_ID = 'private';

export const isPrivateWork = (work: Work): boolean =>
  work.categories.some((category) => category.id === PRIVATE_CATEGORY_ID);

const client =
  MICROCMS_SERVICE_DOMAIN && MICROCMS_API_KEY
    ? createClient({ serviceDomain: MICROCMS_SERVICE_DOMAIN, apiKey: MICROCMS_API_KEY })
    : null;

/** microCMS の接続情報が未設定のときは、ローカルの仮データでビルドする */
export const isUsingFixtures = client === null;

if (isUsingFixtures) {
  console.warn('[microcms] MICROCMS_SERVICE_DOMAIN / MICROCMS_API_KEY が未設定のため、src/data/fixtures のデータでビルドします。');
}

const byPublishedAtDesc = (a: Work, b: Work) =>
  (b.publishedAt ?? b.createdAt).localeCompare(a.publishedAt ?? a.createdAt);

const byOrder = (a: Category, b: Category) =>
  (a.order ?? Number.MAX_SAFE_INTEGER) - (b.order ?? Number.MAX_SAFE_INTEGER);

// ビルド中は全ページで同じ結果を使い回し、API へのリクエストを 1 回ずつにする
let worksPromise: Promise<Work[]> | undefined;
let categoriesPromise: Promise<Category[]> | undefined;

/** 制作実績を新しい順にすべて取得する */
export function getWorks(): Promise<Work[]> {
  worksPromise ??= client
    ? client.getAllContents<Work>({ endpoint: 'works', queries: { orders: '-publishedAt', depth: 1 } })
    : Promise.resolve([...(worksFixture as Work[])].sort(byPublishedAtDesc));
  return worksPromise;
}

/** カテゴリを並び順どおりにすべて取得する（実績が 0 件のカテゴリも含む） */
export function getCategories(): Promise<Category[]> {
  categoriesPromise ??= client
    ? client.getAllContents<Category>({ endpoint: 'categories' }).then((list) => list.sort(byOrder))
    : Promise.resolve([...(categoriesFixture as Category[])].sort(byOrder));
  return categoriesPromise;
}

const MICROCMS_IMAGE_HOST = 'images.microcms-assets.io';

/**
 * microCMS の画像 API で WebP・指定幅に変換した URL を返す。
 * microCMS 以外の画像（仮データ）はそのまま返す。
 */
export function imageUrl(image: MicroCMSImage, width?: number): string {
  const url = new URL(image.url);
  if (url.hostname !== MICROCMS_IMAGE_HOST) return image.url;
  url.searchParams.set('fm', 'webp');
  if (width) url.searchParams.set('w', String(width));
  return url.toString();
}

/** microCMS の画像なら幅違いの srcset を返す */
export function imageSrcset(image: MicroCMSImage, widths: number[]): string | undefined {
  if (new URL(image.url).hostname !== MICROCMS_IMAGE_HOST) return undefined;
  return widths
    .filter((w) => !image.width || w <= image.width)
    .map((w) => `${imageUrl(image, w)} ${w}w`)
    .join(', ') || undefined;
}
