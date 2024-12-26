<?php get_header(); ?>

<?php
  if( have_posts() ) :
    while( have_posts() ) :
      the_post(); ?>

      <main id="post-<?php the_ID(); ?>" <?php post_class('l-main p-single'); ?>>
        <div class="c-mv p-single__mv">
          <div class="p-single__title--bg">
            <?php the_post_thumbnail(); ?>
          </div>
          <div class="c-title__wrapper p-singeTitle__wrapper">
            <h1 class="p-single__title"><?php the_title(); ?></h1>
          </div>
        </div>
        <div class="c-wrapper p-article__wrapper u-post">
          <article class="p-article">
            <?php the_content(); ?>
          </article>

          <?php get_template_part('template/pagination'); ?>

          <aside class="p-recommended">
            <section>
              <h2>おすすめ情報</h2>

            <?php if( get_field('recommended_link') ): ?>
              <a href="<?php the_field('recommended_link'); ?>"><?php the_field('recommended_title'); ?></a>

            <?php elseif( !get_field('recommended_title') ): ?>
              <a href="<?php echo esc_url( get_post_type_archive_link('news') );?>">ブログのトップページへ</a>

            <?php else: ?>
              <p><?php the_field('recommended_title'); ?></p>
            <?php endif; ?>
            
            </section>

            <?php
              if( function_exists('yarpp_related') ) {
                yarpp_related();
              }
            ?>
                
          </aside>
        </div>

    <?php endwhile;
  else: ?>
    <p><?php _e('There are no articles to display.', 'hamburger'); ?><p>
<?php endif; ?>

      </main>    
    </div>

    <?php get_sidebar(); ?>

    <?php get_footer(); ?>