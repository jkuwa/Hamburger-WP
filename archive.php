<?php get_header(); ?>

      <main class="l-main p-archive">
        <div class="c-mv p-archive__mv">
          <div class="c-wrapper p-archive__title">
            <h1>Menu:<span><?php single_term_title(); ?></span></h1>
          </div>
        </div>

        <div class="c-wrapper p-archive__wrapper">
          <section class="p-archive__main">
            <h2>小見出しが入ります</h2>
            <?php echo wp_kses_post(category_description()); ?>

            <ul class="p-archiveList">

            <?php if(have_posts()):
              while(have_posts()):
                the_post(); ?>

                <?php get_template_part('card'); ?>
                
              <?php endwhile; 
            else: ?>
                <p><?php _e('There are no menus to display.', 'hamburger'); ?></p>
            <?php endif; ?>
            
            </ul>            
          </section>

          <?php wp_pagenavi( array('wrapper_class' => 'p-pagination') ); ?>

        </div>
      </main>
    </div>

    <?php get_sidebar(); ?>

    <?php get_footer(); ?>