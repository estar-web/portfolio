<?php get_header(); ?>

<?php get_template_part('template/works-top') ?>

<article class="l-achieve-detail p-achieve-detail">
  <div class="l-inner p-achieve-detail__inner">
    <div class="p-achieve-icatch">
      <?php
      $terms = get_the_terms(get_the_ID(), 'genre');
      $is_private = false;
      if ($terms) {
        foreach ($terms as $term) {
          if ($term->slug === 'private') {
            $is_private = true;
            break;
          }
        }
      }
      if ($is_private) : ?>
        <figure class="p-achieve-icatch__img -private">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/picture-dummy.webp" width="310" height="180" alt="非公開画像" loading="lazy" decoding="async">
        </figure><!-- /.p-achieve-icatch__img -->
      <?php else : ?>
        <div class="swiper p-achieve-icatch__swiper">
          <div class="swiper-wrapper p-achieve-icatch__swiperWrapper">
            <div class="swiper-slide p-achieve-icatch__slide">
              <?php
              $pc_image = get_field('icatch_pc');   //pcイメージの情報を取得
              $tab_image = get_field('icatch_tab'); //tabイメージの情報を取得
              $sp_image = get_field('icatch_sp');   //spイメージの情報を取得

              // PC画像のurlとalt情報を取得
              if (!empty($pc_image)) :
                $url = $pc_image['url']; //画像のURLを取得
                $alt = $pc_image['alt']; //画像のaltを取得
                // $url = wp_get_attachment_url($pc_image);
                // $alt = get_post_meta(get_post($pc_image) -> ID, '_wp_attachment_image_alt' , true );
              ?>
                <figure class="p-achieve-icatch__img p-icatch--pc">
                  <img src="<?php echo esc_url($url); ?>" width="310" height="180" alt="<?php echo esc_attr($alt); ?>" loading="lazy" decoding="async">
                </figure><!-- /.p-achieve-icatch__img -->
              <?php endif; ?>
            </div>
            <div class="swiper-slide p-achieve-icatch__slide">
              <?php
              // PC画像のurlとalt情報を取得
              if (!empty($tab_image)) :
                $url = $tab_image['url']; //画像のURLを取得
                $alt = $tab_image['alt']; //画像のaltを取得 
              ?>
                <figure class="p-achieve-icatch__img p-icatch--tab">
                  <img src="<?php echo $url; ?>" width="166" height="180" alt="<?php echo $alt; ?>" loading="lazy" decoding="async">
                </figure><!-- /.p-achieve-icatch__img -->
              <?php endif; ?>
            </div>
            <div class="swiper-slide p-achieve-icatch__slide">
              <?php
              // PC画像のurlとalt情報を取得
              if (!empty($sp_image)) :
                $url = $sp_image['url']; //画像のURLを取得
                $alt = $sp_image['alt']; //画像のaltを取得
              ?>
                <figure class="p-achieve-icatch__img p-icatch--sp">
                  <img src="<?php echo $url; ?>" width="83" height="180" alt="<?php echo $alt; ?>" loading="lazy" decoding="async">
                </figure><!-- /.p-achieve-icatch__img -->
              <?php endif; ?>
            </div>
          </div>
          <!-- ページネーション -->
        </div>
        <div class="swiper-pagination p-achieve-icatch__pagination"></div>
      <?php endif ?>
    </div><!-- /.p-achieve-icatch -->

    <div class="p-achieve-description">
      <h3 class="p-achieve-description__title"><?php the_field('title'); ?></h3><!-- /.p-achieve-description__siteTitle -->
      <dl class="p-achieve-list">
        <div class="p-achieve-list__wrapper p-achieve-list__client">
          <dt class="p-achieve-list__title">クライアント様</dt>
          <dd class="p-achieve-list__text"><?php the_field('Customer'); ?></dd>
        </div><!-- /.p-achieve-list__wrapper -->
        <div class="p-achieve-list__wrapper p-achieve-list__url">
          <?php if ($is_private === false) { ?>
            <dt class="p-achieve-list__title">URL</dt>
            <dd class="p-achieve-list__text">
              <a href="<?php the_field('url'); ?>" class="p-achieve-list__link" target="_blank">
                <span class="p-achieve-list__link--nonHover"><?php the_field('url'); ?></span>
                <span class="p-achieve-list__link--hover">View Site</span>
              </a><!-- /.p-achieve-list__link -->
            </dd>
          <?php } else { ?>
            <dt class="p-achieve-list__title">ページ数</dt>
            <dd class="p-achieve-list__text"><?php the_field('page') ?>ページ</dd>
          <?php } ?>
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
        <?php if ($is_private === false) { ?>
          <div class="p-achieve-list__wrapper p-achieve-list__comment">
            <dt class="p-achieve-list__title">コメント</dt>
            <dd class="p-achieve-list__text"><?php the_field('comment'); ?></dd>
          </div><!-- /.p-achieve-list__wrapper -->
        <?php } ?>
      </dl><!-- /.p-achieve-list -->
    </div><!-- /.p-achieve-description -->
    <div class="p-achieve-detail__button">
      <a href="<?php echo home_url('/works/'); ?>" class="p-achieve-detail__link c-detail-button">一覧に戻る</a><!-- /.p-achieve__link -->
    </div><!-- /.p-achieve__button -->
  </div><!-- /.l-inner p-achieve-description__inner -->
</article><!-- /.l-achieve-detail p-achieve-description -->

<div class="c-deco__top c-deco__top--lower"></div>
<section class="l-lower-contact">
  <?php get_template_part("/template/contact-section"); ?>
</section><!-- /.l-lower-contact -->

<?php get_footer(); ?>