<?php
function my_setup()
{
  add_theme_support('post-thumbnails');
  add_theme_support('automatic-feed-links');
  add_theme_support('title-tag');
  add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));
}
add_action("after_setup_theme", "my_setup");


// function gg_gfonts_prefetch() {
//   echo '<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>';
//   echo '<link rel="preconnect" href="https://fonts.googleapis.com/" crossorigin>';
//  }
//  add_action( 'wp_head', 'gg_gfonts_prefetch' );

function my_script_init()
{
  wp_enqueue_style("anime", "https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.6.2/animate.min.css", array(), "3.6.2", "all");
  wp_enqueue_style("swiper", "https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.7/swiper-bundle.css", array(), "8.4.7", "all");
  wp_enqueue_style("my", get_template_directory_uri() . "/css/style.css", array(), filemtime(get_theme_file_path('css/style.css')), "all");
  wp_enqueue_script("anime", "https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js", array("jquery"), "1.1.2", true);
  wp_enqueue_script("swiper", "https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.7/swiper-bundle.min.js", array("jquery"), "8.4.7", true);
  wp_enqueue_script("my", get_template_directory_uri() . "/js/script.js", array("jquery"), filemtime(get_theme_file_path('js/script.js')), true);
}
add_action("wp_enqueue_scripts", "my_script_init");


// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false()
{
  return false;
}

// Contact Form7の送信ボタンをクリックした後の遷移先設定
add_action('wp_footer', 'add_origin_thanks_page');
function add_origin_thanks_page()
{
  $contact_thanks = home_url('/contact/thanks/');
  echo <<< EOC
<script>
var thanksPage = {
24: '{$contact_thanks}',
};
document.addEventListener( 'wpcf7mailsent', function( event ) {
location = thanksPage[event.detail.contactFormId];
}, false );
</script>
EOC;
}

// テンプレートファイルの名前変更
add_filter('page_template_hierarchy', 'my_page_templates');
function my_page_templates($templates)
{
  global $wp_query;

  $template = get_page_template_slug();
  $pagename = $wp_query->query['pagename'];

  if ($pagename && !$template) {
    $pagename = str_replace('/', '-', $pagename);
    $decoded = urldecode($pagename);

    if ($decoded == $pagename) {
      array_unshift($templates, "page-{$pagename}.php");
    }
  }
  return $templates;
}