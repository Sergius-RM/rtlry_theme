<?php
// Register Team Post Type
function create_team_post_type() {
    $labels = array(
      'name' => __( 'Team' ),
      'singular_name' => __( 'Team' ),
      'add_new' => __( 'New Member' ),
      'add_new_item' => __( 'Add New Member' ),
      'edit_item' => __( 'Edit Employee' ),
      'new_item' => __( 'New Member' ),
      'view_item' => __( 'View Member' ),
      'search_items' => __( 'Search teammate' ),
      'not_found' =>  __( 'No teammate Found' ),
      'not_found_in_trash' => __( 'No teammate found in Trash' ),
      );
    $args = array(
      'labels' => $labels,
      'has_archive' => true,
      'public' => true,
      'hierarchical' => false,
      'menu_position' => 5,
      'menu_icon' => 'dashicons-cart',
      'show_ui'             => true,
      'show_in_menu'        => true,
      'show_in_nav_menus'   => true,
      'show_in_admin_bar'   => true,
      'menu_icon'           => 'dashicons-groups',
      'can_export'          => true,
      'exclude_from_search' => false,
      'publicly_queryable'  => true,
      'capability_type'     => 'page',
      'supports' => array(
        'title',
        'excerpt',
        'custom-fields',
        'thumbnail',
        'trackbacks',
        'comments',
        'author',
        'page-attributes'
        ),
      );
    register_post_type( 'team', $args );
  }
  add_action( 'init', 'create_team_post_type' );

  function team_register_taxonomy() {
    register_taxonomy( 'team_category', 'team',
      array(
        'labels' => array(
          'name'              => 'Member Departments',
          'singular_name'     => 'Member Department',
          'search_items'      => 'Search Member Departments',
          'all_items'         => 'All Member Departments',
          'edit_item'         => 'Edit Member Departments',
          'update_item'       => 'Update Member Department',
          'add_new_item'      => 'Add New Member Department',
          'new_item_name'     => 'New Member Department Name',
          'menu_name'         => 'Member Department',
          ),
        'hierarchical' => true,
        'sort' => true,
        'args' => array( 'orderby' => 'term_order' ),
        'show_admin_column' => true
        )
      );
  }
  add_action( 'init', 'team_register_taxonomy' );

      /**
     * Post Type: Reviews.
     */

    $labels = [
      'name' => __( 'Reviews' ),
      'singular_name' => __( 'Review' ),
      'add_new' => __( 'New Review' ),
      'add_new_item' => __( 'Add New Review' ),
      'edit_item' => __( 'Edit Review' ),
      'new_item' => __( 'New Review' ),
      'view_item' => __( 'View Review' ),
      'search_items' => __( 'Search review' ),
      'not_found' =>  __( 'No review Found' ),
      'not_found_in_trash' => __( 'No review found in Trash' ),
  ];

  $args = [
      "label" => __( "reviews"),
      "labels" => $labels,
      "description" => "Company review",
      "public" => true,
      "publicly_queryable" => true,
      "show_ui" => true,
      "show_in_rest" => true,
      "rest_base" => "",
      "rest_controller_class" => "WP_REST_Posts_Controller",
      "has_archive" => false,
      "show_in_menu" => true,
      "show_in_nav_menus" => true,
      "delete_with_user" => false,
      "exclude_from_search" => false,
      "capability_type" => "post",
      "map_meta_cap" => true,
      "hierarchical" => false,
      "rewrite" => [ "slug" => "reviews", "with_front" => true ],
      "query_var" => true,
      "menu_position" => 5,
      "menu_icon" => "dashicons-awards",
      "supports" => [ "title", "thumbnail", "excerpt", "trackbacks", "custom-fields", "author", "page-attributes", "post-formats" ],
      "taxonomies" => [ "category", "post_tag" ],
      "show_in_graphql" => false,
  ];

  register_post_type( "reviews", $args );

       /**
     * Post Type: Projects.
     */

    $labels = [
      'name' => __( 'Projects' ),
      'singular_name' => __( 'Project' ),
      'add_new' => __( 'New Project' ),
      'add_new_item' => __( 'Add New Project' ),
      'edit_item' => __( 'Edit Project' ),
      'new_item' => __( 'New Project' ),
      'view_item' => __( 'View Project' ),
      'search_items' => __( 'Search project' ),
      'not_found' =>  __( 'No projects Found' ),
      'not_found_in_trash' => __( 'No project found in Trash' ),
  ];

  $args = [
      "label" => __( "projects"),
      "labels" => $labels,
      "description" => "Company projects",
      "public" => true,
      "publicly_queryable" => true,
      "show_ui" => true,
      "show_in_rest" => true,
      "rest_base" => "",
      "rest_controller_class" => "WP_REST_Posts_Controller",
      "has_archive" => false,
      "show_in_menu" => true,
      "show_in_nav_menus" => true,
      "delete_with_user" => false,
      "exclude_from_search" => false,
      "capability_type" => "post",
      "map_meta_cap" => true,
      "hierarchical" => false,
      "rewrite" => [ "slug" => "projects", "with_front" => true ],
      "query_var" => true,
      "menu_position" => 5,
      "menu_icon" => "dashicons-format-gallery",
      "supports" => [ "title", "thumbnail", "excerpt", "trackbacks", "custom-fields", "author", "page-attributes", "post-formats" ],
      "taxonomies" => [ "category", "post_tag" ],
      "show_in_graphql" => false,
  ];

  register_post_type( "projects", $args );