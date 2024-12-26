<?php get_header(); ?>

<?php
  if( have_posts() ) :
    while( have_posts() ) :
      the_post(); ?>
    
      <main id="post-<?php the_ID(); ?>" <?php post_class('l-main p-single'); ?>>
        <div class="c-mv p-news__mv">
          <div class="c-mask p-single__title--bg">
            <?php the_post_thumbnail(); ?>
          </div>
          <h1 class="p-single__title"><?php the_title(); ?></h1>

          <?php
            $categories = get_the_terms( get_the_ID(), 'news_cat' );
            if( $categories && ! is_wp_error( $categories ) ) {
              echo '<ul class="c-list -cat p-news__mv--cat">';
              foreach ( $categories as $cat ) {
                echo '<li><a href="' . esc_url( get_term_link( $cat ) ) . '">' . esc_html( $cat -> name ) .  '（' . $cat -> count . '）</a></li>';
              }
              echo '</ul>';
            }
          ?>

          <?php
            $tags = get_the_terms( get_the_ID(), 'news_tag' );
            if( $tags && ! is_wp_error( $tags ) ) {
              echo '<ul class="c-list -tag p-news__mv--tag">';
              foreach ( $tags as $tag ) {
                echo '<li><a href="' . esc_url( get_term_link( $tag ) ) . '">' . esc_html( $tag -> name ) .  '（' . $tag -> count . '）</a></li>';
              }
              echo '</ul>';
            }
          ?>

        </div>

        <div class="c-wrapper p-article__wrapper">
          <article class="p-article">
            <?php the_content(); ?>
          </article>
          <?php get_template_part('template/pagination'); ?>
        </div>

      </main>

    <?php endwhile;
  else: ?>
      <p><?php _e('There are no articles to display.', 'hamburger'); ?><p>
  <?php endif; ?>
    </div>

    <?php get_sidebar(); ?>

<?php get_footer(); ?>