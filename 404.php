<?php get_header(); ?>

    <main class="l-main p-single">
      <div class="c-wrapper p-article__wrapper">
        <section class="p-article">
          <h2 class="u-404__title"><span>404 Not Found<br></span>お探しのページが見つかりませんでしたm(__)m</h2>
          <p>申し訳ございません。お探しのページは移動または削除された可能性があります。<br><a href="<?php echo esc_url(home_url('/')); ?>" class="u-404__pageLink">こちらのページ</a>からトップページにお戻りください。</p>
        </section>
      </div>
    </main>
  </div>

  <?php get_sidebar(); ?>

  <?php get_footer(); ?>

