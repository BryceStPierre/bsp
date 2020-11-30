<?php
/*
 * Displays a list of posts.
 */
?>

<ul class="list-unstyled">
<?php while ( have_posts() ) : the_post(); ?>
  <li>
    <small class="text-uppercase text-muted"><?php the_date( "F j, Y" ); ?></small>
    <h2 class="display-6 mb-0">
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h2>
  <?php foreach( get_the_category() as $category ): ?>
    <a class="badge badge-secondary" href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->cat_name; ?></a>
  <?php endforeach; ?>
    <!-- <br> -->
    <!-- <?php //if ( has_post_thumbnail() ) the_post_thumbnail( "medium", array( "class" => "mt-3 rounded" ) ); ?> -->
    <p><?php the_excerpt(); ?></p>
    <p><a href="<?php the_permalink(); ?>">Continue reading...</a></p>
    <hr>
  </li>
<?php endwhile; ?>
</ul>