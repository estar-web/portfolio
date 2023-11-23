<?php
/*
Template Name: お問い合わせ
*/
get_header();
?>

<div class="p-lower-top">
  <div class="p-lower-top__titleWrap">
    <h1 class="c-lower-top-title">Contact</h1><!-- /.c-lower-top-title -->
  </div><!-- /.p-lower-top__titleWrap -->
</div><!-- /.p-lower-top -->

<section class="l-lower-contact p-lower-contact">
  <div class="p-lower-contact__inner l-inner">
    <div class="p-lower-contact__textWrapper">
      <p class="p-lower-contact__text">
        ご相談だけでも大歓迎です！<br class="u-hide--l">
        お気軽にお問い合わせください。
      </p><!-- /.p-lower-contact__text -->
    </div><!-- /.p-lower-contact__textWrapper -->
    <div class="p-lower-contact__area">
      <?php echo apply_shortcodes('[contact-form-7 id="93ff9da" title="お問い合わせ"]'); ?>
    </div>
  </div><!-- /.p-lower-contact__inner l-inner -->
</section><!-- /.l-lower-contact p-lower-contact -->

<?php get_footer(); ?>