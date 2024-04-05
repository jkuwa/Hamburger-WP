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
              else :
            ?>
            <p><?php esc_html_e('No posts found.', 'textdomain'); ?></p>
            <?php
              endif;
            ?>
            
            </ul>            
          </section>

          <?php if($wp_query -> max_num_pages > 1): ?>
          <ul class="p-pagination">
            <li class="p-pagination__pcList">page 1/10</li>
            <li><a class="p-pagination__link -pre">前へ</a></li>
            <li class="p-pagination__pcList"><a class="c-pageList p-pagination--this">1</a></li>
            <li class="p-pagination__pcList"><a href="#" class="c-pageList">2</a></li>
            <li class="p-pagination__pcList"><a href="#" class="c-pageList">3</a></li>
            <li class="p-pagination__pcList"><a href="#" class="c-pageList">4</a></li>
            <li class="p-pagination__pcList"><a href="#" class="c-pageList">5</a></li>
            <li class="p-pagination__pcList"><a href="#" class="c-pageList">6</a></li>
            <li class="p-pagination__pcList"><a href="#" class="c-pageList">7</a></li>
            <li class="p-pagination__pcList"><a href="#" class="c-pageList">8</a></li>
            <li class="p-pagination__pcList"><a href="#" class="c-pageList">9</a></li>
            <li><a href="#" class="p-pagination__link -next">次へ</a></li>
          </ul>
        </div>
      </main>
    </div>

    <?php get_sidebar(); ?>

    <?php get_footer(); ?>