// 全ページ共通の動き（WordPress テーマの js/app.js を jQuery なしで書き直したもの）

const header = document.getElementById('js-header');

// ---- ハンバーガーメニュー ----------------------------------------------------
document.getElementById('js-toggle')?.addEventListener('click', (event) => {
  event.preventDefault();
  header?.classList.toggle('add-active');
});

document.querySelectorAll('.js-navLink').forEach((link) => {
  link.addEventListener('click', () => header?.classList.remove('add-active'));
});

const pcWidth = window.matchMedia('screen and (min-width: 769px)');
const closeMenuOnPc = () => {
  if (pcWidth.matches) header?.classList.remove('add-active');
};
pcWidth.addEventListener('change', closeMenuOnPc);
closeMenuOnPc();

// ---- ページ内リンクのスムーススクロール ----------------------------------------
document.querySelectorAll<HTMLAnchorElement>('a[href^="#"]').forEach((link) => {
  link.addEventListener('click', (event) => {
    const hash = link.getAttribute('href') ?? '#';
    const target = hash === '#' ? document.documentElement : document.querySelector(hash);
    if (!target) return;
    event.preventDefault();
    const top = hash === '#' ? 0 : target.getBoundingClientRect().top + window.scrollY;
    window.scrollTo({ top, behavior: 'smooth' });
  });
});

// ---- マウスストーカー（泡） ---------------------------------------------------
let canSpawnBubble = true;
document.addEventListener('mousemove', (event) => {
  if (!canSpawnBubble) return;
  const bubble = document.createElement('span');
  bubble.className = 'bubble';
  bubble.style.top = `${event.clientY}px`;
  bubble.style.left = `${event.clientX}px`;
  document.body.prepend(bubble);
  window.setTimeout(() => bubble.remove(), 2000);

  canSpawnBubble = false;
  window.setTimeout(() => {
    canSpawnBubble = true;
  }, 100);
});

// ---- 表示領域に入った要素をフェードイン ------------------------------------------
const inViewObserver = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) entry.target.classList.add('is-in-view');
  });
});
document.querySelectorAll('.js-in-view').forEach((item) => inViewObserver.observe(item));
