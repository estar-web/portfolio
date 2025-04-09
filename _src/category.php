<?php get_header(); ?>

<?php get_template_part('/template/works-top') ?>

<div class="l-lower-works p-lower-works">
  <div class="p-lower-works__inner l-inner">
    <!-- 制作ジャンル一覧を表示 -->
    <div class="p-lower-works__nav p-works-nav">
      <ul class="p-works-nav__list">
        <li class="p-works-nav__item">
          <a href="<?php echo home_url('/works/'); ?>" class="p-works-nav__link">All</a><!-- /.p-works-nav__link -->
        </li><!-- /.p-works-nav__item -->
        <?php $categories = get_categories(array(
          'hide_empty' => false,
        ));
        $select_object = get_queried_object();
        foreach ($categories as $category) : ?>
          <li class="p-works-nav__item <?php if ($select_object->term_id == $category->term_id) : ?>selected<?php endif; ?>">
            <a href="<?php echo get_category_link($category->term_id); ?>" class="p-works-nav__link"><?php echo $category->name; ?></a><!-- /.p-works-nav__link -->
          </li><!-- /.p-works-nav__item -->
        <?php endforeach; ?>
      </ul><!-- /.p-works-nav__item -->
    </div><!-- /.p-works-nav -->

    <?php
    $selected_cat = get_queried_object();
    $post_query = new WP_Query(
      array(
        'post_type' => 'post',
        'posts_per_page' => -1,
        'orderby' => 'date',
        'order' => 'DESC',
        'paged' => (get_query_var('paged')) ? absint(get_query_var('paged')) : 1,
        'cat' => $selected_cat->term_id // 選択されたカテゴリーIDを指定して記事を絞り込み
      )
    );
    set_query_var('post_query', $post_query);
    get_template_part('template/summary');
    ?>

  </div><!-- /.p-lower-works__inner -->
</div><!-- /.l-lower-works p-lower-works -->

<div class="c-deco__top c-deco__top--lower"></div>
<section class="l-lower-contact">
  <?php get_template_part("/template/contact-section"); ?>
</section><!-- /.l-lower-contact -->

<?php get_footer(); ?>