<?php
/*
 * Base page.
 */

  get_header();
?>

<div class="container">
  <div class="row">
    <main class="col-md-9">
      <?php get_template_part( "template-parts/page/list-posts" ); ?>
    </main>
    <?php get_sidebar(); ?>
  </div>
</div>

<?php get_footer(); ?>