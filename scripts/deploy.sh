#!/usr/bin/env bash
# dist/ をサーバーのドキュメントルートへ rsync で差分転送する。
#
#   scripts/deploy.sh            … dry-run（転送・削除される内容の確認のみ）
#   scripts/deploy.sh --execute  … 実際に転送する
#
# 必要な環境変数（.env.deploy.local などで設定）:
#   DEPLOY_HOST / DEPLOY_USER / DEPLOY_PORT
#   DEPLOY_DOCROOT  … サイトのドキュメントルート（WordPress テーマの配置先ではない）
set -euo pipefail

cd "$(dirname "$0")/.."

if [[ -f .env.deploy.local ]]; then
  set -a
  # shellcheck disable=SC1091
  source .env.deploy.local
  set +a
fi

: "${DEPLOY_HOST:?DEPLOY_HOST を設定してください}"
: "${DEPLOY_USER:?DEPLOY_USER を設定してください}"
: "${DEPLOY_DOCROOT:?DEPLOY_DOCROOT（ドキュメントルート）を設定してください}"
DEPLOY_PORT="${DEPLOY_PORT:-22}"

if [[ ! -f dist/index.html ]]; then
  echo "dist/ がありません。先に npm run build を実行してください。" >&2
  exit 1
fi

DRY_RUN="-n"
if [[ "${1:-}" == "--execute" ]]; then
  DRY_RUN=""
else
  echo "== dry-run です。内容を確認してから --execute を付けて実行してください =="
fi

rsync -avz --delete $DRY_RUN \
  --exclude-from=deploy/rsync-exclude.txt \
  -e "ssh -p ${DEPLOY_PORT}" \
  dist/ "${DEPLOY_USER}@${DEPLOY_HOST}:${DEPLOY_DOCROOT%/}/"
