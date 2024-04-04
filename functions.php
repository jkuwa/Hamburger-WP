<?php
  // テーマサポート
  // add_theme_support('menus');
  add_theme_support('title-tag');

  // メニュー登録
  function my_menus() {
    register_nav_menus( array(
      'main_menu' => 'Main Menu',
      'footer_menu' => 'Footer Menu',
    ));
  }
  add_action('after_setup_theme', 'my_menus');

  // タイトル出力
  function hamburger_title($title) {
    if ( is_front_page() && is_home()) {
      $title = get_bloginfo('name', 'display');
    } elseif ( is_singular()) {
      $title = single_post_title('', false);
    }
    return $title;
  }
  add_filter('pre_get_document_title', 'hamburger_title');


  function hamburger_script() {
    // css読み込み
    wp_enqueue_style('reset', get_template_directory_uri().'/css/ress.css',array());
    wp_enqueue_style('my-style', get_template_directory_uri().'/css/style.css',array('reset'));
    // googlefonts
    wp_enqueue_style('m-plus1p', 'https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&display=swap',array());
    wp_enqueue_style('roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap',array());

    // デフォルトのjQueryを削除
    wp_deregister_script('jquery');
    // jQuery読み込み
    wp_enqueue_script('jquery', get_template_directory_uri().'/js/jquery-3.7.1.min.js', array(), false, true);
    // js読み込み
    wp_enqueue_script('my-script', get_template_directory_uri().'/js/main.js', array('jquery'));
  }
  add_action('wp_enqueue_scripts', 'hamburger_script');
