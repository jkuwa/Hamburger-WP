<?php get_header(); ?>

    <main class="l-main p-single">
      <div class="c-wrapper p-article__wrapper">
        <section class="p-article">
          <h2 class="p-404__title">
            <span>404 Not Found<br></span><?php _e('The page you are looking for could not be found.', 'hamburger'); ?>m(__)m
          </h2>
          <p><?php _e("I'm sorry. The page you are looking for may have been moved or deleted.", 'hamburger'); ?><br>
          <?php _e('We apologize for the inconvenience, but please search again from the top page.', 'hamburger'); ?></p>
          <a href="<?php echo esc_url(home_url('/')); ?>" class="p-404__homeLink"><?php _e('HOME', 'hamburger'); ?></a>
        </section>
      </div>
    </main>
  </div>

  <?php get_sidebar(); ?>

  <?php get_footer(); ?>

