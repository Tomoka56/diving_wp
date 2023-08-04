<?php
$blog = esc_url(home_url('/blog'));
$voice = esc_url(home_url('/voice'));
$campaign = esc_url(home_url('/campaign'));
?>

<div class="sub-blog__side-contents">
  <div class="sub-blog__side-contents-inner">
    <div class="sub-blog__side-block side-bar">
      <div class="side-bar__head">
        <div class="side-bar__icon">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/icon-black.png" alt="クジラのアイコン（黒）" />
        </div>
        <h2 class="side-bar__title">人気記事</h2>
      </div>
      <div class="side-bar__items sub-blog-card-list">
        <?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 3,
          'orderby' => 'rand',
        );
        $blog_query = new WP_Query($args);
        ?>
        <?php if ($blog_query->have_posts()) : ?>
          <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="sub-blog-card-list__item sub-blog-card">
              <div class="sub-blog-card__inner">
                <?php if (has_post_thumbnail()) : ?>
                  <div class="sub-blog-card__img">
                    <?php the_post_thumbnail(); ?>
                  </div>
                <?php else : ?>
                  <div class="sub-blog-card__img">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/noimage.jpg" alt="珊瑚礁" />
                  </div>
                <?php endif; ?>
                <div class="sub-blog-card__body">
                  <time class="sub-blog-card__date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y-m-d'); ?></time>
                  <h3 class="sub-blog-card__title"><?php the_title(); ?></h3>
                </div>
              </div>
            </a>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
    </div>
    <div class="sub-blog__side-block side-bar">
      <div class="side-bar__head">
        <div class="side-bar__icon">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/icon-black.png" alt="クジラのアイコン（黒）" />
        </div>
        <h2 class="side-bar__title">口コミ</h2>
      </div>
      <div class="side-bar__items sub-voice-card-list">
        <?php
        $args = array(
          'post_type' => 'voice',
          'posts_per_page' => 1,
          'orderby' => 'date',
        );
        $voice_query = new WP_Query($args);
        ?>
        <?php if ($voice_query->have_posts()) : ?>
          <?php while ($voice_query->have_posts()) : $voice_query->the_post(); ?>
            <div class="sub-voice-card-list__item sub-voice-card">
              <div class="sub-sub-voice-card__inner">
                <div class="sub-voice-card__img">
                  <span class="extend js-extend">
                    <span class="extend__wrap js-wrapper">
                      <?php if (has_post_thumbnail()) : ?>
                        <span class="extend__img">
                          <?php the_post_thumbnail(); ?>
                        </span>
                      <?php else : ?>
                        <span class="extend__img">
                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/man.jpg" alt="体験者シルエットイメージ" />
                        </span>
                      <?php endif; ?>
                    </span>
                  </span>
                </div>
                <div class="sub-voice-card__info">
                    <?php $age = get_field('age');
                    if ($age) {  ?>
                      <span class="voice-card__age-sex">
                        <?php echo $age; ?>
                      </span>
                    <?php
                    }
                    ?>
                    <?php $sex = get_field('sex');
                    if ($sex) {  ?>
                      <span class="voice-card__age-sex">
                        (<?php echo $sex; ?>)
                      </span>
                    <?php
                    }
                    ?>
                  <h3 class="sub-voice-card__title"><?php the_title(); ?></h3>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
      <div class="side-bar__btn">
        <a href="<?php echo $voice; ?>" class="btn">
          <span class="btn__bg"><span class="btn__text">View&nbsp;more</span></span>
        </a>
      </div>
    </div>
    <div class="sub-blog__side-block side-bar">
      <div class="side-bar__head">
        <div class="side-bar__icon">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/icon-black.png" alt="クジラのアイコン（黒）" />
        </div>
        <h2 class="side-bar__title">キャンペーン</h2>
      </div>
      <div class="side-bar__items sub-campaign-card-list">
        <?php
        $args = array(
          'post_type' => 'campaign',
          'posts_per_page' => 2,
          'orderby' => 'date',
        );
        $campaign_query = new WP_Query($args);
        ?>
        <?php if ($campaign_query->have_posts()) : ?>
          <?php while ($campaign_query->have_posts()) : $campaign_query->the_post(); ?>
            <div class="sub-campaign-card-list__item campaign-card">
              <?php if (has_post_thumbnail()) : ?>
                <div class="campaign-card__img">
                  <?php the_post_thumbnail(); ?>
                </div>
              <?php else : ?>
                <div class="campaign-card__img">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/sky.jpg" alt="空" />
                </div>
              <?php endif; ?>
              <div class="campaign-card__body-top campaign-card__body-top--center">
                <h3 class="campaign-card__title"><?php the_title(); ?></h3>
              </div>
              <div class="campaign-card__body-bottom campaign-card__body-bottom--side">
                <p class="campaign-card__price-head">全部コミコミ(お一人様)</p>
                <div class="campaign-card__price-inner">
                  <p class="campaign-card__price">&yen;<?php the_field('price'); ?></p>
                  <p class="campaign-card__price-sale campaign-card__price-sale--small">&yen;<?php the_field('price_sale'); ?></p>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
      <div class="side-bar__btn">
        <a href="<?php echo $campaign; ?>" class="btn">
          <span class="btn__bg"><span class="btn__text">View&nbsp;more</span></span>
        </a>
      </div>
    </div>
    <div class="sub-blog__side-block side-bar">
      <div class="side-bar__head">
        <div class="side-bar__icon">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/icon-black.png" alt="クジラのアイコン（黒）" />
        </div>
        <h2 class="side-bar__title">アーカイブ</h2>
      </div>
      <div class="side-bar__items archive-list">
        <details class="archive-list__toggle-item" open>
          <summary class="archive-list__year">2023</summary>
          <a href="<?php echo get_month_link( 2023, 8 ); ?>"><p class="archive-list__month">8月</p></a>
          <a href="<?php echo get_month_link( 2023, 7 ); ?>"><p class="archive-list__month">7月</p></a>
          <a href="<?php echo get_month_link( 2023, 6 ); ?>"><p class="archive-list__month">6月</p></a>
        </details>
        <details class="archive-list__toggle-item">
          <summary class="archive-list__year">2022</summary>
          <p class="archive-list__month">3月</p>
          <p class="archive-list__month">2月</p>
          <p class="archive-list__month">1月</p>
        </details>
      </div>
    </div>
  </div>
</div>
