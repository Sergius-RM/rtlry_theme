<?php
// https://codex.wordpress.org/Function_Reference

/* Disabling XML-RPC */
add_filter('xmlrpc_enabled', '__return_false');

/**
 * Configuring Advanced Custom Fields
 */
require get_template_directory() . '/inc/acf.php';

/**
 * Connecting Menus and Widgets
 */
require get_template_directory() . '/inc/actions.php';

/**
 * Connecting scripts and styles
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Setting up and duplicating posts/pages
 */
require get_template_directory() .'/inc/post.php';

/**
 * Custom Post Type
 */
require get_template_directory() .'/inc/custom_post_type.php';

/**
 * Media.
 */
require get_template_directory() .'/inc/media.php';

/**
 * Pagination.
 */
require get_template_directory() . '/inc/pagination.php';

/**
 * Woocomerce
 */
require get_template_directory() .'/inc/woo.php';

/**
 * Additions
 */
require get_template_directory() .'/inc/additions.php';
