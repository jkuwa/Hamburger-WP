<?php get_header(); ?>

<?php
  if( have_posts() ) :
    while( have_posts() ) :
      the_post(); ?>

      <main id="post-<?php the_ID(); ?>" <?php post_class('l-main p-single'); ?>>
        <div class="c-mv p-single__mv">
          <div class="p-single__title--bg"><?php the_post_thumbnail(); ?></div>
          <h1 class="p-single__title u-page__title"><?php the_title(); ?></h1>
        </div>

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
    <?php endwhile;
  else: ?>
    <p>表示する記事がありません<p>
<?php endif; ?>
      </main>    
    </div>

    <?php get_sidebar(); ?>

    <?php get_footer(); ?>