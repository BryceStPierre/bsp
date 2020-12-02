<?php
/*
 * Single post template file.
 */

  get_header();
?>

<?php while (have_posts()) : the_post(); ?>
<main id="post-<?php the_ID(); ?>" <?php post_class("container"); ?>>
  <section class="row">
    <div class="col">
      <small class="text-uppercase text-muted text-center d-block"><?php the_modified_date("F j, Y h:i a"); ?></small>
      <h1 class="text-break text-center mb-0"><?php the_title(); ?></h1>
      <p class="text-center font-italic mb-0">By <?php the_author(); ?></p>
      <span class="d-block text-center mb-3">
        <?php foreach( get_the_category() as $category ): ?>
          <a class="badge badge-secondary" href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->cat_name; ?></a>
        <?php endforeach; ?>
      </span>
    </div>
  </section>

  <section class="row justify-content-center">
    <div class="col-md-8 mb-3">
      <?php get_template_part("template-parts/post/featured-image"); ?>
    </div>
  </section>

  <article class="row">
    <div class="col">
      <?php the_content(); ?>
    </div>
  </article>

  <?php if ( has_tag() ) : ?>
  <i><?php the_tags(); ?></i>
  <?php endif; ?>

  <section class="row mt-3 mb-3">
    <div class="col">
      <div class="float-left"><?php previous_post_link('<i class="fas fa-chevron-left text-dark"></i>&ensp;%link'); ?></div>
      <div class="float-right"><?php next_post_link('%link&ensp;<i class="fas fa-chevron-right text-dark"></i>'); ?></div>
    </div>
  </section>
</main>
<?php endwhile; ?>

<?php get_footer(); ?>