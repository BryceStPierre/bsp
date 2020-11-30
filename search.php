<?php
/*
 * Search results page template file.
 */

  get_header();
?>

<div class="container">
  <div class="row">
    <div class="col-md-8">
      <h4><?php printf( 'Search: "%s"', get_search_query() ); ?></h4>
    </div>
    <div class="col-md-4">
      <?php get_search_form(); ?>
    </div>
  </div>

  <div class="row">
    <div class="col">
    <?php if ( !have_posts() ) : ?>
      <p>Oops! Nothing was found. Try a different search.</p>
      <a class="btn btn-dark" href="<?php bloginfo( "url" ); ?>">Home</a>
    <?php else : ?>
      <?php get_template_part( "template-parts/page/list-posts" ); ?>
      <p class="text-center">
        <?php get_template_part( "template-parts/page/paginate-links" ); ?>
      </p>
    <?php endif; ?>

    </div>
  </div>
</div>



<?php get_footer(); ?>