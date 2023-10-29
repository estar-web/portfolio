<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex" />
  <title>Code:HOSHI</title>
  <meta name="description" content="コーダー：ほしのポートフォリオサイトです。Web制作のお仕事を承っています。">
  <!-- フォントの読み込み -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;500;700&family=M+PLUS+1p:wght@400;500;700&family=M+PLUS+Rounded+1c:wght@400;500;700;900&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body>
  <header id="js-header" class="l-header">
    <button id="js-toggle" class="p-header-burger" aria-label="menu">
      <span class="p-header-burger__line"></span>
      <span class="p-header-burger__line"></span>
      <span class="p-header-burger__line"></span>
    </button><!-- /.p-header-burger -->
    <nav class="p-header-nav">
      <div class="p-header-nav__inner">
        <ul class="p-header-nav__list">
          <?php
          if (is_front_page()) {
            $page_link = null;
            $front_class = 'js-navLink';
          } else {
            $page_link = home_url('/');
            $front_class = null;
          } ?>
          <li class="p-header-nav__item"><a href="<?php echo ($page_link . '#profile'); ?>" class="p-header-nav__link <?php echo $front_class ?>"><span class="p-header-nav__link--eg">Profile</span>自己紹介</a></li>
          <li class="p-header-nav__item"><a href="<?php echo ($page_link . '#skills'); ?>" class="p-header-nav__link <?php echo $front_class ?>"><span class="p-header-nav__link--eg">Skills</span>できること</a></li>
          <li class="p-header-nav__item"><a href="<?php echo ($page_link . '#works'); ?>" class="p-header-nav__link <?php echo $front_class ?>"><span class="p-header-nav__link--eg">Works</span>制作実績</a></li>
          <li class="p-header-nav__item"><a href="<?php echo ($page_link . '#check'); ?>" class="p-header-nav__link <?php echo $front_class ?>"><span class="p-header-nav__link--eg">Check</span>ご確認頂きたいこと</a></li>
          <li class="p-header-nav__item"><a href="<?php echo ($page_link . '#contact'); ?>" class="p-header-nav__link <?php echo $front_class ?>"><span class="p-header-nav__link--eg">Contact</span>お問い合わせはこちら</a></li>
        </ul><!-- /.p-header-nav__list -->
        <figure class="p-header-nav__img u-show--l">
          <img src="<?php echo get_template_directory_uri(); ?>/img/icon-nav.png" alt="ドロワーメニューアイコン" width="504" height="440">
          <!-- <img src="<?php /*echo get_template_directory_uri();*/ ?>/img/icon-nav.jpg" alt="ドロワーメニューアイコン" width="504" height="440"> -->
        </figure><!-- /.p-header-nav__img -->
      </div><!-- /.p-header-nav__inner -->
    </nav><!-- /.p-header-nav -->
    <!-- <div id="js-overlay" class="p-header-overlay"></div> -->
  </header><!-- /.l-header -->