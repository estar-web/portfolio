<?php
/*
Template Name: トップページ
*/
get_header(); ?>

<main>
  <div id="js-mv" class="p-mv">
    <div class="p-mv__inner l-inner">
      <h1 class="p-mv__ttl js-in-view fade-in-right">Code:<br>HOSHI</h1>
      <div class="p-mv__image js-in-view fade-in-left fade-in-delay">
      </div>
    </div>
  </div>

  <section id="works" class="l-works p-works">
    <div class="p-works__inner l-inner">
      <h2 class="p-works__title c-section-title js-in-view fade-in-up">Works</h2>
      <div class="swiper p-works__swiper js-in-view fade-in-up">
        <div class="swiper-wrapper p-works__wrapper">
          <?php
          $current_cat = get_queried_object();
          $achieve_query = new WP_Query(
            array(
              'post_type' => 'post',
              'orderby' => 'date',
              'order' => 'DESC',
              'paged' => (get_query_var('paged')) ? absint(get_query_var('paged')) : 1,
              'tax_query' => array(
                array(
                  'taxonomy' => 'category',
                  'field'    => 'slug',
                  'terms'    => 'private',
                  'operator' => 'NOT IN',
                ),
              ),
            )
          );
          ?>
          <?php if ($achieve_query->have_posts()) :
            while ($achieve_query->have_posts()) :
              $achieve_query->the_post(); ?>
              <a href="<?php the_permalink(); ?>" class="swiper-slide p-works__slide">
                <div class="p-works__item">
                  <figure class="p-works__img">
                    <?php if (has_post_thumbnail()) :
                      the_post_thumbnail();
                    else :
                    ?><img src="<?php echo get_template_directory_uri() ?>/assets/images/picture-demo1.webp" width="200" height="160" alt="画像：ダミー" loading="lazy" decoding="async">
                    <?php endif; ?>
                  </figure>
                  <div class="p-works__text">
                    <div class="p-works__item-title"><?php echo get_post_meta(get_the_ID(), 'Customer', true); ?></div>
                    <ul class="p-works__item-category-wrapper">
                      <?php 
                      $categories = get_the_category();
                      if ($categories) :
                        foreach ($categories as $category) : ?>
                          <li class="p-works__item-category"><?php echo $category->name; ?></li>
                      <?php endforeach;
                      endif;
                       ?>
                    </ul>
                    <p class="p-works__item-comment">
                      <?php $comment = get_post_meta( get_the_ID(), 'comment', true );
                      echo $comment;
                      ?>
                    </p>
                  </div>
                </div>
              </a>
          <?php endwhile;
          endif;
          ?>
        </div>
      </div>
      <div class="p-works__button js-in-view fade-in-up">
        <a href="<?php echo home_url('/works/'); ?>" class="p-works__link c-detail-button">制作実績をもっと見る</a>
      </div>
    </div>
  </section>

  <section id="profile" class="l-profile p-profile">
    <div class="c-deco__top"></div>
    <div class="p-profile__inner l-inner">
      <h2 class="p-profile__title c-section-title js-in-view fade-in-up">Profile</h2>
      <div class="p-profile__wrapper js-in-view fade-in-up">
        <figure class="p-profile__icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-profile.webp" alt="アイコン画像" width="1080" height="1080" loading="lazy">
        </figure>
        <div class="p-profile__spacer u-hide--sp"></div>
        <div class="p-profile__name">ほし</div>

        <div class="p-profile__link-wrapper">
          <a class="p-profile__link" href="https://twitter.com/fre_e_star" target="_blank">
            <svg class="p-profile__web-icon" width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M15.7508 0H18.8175L12.1175 7.6255L20 18H13.8283L8.995 11.7071L3.46333 18H0.395L7.56167 9.84345L0 0.0008298H6.32833L10.6975 5.75273L15.7508 0ZM14.675 16.1729H16.3742L5.405 1.73171H3.58167L14.675 16.1729Z" fill="#337AB7" />
            </svg>
            <i class="p-profile__account">@fre_e_star</i>
            <span class="p-profile__link--hover">Follow!</span>
          </a>
          <a class="p-profile__link" href="https://github.com/estar-web?tab=repositories" target="_blank">
            <svg class="p-profile__web-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="20" height="20">
              <path d="M8 0c4.42 0 8 3.58 8 8a8.013 8.013 0 0 1-5.45 7.59c-.4.08-.55-.17-.55-.38 0-.27.01-1.13.01-2.2 0-.75-.25-1.23-.54-1.48 1.78-.2 3.65-.88 3.65-3.95 0-.88-.31-1.59-.82-2.15.08-.2.36-1.02-.08-2.12 0 0-.67-.22-2.2.82-.64-.18-1.32-.27-2-.27-.68 0-1.36.09-2 .27-1.53-1.03-2.2-.82-2.2-.82-.44 1.1-.16 1.92-.08 2.12-.51.56-.82 1.28-.82 2.15 0 3.06 1.86 3.75 3.64 3.95-.23.2-.44.55-.51 1.07-.46.21-1.61.55-2.33-.66-.15-.24-.6-.83-1.23-.82-.67.01-.27.38.01.53.34.19.73.9.82 1.13.16.45.68 1.31 2.69.94 0 .67.01 1.3.01 1.49 0 .21-.15.45-.55.38A7.995 7.995 0 0 1 0 8c0-4.42 3.58-8 8-8Z"></path>
            </svg>
            <i class="p-profile__account">GitHub</i>
            <span class="p-profile__link--hover">Follow!</span>
          </a>
        </div>
        <div class="p-profile__text">
          埼玉県でホームページ制作のお仕事をしております。<br>
          会社員時代はプログラマーとして働いていました。<br>
          カメラやドローンを使って、サイトに掲載する写真や動画の撮影のお手伝いもできます。<br>
          <div class="p-profile__label mt-20">■お仕事内容</div>
          <ul class="p-profile__list">
            <li class="p-profile__list-item">Webサイト制作</li>
            <li class="p-profile__list-item">既存サイト修正、レスポンシブ対応、WordPress化</li>
            <li class="p-profile__list-item">サイトの保守/運用</li>
            <li class="p-profile__list-item">サイトに使用する空撮写真 / 動画の撮影</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="c-deco__bottom"></div>
  </section>

  <section id="skills" class="l-skills p-skills">

    <div class="p-skills__inner l-inner">
      <h2 class="p-skills__title c-section-title js-in-view fade-in-up">Skills</h2>
      <div class="p-skills__wrapper js-in-view fade-in-up">
        <div class="p-skills__item">
          <figure class="p-skills__icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-html.svg" alt="スキルセットアイコン(HTML)" width="44" height="50" loading="lazy">
          </figure>
          <div class="p-skills__label">HTML</div>
          <div class="p-skills__text">HTML Living Standardに準拠したコーディング</div>
        </div>

        <div class="p-skills__item">
          <figure class="p-skills__icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-css.svg" alt="スキルセットアイコン(CSS)" width="44" height="50" loading="lazy">
          </figure>
          <div class="p-skills__label">CSS(Sass)</div>
          <div class="p-skills__text">保守・運用性を意識したコーディング、BEM, FLOCSSを意識したファイル構成</div>
        </div>

        <div class="p-skills__item">
          <figure class="p-skills__icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-js.svg" alt="スキルセットアイコン(JavaScript)" width="50" height="50" loading="lazy">
          </figure>
          <div class="p-skills__label">JavaScript(jQuery)</div>
          <div class="p-skills__text">ライブラリを用いたアニメーション実装<br>（スライダー、スムーススクロール、フェードイン、アコーディオン、モーダルウィンドウ等）</div>
        </div>

        <div class="p-skills__item">
          <figure class="p-skills__icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-gulp.svg" alt="スキルセットアイコン(gulp)" width="25" height="50" loading="lazy">
          </figure>
          <div class="p-skills__label">gulp</div>
          <div class="p-skills__text">タスクの自動実行による作業効率向上、Sassのコンパイル</div>
        </div>

        <div class="p-skills__item">
          <figure class="p-skills__icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-wp.svg" alt="スキルセットアイコン(WordPress)" width="50" height="50" loading="lazy">
          </figure>
          <div class="p-skills__label">WordPress</div>
          <div class="p-skills__text">オリジナルテーマの制作、カスタム投稿/カスタムフィールドの構築</div>
        </div>

        <div class="p-skills__item">
          <figure class="p-skills__icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-camera.svg" alt="スキルセットアイコン(カメラ)" width="48" height="48" loading="lazy">
          </figure>
          <div class="p-skills__label">写真・動画撮影</div>
          <div class="p-skills__text">サイトに掲載する空撮写真・動画の撮影</div>
        </div>

      </div>
    </div>
  </section>


  <section id="check" class="l-check p-check">
    <div class="p-check__inner l-inner">
      <h2 class="p-check__title c-section-title js-in-view fade-in-up">Check</h2>
      <ul class="p-check__nav js-in-view fade-in-up">
        <li class="p-check__nav-item is-active" data-target="#tab-item01">ご依頼の流れ</li>
        <li class="p-check__nav-item" data-target="#tab-item02">料金の目安</li>
        <li class="p-check__nav-item" data-target="#tab-item03">確認事項</li>
      </ul>
      <div class="p-check__content js-in-view fade-in-up">
        <div id="tab-item01" class="p-check__body p-check-flow is-active">
          <div class="p-check-flow__item">
            <figure class="p-check-flow__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-flow1.svg" width="100" height="100" alt="アイコン：ヒアリングしている画像" loading="lazy" decoding="async">
            </figure>
            <div class="p-check-flow__num">STEP 1</div>
            <div class="p-check-flow__title">ご依頼、ご相談</div>
            <div class="p-check-flow__text">
              <a href="<?php echo home_url('/contact/'); ?>" class="p-check-flow__link">お問い合わせフォーム</a>、または<a href="https://twitter.com/fre_e_star" target="_blank" class="p-check-flow__link">X(旧Twitter)</a>のDMよりお問い合わせ下さい。<br>
              ご相談だけでも大歓迎です！
            </div>
          </div>
          <div class="p-check-flow__item">
            <figure class="p-check-flow__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-flow2.svg" width="100" height="100" alt="アイコン：資料アイコン" loading="lazy" decoding="async">
            </figure>
            <div class="p-check-flow__num">STEP 2</div>
            <div class="p-check-flow__title">内容の確認<br class="u-hide--m"><span class="u-show--m">/</span>見積もり</div>
            <div class="p-check-flow__text">
              ご依頼内容を確認後、お見積り、作業完了予定日をご連絡いたします。
              お見積りに合意頂けましたら、作業に着手いたします。
            </div>
          </div>
          <div class="p-check-flow__item">
            <figure class="p-check-flow__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-flow3.svg" width="100" height="100" alt="アイコン：パソコンのアイコン" loading="lazy" decoding="async">
            </figure>
            <div class="p-check-flow__num">STEP 3</div>
            <div class="p-check-flow__title">制作</div>
            <div class="p-check-flow__text">
              頂いたデータをもとに制作を開始します。<br>
              作業の進捗度合いについては、notionの進捗管理シートにより共有いたします。<br>
              （その他の共有方法にも対応いたしますのでお申し付け下さい！）
            </div>
          </div>
          <div class="p-check-flow__item">
            <figure class="p-check-flow__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-flow4.svg" width="100" height="100" alt="アイコン：チェックマークアイコン" loading="lazy" decoding="async">
            </figure>
            <div class="p-check-flow__num">STEP 4</div>
            <div class="p-check-flow__title">チェック</div>
            <div class="p-check-flow__text">
              作業が完了しましたら、制作物に問題が無いか確認をお願い致します。<br>
              修正が必要な場合は、即日または数日以内に対応いたします。<br>
            </div>
          </div>
          <div class="p-check-flow__item">
            <figure class="p-check-flow__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-flow5.svg" width="100" height="100" alt="アイコン：パソコンのアイコン" loading="lazy" decoding="async">
            </figure>
            <div class="p-check-flow__num">STEP 5</div>
            <div class="p-check-flow__title">納品、サイト公開</div>
            <div class="p-check-flow__text">
              お客様サーバーへのアップロード、またはzipファイルをお渡して納品となります。
              サーバーアップロードの場合、お客様にもご確認頂き、問題がなければ納品完了となります。
            </div>
          </div>
        </div>

        <div id="tab-item02" class="p-check__body p-check-price">
          <div class="p-check-price__text">
            <ul class="p-check-price__textList">
              <li class="p-check-price__textItem">料金はすべて、税抜き価格となります。</li>
              <li class="p-check-price__textItem">ご予算等に合わせてご相談に応じます。お気軽にお問い合わせ下さい(*^ ^*)</li>
              <li class="p-check-price__textItem">ページ制作のみの料金となります。デザインの作成が必要な場合、別途お見積りが必要となります。</li>
              <li class="p-check-price__textItem">当方の実績として当ページに公開させて頂ける場合、合計金額より10%割引させて頂きます。</li>
              <li class="p-check-price__textItem">次の内容は基本料金に含まれます
                <ul class="p-check-price__detailList">
                  <li class="p-check-price__detailItem">サーバー・ドメインの取得</li>
                  <li class="p-check-price__detailItem">ハンバーガーメニュー</li>
                  <li class="p-check-price__detailItem">マップ、SNSなどのリンクの埋め込み</li>
                  <li class="p-check-price__detailItem">お問合せフォーム</li>
                  <li class="p-check-price__detailItem">タブレット・スマートフォン表示</li>
                  <li class="p-check-price__detailItem">簡単なアニメーション（スクロールアニメーション等）</li>
                </ul>
              </li>
              <li class="p-check-price__textItem">ご要望によっては追加料金が発生する可能性もございます。<br>ヒヤリング時にお聞かせ下さい。</li>
            </ul>
          </div>
          <div class="p-check-price__wrapper">
            <div class="p-check-price__label">基本料金</div>
            <div class="p-check-price__item">
              <div class="p-check-price__head">Topページ</div>
              <div class="p-check-price__price">70,000円 〜</div>
            </div>
            <div class="p-check-price__item">
              <div class="p-check-price__head">1ページ追加</div>
              <div class="p-check-price__price">15,000円 〜</div>
            </div>
          </div>
          <div class="p-check-price__wrapper">
            <div class="p-check-price__label">各種オプション</div>
            <div class="p-check-price__item">
              <div class="p-check-price__head">1ページ追加</div>
              <div class="p-check-price__price">15,000円 〜</div>
            </div>
            <div class="p-check-price__item">
              <div class="p-check-price__head">WordPress</div>
              <div class="p-check-price__price">20,000円</div>
            </div>
            <div class="p-check-price__item">
              <div class="p-check-price__head">スライダー</div>
              <div class="p-check-price__price">一箇所5,000円</div>
            </div>
            <div class="p-check-price__item">
              <div class="p-check-price__head">モーダルウィンドウ</div>
              <div class="p-check-price__price">一箇所5,000円</div>
            </div>
            <div class="p-check-price__item">
              <div class="p-check-price__head">サイトに使用する写真・動画の撮影<br><small>※内容・撮影場所により変動</small></div>
              <div class="p-check-price__price">10,000円〜</div>
            </div>
          </div>
        </div>

        <div id="tab-item03" class="p-check__body p-check-promise">
          <div class="p-check-promise__item">
            <div class="p-check-promise__label">ご用意頂けると嬉しいもの</div>
            <div class="p-check-promise__text">
              <ul class="p-check-promise__list">
                <li class="p-check-promise__listItem">デザインデータ(XD、Figma等)</li>
                <li class="p-check-promise__listItem">画像</li>
                <li class="p-check-promise__listItem">テキスト</li>
                <li class="p-check-promise__listItem">サーバー情報</li>
              </ul>
              <div class="p-check-promise__spacer"></div>
              ご用意が難しい場合でもこちらで対応できる場合がございます。<br>
              お気軽にご相談下さい！<br>
            </div>
          </div>
          <div class="p-check-promise__item">
            <div class="p-check-promise__label">対応時間</div>
            <div class="p-check-promise__text">
              <ul class="p-check-promise__list">
                <li class="p-check-promise__listItem">平日21:00までに頂いたご連絡については30分以内にご返信いたします。</li>
                <li class="p-check-promise__listItem">都合により連絡が取りにくい日時が予めわかっている場合は、前もってご連絡いたします。</li>
              </ul>
            </div>
          </div>
          <div class="p-check-promise__item">
            <div class="p-check-promise__label">納品</div>
            <div class="p-check-promise__text">
              <ul class="p-check-promise__list">
                <li class="p-check-promise__listItem">納品後、１ヶ月間は修正を無料で承ります。</li>
                <li class="p-check-promise__listItem">上記期間を過ぎての修正、作業着手後のデザイン変更は別途追加料金を頂く場合がございます。</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="c-deco__top"></div>
  <section id="contact" class="l-contact p-contact">
    <?php get_template_part("/template/contact-section"); ?>
  </section>
</main>
<?php get_footer(); ?>