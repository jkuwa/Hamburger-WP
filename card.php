                <li <?php post_class('p-card'); ?>>
                  <div class="p-card__img">
                    <?php the_post_thumbnail(); ?>
                  </div>
                  <div class="p-caption">
                    <div class="p-caption__text">
                      <h3><?php the_title(); ?></h3>

                      <?php
                        $get_post_subtitle = esc_html( get_post_subtitle() );
                        if ( !empty($get_post_subtitle) ) {
                          echo '<h4>' . $get_post_subtitle . '</h4>';
                        }
                      ?>
                      
                      <?php the_excerpt(); ?>                   
                    </div>
                    <a href="<?php the_permalink(); ?>" class="c-btn--white p-caption__btn">
                      <?php _e('more', 'hamburger'); ?>
                    </a>            
                  </div>             
                </li>