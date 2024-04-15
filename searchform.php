<form class="p-header__search" method="get" action="<?php echo esc_url( home_url('/') ); ?>">
  <div class="p-searchBox">
    <label class="screen-reader-text" for="s"><?php _e('search', 'hamburger'); ?></label>
    <input type="search" class="c-input p-searchBox__input" name="s" id="s" value="<?php the_search_query(); ?>"><button type="submit" class="c-btn p-searchBox__btn"><?php _e('search', 'hamburger'); ?></button>
  </div>
</form>