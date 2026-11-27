// お問い合わせフォームを外部フォームサービスへ送信し、完了したら送信完了ページへ移動する
import { PUBLIC_FORM_ENDPOINT } from 'astro:env/client';

const form = document.querySelector<HTMLFormElement>('#js-contact-form');
const status = document.querySelector<HTMLElement>('#js-contact-status');
const submitButton = form?.querySelector<HTMLInputElement>('[type="submit"]');

const showStatus = (message: string) => {
  if (status) status.textContent = message;
};

form?.addEventListener('submit', async (event) => {
  event.preventDefault();
  if (!form.reportValidity()) return;

  if (!PUBLIC_FORM_ENDPOINT) {
    showStatus('現在フォームの送信先が設定されていません。お手数ですが LINE からご連絡ください。');
    return;
  }

  showStatus('');
  if (submitButton) submitButton.disabled = true;

  try {
    const response = await fetch(PUBLIC_FORM_ENDPOINT, {
      method: 'POST',
      body: new FormData(form),
      headers: { Accept: 'application/json' },
    });
    if (!response.ok) throw new Error(`HTTP ${response.status}`);
    window.location.href = '/contact/thanks/';
  } catch {
    showStatus('送信に失敗しました。時間をおいて再度お試しいただくか、LINE からご連絡ください。');
    if (submitButton) submitButton.disabled = false;
  }
});
