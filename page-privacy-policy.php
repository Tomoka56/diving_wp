<?php
/*
Template Name: プライバシーポリシー
*/
get_header(); ?>

    <div class="sub-fv">
      <picture class="sub-fv__img">
        <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/other-fv-sp.jpg" media="(max-width: 767px)" />
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/other-fv-pc.jpg" alt="様々な色の小さな魚の群れ"/>
      </picture>
      <div class="sub-fv__inner">
        <h1 class="sub-fv__title"><?php the_title(); ?></h1>
      </div>
    </div>
    <main>
      <div class="privacy-policy">
        <div class="privacy-policy__inner inner">
        <div class="breadcrumb">
          <?php
          if (function_exists('bcn_display')) {
            bcn_display();
          }
          ?>
        </div>
          <div class="privacy-policy__contents">
            <div class="privacy-policy__contents-inner">
              <h2 class="privacy-policy__title"><?php the_title(); ?></h2>
              <?php the_content(); ?>
              <!-- <p class="privacy-policy__description-1">以下は、Webサイトで使用するための一般的なプライバシーポリシーの例です。</p>
              <ol class="privacy-policy__items">
                <li class="privacy-policy__item">
                  概要 当社は、お客様の個人情報を大切に扱い、個人情報保護に努めています。本プライバシーポリシーには、当社がどのように個人情報を収集し、使用するかについて説明しています。
                </li>
                <li class="privacy-policy__item">
                  収集する情報 当社は、お客様が当社のサービスを利用する際に、お名前、住所、電話番号、メールアドレスなどの個人情報を収集する場合があります。
                </li>
              </ol>
              <p class="privacy-policy__description-2">また、当社のサイトを閲覧する際に、IPアドレス、ブラウザの種類、言語設定、アクセス日時などの情報も収集する場合があります。</p>
              <ol class="privacy-policy__items">
                <li class="privacy-policy__item">
                  情報の使用 当社は、お客様から収集した個人情報を、以下の目的で使用することがあります。
                </li>
                <div class="privacy-policy__items-inner">
                  <span>・お客様からのお問い合わせやサポートの提供 ・当社のサービスや製品の提供 ・当社のサイトの改善や新しいサービスの開発 ・法律や規制に基づく義務の履行
                  </span>
                </div>
              </ol>
              <ol class="privacy-policy__items">
                <li class="privacy-policy__item">
                  情報の共有 当社は、お客様から収集した個人情報を、以下の場合に限り第三者に提供することがあります。
                </li>
              </ol>
                <div class="privacy-policy__items-inner">
                  <span>・お客様の同意がある場合 ・法律や規制に基づく場合 ・当社が信頼できると判断した業務委託先に必要な範囲で提供する場合</span>
                </div>
              <ol class="privacy-policy__items">
                <li class="privacy-policy__item">
                  セキュリティ 当社は、お客様の個人情報を適切に保護するために、適切な安全対策を講じます。個人情報への不正アクセス、紛失、改ざん、漏洩等を防止するための措置を講じます。
                </li>
                <li class="privacy-policy__item">
                  Cookieの使用 当社は、お客様により良いサイトの利用体験を提供するために、Cookieを使用する場合があります。Cookieは、お客様が当社のサイトを訪れた際に、お客様のブラウザに保存される小さなデータファイルです。Cookieには個人情報は含まれません。
                </li>
                <li class="privacy-policy__item">
                  お問い合わせ先 当社のプライバシーポリシーに関するご質問やご意見は、以下の連絡先までお問い合わせください。 [会社名] [住所] [電話番号] [メールアドレス]
                </li>
                <li class="privacy-policy__item">
                  プライバシーポリシーの変更 当社は、必要に応じて本プライバシーポリシーを変更することがあります。変更後のプライバシーポリシーは、当社のサイトに掲載された時点から効力を有するものとします。変更があった場合、当社は適切な手段でお知らせします。
                </li>
              </ol>
              <p class="privacy-policy__description-2">以上が、当社のプライバシーポリシーの概要です。お客様の個人情報保護のために、常に努めてまいります</p> -->
            </div>
          </div>
        </div>
      </div>
    </main>
<?php get_footer(); ?>
