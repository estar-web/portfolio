<?php get_header(); ?>

<?php get_template_part('/template/works-top') ?>

<div class="l-lower-works p-lower-works">
  <div class="p-lower-works__inner l-inner">
    <div class="p-lower-works__nav p-works-nav">
      <ul class="p-works-nav__list">
        <li class="p-works-nav__item selected">
          <a href="<?php echo get_post_type_archive_link('works'); ?>" class="p-works-nav__link">All</a><!-- /.p-works-nav__link -->
        </li><!-- /.p-works-nav__item -->
        <?php $genre_terms = get_terms('genre', array(
          'hide_empty' => false,
          'exclude' => array(9), //非公開実績は除外する
        ));
        foreach ($genre_terms as $genre_term) : ?>
          <li class="p-works-nav__item">
            <a href="<?php echo get_term_link($genre_term, 'genre'); ?>" class="p-works-nav__link"><?php echo $genre_term->name; ?></a><!-- /.p-works-nav__link -->
          </li><!-- /.p-works-nav__item -->
        <?php endforeach; ?>
      </ul><!-- /.p-works-nav__item -->
    </div><!-- /.p-works-nav -->

    <?php
    $post_query = new WP_Query(
      array(
        'post_type' => 'works',
        // 'posts_per_page' => -1,
        'orderby' => 'date',
        'order' => 'DESC',
        'paged' => (get_query_var('paged')) ? absint(get_query_var('paged')) : 1,
        'tax_query' => array(
          array(
            'taxonomy' => 'genre',
            'field' => 'slug',
            'terms' => 'private',
            'operator' => 'NOT IN',
          )
        )
      )
    );
    set_query_var('post_query', $post_query);
    get_template_part('template/summary');
    ?>

    <div class="p-lower-works__other p-works-other">
      <h2 class="p-works-other__title">その他の実績</h2><!-- /.p-works-other__title -->
      <p class="p-works-other__text">非公開実績の一覧となります</p><!-- /.p-works-other__text -->
      <div class="p-works-other__tableWrapper">
        <table class="p-works-other__table p-works-table">
          <?php
          $user_login_check = is_user_logged_in();
          var_dump($user_login_check);
          ?>
          <tr class="p-works-table__row">
            <th class="p-works-table__head">サイト概要</th>
            <th class="p-works-table__head">業務内容</th>
            <?php if ($user_login_check == true) : ?>
              <th class="p-works-table__head">URL</th>
            <?php endif; ?>
            <th class="p-works-table__head">担当ページ数</th>
            <th class="p-works-table__head">期間</th>
          </tr><!-- /.p-works-table__row -->
          <?php
          $private = new WP_Query(
            array(
              'post_type' => 'works',
              // 'posts_per_page' => -1,
              'orderby' => 'date',
              'order' => 'DESC',
              'paged' => (get_query_var('paged')) ? absint(get_query_var('paged')) : 1,
              'tax_query' => array(
                array(
                  'taxonomy' => 'genre',
                  'field' => 'slug',
                  'terms' => 'private',
                )
              )
            )
          );
          ?>
          <?php if ($private->have_posts()) :
            while ($private->have_posts()) :
              $private->the_post(); ?>
              <tr class="p-works-table__row">
                <td class="p-works-table__data"><?php the_field('Customer') ?></td>
                <td class="p-works-table__data"><?php the_field('area') ?></td>
                <?php if ($user_login_check == true) : ?>
                  <td class="p-works-table__data"><?php the_field('url') ?></td>
                <?php endif; ?>
                <td class="p-works-table__data"><?php the_field('page') ?>ページ</td>
                <td class="p-works-table__data"><?php the_field('period') ?></td>
              </tr><!-- /.p-works-table__row -->
          <?php endwhile;
          endif; ?>
        </table><!-- /.p-works-other__table -->
      </div><!-- /.p-works-other__tableWrapper -->
    </div><!-- /.p-lower-works__other p-works-other -->

  </div><!-- /.p-lower-works__inner -->
</div><!-- /.l-lower-works p-lower-works -->

<div class="c-deco__top c-deco__top--lower"></div>
<section class="l-lower-contact">
  <?php get_template_part("/template/contact-section"); ?>
</section><!-- /.l-lower-contact -->

<?php get_footer(); ?>