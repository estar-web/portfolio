<?php get_header(); ?>

<main>
  <div id="js-mv" class="p-mv">
    <div class="p-mv__inner l-inner">
      <h1 class="p-mv__ttl">
        Code:<br>HOSHI</h1>
      <div class="p-mv__image">
      </div><!-- /.p-mv__image -->
    </div><!-- /.p-mv__inner -->
  </div><!-- /.p-mv -->

  <section id="profile" class="l-profile p-profile">
    <div class="p-profile__inner l-inner">
      <h2 class="p-profile__title c-section-title">Profile</h2><!-- /.p-profile__title -->
      <div class="p-profile__wrapper">
        <figure class="p-profile__icon">
          <img src="<?php echo get_template_directory_uri(); ?>/img/icon-profile.png" alt="アイコン画像" width="1080" height="1080" loading="lazy">
        </figure><!-- /.p-profile__icon -->
        <div class="p-profile__spacer u-hide--sp"></div>
        <!-- <div class="p-profile__text"> -->
        <div class="p-profile__name">ほし</div><!-- /.p-profile__name -->
        <div class="p-profile__link-wrapper">
          <a class="p-profile__link" href="https://twitter.com/fre_e_star" target=”_blank”>
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-x.svg" alt="Xアイコン画像" class="p-profile__web-icon" loading="lazy">
            <div class="p-profile__account">@fre_e_star</div><!-- /.p-profile__account -->
          </a><!-- /.p-profile__link -->
          <a class="p-profile__link" href="https://github.com/estar-web?tab=repositories" target=”_blank”>
            <svg class="p-profile__web-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="20" height="20">
              <path d="M8 0c4.42 0 8 3.58 8 8a8.013 8.013 0 0 1-5.45 7.59c-.4.08-.55-.17-.55-.38 0-.27.01-1.13.01-2.2 0-.75-.25-1.23-.54-1.48 1.78-.2 3.65-.88 3.65-3.95 0-.88-.31-1.59-.82-2.15.08-.2.36-1.02-.08-2.12 0 0-.67-.22-2.2.82-.64-.18-1.32-.27-2-.27-.68 0-1.36.09-2 .27-1.53-1.03-2.2-.82-2.2-.82-.44 1.1-.16 1.92-.08 2.12-.51.56-.82 1.28-.82 2.15 0 3.06 1.86 3.75 3.64 3.95-.23.2-.44.55-.51 1.07-.46.21-1.61.55-2.33-.66-.15-.24-.6-.83-1.23-.82-.67.01-.27.38.01.53.34.19.73.9.82 1.13.16.45.68 1.31 2.69.94 0 .67.01 1.3.01 1.49 0 .21-.15.45-.55.38A7.995 7.995 0 0 1 0 8c0-4.42 3.58-8 8-8Z"></path>
            </svg>
            <div class="p-profile__account">GitHub</div><!-- /.p-profile__account -->
          </a><!-- /.p-profile__link -->
        </div><!-- /.p-profile__link-wrapper -->
        <div class="p-profile__text">
          愛知出身、埼玉在住のフリーのWebコーダーです。<br>
          会社員時代はソフトウェアエンジニアとして働いていました。<br>
          旅行、お酒、飲食店巡りが趣味です。
          <div class="p-profile__label mt-20">■お仕事内容</div><!-- /.p-profile__label -->
          <ul class="p-profile__list">
            <li class="p-profile__list-item">Webサイト制作</li>
            <li class="p-profile__list-item">既存サイト修正、レスポンシブ対応、WordPress化</li>
            <li class="p-profile__list-item">サイトに使用する空撮写真 / 動画の撮影</li>
          </ul><!-- /.p-profile__list -->
        </div><!-- /.p-profile__text -->
        <!-- </div> -->
        <!-- /.profile__text-wrapper -->
      </div><!-- /.p-profile__wrapper -->
    </div><!-- /.p-profile__inner -->
  </section><!-- /.l-profile -->

  <div class="c-deco__top"></div>
  <section id="skills" class="l-skills p-skills">
    <div class="p-skills__inner l-inner">
      <h2 class="p-skills__title c-section-title">Skills</h2><!-- /.p-skills__title -->
      <div class="p-skills__wrapper">
        <div class="p-skills__item">
          <figure class="p-skills__icon">
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-html.svg" alt="スキルセットアイコン(HTML)" width="44" height="50" loading="lazy">
          </figure><!-- /.p-skills__icon -->
          <div class="p-skills__label">HTML</div><!-- /.p-skills__label -->
          <div class="p-skills__text">HTML Living Standardの準拠</div><!-- /.p-skills__text -->
        </div><!-- /.p-skills__item -->

        <div class="p-skills__item">
          <figure class="p-skills__icon">
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-css.svg" alt="スキルセットアイコン(CSS)" width="44" height="50" loading="lazy">
          </figure><!-- /.p-skills__icon -->
          <div class="p-skills__label">CSS(Sass)</div><!-- /.p-skills__label -->
          <div class="p-skills__text">保守・運用性を意識したコーディング、BEM, FLOCSSを意識したファイル構成、Gulpによる自動コンパイル</div><!-- /.p-skills__text -->
        </div><!-- /.p-skills__item -->

        <div class="p-skills__item">
          <figure class="p-skills__icon">
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-js.svg" alt="スキルセットアイコン(JavaScript)" width="50.1" height="50" loading="lazy">
          </figure><!-- /.p-skills__icon -->
          <div class="p-skills__label">JavaScript(jQuery)</div><!-- /.p-skills__label -->
          <div class="p-skills__text">ライブラリを用いたアニメーション実装、カルーセル、スムーススクロール、フェードイン、アコーディオン、モーダルウィンドウ</div><!-- /.p-skills__text -->
        </div><!-- /.p-skills__item -->

        <div class="p-skills__item">
          <figure class="p-skills__icon">
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-gulp.svg" alt="スキルセットアイコン(gulp)" width="25" height="50" loading="lazy">
          </figure><!-- /.p-skills__icon -->
          <div class="p-skills__label">gulp</div><!-- /.p-skills__label -->
          <div class="p-skills__text">タスクの自動実行による作業効率向上</div><!-- /.p-skills__text -->
        </div><!-- /.p-skills__item -->

        <div class="p-skills__item">
          <figure class="p-skills__icon">
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-wp.svg" alt="スキルセットアイコン(WordPress)" width="50" height="50" loading="lazy">
          </figure><!-- /.p-skills__icon -->
          <div class="p-skills__label">WordPress</div><!-- /.p-skills__label -->
          <div class="p-skills__text">オリジナルテーマの制作、自作によるカスタム投稿、カスタムフィールドの構築</div><!-- /.p-skills__text -->
        </div><!-- /.p-skills__item -->

        <div class="p-skills__item">
          <figure class="p-skills__icon">
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-drone.svg" alt="スキルセットアイコン(ドローン)" width="48" height="48" loading="lazy">
          </figure><!-- /.p-skills__icon -->
          <div class="p-skills__label">ドローン</div><!-- /.p-skills__label -->
          <div class="p-skills__text">民間資格(UAS Level 2)所持<br>サイトに掲載する空撮写真・動画の撮影</div><!-- /.p-skills__text -->
        </div><!-- /.p-skills__item -->

      </div><!-- /.p-skills__wrapper -->
    </div><!-- /.p-skills__inner -->
  </section><!-- /.l-skills -->
  <div class="c-deco__bottom"></div>

  <section id="works" class="l-works p-works">
    <div class="p-works__inner l-inner">
      <h2 class="p-works__title c-section-title">Works</h2><!-- /.p-works__title -->
      <div class="p-works__wrapper">
        <a href="" class="p-works__item">
          <figure class="p-works__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/picture-demo1.png" width="200" height="160" alt="実績画像" loading="lazy" decoding="async">
          </figure><!-- /.p-works__img -->
          <div class="p-works__text">

            <div class="p-works__item-title">タイトル</div><!-- /.p-works__item-title -->
            <ul class="p-works__item-category-wrapper">
              <li class="p-works__item-category">WordPress</li><!-- /.p-works__item-category -->
              <li class="p-works__item-category">WordPress</li><!-- /.p-works__item-category -->
              <li class="p-works__item-category">WordPress</li><!-- /.p-works__item-category -->
              <li class="p-works__item-category">CMS</li><!-- /.p-works__item-category -->
              <li class="p-works__item-category">WordPress</li><!-- /.p-works__item-category -->
              <li class="p-works__item-category">WordPress</li><!-- /.p-works__item-category -->
            </ul><!-- /.p-works__item-category-wrapper -->
            <p class="p-works__item-comment">
              コメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメント </p><!-- /.p-works__item-comment -->

          </div><!-- /.p-works__text -->
        </a><!-- /.p-works__item -->
      </div><!-- /.p-works__wrapper -->
      <div class="p-works__button">
        <a href="" class="p-works__link c-detail-button">制作実績をもっと見る</a><!-- /.p-works__link -->
      </div><!-- /.p-works__button -->
    </div><!-- /.p-works__inner l-inner -->
  </section><!-- /.l-works p-works -->


</main>
<?php get_footer(); ?>