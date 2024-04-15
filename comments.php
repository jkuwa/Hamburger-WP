<div class="p-comment">
  <?php if ( have_comments() ): ?>
    <h2>Comment</h2>
    <ul class="p-comment__list">
      <?php wp_list_comments( 'avatar_size=60' ); ?>
    </ul>
    <?php paginate_comments_links(); ?>
  <?php endif; ?>
  <?php
    $args = array(
      'title_reply' => 'Leave a Reply',
      'label_submit' => 'POST COMMENT',
    );
    comment_form($args);
  ?>
</div>