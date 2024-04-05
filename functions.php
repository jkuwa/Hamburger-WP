<?php
  // テーマサポート
  // add_theme_support('menus');
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');

  // メニュー登録
  function my_menus() {
    register_nav_menus( array(
      'sidebar_menu' => 'Sidebar Menu',
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

  // ウィジェット追加
  function hamburger_widgets_init() {
    register_sidebar (
      array (
        'name' => 'メニューーウィジェット',
        'id' => 'menu_widget',
        'description' => 'メニュー用ウィジェットです',
        'class' => 'p-menuList',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title' => '</h2>',
      )
    );
  }
  add_action('widgets_init', 'hamburger_widgets_init');