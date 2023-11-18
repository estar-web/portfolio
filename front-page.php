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

  <section id="skills" class="l-skills p-skills">
    <div class="c-deco__top"></div>
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
    <div class="c-deco__bottom"></div>
  </section><!-- /.l-skills -->

  <section id="works" class="l-works p-works">
    <div class="p-works__inner l-inner">
      <h2 class="p-works__title c-section-title">Works</h2><!-- /.p-works__title -->

      <div class="swiper p-works__swiper">
        <div class="swiper-wrapper p-works__wrapper">
          <?php
          $current_cat = get_queried_object();
          // echo $current_cat->slug;
          $achieve_query = new WP_Query(
            array(
              'post_type' => 'works',
              'orderby' => 'date',
              'order' => 'DESC',
              'paged' => (get_query_var('paged')) ? absint(get_query_var('paged')) : 1,
              //カスタムタクソノミーが非公開（private）の実績は除外する
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
          ?>
          <?php if ($achieve_query->have_posts()) :
            while ($achieve_query->have_posts()) :
              $achieve_query->the_post(); ?>
              <a href="<?php the_permalink(); ?>" class="swiper-slide">
                <div class="p-works__item">
                  <figure class="p-works__img">
                    <?php if (has_post_thumbnail()) :
                      the_post_thumbnail();
                    else :
                    ?><img src="<?php echo get_template_directory_uri() ?>/img/picture-demo1.png" width="200" height="160" alt="画像：ダミー" loading="lazy" decoding="async">
                    <?php endif; ?>
                  </figure><!-- /.p-works__img -->
                  <div class="p-works__text">
                    <div class="p-works__item-title"><?php the_title(); ?></div><!-- /.p-works__item-title -->
                    <ul class="p-works__item-category-wrapper">
                      <?php $genre_terms = get_the_terms($achieve_query->ID, 'genre');
                      if($genre_terms):
                      foreach ($genre_terms as $genre_term) : ?>
                        <li class="p-works__item-category"><?php echo $genre_term->name; ?></li><!-- /.p-works__item-category -->
                      <?php endforeach;
                      endif;?>
                    </ul><!-- /.p-works__item-category-wrapper -->
                    <p class="p-works__item-comment">
                      <?php $comment = get_field('comment'); 
                      echo $comment;
                      ?>
                  </div><!-- /.p-works__text -->
                </div><!-- /.p-works__item -->
              </a><!-- /.p-works__item -->
          <?php endwhile;
          endif;
          ?>
        </div><!-- /.p-works__wrapper -->
      </div><!-- /.swiper p-works__swiper -->
      <div class="p-works__button">
        <a href="<?php echo home_url('/works/'); ?>" class="p-works__link c-detail-button">制作実績をもっと見る</a><!-- /.p-works__link -->
      </div><!-- /.p-works__button -->
    </div><!-- /.p-works__inner l-inner -->
  </section><!-- /.l-works p-works -->

  <section id="check" class="l-check p-check">
    <div class="p-check__inner l-inner">
      <div class="p-check__title c-section-title">Check</div><!-- /.p-check__title -->
      <ul class="p-check__nav">
        <li class="p-check__nav-item is-active" data-target="#tab-item01">ご依頼の流れ</li>
        <li class="p-check__nav-item" data-target="#tab-item02">料金の目安</>
        </li>
        <li class="p-check__nav-item" data-target="#tab-item03">注意事項</>
        </li>
      </ul>
      <div class="p-check__content">
        <div id="tab-item01" class="p-check__body p-check-flow is-active">
          <div class="p-check-flow__item">
            <figure class="p-check-flow__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/icon-flow1.svg" width="100" height="100" alt="アイコン：ヒアリングしている画像" loading="lazy" decoding="async">
            </figure><!-- /.p-check-flow__img -->
            <div class="p-check-flow__num">STEP 1</div><!-- /.p-check-flow__num -->
            <div class="p-check-flow__title">ご依頼、ご相談</div><!-- /.p-check-flow__title -->
            <div class="p-check-flow__text">
              <a href="#contact" class="p-check-flow__link">メールフォーム</a>、または<a href="#contact" class="p-check-flow__link">X(旧Twitter)</a>のDMよりお問い合わせ下さい。<br>
            </div><!-- /.p-check-flow__text -->
          </div><!-- /.p-check-flow__item -->
          <div class="p-check-flow__item">
            <figure class="p-check-flow__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/icon-flow2.svg" width="100" height="100" alt="アイコン：資料アイコン" loading="lazy" decoding="async">
            </figure><!-- /.p-check-flow__img -->
            <div class="p-check-flow__num">STEP 2</div><!-- /.p-check-flow__num -->
            <div class="p-check-flow__title">内容の確認<br class="u-hide--m"><span class="u-show--m">/</span>見積もり</div><!-- /.p-check-flow__title -->
            <div class="p-check-flow__text">
              ご依頼内容を確認後、お見積り、作業完了予定日をご連絡いたします。
              お見積りに合意頂けましたら、作業に着手いたします。
            </div><!-- /.p-check-flow__text -->
          </div><!-- /.p-check-flow__item -->
          <div class="p-check-flow__item">
            <figure class="p-check-flow__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/icon-flow3.svg" width="100" height="100" alt="アイコン：パソコンのアイコン" loading="lazy" decoding="async">
            </figure><!-- /.p-check-flow__img -->
            <div class="p-check-flow__num">STEP 3</div><!-- /.p-check-flow__num -->
            <div class="p-check-flow__title">制作</div><!-- /.p-check-flow__title -->
            <div class="p-check-flow__text">
              頂いたデータをもとに制作を開始します。<br>
              作業の進捗度合いについては、notionの進捗管理シートにより共有いたします。
            </div><!-- /.p-check-flow__text -->
          </div><!-- /.p-check-flow__item -->
          <div class="p-check-flow__item">
            <figure class="p-check-flow__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/icon-flow4.svg" width="100" height="100" alt="アイコン：チェックマークアイコン" loading="lazy" decoding="async">
            </figure><!-- /.p-check-flow__img -->
            <div class="p-check-flow__num">STEP 4</div><!-- /.p-check-flow__num -->
            <div class="p-check-flow__title">チェック</div><!-- /.p-check-flow__title -->
            <div class="p-check-flow__text">
              作業が完了しましたら、制作物に問題が無いか確認をお願い致します。<br>
              修正が必要な場合は、即日または数日以内に対応いたします。<br>
            </div><!-- /.p-check-flow__text -->
          </div><!-- /.p-check-flow__item -->
          <div class="p-check-flow__item">
            <figure class="p-check-flow__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/icon-flow5.svg" width="100" height="100" alt="アイコン：パソコンのアイコン" loading="lazy" decoding="async">
            </figure><!-- /.p-check-flow__img -->
            <div class="p-check-flow__num">STEP 5</div><!-- /.p-check-flow__num -->
            <div class="p-check-flow__title">納品、サイト公開</div><!-- /.p-check-flow__title -->
            <div class="p-check-flow__text">
              お客様サーバーへのアップロード、またはzipファイルをお渡して納品となります。
              サーバーアップロードの場合、お客様にもご確認頂き、問題がなければ納品完了となります。
              <!-- （サーバーアップロードの場合でも一定期間ご返信頂けない場合、納品完了とさせて頂きます） -->
            </div><!-- /.p-check-flow__text -->
          </div><!-- /.p-check-flow__item -->
        </div><!-- /.p-check__body -->

        <div id="tab-item02" class="p-check__body p-check-price">
          <div class="p-check-price__text">
            <ul class="p-check-price__textList">
              <li class="p-check-price__textItem">料金はすべて、税抜き価格となります。</li><!-- /.p-check-price__textItem -->
              <li class="p-check-price__textItem">ご予算等に合わせてご相談に応じます。お気軽にお問い合わせ下さい(*^ ^*)</li><!-- /.p-check-price__textItem -->
              <li class="p-check-price__textItem">ページ制作のみの料金となります。デザインの作成が必要な場合、別途お見積りが必要となります。</li><!-- /.p-check-price__textItem -->
              <li class="p-check-price__textItem">当方の実績として当ページに公開させて頂ける場合、合計金額より10%割引させて頂きます。</li><!-- /.p-check-price__textItem -->
              <li class="p-check-price__textItem">次の内容は基本料金に含まれます
                <ul class="p-check-price__detailList">
                  <li class="p-check-price__detailItem">サーバー・ドメインの取得</li><!-- /.p-check-price__detailItem -->
                  <li class="p-check-price__detailItem">ハンバーガーメニュー</li><!-- /.p-check-price__detailItem -->
                  <li class="p-check-price__detailItem">マップ、SNSなどのリンクの埋め込み</li><!-- /.p-check-price__detailItem -->
                  <li class="p-check-price__detailItem">お問合せフォーム</li><!-- /.p-check-price__detailItem -->
                  <li class="p-check-price__detailItem">タブレット・スマートフォン表示</li><!-- /.p-check-price__detailItem -->
                  <li class="p-check-price__detailItem">簡単なアニメーション</li><!-- /.p-check-price__detailItem -->
                </ul><!-- /.p-check-price__detailList -->
              </li><!-- /.p-check-price__textItem -->
              <li class="p-check-price__textItem">ご要望によっては追加料金が発生する可能性もございます。<br>ヒヤリング時にお聞かせ下さい。</li><!-- /.p-check-price__textItem -->
            </ul><!-- /.p-check-price__textList -->
          </div><!-- /.p-check-price__text -->
          <div class="p-check-price__wrapper">
            <div class="p-check-price__label">基本料金</div><!-- /.p-check-price__label -->
            <div class="p-check-price__item">
              <div class="p-check-price__head">Topページ</div><!-- /.p-check-price__head -->
              <div class="p-check-price__price">50,000円 〜</div><!-- /.p-check-price__price -->
            </div><!-- /.p-check-price__item -->
            <div class="p-check-price__item">
              <div class="p-check-price__head">1ページ追加</div><!-- /.p-check-price__head -->
              <div class="p-check-price__price">10,000円 〜</div><!-- /.p-check-price__price -->
            </div><!-- /.p-check-price__item -->
          </div><!-- /.p-check-price__wrapper -->
          <div class="p-check-price__wrapper">
            <div class="p-check-price__label">各種オプション</div><!-- /.p-check-price__label -->
            <div class="p-check-price__item">
              <div class="p-check-price__head">1ページ追加</div><!-- /.p-check-price__head -->
              <div class="p-check-price__price">10,000円 〜</div><!-- /.p-check-price__price -->
            </div><!-- /.p-check-price__item -->
            <div class="p-check-price__item">
              <div class="p-check-price__head">投稿機能<br>(ブログ・お知らせ等)</div><!-- /.p-check-price__head -->
              <div class="p-check-price__price">20,000円</div><!-- /.p-check-price__price -->
            </div><!-- /.p-check-price__item -->
            <div class="p-check-price__item u-hide">
              <div class="p-check-price__head">画像のスライド機能</div><!-- /.p-check-price__head -->
              <div class="p-check-price__price">1箇所5000円〜</div><!-- /.p-check-price__price -->
            </div><!-- /.p-check-price__item -->
            <div class="p-check-price__item u-hide">
              <div class="p-check-price__head">モーダルウィンドウ</div><!-- /.p-check-price__head -->
              <div class="p-check-price__price">1箇所5000円〜</div><!-- /.p-check-price__price -->
            </div><!-- /.p-check-price__item -->
            <div class="p-check-price__item u-hide">
              <div class="p-check-price__head">タブ切り替え</div><!-- /.p-check-price__head -->
              <div class="p-check-price__price">1箇所5000円〜</div><!-- /.p-check-price__price -->
            </div><!-- /.p-check-price__item -->
          </div><!-- /.p-check-price__wrapper -->
          <div class="p-check-price__wrapper u-hide">
            <div class="p-check-price__label">修正</div><!-- /.p-check-price__label -->
            <div class="p-check-price__item">
              <div class="p-check-price__head">投稿機能追加</div><!-- /.p-check-price__head -->
              <div class="p-check-price__price">10,000円</div><!-- /.p-check-price__price -->
            </div><!-- /.p-check-price__item -->
            <div class="p-check-price__item">
              <div class="p-check-price__head">1ページ追加</div><!-- /.p-check-price__head -->
              <div class="p-check-price__price">10,000円〜</div><!-- /.p-check-price__price -->
            </div><!-- /.p-check-price__item -->
          </div><!-- /.p-check-price__wrapper -->
        </div><!-- /.p-check__body -->

        <div id="tab-item03" class="p-check__body p-check-promise">
          <div class="p-check-promise__item">
            <div class="p-check-promise__label">ご用意頂きたいもの</div><!-- /.p-check-promise__label -->
            <div class="p-check-promise__text">
              <ul class="p-check-promise__list">
                <li class="p-check-promise__listItem">デザインデータ</li><!-- /.p-check-promise__listItem -->
                <li class="p-check-promise__listItem">画像</li><!-- /.p-check-promise__listItem -->
                <li class="p-check-promise__listItem">テキスト</li><!-- /.p-check-promise__listItem -->
              </ul><!-- /.p-check-promise__list -->
              <div class="p-check-promise__spacer"></div><!-- /.p-check-promise__spacer -->
              ご用意が難しい場合は、ご相談下さい！
            </div><!-- /.p-check-promise__text -->
          </div><!-- /.p-check-promise__item -->
          <div class="p-check-promise__item">
            <div class="p-check-promise__label">対応時間</div><!-- /.p-check-promise__label -->
            <div class="p-check-promise__text">
              <ul class="p-check-promise__list">
                <li class="p-check-promise__listItem">平日22:00までに頂いたご連絡については30分以内にご返信いたします。</li><!-- /.p-check-promise__listItem -->
                <li class="p-check-promise__listItem">都合により連絡が取りにい日時が予めわかっている場合は、前もってご連絡いたします。</li><!-- /.p-check-promise__listItem -->
              </ul><!-- /.p-check-promise__list -->
            </div><!-- /.p-check-promise__text -->
          </div><!-- /.p-check-promise__item -->
          <div class="p-check-promise__item">
            <div class="p-check-promise__label">納品</div><!-- /.p-check-promise__label -->
            <div class="p-check-promise__text">
              <ul class="p-check-promise__list">
                <li class="p-check-promise__listItem">当方の作業完了後、問題ないことを確認頂くか、7日間経過したことを持ちまして納品とさせて頂きます。</li><!-- /.p-check-promise__listItem -->
                <li class="p-check-promise__listItem">納品後、１ヶ月間は修正を無料で承ります。</li><!-- /.p-check-promise__listItem -->
                <li class="p-check-promise__listItem">上記期間を過ぎての修正、作業着手後のデザイン変更は別途追加料金を頂きます。</li><!-- /.p-check-promise__listItem -->
              </ul><!-- /.p-check-promise__list -->
            </div><!-- /.p-check-promise__text -->
          </div><!-- /.p-check-promise__item -->
        </div><!-- /.p-check__body -->
      </div><!-- /.p-check__content -->
    </div><!-- /.p-check__inner -->
  </section><!-- /.l-check p-check -->



  <section id="contact" class="l-contact p-contact">
    <?php get_template_part("/template/contact-section"); ?>
  </section><!-- /.l-contact p-contact -->
</main>
<?php get_footer(); ?>