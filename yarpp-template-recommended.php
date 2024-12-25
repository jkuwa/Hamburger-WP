<?php
/*
YARPP Recommended
Author: くわ
Description: おすすめ商品用のテンプレートです。
*/
?>
<section>
  <h2>おすすめ商品</h2>

  <?php if( have_posts() ): ?>
  <ul>
    <?php while( have_posts() ):
      the_post(); ?>
    <li>
      <article <?php post_class('p-card'); ?>>
        <div class="p-card__img">
          <?php the_post_thumbnail(); ?>
        </div>
        <div class="p-caption">
          <div class="p-caption__text">
            <h3><?php the_title(); ?></h3>
            <?php the_excerpt(); ?>
          </div>
          <a href="<?php the_permalink(); ?>" class="c-btn--line"><?php _e('more', 'hamburger'); ?></a>            
        </div>   
      </article>
    </li>
    <?php endwhile; ?>
  </ul>
  
  <?php else: ?>
    <p><?php _e('There are no articles to display.', 'hamburger'); ?><p>
  <?php endif; ?>
</section>