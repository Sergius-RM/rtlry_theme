<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

$number = get_sub_field( 'number_of_posts' );
$orderby = get_sub_field( 'order_by' );
$order = get_sub_field( 'sorting_order' );
$colnumber = get_sub_field('number_columns');

$project_posts = get_posts( array(
    'post_type'      => 'projects',
    'post_status'    => 'publish',
    'posts_per_page' => $number,
    'orderby'        => $orderby,
    'order'          => $order,
) );

?>

<!-- Review Area Start -->
<section class="projects_section">
<div class="container">

        <div class="projects_info text-center">
            <?php if( get_sub_field('subtitle') ): ?>
                <h6><?php the_sub_field('subtitle'); ?></h6>
            <?php endif; ?>

            <h2><?php the_sub_field('h2_header'); ?></h2>

            <?php if( get_sub_field('content') ): ?>
                <?php the_sub_field('content'); ?>
            <?php endif; ?>
        </div>

        <div class="row projects_list">

        <?php if ( $project_posts ): ?>
            <?php
            foreach ( $project_posts as $post ): setup_postdata($post); $thumb_src = null;
            $thumb_id = get_post_thumbnail_id();
            $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
            $thumbsrc = $thumb_url[0];
            ?>
                <div class="col-sm-12 col-md-<?php echo $colnumber;?>  mx-auto " >
                    <div class="project_item" style="background: url(<?php echo $thumbsrc; ?>) 50% 50% no-repeat;">
                        <div class="project_data">
                            <?php if( get_field('projects_title') ): ?>
                                <a href="<?php the_permalink() ?>">
                                    <h4><?php echo the_field('projects_title'); ?></h4>
                                </a>
                            <?php endif; ?>

                            <?php if( get_field('projects_excerpt') ): ?>
                                <h6><?php echo the_field('projects_excerpt'); ?></h6>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
        <?php wp_reset_query();?>
        </div>
    </div>

</section>
<!-- Review Area END  -->
