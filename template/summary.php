<div class="l-lower-works-contents p-works-contents">
  <div class="p-works-contents__inner l-inner">
    <div class="p-works-contents__wrapper">
      <?php if ($post_query->have_posts()) :
        while ($post_query->have_posts()) :
          $post_query->the_post(); ?>
          <a href="<?php the_permalink(); ?>" class="p-works-contents__item">
            <figure class="p-works-contents__img">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail(); ?>
              <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/picture-demo1.png" width="320" height="230" alt="画像：ダミー画像" loading="lazy" decoding="async">
              <?php endif; ?>
            </figure><!-- /.p-works-contents__img -->
            <div class="p-works-contents__body">
              <h3 class="p-works-contents__title"><?php the_title(); ?></h3><!-- /.p-works-contents__title -->
            </div><!-- /.p-works-contents__body -->
          </a><!-- /.p-works-contents__item -->
          <!-- </div>/.p-works-contents__card -->
          <!-- <div class="p-works-contents__card"> -->
      <?php endwhile;
      endif; ?>
      <!-- </div>/.p-works-contents__card -->
    </div><!-- /.p-works-contents__wrapper -->
  </div><!-- /.p-works-contents__inner l-inner -->
</div><!-- /.l-works-item p-works-item -->