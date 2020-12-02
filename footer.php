<?php
/*
 * Theme footer.
 */
?>

<footer class="container">
  <?php if (is_active_sidebar("footer")) : ?>
  <div class="row justify-content-center bg-dark">
    <div class="col-md-6 mt-4 mb-4">
      <?php dynamic_sidebar("footer"); ?>
    </div>
  </div>
  <?php endif; ?>
  
  <div class="row">
    <div class="col">
      <p class="text-center mt-3 mb-2">Copyright &copy; <?php echo date("Y"); ?> <a href="<?php bloginfo("url"); ?>"><?php bloginfo("name"); ?></a>.</p>
      <p class="text-center">Made with <i class="fas fa-heart"></i> in Windsor.</p>
    </div>
  </div>
</footer>
  
<?php wp_footer(); ?>

</body>
</html>