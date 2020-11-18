<?php
/*
 * Registers the customizer handling.
 */

function bsp_customize_register ( $wp_customize ) {

  $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';

  if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial(
      'blogname', 
      array(
        'selector'        => '.navbar-brand',
        'render_callback' => 'bsp_customize_partial_blogname'
      )
    );
  }
  
}
add_action( 'customize_register', 'bsp_customize_register' );

function brycestrap_customize_partial_blogname () {
  bloginfo( 'name' );
}

?>