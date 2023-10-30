<?php get_header(); ?>

<div class="p-lower-top">
  <div class="p-lower-top__titleWrap">
    <h1 class="p-lower-top__title">Works</h1><!-- /.p-lower-top__title -->
  </div><!-- /.p-lower-top__titleWrap -->
</div><!-- /.p-lower-top -->

<div class="l-lower-works p-lower-works">
  <div class="p-works-nav l-inner">
    <!-- 制作ジャンル一覧を表示 -->
    <ul class="p-works-nav__list">
      <li class="p-works-nav__item">
        <a href="<?php echo get_post_type_archive_link('works'); ?>" class="p-works-nav__link">All</a><!-- /.p-works-nav__link -->
      </li><!-- /.p-works-nav__item -->
      <?php $genre_terms = get_terms('genre', array('hide_empty' => false));
      //投稿タイプの情報を取得
      $q_object = get_queried_object();
      foreach ($genre_terms as $genre_term) : ?>
        <li class="p-works-nav__item <?php if ($q_object->name == $genre_term->name) : ?>selected<?php endif; ?>">
          <a href="<?php echo get_term_link($genre_term, 'genre'); ?>" class="p-works-nav__link"><?php echo $genre_term->name; ?></a><!-- /.p-works-nav__link -->
        </li><!-- /.p-works-nav__item -->
      <?php endforeach; ?>
    </ul><!-- /.p-works-nav__item -->
  </div><!-- /.p-works-nav -->

  <?php
  $selected_cat = get_queried_object();
  $post_query = new WP_Query(
    array(
      'post_type' => 'works',
      // 'posts_per_page' => -1,
      'orderby' => 'date',
      'order' => 'DESC',
      'paged' => (get_query_var('paged')) ? absint(get_query_var('paged')) : 1,
      'tax_query' => array(
        array(
          'taxonomy' => 'genre',            //カスタムタクソノミー"genre"を選択
          'field' => 'slug',                //スラッグに設定
          'terms' => $selected_cat->slug,   //現在選ばれたページのスラッグに限定
        )
      )
    )
  );
  set_query_var('post_query', $post_query);
  get_template_part('template/summary');
  ?>


</div><!-- /.l-lower-works p-lower-works -->

<section class="l-lower-contact">
  <?php get_template_part("/template/contact-section"); ?>
</section><!-- /.l-lower-contact -->

<?php get_footer(); ?>