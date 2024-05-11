<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

$number = get_sub_field( 'number_of_posts' );
$orderby = get_sub_field( 'order_by' );
$order = get_sub_field( 'sorting_order' );

$review_posts = get_posts( array(
    'post_type'      => 'reviews',
    'post_status'    => 'publish',
    'posts_per_page' => $number,
    'orderby'        => $orderby,
    'order'          => $order,
) );

?>

<!-- Review Area Start -->
<section class="reviews_section">
<div class="container">

        <div class="reviews_info text-center">
            <?php if( get_sub_field('subtitle') ): ?>
                <h6><?php the_sub_field('subtitle'); ?></h6>
            <?php endif; ?>

            <h2><?php the_sub_field('h2_header'); ?></h2>

            <?php if( get_sub_field('content') ): ?>
                <?php the_sub_field('content'); ?>
            <?php endif; ?>
        </div>

        <div class="row align-items-center mx-auto slider review_list">

        <?php if ( $review_posts ): ?>
            <?php
            foreach ( $review_posts as $post ): setup_postdata($post); $thumb_src = null;
            if ( has_post_thumbnail($post->ID) ) {
                $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ));
                $thumb_src = $src[0]; }
            ?>
                <div class="member-item mx-auto">
                    <div class="review_item">
                        <div class="reporter_data d-flex">
                            <div class="image">
                                <?php if ( $thumb_src ): ?>
                                    <img src="<?php echo $thumb_src; ?>" alt="<?php the_title(); ?>, <?php the_field('review_job_title'); ?>">
                                <?php endif; ?>
                            </div>
                            <div class="member-designation">

                                <?php if( get_field('review_first_name') ): ?>
                                    <h4><?php echo the_field('review_first_name'); ?> <?php echo the_field('review_last_name'); ?></h4>
                                <?php endif; ?>

                                <?php if( get_field('review_job_title') ): ?>
                                    <span><?php echo the_field('review_job_title'); ?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="review_text">
                            <?php if( get_field('review_text') ): ?>
                                <?php echo the_field('review_text'); ?>
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
