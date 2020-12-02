<?php
/*
 * Displays a list of posts.
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <div class="media">
    <?php if (has_post_thumbnail()) the_post_thumbnail("thumbnail", array("class" => "mr-3 rounded")); ?>
    <div class="media-body">
      <small class="text-uppercase text-muted"><?php the_date("F j, Y"); ?></small>
      <h2 class="mb-0">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </h2>
      <?php foreach (get_the_category() as $category) : ?>
        <a class="badge badge-secondary" href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->cat_name; ?></a>
      <?php endforeach; ?>
      <p><?php the_excerpt(); ?></p>
      <p class="mb-0"><a href="<?php the_permalink(); ?>">Continue reading...</a></p>
    </div>
  </div>
  <hr>
<?php endwhile; ?>