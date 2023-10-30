<?php 
function my_setup()
{
add_theme_support('post-thumbnails');
add_theme_support('automatic-feed-links');
add_theme_support('title-tag');
add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));
}
add_action("after_setup_theme", "my_setup");
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


// global $wp_rewrite;
// $wp_rewrite->flush_rules();
?>