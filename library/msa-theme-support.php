<?php
/**
 * Register theme support MSA, post-thumbnails.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

if ( ! function_exists( 'msa_theme_support') ) :
  function msa_theme_support() {
    add_image_size( 'post_grid', 340, 150, true );

    add_image_size( 'post_featured', 650, 160, true );
  }
  	add_action( 'after_setup_theme', 'msa_theme_support' );
endif;
