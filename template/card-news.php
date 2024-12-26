<li <?php post_class('p-card'); ?>>
  <div class="p-card__img">
    <?php the_post_thumbnail(); ?>
  </div>
  <div class="p-caption">
    <div class="p-caption__text">
      <h3><?php the_title(); ?></h3>

      <?php
            $categories = get_the_category();
            if( $categories ) {
              echo '<ul class="c-list -cat p-caption__cat">';
              foreach ( $categories as $cat ) {
                echo '<li><a href="' . esc_url( get_category_link( $cat -> term_id )) . '">' . esc_html( $cat -> name ) .  '</a></li>';
              }
              echo '</ul>';
            }
          ?>

      <?php
        $tags = get_the_tags();
        if( $tags ) {
          echo '<ul class="c-list -tag p-caption__tag">';
          foreach ( $tags as $tag ) {
            echo '<li><a href="' . esc_url( get_tag_link( $cat -> term_id )) . '">' . esc_html( $tag -> name ) . '</a></li>';
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