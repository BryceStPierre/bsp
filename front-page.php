<?php
/*
 * Front page template file.
 */

  get_header();
?>

<div class="container">
  <div class="row">
    <main class="col-md-8">
      <hr class="mt-0">
      <?php get_template_part("template-parts/page/list-posts"); ?>
      <p class="text-center">
        <?php get_template_part("template-parts/page/paginate-links"); ?>
      </p>
    </main>
    <aside class="col-md-4">
      <?php dynamic_sidebar("home-sidebar"); ?>
    </aside>
  </div>
</div>

<?php get_footer(); ?>