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
