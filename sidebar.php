<?php
/*
 * Sidebar template file.
 */
?>

<?php if ( is_active_sidebar( 'sidebar' ) ): ?>
<aside class='col-md-3'>
  <?php dynamic_sidebar( 'sidebar' ); ?>
</aside>
<?php endif; ?>