<?php get_header(); ?>

<div class="p-lower-top">
  <div class="p-lower-top__titleWrap">
    <h1 class="p-lower-top__title">Works</h1><!-- /.p-lower-top__title -->
  </div><!-- /.p-lower-top__titleWrap -->
</div><!-- /.p-lower-top -->

<div class="l-lower-works p-lower-works">
  <div class="p-works-nav l-inner">
    <ul class="p-works-nav__list">
      <li class="p-works-nav__item">
        <a href="" class="p-works-nav__link">All</a><!-- /.p-works-nav__link -->
      </li><!-- /.p-works-nav__item -->
      <li class="p-works-nav__item">
        <a href="" class="p-works-nav__link">デモサイト</a><!-- /.p-works-nav__link -->
      </li><!-- /.p-works-nav__item -->
      <li class="p-works-nav__item">
        <a href="" class="p-works-nav__link">お客様案件</a><!-- /.p-works-nav__link -->
      </li><!-- /.p-works-nav__item -->
      <li class="p-works-nav__item">
        <a href="" class="p-works-nav__link">LP</a><!-- /.p-works-nav__link -->
      </li><!-- /.p-works-nav__item -->
      <li class="p-works-nav__item">
        <a href="" class="p-works-nav__link">WordPress</a><!-- /.p-works-nav__link -->
      </li><!-- /.p-works-nav__item -->
    </ul><!-- /.p-works-nav__item -->
  </div><!-- /.p-works-nav -->

  <div class="l-lower-works-contents p-works-contents">
    <div class="p-works-contents__inner l-inner">
      <div class="p-works-contents__wrapper">
        <!-- 余白つける用のcardを定義 -->
        <div class="p-works-contents__card">
          <article class="p-works-contents__item">
            <figure class="p-works-contents__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/picture-demo1.png" width="320" height="230" alt="画像：デモサイトトップ画像" loading="lazy" decoding="async">
            </figure><!-- /.p-works-contents__img -->
            <div class="p-works-contents__body">
              <h3 class="p-works-contents__title">デモサイト</h3><!-- /.p-works-contents__title -->
            </div><!-- /.p-works-contents__body -->
          </article><!-- /.p-works-contents__item -->
        </div><!-- /.p-works-contents__card -->
        <div class="p-works-contents__card">
          <article class="p-works-contents__item">
            <figure class="p-works-contents__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/picture-demo1.png" width="320" height="230" alt="画像：デモサイトトップ画像" loading="lazy" decoding="async">
            </figure><!-- /.p-works-contents__img -->
            <div class="p-works-contents__body">
              <h3 class="p-works-contents__title">デモサイト2</h3><!-- /.p-works-contents__title -->
            </div><!-- /.p-works-contents__body -->
          </article><!-- /.p-works-contents__item -->
        </div><!-- /.p-works-contents__card -->
      </div><!-- /.p-works-contents__wrapper -->
    </div><!-- /.p-works-contents__inner l-inner -->
  </div><!-- /.l-works-item p-works-item -->
</div><!-- /.l-lower-works p-lower-works -->



<?php get_footer(); ?>