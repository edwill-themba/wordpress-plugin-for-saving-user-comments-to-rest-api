<?php 

/**
 * This is the entry point the plugin 
 * and create the save comments form
 */
function create_save_comment_form()
{
    $htmlForm = '';
    $htmlForm .= '<form class="comment-form">';
    $htmlForm .= '<h1>Enter Your Comment</h1>';
    $htmlForm .= '<div class="form-input">';
    $htmlForm .= '<input type="text" class="author" name="author" placeholder="Enter your name">';
    $htmlForm .= '<div>';
    $htmlForm .= '<div class="form-input">';
    $htmlForm .= '<textarea class="comment" name="comment" placeholder="Please leave you comment">';
    $htmlForm .= '</textarea>';
    $htmlForm .= '<div>';
    $htmlForm .= '<div class="form-input">';
    $htmlForm .= '<button type="button" class="btn-submit">save your comment</button>';
    $htmlForm .= '<div>';
    $htmlForm .= '</form>';
    $htmlForm .= '<p class="message"></p>';
    return $htmlForm;
}
add_shortcode('wp_edwill_save_comment', 'create_save_comment_form');




