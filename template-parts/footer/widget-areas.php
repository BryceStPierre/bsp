<?php
/*
 * Displays footer widget areas.
 */
?>

<?php if ( is_active_sidebar( "footer" ) ): ?>
  <div class="col mb-4">
    <?php dynamic_sidebar( "footer" ); ?>
  </div>
<?php endif; ?>

<?php if ( is_active_sidebar( "footer-2" ) ): ?>
  <div class="col mb-4">
    <?php dynamic_sidebar( "footer-2" ); ?>
  </div>
<?php endif; ?>

<?php if ( is_active_sidebar( "footer-3" ) ): ?>
  <div class="col mb-4">
    <?php dynamic_sidebar( "footer-3" ); ?>
  </div>
<?php endif; ?>