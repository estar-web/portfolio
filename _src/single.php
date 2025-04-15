<?php
get_header();
get_template_part('template/works-top');
global $post;
?>

<article class="l-achieve-detail p-achieve-detail">
  <div class="l-inner p-achieve-detail__inner">
    <div class="p-achieve-icatch">
      <?php
      $categories = get_the_category();
      $is_private = false;
      if ($categories) {
        foreach ($categories as $category) {
          if ($category->slug === 'private') {
            $is_private = true;
            break;
          }
        }
      }
      if ($is_private) : ?>
        <figure class="p-achieve-icatch__img -private">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/picture-dummy.webp" width="310" height="180" alt="非公開画像" loading="lazy" decoding="async">
        </figure>
      <?php else : ?>
        <figure class="p-achieve-icatch__img p-icatch--pc">
          <?php the_post_thumbnail('full'); ?>
        </figure>
      <?php endif ?>
    </div>

    <div class="p-achieve-description">
      <h3 class="p-achieve-description__title"><?php echo get_post_meta(get_the_ID(), 'title', true); ?></h3>
      <dl class="p-achieve-list">
        <div class="p-achieve-list__wrapper p-achieve-list__client">
          <dt class="p-achieve-list__title">クライアント様 / 案件概要</dt>
          <dd class="p-achieve-list__text"><?php echo get_post_meta($post->ID, 'Customer', true); ?></dd>
        </div>
        <div class="p-achieve-list__wrapper p-achieve-list__url">
          <?php if ($is_private === false) { ?>
            <dt class="p-achieve-list__title">URL</dt>
            <dd class="p-achieve-list__text">
              <a href="<?php echo get_post_meta(get_the_ID(), 'url', true); ?>" class="p-achieve-list__link" target="_blank">
                <span class="p-achieve-list__link--nonHover"><?php echo get_post_meta(get_the_ID(), 'url', true); ?></span>
                <span class="p-achieve-list__link--hover">View Site</span>
              </a>
            </dd>
          <?php } else { ?>
            <dt class="p-achieve-list__title">ページ数</dt>
            <dd class="p-achieve-list__text"><?php echo get_post_meta(get_the_ID(), 'page', true); ?>ページ</dd>
          <?php } ?>
        </div>
        <div class="p-achieve-list__wrapper p-achieve-list__area">
          <dt class="p-achieve-list__title">担当領域</dt>
          <dd class="p-achieve-list__text"><?php echo get_post_meta(get_the_ID(), 'area', true); ?></dd>
        </div>
        <div class="p-achieve-list__wrapper p-achieve-list__period">
          <dt class="p-achieve-list__title">制作期間</dt>
          <dd class="p-achieve-list__text"><?php echo get_post_meta(get_the_ID(), 'period', true); ?></dd>
        </div>
        <div class="p-achieve-list__wrapper p-achieve-list__price">
          <dt class="p-achieve-list__title">目安価格（税抜）</dt>
          <dd class="p-achieve-list__text">¥<?php echo get_post_meta(get_the_ID(), 'price', true); ?></dd>
        </div>
        <div class="p-achieve-list__wrapper p-achieve-list__comment">
          <dt class="p-achieve-list__title">コメント</dt>
          <dd class="p-achieve-list__text"><?php echo nl2br(get_post_meta(get_the_ID(), 'comment', true)); ?></dd>
        </div>
      </dl>
    </div>
    <div class="p-achieve-detail__button">
      <a href="<?php echo home_url('/works/'); ?>" class="p-achieve-detail__link c-detail-button">一覧に戻る</a>
    </div>
  </div>
</article>

<div class="c-deco__top c-deco__top--lower"></div>
<section class="l-lower-contact">
  <?php get_template_part("/template/contact-section"); ?>
</section>

<?php get_footer(); ?>