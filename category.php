<?php
/*
 * Category template file.
 */

  get_header();
?>

<div class="container">
  <div class="row">
    <main class="col-md-8">
      <hr class="mt-0">
      <h1 class="display-6 mb-0 font-italic"><?php single_cat_title(); ?></h1>
      <hr>
      <?php get_template_part( "template-parts/page/list-posts" ); ?>
      <p class='text-center'>
        <?php get_template_part( 'template-parts/page/paginate-links' ); ?>
      </p>
    </main>
    <aside class='col-md-4'>
      <?php get_sidebar(); ?>
    </aside>
  </div>
</div>

<?php get_footer(); ?>