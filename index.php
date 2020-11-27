<?php
/*
 * Base page.
 */

  get_header();
?>

<div class="row">
  <section class="col-9">
    <?php get_template_part( "template-parts/page/list-posts" ); ?>
  </section>
  <section class="col-3">
    <div class="card">
      <img class="img-fluid card-img-top" src="<?php echo get_template_directory_uri() . "/assets/img/bryce.jpg"; ?>" alt="Bryce">
      <div class="card-body">
        <h4 class="card-title">About the Author</h4>
        <p class="card-text">Bryce St. Pierre is a former software developer, amateur blogger, minimalist, and avid podcast listener.</p>
        <a href="#" class="btn btn-primary">Contact</a>
      </div>
    </div>
  </section>
</div>

<?php get_footer(); ?>