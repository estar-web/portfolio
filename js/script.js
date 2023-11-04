//wow使用のための初期化
// new WOW().init();

var $header = jQuery('#js-header');

// navigation
jQuery('#js-toggle').on('click', function (e) {
  e.preventDefault();
  $header.toggleClass('add-active');
});

jQuery('.js-navLink').on('click', function (e) {
  e.preventDefault();
  $header.removeClass('add-active');
});

var pcWidth = window.matchMedia('screen and (min-width: 769px)');
function checkBreakPoint() {
  if (pcWidth.matches) {
    $header.removeClass('add-active');
  }
}
pcWidth.addListener(checkBreakPoint);
checkBreakPoint();

// スムーススクロール
jQuery('a[href^="#"]').click(function () {
  // let header = jQuery(".header").innerHeight();
  let speed = 300;
  let id = jQuery(this).attr("href");
  let target = jQuery("#" == id ? "html" : id);
  // let position = jQuery(target).offset().top - header;
  if ("fixed" !== jQuery(".header").css("position")) {
    position = jQuery(target).offset().top;
  }
  if (0 > position) {
    position = 0;
  }
  jQuery("html, body").animate({
    scrollTop: position
  },
    speed
  );
  return false;
});

// スクロール判定
// jQuery(window).on("scroll", function () {

//   if (100 < jQuery(this).scrollTop()) {
//     jQuery('.totop').addClass('is-show');
//   } else {
//     jQuery('.totop').removeClass('is-show');
//   }
// });

// クリック（メニュー）
// jQuery('.header__nav ul li a').click(function () {
//   jQuery('.header__nav ul li a').removeClass('is-active');
//   jQuery(this).addClass('is-active');
//   return false;
// });

// クリック（タブ）
jQuery('.p-check__nav-item').click(function (e) {
  e.preventDefault();
  let target = jQuery(this).data("target");

  // 現時点で選ばれている箱の高さ
  // var beforeHeight = jQuery(".p-check__body.is-active").height();

  jQuery('.p-check__nav-item').removeClass('is-active');
  jQuery(this).addClass('is-active');

  jQuery('.p-check__body').removeClass('is-active');
  jQuery(target).addClass('is-active');

  // タブ押した後に選ばれた箱の高さ
  // var afterHeight = jQuery(".p-check__body.is-active").height();

  // const content = jQuery('.p-check__content');

  // KeyframeEffectオブジェクトのインスタンス作成
  // let keyframeeffect = new KeyframeEffect(
  //   content,
  //   [
  //     { // 元の高さ
  //       height: 'beforeHeight',
  //       easing: 'linear'
  //     },
  //     { // 変化後の高さ

  //       height: 'afterHeight',
  //       offset: 1
  //     }
  //   ],
  //   {
  //     duration: 2000,
  //     direction: 'alternate',
  //     iterations: 2
  //   }
  // );

  // // Animationオブジェクトのインスタンス作成
  // let animation = new Animation(keyframeeffect);
  // animation.play();

  return false;
});

const top_swiper = new Swiper(".p-works__swiper", {
  loop: true,
  // effect: "fade",
  effect: "creative",
  speed: 2000,
  allowTouchMove: false,

  autoplay: {
    delay: 3000, // 次のスライドに自動で切り替える時間
    // delay: 1000, // デバッグ用
  },

  creativeEffect: {
    prev: {
      shadow: true,
      origin: "left",
      // origin: "left center",
      // translate: ["5%", 0, -200],
      translate: [0, 0, -200],
      rotate: [0, 0, 0],
    },
    next: {
      shadow: false,
      origin: "left",
      // origin: "left center",
      // translate: ["5%", 0, -200],
      translate: [0, 0, -200],
      rotate: [0, 90, 0],
    },
  },

  breakpoints: {
    992: {
      creativeEffect: {
        prev: {
          shadow: true,
          origin: "center",
          translate: [0, 0,0],
          rotate: [0, 45, 0],
        },
        next: {
          shadow: false,
          origin: "left center",
          translate: [0, 0, 0],
          rotate: [0, 90, 0],

        },
      },
    },
  }
});

const lower_swiper = new Swiper(".p-works-icatch__swiper", {
  loop: true,
  effect: "fade",
  
  fadeEffect: {
    crossFade: true
  },

  pagination: {
    el: '.p-works-icatch__pagination',
    type: 'bullets',
    clickable: true,
  },
  speed: 2000,
  autoplay: {
    delay: 3000, // 次のスライドに自動で切り替える時間
    // delay: 1000, // デバッグ用
  },
  slidePerView: 1,
});

jQuery(window).on("scroll", function () {
  // スライダーのコンテナ要素を取得
  const sliderContainer = jQuery(".p-works__swiper")[0]; // jQueryオブジェクトからDOM要素を取得

  // スライダーのコンテナの位置情報を取得
  const rect = sliderContainer.getBoundingClientRect();

  // ウィンドウの高さを取得（クロスブラウザ対応）
  const windowHeight = window.innerHeight || document.documentElement.clientHeight;

  if (rect.top < windowHeight && rect.bottom >= 0) {
    // スライダーが画面内に入った場合、自動再生を有効にして開始
    // swiper.params.autoplay.delay = 1000; // 自動再生の遅延設定
    swiper.autoplay.start();
  } else {
    // 画面外に出た場合、自動再生を停止
    swiper.autoplay.stop();
  }
});