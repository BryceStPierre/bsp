<?php
/*
 * Displays the featured image for the page or post.
 */
?>

<?php
  if (has_post_thumbnail())
    the_post_thumbnail("full", array("class" => "img-fluid"));
?>