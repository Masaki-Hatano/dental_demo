<?php
/**
 * テーマのセットアップ
 * 参考：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support#HTML5
 **/
function my_setup()
{
  add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
  add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
  add_theme_support('title-tag'); // タイトルタグ自動生成
  add_theme_support(
    'html5',
    array( //HTML5でマークアップ
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    )
  );
}

add_action('after_setup_theme', 'my_setup');
// セットアップの書き方の型
// function custom_theme_setup() {
// add_theme_support( $feature, $arguments );
// }
// add_action( 'after_setup_theme', 'custom_theme_setup' );

/**
* CSSとJavaScriptの読み込み
*/
function my_script_init()
{
    wp_enqueue_style('pub', get_template_directory_uri() . '/css/public.css', array(), filemtime( get_theme_file_path( 'css/public.css' )), 'all');
    wp_enqueue_script('my', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), filemtime( get_theme_file_path( 'js/script.js' )), true);
		wp_enqueue_script('jquery-js', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js' );

    if(is_home("home") ){
      wp_reset_query();
      wp_enqueue_style('hm', get_template_directory_uri() . '/css/style_home.css', array(), filemtime( get_theme_file_path( '/css/style_home.css' )), 'all');
    }
    if ( is_front_page() ) {
      wp_enqueue_style('frt', get_template_directory_uri() . '/css/style.css', array(), filemtime(get_theme_file_path('css/style.css')), 'all');
    }
    if ( is_archive("blog") ) {
      wp_enqueue_style('arc', get_template_directory_uri() . '/css/style_archive.css', array(), filemtime(get_theme_file_path('css/style_archive.css')), 'all');
    }
    if ( is_archive("lp") ) {
      wp_enqueue_style('lp', get_template_directory_uri() . '/css/style_kdlp.css', array(), filemtime(get_theme_file_path('css/style_kdlp.css')), 'all');
      wp_enqueue_style('lpp', get_template_directory_uri() . '/css/animate.css', array(), filemtime(get_theme_file_path('css/animate.css')), 'all');
      wp_enqueue_script('lps', get_template_directory_uri() . '/js/script_lp.js', array( 'jquery' ), filemtime( get_theme_file_path( 'js/script_lp.js' )), true);
      wp_enqueue_script('lpw', get_template_directory_uri() . '/js/wow.min.js', array( 'jquery' ), filemtime( get_theme_file_path( 'js/wow.min.js' )), true);
    }
    if(is_single() ){
      wp_enqueue_style('sgl', get_template_directory_uri() . '/css/style_single.css', array(), filemtime( get_theme_file_path( '/css/style_single.css' )), 'all');
    }
    if(is_page("about") ){
      wp_enqueue_style('abt', get_template_directory_uri() . '/css/style_about.css', array(), filemtime( get_theme_file_path( '/css/style_about.css' )), 'all');
    }
    if(is_page("medical") ){
      wp_enqueue_style('med', get_template_directory_uri() . '/css/style_medical.css', array(), filemtime( get_theme_file_path( '/css/style_medical.css' )), 'all');
    }
    if(is_page("staff") ){
      wp_enqueue_style('stf', get_template_directory_uri() . '/css/style_staff.css', array(), filemtime( get_theme_file_path( '/css/style_staff.css' )), 'all');
    }
    if(is_page("rsv") ){
      wp_enqueue_style('rsv', get_template_directory_uri() . '/css/style_reservation.css', array(), filemtime( get_theme_file_path( '/css/style_reservation.css' )), 'all');
    }
    if(is_page("contact") ){
      wp_enqueue_style('con', get_template_directory_uri() . '/css/style_page-contact.css', array(), filemtime( get_theme_file_path( '/css/style_page-contact.css' )), 'all');
    }
    if(is_page("con_thx") ){
      wp_enqueue_style('cox', get_template_directory_uri() . '/css/style_page-contact-thanks.css', array(), filemtime( get_theme_file_path( '/css/style_page-contact-thanks.css' )), 'all');
    }
    if(is_page("rsv_thx") ){
      wp_enqueue_style('rsx', get_template_directory_uri() . '/css/style_reservation-contact-thanks.css', array(), filemtime( get_theme_file_path( '/css/style_reservation-contact-thanks.css' )), 'all');
    }
    
}
add_action('wp_enqueue_scripts', 'my_script_init');




// newマーク

function keika_time($days){
  $today = date_i18n('U');
  $entry_day = get_the_time('U');
  $keika = date('U',($today - $entry_day)) / 86400;
  if ( $days > $keika ):
      echo '<div class="entry-icon-new">new</div>';
  endif;
}

function keika_num($limit){
  global $wp_query;
  $num = $wp_query->current_post;
  echo $num;
  if ( $limit > $num ):
      echo '<div class="entry-icon-new">new</div>';
  endif;
}

function keika_awase($day,$limit){
  global $wp_query;
  $days = 3;
  $today = date_i18n('U');
  $entry_day = get_the_time('U');
  $keika = date('U',($today - $entry_day)) / 86400;
  if ( $days > $keika ):
      $limit = 3;
      $num = $wp_query->current_post;
      if ( $limit > $num ):
          echo '<div class="entry-icon-new">new</div>';
      endif;  
  endif;  
}
