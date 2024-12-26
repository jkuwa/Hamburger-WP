<?php get_header(); ?>

      <main class="l-main p-archive">
        <div class="c-mv c-mask p-archive__mv">
          <div class="c-title__wrapper p-archive__title u-search__title">
            <h1>Search:
              <span>
                <?php the_search_query(); ?>
                <?php if( have_posts() ) {
                  global $wp_query;
                  echo '（' . esc_html( $wp_query -> found_posts ) . '件）';
                } else {
                  echo '（0件）';
                }
                ?>
              </span>
            </h1>
          </div>
        </div>

        <div class="c-wrapper p-archive__wrapper">
          <section class="p-archive__main">  
            <ul class="p-archiveList">            
              <h2>小見出しが入ります</h2>
              <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>

              <?php if( have_posts() ):
                while( have_posts() ):
                  the_post();?>

                  <?php get_template_part('template/card'); ?>

                <?php endwhile; 
              else: ?>
                <p class="p-archiveList__none"><?php _e("I'm sorry.", 'hamburger'); ?><br>
                <?php _e('No menu matching the search word was found', 'hamburger'); ?>(TT)</p>
              <?php endif; ?>
            
            </ul>            
          </section>

          <?php wp_pagenavi( array('wrapper_class' => 'p-pagination') ); ?>

        </div>
      </main>
    </div>

    <?php get_sidebar(); ?>

    <?php get_footer(); ?>