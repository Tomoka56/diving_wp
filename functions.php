<?php
  function my_setup()
  {
    add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
    add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
    add_theme_support('title-tag'); // タイトルタグ自動生成
    add_theme_support('html5', array( // HTML5でマークアップ
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
      )
    );
  }
  add_action('after_setup_theme', 'my_setup');
  /* CSSとJavaScriptの読み込み */
  function my_script_init()
    { // WordPress提供のjquery.jsを読み込まない
      wp_deregister_script('jquery');
      // jQuery
      wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.7.0.min.js', "", "1.0.1", true );
      // Google Fonts(2つ以上ある場合は1つずつ書く)
      wp_enqueue_style( 'NotoSans', '//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap' );
      wp_enqueue_style( 'Gotu', '//fonts.googleapis.com/css2?family=Gotu:wght@400;500;700&display=swap' );
      wp_enqueue_style( 'Lato', '//fonts.googleapis.com/css2?family=Lato:wght@700&display=swap' );
			// google maps
			wp_enqueue_script( 'map', '//maps.googleapis.com/maps/api/js?key=APIキーを入れます', "", "1.0.1", false );
      // cssファイル
      wp_enqueue_style( 'swiper', '//unpkg.com/swiper@8/swiper-bundle.min.css', "", "1.0.1", false );
      wp_enqueue_style( 'my-css', get_template_directory_uri() . '/assets/css/style.css', array(), false );
      // jsファイル
      wp_enqueue_script( 'swiper', '//unpkg.com/swiper@8/swiper-bundle.min.js', "", "1.0.1", false );
      wp_enqueue_script( 'my-js', get_template_directory_uri() . '/assets/js/script.js', array( 'jquery' ), true );
    }
    add_action('wp_enqueue_scripts', 'my_script_init');
	//記事表示時の整形無効
  remove_filter('the_content', 'wpautop');
  remove_filter('the_excerpt', 'wpautop');
  // ビジュアルエディタ(TinyMCE)の整形無効
  add_filter(
    'tiny_mce_before_init',
    function($init_array){
      global $allowedposttags;
      $init_array['valid_elements']          = '*[*]';
      $init_array['extended_valid_elements'] = '*[*]';
      $init_array['valid_children']          = '+a[' . implode( '|', array_keys( $allowedposttags ) ) . ']';
      $init_array['indent']                  = true;
      $init_array['wpautop']                 = false;
      $init_array['force_p_newlines']        = false;
      return $init_array;
    }
  );

  function change_posts_per_page($query) {
    if ( is_admin() || ! $query->is_main_query() )
        return;
    if ( $query->is_post_type_archive('campaign') ) { /* キャンペーンの時は表示件数を4件に */
        $query->set( 'posts_per_page', '4' );
    }
    if ( $query->is_post_type_archive('voice') ) { /* お客様の声の時は表示件数を6件に */
          $query->set( 'posts_per_page', '6' );
      }
      // もしタクソノミー一覧ページなら
      if ( $query->is_tax('campaign_category') ) {
        $query->set( 'posts_per_page', '4' );
      }
      // もしタクソノミー一覧ページなら
      if ( $query->is_tax('voice_category') ) {
        $query->set( 'posts_per_page', '6' );
      }
}
add_action( 'pre_get_posts', 'change_posts_per_page' );

// contact form 7で自動生成されるpタグを削除
add_filter('wpcf7_autop_or_not', '__return_false');

// お問い合わせ完了ページへ遷移
add_action('wp_footer', 'redirect_to_thanks_page');
function redirect_to_thanks_page() {
  $homeUrl = home_url();
  echo <<< EOD
    <script>
      document.addEventListener( 'wpcf7mailsent', function( event ) {
        location = '{$homeUrl}/thanks/';
      }, false );
    </script>
  EOD;
}


function Change_menulabel() {
  global $menu;
  global $submenu;
  $name = 'ブログ';
  $menu[5][0] = $name;
  $submenu['edit.php'][5][0] = $name.'一覧';
  $submenu['edit.php'][10][0] = '新しい'.$name;
  }
  function Change_objectlabel() {
  global $wp_post_types;
  $name = 'ブログ';
  $labels = &$wp_post_types['post']->labels;
  $labels->name = $name;
  $labels->singular_name = $name;
  $labels->add_new = _x('追加', $name);
  $labels->add_new_item = $name.'の新規追加';
  $labels->edit_item = $name.'の編集';
  $labels->new_item = '新規'.$name;
  $labels->view_item = $name.'を表示';
  $labels->search_items = $name.'を検索';
  $labels->not_found = $name.'が見つかりませんでした';
  $labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
  }
  add_action( 'init', 'Change_objectlabel' );
  add_action( 'admin_menu', 'Change_menulabel' );
