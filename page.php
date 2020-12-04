<?php
/*
 * Page template file.
 */

  get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>
<main <?php post_class("container mt-2"); ?>>
  <div class="row">
    <div class="col">
      <small class="text-uppercase text-muted text-center d-block"><?php the_modified_date("F j, Y h:i a"); ?></small>
      <h1 class="text-break text-center"><?php the_title(); ?></h1>
      <article><?php the_content(); ?></article>
    </div>
  </div>
</main>
<?php endwhile; ?>

<?php get_footer(); ?>