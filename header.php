<?php
/*
 * Theme header.
 */
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <?php wp_head(); ?>
</head>
<body>
  <header>
    <?php get_template_part( "template-parts/header/navigation" ); ?>
  </header>
  <main class="container">
