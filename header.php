<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="こちらは制作の練習用に制作した『架空のサイト』です。">
  <meta name="robots" content="noindex, nofollow, noarchive">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div class="l-container">
    <div class="l-body">
      <header class="l-header p-header">
        <div class="p-header__inner">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="p-header__title">
            <?php bloginfo('name'); ?>
          </a>

          <?php get_search_form(); ?>
        </div>
        <button class="p-header__menuBtn js-menuBtn">Menu</button>
      </header>