<?php 

/**
 * loads plugin stylesheet
 */
function wp_edwill_post_comments_style()
{
  // registers and enqueue custom plugin style
  wp_register_style('comment-custom', plugins_url() . '/wp-edwill-post-comments/css/custom.css');
  wp_enqueue_style('comment-custom');
}
add_action('wp_enqueue_scripts', 'wp_edwill_post_comments_style');

/**
 * loads plugin script
 */
function wp_edwill_post_comments_script()
{
  // enqueue main js
  wp_enqueue_script('comment-main', plugins_url() . '/wp-edwill-post-comments/js/main.js');
}
add_action('wp_footer', 'wp_edwill_post_comments_script');
