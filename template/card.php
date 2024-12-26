                <li <?php post_class('p-card'); ?>>
                  <div class="p-card__img">
                    <?php the_post_thumbnail(); ?>
                  </div>
                  
                  <?php
                  // 投稿日を取得
                  $post_date = get_the_date('Y-m-d');

                  // クラスを取得
                  $new_class = get_new_post_class( $post_date );
                  ?>
                  
                  <div class="<?php echo esc_attr( $new_class ); ?> p-caption">
                    <div class="p-caption__text">
                      <h3><?php the_title(); ?></h3>
                      
                      <?php the_excerpt(); ?>                   
                    </div>
                    <a href="<?php the_permalink(); ?>" class="c-btn--white p-caption__btn">
                      <?php _e('more', 'hamburger'); ?>
                    </a>            
                  </div>             
                </li>