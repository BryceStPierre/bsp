<?php
/*
 * Displays the links for paginated posts.
 */

  echo paginate_links( array (
    'prev_text'           => '<span class="btn btn-dark"><i class="fas fa-chevron-left"></i>&ensp;Previous</span>',
    'next_text'           => '<span class="btn btn-dark">Next&ensp;<i class="fas fa-chevron-right"></i></span>',
    'before_page_number'  => '<span class="btn btn-dark">',
    'after_page_number'   => '</span>'
  ) );
?>