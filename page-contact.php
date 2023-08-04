<?php
/*
Template Name: お問い合わせ
*/
get_header(); ?>

    <div class="sub-fv">
      <picture class="sub-fv__img">
        <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/contact-fv-sp.jpg" media="(max-width: 767px)" />
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/contact-fv-pc.jpg" alt="真上から見た波打ち際" />
      </picture>
      <div class="sub-fv__inner">
        <h1 class="sub-fv__title">Contact</h1>
      </div>
    </div>
    <main>
      <div class="page-contact">
        <div class="page-contact__inner inner">
          <div class="breadcrumb">
            <?php
            if (function_exists('bcn_display')) {
              bcn_display();
            }
            ?>
          </div>
          <!-- もし必須項目が入力されていなければ以下のコードを出力 -->
          <div class="page-contact__error">
          <p class="page-contact__message">※必須項目が入力されていません。<br class="visible--sp"><span class="visible--sp">&emsp;</span>入力してください。</p>
        </div>
          <div class="page-contact__form">
            <?php echo do_shortcode('[contact-form-7 id="198" title="お問い合わせフォーム"]');?>
            <!-- <form action="" class="form"> -->
              <!-- <div class="form__inner">
                <dl class="form__items">
                  <div class="form__item">
                    <dt>お名前<span>必須</span></dt>
                    <dd><input type="text" name="name" id="name" placeholder="沖縄 太郎" required /></dd>
                  </div>
                  <div class="form__item">
                    <dt>メールアドレス<span>必須</span></dt>
                    <dd><input type="text" name="email" id="email" placeholder="aaa000@ggmail.com" required /></dd>
                  </div>
                  <div class="form__item">
                    <dt>電話番号<span>必須</span></dt>
                    <dd><input type="text" name="tel" id="tel" placeholder="000-0000-0000" required /></dd>
                  </div>
                  <div class="form__item">
                    <dt>お問い合わせ項目<span>必須</span></dt>
                    <dd>
                      <label><input type="checkbox" name="checkbox" value="チェックボックス1" checked />ダイビング講習について</label>
                      <label><input type="checkbox" name="checkbox" value="チェックボックス2" />ファンダイビングについて</label>
                      <label><input type="checkbox" name="checkbox" value="チェックボックス3" />体験ダイビングについて</label>
                      <label><input type="checkbox" name="checkbox" value="チェックボックス4" />スペシャルダイビングについて</label>
                    </dd>
                  </div>
                  <div class="form__item form__item--select">
                    <dt>キャンペーン</dt>
                    <dd>
                      <select name="select" class="">
                        <option value="">キャンペーン内容を選択</option>
                        <option value="セレクト1">ライセンス講習</option>
                        <option value="セレクト2">ファンダイビング</option>
                        <option value="セレクト3">体験ダイビング</option>
                      </select>
                    </dd>
                  </div>
                  <div class="form__item">
                    <dt>お問い合わせ内容<span>必須</span></dt>
                    <dd><textarea name="text" id="" cols="30" rows="10"></textarea></dd>
                  </div>
                </dl>
              </div>
              <div class="form__confirm">
                <div class="form__confirm-inner">
                  <input id="checkbox" class="form__checkbox" type="checkbox" />
                  <div class="form__confirm-block">
                    <label for="checkbox">個人情報の取り扱いについて同意のうえ<br class="visible--sp" />送信します。</label>
                  </div>
                </div>
              </div>
              <div class="form__btn">
                <a href="#campaign" class="btn">
                  <span class="btn__bg"><span class="btn__text">Sent</span></span>
                </a>
              </div> -->
            <!-- </form> -->
          </div>
        </div>
      </div>
    </main>
<?php get_footer(); ?>
