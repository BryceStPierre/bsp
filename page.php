<?php
/*
 * Page template file.
 */

  get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>
<article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>

  <section class="row">
    <div class="col">
      <h2 class="text-break"><?php the_title(); ?></h2>
    </div>
  </section>

  <section class="row">
    <div class="col">
      <?php the_content(); ?>
    </div>
  </section>
  
</article>
<?php endwhile; ?>

<?php get_footer(); ?>