<?php
/*
 * Page not found (or 404) template file.
 */

  get_header();
?>

<main class="container">
  <div class="row mt-2">
    <div class="col">
      <h1 class="display-6 text-break">Sorry, that page couldn't be found.</h1>
      <p>Go <a href="<?php bloginfo("url"); ?>">home</a>, or try searching for it:</p>
    </div>
  </div>
  <div class="row justify-content-center mb-4">
    <div class="col-md-6"><?php get_search_form(); ?></div>
  </div>
</main>

<?php get_footer(); ?>