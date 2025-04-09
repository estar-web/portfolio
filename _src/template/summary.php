<div class="l-lower-works-contents p-works-contents">
  <div class="p-works-contents__inner l-inner">
    <div class="p-works-contents__wrapper">
      <?php if ($post_query->have_posts()) :
        while ($post_query->have_posts()) :
          $post_query->the_post(); ?>
          <a href="<?php the_permalink(); ?>" class="p-works-contents__item">
            <figure class="p-works-contents__img">
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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/picture-dummy.webp" width="320" height="230" alt="非公開画像" loading="lazy" decoding="async">
              <?php else : ?>
                <?php the_post_thumbnail(); ?>
              <?php endif; ?>
            </figure>
            <div class="p-works-contents__body">
              <h3 class="p-works-contents__title"><?php echo get_post_meta(get_the_ID(), 'Customer', true); ?></h3>
            </div>
          </a>
      <?php endwhile;
      endif; ?>
    </div>
  </div>
</div>