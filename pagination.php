          <?php if ( $wp_query -> max_num_pages > 1 ): ?>
            <ul class="p-pagination">
              <li class="p-pagination__pcList">
                <?php
                  $current_page = max(1, get_query_var('paged')); // 現在のページ番号を取得
                  $total_pages = $wp_query->max_num_pages; // 総ページ数を取得
                  echo 'page ' . $current_page . '/' . $total_pages;
                ?>
              </li>
              <li class="p-pagination__link -pre"><?php previous_posts_link( _e('PREV', 'hamburger') ); ?></li>
              <?php for ($i = 1; $i <= $total_pages; $i++) : ?>
                <li class="p-pagination__pcList">
                  <?php if ($i == $current_page) : ?>
                    <span class="c-pageList p-pagination--this"><?php echo $i; ?></span>
                  <?php else : ?>
                    <a href="<?php echo esc_url( get_pagenum_link($i) ); ?>" class="c-pageList"><?php echo $i; ?></a>
                  <?php endif; ?>
                </li>
              <?php endfor; ?>
              <li class="p-pagination__link -next"><?php next_posts_link( _e('NEXT', 'hamburger') ); ?></li>
            </ul>
          <?php endif; ?>