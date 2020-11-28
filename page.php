<?php
/*
 * Page template file.
 */

  get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>
<main class="container mt-2" id="page-<?php the_ID(); ?>">
  <div class="row">
    <div class="col">
      <small class="text-uppercase text-muted">Updated: <?php the_modified_date("F jS, Y h:i a"); ?></small>
      <h1 class="text-break"><?php the_title(); ?></h1>
      <article><?php the_content(); ?></article>
    </div>
  </div>
</main>
<?php endwhile; ?>

<?php get_footer(); ?>