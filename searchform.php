<form class="p-header__search" method="get" action="<?php echo home_url('/'); ?>">
  <div class="p-searchBox">
    <input type="search" class="c-input p-searchBox__input" name="s" id="s" value="<?php the_search_query(); ?>"><button type="submit" class="c-btn p-searchBox__btn">検索</button>
  </div>
</form>