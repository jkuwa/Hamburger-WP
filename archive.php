<?php get_header(); ?>

      <main class="l-main p-archive">
        <div class="c-mv p-archive__mv">
          <div class="p-archive__title">
            <h1>Menu:<span><?php single_term_title(); ?></span></h1>
          </div>
        </div>

        <div class="c-wrapper p-archive__wrapper">
          <section class="p-archive__main">
            <h2>小見出しが入ります</h2>
            <?php echo category_description(); ?>

            <ul class="p-archiveList">

            <?php
              if(have_posts()):
                while(have_posts()):
                  the_post();
            ?>

                <li <?php post_class('p-card'); ?>>
                  <div class="p-card__img">
                    <?php the_post_thumbnail(); ?>
                  </div>
                  <div class="p-caption">
                    <div class="p-caption__text">
                      <h3><?php the_title(); ?></h3>
                      <?php
                        $get_post_subtitle = esc_html( get_post_subtitle() );
                        if (!empty($get_post_subtitle)) {
                          echo '<h4>' . $get_post_subtitle . '</h4>';
                        }
                      ?>
                      <?php the_excerpt(); ?>                   
                    </div>
                    <a href="<?php the_permalink(); ?>" class="c-btn--white p-caption__btn"><?php _e('more', 'hamburger'); ?></a>            
                  </div>             
                </li>
                
                <?php endwhile; 
              else: ?>
                <p><?php _e('There are no menus to display.', 'hamburger'); ?></p>
            <?php endif; ?>
            
            </ul>            
          </section>

          <?php get_template_part('pagination'); ?>

        </div>
      </main>
    </div>

    <?php get_sidebar(); ?>

    <?php get_footer(); ?>