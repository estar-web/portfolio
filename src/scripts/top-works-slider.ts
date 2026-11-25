// トップページの制作実績スライダー
import Swiper from 'swiper';
import { Autoplay, EffectCreative } from 'swiper/modules';

const container = document.querySelector<HTMLElement>('.p-works__swiper');

if (container) {
  const swiper = new Swiper(container, {
    modules: [Autoplay, EffectCreative],
    loop: true,
    effect: 'creative',
    speed: 2000,
    allowTouchMove: false,
    autoHeight: true,
    autoplay: {
      delay: 3000, // 次のスライドに自動で切り替える時間
      disableOnInteraction: false, // クリックしても自動再生を止めない
    },
    creativeEffect: {
      prev: {
        shadow: true,
        origin: 'left',
        translate: [0, 0, -200],
        rotate: [0, 0, 0],
        opacity: 0,
      },
      next: {
        shadow: false,
        origin: 'left',
        translate: [0, 0, -200],
        rotate: [0, -90, 0],
      },
    },
    breakpoints: {
      992: {
        creativeEffect: {
          prev: {
            shadow: true,
            origin: 'left',
            translate: [0, 0, 0],
            rotate: [0, 60, 0],
            opacity: 0,
          },
          next: {
            shadow: false,
            origin: 'left',
            translate: [0, 0, 0],
            rotate: [0, -60, 0],
            opacity: 0,
          },
        },
      },
    },
  });

  // スライダーが画面内にあるときだけ自動再生する
  new IntersectionObserver(([entry]) => {
    if (entry?.isIntersecting) {
      swiper.autoplay.start();
    } else {
      swiper.autoplay.stop();
    }
  }).observe(container);
}
