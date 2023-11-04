<?php get_header(); ?>

<?php get_template_part('template/works-top') ?>

<article class="l-works-detail p-works-detail">
  <div class="l-inner p-works-detail__inner">
    <div class="p-works-icatch">
      <div class="swiper p-works-icatch__swiper">
        <div class="swiper-wrapper p-works-icatch__swiperWrapper">
          <div class="swiper-slide p-works-icatch__slide">
            <figure class="p-works-icatch__img p-icatch--pc">
              <img src="<?php echo get_template_directory_uri(); ?>/img/picture-demolp-pc.png" width="310" height="180" alt="" loading="lazy" decoding="async">
            </figure><!-- /.p-works-icatch__img -->
          </div>
          <div class="swiper-slide p-works-icatch__slide">
            <figure class="p-works-icatch__img p-icatch--tab">
              <img src="<?php echo get_template_directory_uri(); ?>/img/picture-demolp-ipad.png" width="166" height="180" alt="" loading="lazy" decoding="async">
            </figure><!-- /.p-works-icatch__img -->
          </div>
          <div class="swiper-slide p-works-icatch__slide">
            <figure class="p-works-icatch__img p-icatch--sp">
              <img src="<?php echo get_template_directory_uri(); ?>/img/picture-demolp-sp.png" width="83" height="180" alt="" loading="lazy" decoding="async">
            </figure><!-- /.p-works-icatch__img -->
          </div>
        </div>
        <!-- ページネーション -->
      </div>
      <div class="swiper-pagination p-works-icatch__pagination"></div>
    </div><!-- /.p-works-icatch -->

    <div class="p-works-description">
      <h3 class="p-works-description__title">デモLPサイト</h3><!-- /.p-works-description__siteTitle -->
      <dl class="p-works-list">
        <div class="p-works-list__wrapper">
          <dt class="p-works-list__title">クライアント様 </dt>
          <dd class="p-works-list__text">Code Cocktails 様</dd>
        </div><!-- /.p-works-list__wrapper -->
        <div class="p-works-list__wrapper">
          <dt class="p-works-list__title">URL</dt>
          <dd class="p-works-list__text">https://codecocktails.yukiusagi-web.com/</dd>
        </div><!-- /.p-works-list__wrapper -->
        <div class="p-works-list__wrapper">
          <dt class="p-works-list__title">担当領域</dt>
          <dd class="p-works-list__text">コーディング</dd>
        </div><!-- /.p-works-list__wrapper -->
        <div class="p-works-list__wrapper">
          <dt class="p-works-list__title">制作期間</dt>
          <dd class="p-works-list__text">一週間</dd>
        </div><!-- /.p-works-list__wrapper -->
        <div class="p-works-list__wrapper">
          <dt class="p-works-list__title">目安価格（税抜）</dt>
          <dd class="p-works-list__text">¥50,000</dd>
        </div><!-- /.p-works-list__wrapper -->
        <div class="p-works-list__wrapper">
          <dt class="p-works-list__title">コメント</dt>
          <dd class="p-works-list__text">Code Cocktails 様のチームポートフォリオを制作しました。figmaでのデザインカンプからのコーディングでした。
            ご要望としてWordPressによる制作実績部分の記事投稿ができるようにとのことだったのでなんとかかんとか色々こんな感じできっと描くのよね？
            なんとかかんとか色々とコメントをつらつら書いてくださいな。
            どのくらいいるかなぁ？もっと長く書きます？このくらいでいいですかね？
            もっとながくなるなら横幅はこの幅固定で下にどんどん伸ばしていってくださいね。</dd>
        </div><!-- /.p-works-list__wrapper -->
      </dl><!-- /.p-works-list -->
    </div><!-- /.p-works-description -->
  </div><!-- /.l-inner p-works-description__inner -->
</article><!-- /.l-works-detail p-works-description -->

<section class="l-lower-contact">
  <?php get_template_part("/template/contact-section"); ?>
</section><!-- /.l-lower-contact -->

<?php get_footer(); ?>