<?php
/*
 * Displays navigation for theme header.
 */
?>

<nav class="navbar navbar-expand-lg">
  <div class="container">
  <?php if ( has_custom_logo() ): the_custom_logo(); ?>
  <?php else: ?>
    <a class="navbar-brand" href="<?php bloginfo( "url" ); ?>"><?php bloginfo( "name" ); ?></a>
  <?php endif; ?>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <img class="navbar-toggler-icon" src="<?php echo get_template_directory_uri() . "/assets/icons/hamburger.svg"; ?>">
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <?php 
      if ( has_nav_menu( "main-menu" ) ): 
        $locations = get_nav_menu_locations();
        $menu = get_term( $locations["main-menu"], "nav_menu" );
        $menu_items = wp_get_nav_menu_items( $menu->term_id );
    ?>
      <ul class="navbar-nav ml-auto">
      <?php 
        foreach( $menu_items as $menu_item ):
          if ( $menu_item->menu_item_parent == 0 ):
            $parent = $menu_item->ID;
            $menu_array = array();

            foreach ( $menu_items as $submenu ) {
              if ( $submenu->menu_item_parent == $parent ) {
                $bool = true;
                $menu_array[] = '<a class="dropdown-item" href="' . $submenu->url . '">' . $submenu->title . '</a>';
              }
            }
            if ( $bool == true && count( $menu_array ) > 0 ):
      ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="<?php echo $menu_item->url; ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo $menu_item->title; ?>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php echo implode( "", $menu_array ); ?>
            </div>
          <?php else: ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $menu_item->url; ?>">
            <?php echo $menu_item->title; ?>
            </a>
          <?php endif; ?>
        <?php endif; ?>
        </li>
      <?php endforeach; ?>
      </ul>
    <?php endif; ?>
    </div>
  </div>
</nav>