<?php get_header(); ?>

      <main class="l-main p-archive u-news">
        <div class="c-mv c-mask p-archive__mv">
          <div class="c-title__wrapper p-archive__title">
            <h1>News:
              <span>
                すべての記事
                <?php 
                $news_count = wp_count_posts('news') -> publish;
                if( $news_count ) {
                  echo '（' . esc_html( $news_count ) . '件）';
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
            <h2>小見出しが入ります</h2>
            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>

            <?php if( have_posts() ): ?>
            <ul class="p-archiveList">

            <?php while( have_posts() ):
              the_post(); ?>

                <?php get_template_part('template/card', 'news'); ?>
                
              <?php endwhile; ?>
            </ul>    

            <?php else: ?>
                <p><?php _e('There are no menus to display.', 'hamburger'); ?></p>
            <?php endif; ?>
          </section>

          <?php wp_pagenavi( array('wrapper_class' => 'p-pagination') ); ?>

        </div>
      </main>
    </div>

    <?php get_sidebar(); ?>

<?php get_footer(); ?>