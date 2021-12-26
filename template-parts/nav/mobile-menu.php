<nav class="menu-mobile">
  <header>
    <?php if(has_custom_logo()) : ?>
      <?php the_custom_logo(); ?>
    <?php endif; ?>
  </header>
  <?php
    wp_nav_menu(
      array(
        'theme_location' => 'menu-1',
        'menu_id'        => 'primary-menu',
      )
    );
  ?>
</nav>

<div class="nav-modal"></div>