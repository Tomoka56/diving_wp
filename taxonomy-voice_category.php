<?php get_header(); ?>
<?php
$contact = esc_url(home_url('/contact'));
?>
    <div class="sub-fv">
      <picture class="sub-fv__img">
        <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/voice-fv-sp.jpg" media="(max-width: 767px)" />
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/voice-fv-pc.jpg" alt="真上から見たダイビング講習をしている様子" />
      </picture>
      <div class="sub-fv__inner">
        <h1 class="sub-fv__title sub-fv__title--small"><?php single_term_title(); ?></h1>
      </div>
    </div>
    <main>
      <div class="sub-campaign">
        <div class="sub-campaign__inner inner">
        <div class="breadcrumb">
            <?php
            if (function_exists('bcn_display')) {
              bcn_display();
            }
            ?>
          <div class="sub-campaign__contents">
            <div class="sub-campaign__tab tab1">
              <div class="tab1__inner">
                <ul class="tab1__items">
                  <?php
                    $voice = esc_url(home_url('/voice'));
                  ?>
                  <li class="tab1__item"><a href="<?php echo $voice; ?>">ALL</a></li>
                  <?php
                    $taxonomy_terms = get_terms('voice_category');
                    if(!empty($taxonomy_terms)&&!is_wp_error($taxonomy_terms)){
                      foreach($taxonomy_terms as $taxonomy_term):
                        $taxonomy_term_link = get_term_link($taxonomy_term->slug,'voice_category');
                        $taxonomy_term_name = $taxonomy_term->name;
                        echo '<li class="tab1__item"><a href="'.$taxonomy_term_link.'">'.$taxonomy_term_name.'</a></li>';
                      endforeach;
                    }
                  ?>
                </ul>
              </div>
            </div>
            <div class="sub-campaign__container">
              <div class="sub-campaign__cards">
                <?php if (have_posts()) : ?>
                  <?php while (have_posts()) : the_post(); ?>
                  <div class="voice-card-list__item voice-card">
                  <div class="voice-card__inner">
                    <div class="voice-card__info">
                      <div class="voice-card__info-inner">
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
                        <?php
                        $taxonomy_terms = get_the_terms($post->ID, 'voice_category');
                        if ($taxonomy_terms) {
                          echo '<span class="voice-card__category">' . $taxonomy_terms[0]->name . '</span>';
                        }
                        ?>
                      </div>
                      <h3 class="voice-card__title"><?php the_title(); ?></h3>
                    </div>
                    <div class="voice-card__img">
                      <span class="extend js-extend">
                        <span class="extend__wrap js-wrapper">
                          <?php if (has_post_thumbnail()) : ?>
                            <span class="extend__img">
                              <?php the_post_thumbnail(); ?>
                            </span>
                          <?php else : ?>
                            <span class="extend__img">
                              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/dog.jpg" alt="体験者（麦わら帽子を被った笑顔の女性）" />
                            </span>
                          <?php endif; ?>
                        </span>
                      </span>
                    </div>
                  </div>
                  <div class="voice-card__text-area">
                    <p class="voice-card__text"><?php the_content(); ?></p>
                  </div>
                </div>
                  <?php endwhile; ?>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
        <div class="wp-pagenavi">
          <?php wp_pagenavi(); ?>
        </div>
      </div>
      </div>
    </main>
<?php get_footer(); ?>
