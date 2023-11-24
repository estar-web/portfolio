<?php get_header(); ?>

<?php get_template_part('template/works-top') ?>

<article class="l-achieve-detail p-achieve-detail">
  <div class="l-inner p-achieve-detail__inner">
    <div class="p-achieve-icatch">
      <div class="swiper p-achieve-icatch__swiper">
        <div class="swiper-wrapper p-achieve-icatch__swiperWrapper">
          <div class="swiper-slide p-achieve-icatch__slide">
            <figure class="p-achieve-icatch__img p-icatch--pc">
              <img src="<?php the_field('icatch_pc') ?>" width="310" height="180" alt="" loading="lazy" decoding="async">
            </figure><!-- /.p-achieve-icatch__img -->
          </div>
          <div class="swiper-slide p-achieve-icatch__slide">
            <figure class="p-achieve-icatch__img p-icatch--tab">
              <img src="<?php the_field('icatch_tab') ?>" width="166" height="180" alt="" loading="lazy" decoding="async">
            </figure><!-- /.p-achieve-icatch__img -->
          </div>
          <div class="swiper-slide p-achieve-icatch__slide">
            <figure class="p-achieve-icatch__img p-icatch--sp">
              <img src="<?php the_field('icatch_sp') ?>" width="83" height="180" alt="" loading="lazy" decoding="async">
            </figure><!-- /.p-achieve-icatch__img -->
          </div>
        </div>
        <!-- ページネーション -->
      </div>
      <div class="swiper-pagination p-achieve-icatch__pagination"></div>
    </div><!-- /.p-achieve-icatch -->

    <div class="p-achieve-description">
      <h3 class="p-achieve-description__title"><?php the_field('title'); ?></h3><!-- /.p-achieve-description__siteTitle -->
      <dl class="p-achieve-list">
        <div class="p-achieve-list__wrapper p-achieve-list__client">
          <dt class="p-achieve-list__title">クライアント様</dt>
          <dd class="p-achieve-list__text"><?php the_field('Customer'); ?></dd>
        </div><!-- /.p-achieve-list__wrapper -->
        <div class="p-achieve-list__wrapper p-achieve-list__url">
          <dt class="p-achieve-list__title">URL</dt>
          <dd class="p-achieve-list__text"><?php the_field('url'); ?></dd>
        </div><!-- /.p-achieve-list__wrapper -->
        <div class="p-achieve-list__wrapper p-achieve-list__area">
          <dt class="p-achieve-list__title">担当領域</dt>
          <dd class="p-achieve-list__text"><?php the_field('area'); ?></dd>
        </div><!-- /.p-achieve-list__wrapper -->
        <div class="p-achieve-list__wrapper p-achieve-list__period">
          <dt class="p-achieve-list__title">制作期間</dt>
          <dd class="p-achieve-list__text"><?php the_field('period'); ?></dd>
        </div><!-- /.p-achieve-list__wrapper -->
        <div class="p-achieve-list__wrapper p-achieve-list__price">
          <dt class="p-achieve-list__title">目安価格（税抜）</dt>
          <dd class="p-achieve-list__text"><?php the_field('price'); ?></dd>
        </div><!-- /.p-achieve-list__wrapper -->
        <div class="p-achieve-list__wrapper p-achieve-list__comment">
          <dt class="p-achieve-list__title">コメント</dt>
          <dd class="p-achieve-list__text"><?php the_field('comment'); ?></dd>
        </div><!-- /.p-achieve-list__wrapper -->
      </dl><!-- /.p-achieve-list -->
    </div><!-- /.p-achieve-description -->
    <div class="p-achieve-detail__button">
      <a href="<?php echo home_url('/works/'); ?>" class="p-achieve-detail__link c-detail-button">一覧に戻る</a><!-- /.p-achieve__link -->
    </div><!-- /.p-achieve__button -->
  </div><!-- /.l-inner p-achieve-description__inner -->
</article><!-- /.l-achieve-detail p-achieve-description -->

<section class="l-lower-contact">
  <?php get_template_part("/template/contact-section"); ?>
</section><!-- /.l-lower-contact -->

<?php get_footer(); ?>