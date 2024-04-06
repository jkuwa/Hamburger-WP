<?php get_header(); ?>

<?php
  if( have_posts() ) :
    while( have_posts() ) :
      the_post(); ?>

      <main id="post-<?php the_ID(); ?>" <?php post_class('l-main p-single'); ?>>
        <div class="c-mv p-single__mv">
          <h1 class="p-single__title"><?php the_title(); ?></h1>
        </div>

        <div class="c-wrapper p-article__wrapper">
          <article class="p-article">
          <?php the_content(); ?>

          

            <!-- <h2>見出しh2</h2>
            <p class="c-margin--top">Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。</p>
            <h3 class="c-margin--top">見出しh3</h3>
            <h4 class="c-margin--top">見出しh4</h4>
            <h5 class="c-margin--top">見出しh5</h5>
            <h6 class="c-margin--top">見出しh6</h6>

            <figure class="c-margin--top p-article__cite">
              <blockquote>
                <p>Blockquote 引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ</p>
              </blockquote>
              <figcaption class="c-margin--top">出典元：<cite><a href="#" class="cite__link">◯◯◯◯◯◯◯◯◯◯</a></cite></figcaption>
            </figure>

            <img src="images/single_articleImg.jpg" alt="ハンバーガーセット" class="c-margin--top p-article__img">

            <figure class="c-margin--top p-figure -left">
              <div class="p-figure__img">
                <img src="images/single_article.jpg" alt="ハンバーガーセット">
              </div>
              <figcaption class="p-figure__caption">テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります</figcaption>
            </figure>
            
            <figure class="c-margin--top p-figure -right">
              <div class="p-figure__img">
                <img src="images/single_article.jpg" alt="ハンバーガーセット">
              </div>
              <figcaption class="p-figure__caption">テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります</figcaption>
            </figure>

            <img src="images/single_article.jpg" alt="ハンバーガーセット" class="c-margin--top p-article__img--center">

            <div class="c-margin--top p-article__gallery">
              <img src="images/single_article.jpg" alt="ハンバーガーセット">
              <img src="images/single_article.jpg" alt="ハンバーガーセット">
              <img src="images/single_article.jpg" alt="ハンバーガーセット">
              <img src="images/single_article.jpg" alt="ハンバーガーセット">
              <img src="images/single_article.jpg" alt="ハンバーガーセット">
              <img src="images/single_article.jpg" alt="ハンバーガーセット">
              <img src="images/single_article.jpg" alt="ハンバーガーセット">
              <img src="images/single_article.jpg" alt="ハンバーガーセット">
              <img src="images/single_article.jpg" alt="ハンバーガーセット">
            </div>

            <ol class="c-margin--top p-article__list -ordered">
              <li>リストリストリスト</li>
              <li>
                リストリストリスト
                <ol>
                  <li>リスト2リスト2リスト2</li>
                  <li>リスト2リスト2リスト2</li>
                </ol>
              </li>
              <li>リストリストリスト</li>
              <li>リストリストリスト</li>
            </ol>
           
            <ul class="c-margin--top p-article__list -unOrderd">
              <li>リストリストリスト</li>
              <li>
                リストリストリスト
                <ul>
                  <li>リスト2リスト2リスト2</li>
                  <li>リスト2リスト2リスト2</li>
                </ul>
              </li>
              <li>リストリストリスト</li>
              <li>リストリストリスト</li>
            </ul>

            <pre class="c-margin--top p-article__pre">
<code>&lt;html&gt;
  &lt;head&gt;
  &lt;/head&gt;
  &lt;body&gt;
  &lt;/body&gt;
&lt;/html&gt;</code></pre>

          <table class="c-margin--top p-article__table">
            <tbody>
              <tr>
                <td width="30%">テーブル</td>
                <td>テーブル</td>
              </tr>
              <tr>
                <td>テーブル</td>
                <td>テーブル</td>
              </tr>
              <tr>
                <td>テーブル</td>
                <td>テーブル</td>
              </tr>
              <tr>
                <td>テーブル</td>
                <td>テーブル</td>
              </tr>
              <tr>
                <td>テーブル</td>
                <td>テーブル</td>
              </tr>
            </tbody>
          </table>

          <button class="c-margin--top c-btn p-article__btn">ボタン</button>

          <p class="c-margin--top p-article__bold">boldboldboldboldboldboldbold</p> -->

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