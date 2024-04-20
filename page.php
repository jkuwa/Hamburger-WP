<?php get_header(); ?>

<?php
  if( have_posts() ) :
    while( have_posts() ) :
      the_post(); ?>

      <main id="post-<?php the_ID(); ?>" <?php post_class('l-main p-single'); ?>>
        <div class="c-mv p-single__mv">
          <div class="p-single__title--bg">
            <?php the_post_thumbnail(); ?>
          </div>
          <div class="c-title__wrapper p-pageTitle__wrapper">
            <h1 class="p-single__title"><?php the_title(); ?></h1>
          </div>
        </div>
        <?php get_template_part('article'); ?>

    <?php endwhile;
  else: ?>
    <p><?php _e('There are no articles to display.', 'hamburger'); ?><p>
<?php endif; ?>

      </main>    
    </div>

    <?php get_sidebar(); ?>

    <?php get_footer(); ?>