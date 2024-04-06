<?php get_header(); ?>

      <main class="l-main p-archive">
        <div class="c-mv p-archive__mv">
          <div class="p-archive__title">
            <h1>Menu:<span>チーズバーガー</span></h1>
          </div>
        </div>

        <div class="c-wrapper p-archive__wrapper">
          <section class="p-archive__main">
            <h2>小見出しが入ります</h2>
            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>

            <ul class="p-archiveList">

            <?php
              if(have_posts()):
                while(have_posts()):
                  the_post();
            ?>           
                <li <?php post_class('p-card'); ?>>
                  <div class="p-card__img">
                    <?php the_post_thumbnail(); ?>
                  </div>
                  <div class="p-caption">
                    <div class="p-caption__text">
                      <h3><?php the_title(); ?></h3>
                      <?php
                        $get_post_subtitle = get_post_subtitle();
                        if (!empty($get_post_subtitle)) {
                          echo '<h4>' . $get_post_subtitle . '</h4>';
                        }
                      ?>
                      <?php the_excerpt(); ?>                   
                    </div>
                    <a href="<?php the_permalink(); ?>" class="c-btn--white p-caption__btn">詳しく見る</a>            
                  </div>             
                </li>
                <?php endwhile; 
              else: ?>
                <p>表示するメニューがありません</p>
            <?php endif; ?>
            
            </ul>            
          </section>

          <?php if ( $wp_query -> max_num_pages > 1 ): ?>
            <ul class="p-pagination">
              <li class="p-pagination__pcList">
                <?php
                  $current_page = max(1, get_query_var('paged')); // 現在のページ番号を取得
                  $total_pages = $wp_query->max_num_pages; // 総ページ数を取得
                  echo 'page ' . $current_page . '/' . $total_pages;
                ?>
              </li>
              <li class="p-pagination__link -pre"><?php previous_posts_link( '前へ' ); ?></li>
              <?php for ($i = 1; $i <= $total_pages; $i++) : ?>
                <li class="p-pagination__pcList">
                  <?php if ($i == $current_page) : ?>
                    <span class="c-pageList p-pagination--this"><?php echo $i; ?></span>
                  <?php else : ?>
                    <a href="<?php echo esc_url(get_pagenum_link($i)); ?>" class="c-pageList"><?php echo $i; ?></a>
                  <?php endif; ?>
                </li>
              <?php endfor; ?>
              <li class="p-pagination__link -next"><?php next_posts_link( '次へ' ); ?></li>
            </ul>
          <?php endif; ?>

        </div>
      </main>
    </div>

    <?php get_sidebar(); ?>

    <?php get_footer(); ?>