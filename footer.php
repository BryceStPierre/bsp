<?php
/*
 * Theme footer.
 */
?>

<footer class="container">
  <hr>
  <div class="row">
    <?php get_template_part( "template-parts/footer/widget-areas" ); ?>
  </div>
  <div class="row">
    <div class="col">
      <?php get_template_part( "template-parts/footer/copyright" ); ?>
    </div>
  </div>
</footer>
  
<?php wp_footer(); ?>

</body>
</html>