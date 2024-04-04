<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hamburger</title>
  <link rel="icon" href="images/favicon.svg">
  <link rel="stylesheet" href="css/ress.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&family=Roboto:wght@700&display=swap" rel="stylesheet">
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
</head>

<body <?php body_class(); ?>>
  <div class="l-container">
    <div class="l-body">
      <header class="l-header p-header">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="p-header__title"><?php bloginfo('name'); ?></a>

        <?php get_search_form(); ?>

        <button class="p-header__menuBtn js-menuBtn">Menu</button>
      </header>