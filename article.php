<div class="c-wrapper p-article__wrapper">
          <article class="p-article">

            <?php the_content(); ?>

          </article>
        </div>

        <?php $args = array (
                    'before' => '<div class="page-split">',
                    'after' => '</div>',
                    'link_before' => '<span>',
                    'link_after' => '</span>',
                    );
                    wp_link_pages( $args );
        ?>
