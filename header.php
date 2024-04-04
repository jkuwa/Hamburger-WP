<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.svg">

  <script>
    (function(d) {
      var config = {
        kitId: 'kky5huy',
        scriptTimeout: 3000,
        async: true
      },
      h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
    })(document);
  </script>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="l-container">
    <div class="l-body">
      <header class="l-header p-header">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="p-header__title"><?php bloginfo('name'); ?></a>

        <?php get_search_form(); ?>

        <button class="p-header__menuBtn js-menuBtn">Menu</button>
      </header>