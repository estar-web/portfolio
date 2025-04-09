<?php get_header(); ?>

<?php get_template_part('/template/works-top') ?>

<div class="l-lower-works p-lower-works">
  <div class="p-lower-works__inner l-inner">
    <div class="p-lower-works__nav p-works-nav">
      <ul class="p-works-nav__list">
        <li class="p-works-nav__item selected">
          <a href="<?php echo get_post_type_archive_link('works'); ?>" class="p-works-nav__link">All</a>
        </li>
        <?php $genre_terms = get_terms('genre', array(
          'hide_empty' => false,
          'exclude' => array(9),
        ));
        foreach ($genre_terms as $genre_term) : ?>
          <li class="p-works-nav__item">
            <a href="<?php echo get_term_link($genre_term, 'genre'); ?>" class="p-works-nav__link"><?php echo $genre_term->name; ?></a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>

    <?php
    $post_query = new WP_Query(
      array(
        'post_type' => 'works',
        'posts_per_page' => -1,
        'orderby' => 'date',
        'order' => 'DESC',
        'paged' => (get_query_var('paged')) ? absint(get_query_var('paged')) : 1,
      )
    );
    set_query_var('post_query', $post_query);
    get_template_part('template/summary');
    ?>

  </div>
</div>

<div class="c-deco__top c-deco__top--lower"></div>
<section class="l-lower-contact">
  <?php get_template_part("/template/contact-section"); ?>
</section>

<?php get_footer(); ?>