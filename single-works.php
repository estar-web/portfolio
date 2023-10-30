<?php get_header(); ?>

<?php get_template_part('template/works-top') ?>

<article class="l-works-detail p-works-detail">
  <div class="l-inner p-works-detail__inner">
    <div class="p-works-icatch">
      <div class="swiper p-works-icatch__swiper">
        <div class="swiper-wrapper p-works-icatch__swiperWrapper">
          <div class="swiper-slide p-works-icatch__slide">
            <figure class="p-works-icatch__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/picture-demolp-pc.png" width="310" height="180" alt="" loading="lazy" decoding="async">
            </figure><!-- /.p-works-icatch__img -->
          </div>
          <div class="swiper-slide p-works-icatch__slide">
            <figure class="p-works-icatch__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/picture-demolp-ipad.png" width="310" height="180" alt="" loading="lazy" decoding="async">
            </figure><!-- /.p-works-icatch__img -->
          </div>
          <div class="swiper-slide p-works-icatch__slide">
            <figure class="p-works-icatch__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/picture-demolp-sp.png" width="310" height="180" alt="" loading="lazy" decoding="async">
            </figure><!-- /.p-works-icatch__img -->
          </div>
        </div>
        <!-- ページネーション -->
        <div class="swiper-pagination p-works-icatch__pagination"></div>
      </div>
    </div><!-- /.p-works-icatch -->
    
    <div class="p-works-description">
      <h3 class="p-works-description__title">デモLPサイト</h3><!-- /.p-works-description__siteTitle -->
      <div class="p-works-description__clientWrapper">
        <h4 class="p-works-description__clientHead">クライアント様 </h4><!-- /.p-works-description__clientHead -->
        <p class="p-works-description__client">デモサイト</p><!-- /.p-works-description__client -->
      </div><!-- /.p-works-description__client -->
      <div class="p-works-description__urlWrapper">
        <h4 class="p-works-description__urlHead">URL</h4><!-- /.p-works-description__urlHead -->
        <p class="p-works-description__url">https://www.free-star-work.com/intermediate-last-theme/</p><!-- /.p-works-description__url -->
      </div><!-- /.p-works-description__url -->
      <div class="p-works-description__areaWrapper">
        <h4 class="p-works-description__areaHead">担当領域</h4><!-- /.p-works-description__areaHead -->
        <p class="p-works-description__area">コーディング</p><!-- /.p-works-description__area -->
      </div><!-- /.p-works-description__area -->
      <div class="p-works-description__periodWrapper">
        <h4 class="p-works-description__periodHead">制作期間</h4><!-- /.p-works-description__periodHead -->
        <p class="p-works-description__period">一週間</p><!-- /.p-works-description__period -->
      </div><!-- /.p-works-description__period -->
      <div class="p-works-description__priceWrapper">
        <h4 class="p-works-description__priceHead">目安金額（税抜き）</h4><!-- /.p-works-description__priceHead -->
        <p class="p-works-description__price">50,000</p><!-- /.p-works-description__price -->
      </div><!-- /.p-works-description__price -->
      <div class="p-works-description__commentWrapper">
        <h4 class="p-works-description__commentHead">コメント</h4><!-- /.p-works-description__commentHead -->
        <p class="p-works-description__comment">Code Cocktails  様のチームポートフォリオを制作しました。figmaでのデザインカンプからのコーディングでした。<br>
ご要望としてWordPressによる制作実績部分の記事投稿ができるようにとのことだったのでなんとかかんとか色々こんな感じできっと描くのよね？
なんとかかんとか色々とコメントをつらつら書いてくださいな。<br>
どのくらいいるかなぁ？もっと長く書きます？このくらいでいいですかね？<br>
もっとながくなるなら横幅はこの幅固定で下にどんどん伸ばしていってくださいね。</p><!-- /.p-works-description__comment -->
      </div><!-- /.p-works-description__comment -->
    </div><!-- /.p-works-description -->
  </div><!-- /.l-inner p-works-description__inner -->
</article><!-- /.l-works-detail p-works-description -->

<section class="l-lower-contact">
  <?php get_template_part("/template/contact-section"); ?>
</section><!-- /.l-lower-contact -->

<?php get_footer(); ?>