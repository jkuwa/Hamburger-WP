    <aside class="p-nav l-sideBar">
      <div class="p-nav__mask js-navMask"></div>
      <nav class="p-menu l-menu js-menu">
        <button class="p-menu__btn js-closeBtn">
          <span class="screen-reader-text"><?php _e('close', 'hamburger'); ?></span>
        </button>

        <?php
          if ( is_active_sidebar('menu_widget') ):
            dynamic_sidebar('menu_widget');
          else:
        ?>

        <div class="widget">
          <h2>No Widget</h2>
          <p><?php _e('No widgets configured.', 'hamburger'); ?></p>
        </div>
        
        <?php endif; ?>

      </nav>
    </aside>
  </div>