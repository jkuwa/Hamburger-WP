<li <?php post_class('p-card'); ?>>
  <div class="p-card__img">
    <?php the_post_thumbnail(); ?>
  </div>
  <div class="p-caption">
    <div class="p-caption__text">
      <h3><?php the_title(); ?></h3>

      <?php
            $categories = get_the_terms( get_the_ID(), 'news_cat' );
            if( $categories && ! is_wp_error( $categories ) ) {
              echo '<ul class="c-list -cat p-caption__cat">';
              foreach ( $categories as $cat ) {
                echo '<li><a href="' . esc_url( get_term_link( $cat ) ) . '">' . esc_html( $cat -> name ) .  '</a></li>';
              }
              echo '</ul>';
            }
          ?>

      <?php
        $tags = get_the_terms( get_the_ID(), 'news_tag' );
        if( $tags && ! is_wp_error( $tags ) ) {
          echo '<ul class="c-list -tag p-caption__tag">';
          foreach ( $tags as $tag ) {
            echo '<li><a href="' . esc_url( get_term_link( $tag ) ) . '">' . esc_html( $tag -> name ) . '</a></li>';
          }
          echo '</ul>';
        }
      ?>
      
      <?php the_excerpt(); ?>

    </div>
    <a href="<?php the_permalink(); ?>" class="c-btn--line">
      <?php _e('more', 'hamburger'); ?>
    </a>            
  </div>             
</li>