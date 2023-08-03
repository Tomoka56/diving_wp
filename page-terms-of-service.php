<?php
/*
Template Name: 利用規約
*/
get_header(); ?>

    <div class="sub-fv">
      <picture class="sub-fv__img">
        <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/other-fv-sp.jpg" media="(max-width: 767px)" />
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/other-fv-pc.jpg" alt="様々な色の小さな魚の群れ"/>
      </picture>
      <div class="sub-fv__inner">
        <h1 class="sub-fv__title">Terms&nbsp;of&nbsp;Service</h1>
      </div>
    </div>
    <main>
    <div class="terms-of-service">
      <div class="terms-of-service__inner inner">
        <div class="breadcrumb">
          <?php
            if (function_exists('bcn_display')) {
              bcn_display();
            }
            ?>
        </div>
        <div class="terms-of-service__contents">
          <div class="terms-of-service__contents-inner">
            <h2 class="terms-of-service__title">利用規約</h2>
            <p class="terms-of-service__description-top">以下は、Webサイトで使用する一般的な利用規約の例です。</p>
              <ol class="terms-of-service__items">
                <li class="terms-of-service__item">
                    概要 この利用規約は、当社が提供するサービスの利用に関する条件を定めたものです。本規約に同意いただくことで、当社のサービスを利用いただけます。なお、本規約に違反した場合、当社はサービスの提供を中止することがあります。
                </li>
                <li class="terms-of-service__item">
            サービスの利用 当社のサービスは、お客様が自己責任において利用するものとし、当社はその利用に対して責任を負いません。また、当社はいつでも、サービスの提供を中止することができるものとします。
                </li>
                <li class="terms-of-service__item">
            禁止事項 お客様は、以下の行為を禁止します。
                </li>
                <div class="terms-of-service__items-inner">
                  <span>・当社のサービスに対して不正なアクセスをすること ・当社のサービスにおいて、他のユーザーに対して迷惑をかける行為をすること・当社のサービスを商業目的で利用すること・当社のサービスに関する知的財産権を侵害する行為をすること・その他、法律や公序良俗に反する行為をすること</span>
                </div>
              </ol>
              <ol class="terms-of-service__items">
                <li class="terms-of-service__item">
            知的財産権 当社のサービスに関する知的財産権は、当社または当社にライセンスを許諾している者に帰属します。お客様は、当社の事前の承諾なしに、当社のサービスに関する知的財産権を使用することはできません。
                </li>
                <li class="terms-of-service__item">
            免責事項 当社は、当社のサービスに関連して発生した損害について、一切の責任を負わないものとします。また、当社は、当社のサービスにより提供される情報の正確性、信頼性、完全性、適時性についても一切保証しません。
                </li>
                <li class="terms-of-service__item">
            プライバシー 当社は、お客様の個人情報を適切に保護するために、個人情報保護方針に従って適切な取扱いを行います。
                </li>
                <li class="terms-of-service__item">
                  その他の規定 本規約は、日本法に準拠して解釈されるものとし、当社とお客様は、本規約に関する紛争が生じた場合、東京地方裁判所を第一審の専属的合意管轄裁判所とすることに同意します。
                </li>
                <li class="terms-of-service__item">
                  利用規約の変更 当社は、必要に応じて本利用規約を変更することがあります。変更後の利用規約は、当社のサイトに掲載された時点から効力を有するものとします。変更があった場合、当社は適切な手段でお知らせします。
                </li>
              </ol>
            <p class="terms-of-service__description-bottom">
              以上が、当社の利用規約の概要です。お客様のサービス利用にあたっては、本規約をお読みいただき、同意いただける場合のみサービスをご利用ください。</p>
          </div>
        </div>
      </div>
    </div>
  </main>
<?php get_footer(); ?>
