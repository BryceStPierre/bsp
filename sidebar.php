<?php
/*
 * Sidebar template file.
 */
?>

<?php 
  if ( is_active_sidebar( "sidebar" ) ) 
    dynamic_sidebar( "sidebar" );
?>