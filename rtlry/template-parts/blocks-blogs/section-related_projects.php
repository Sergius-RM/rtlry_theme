<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

$categories = get_the_category($post->ID);
$category_ids = array();
foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
$args=array(
    'post_type'         => 'projects',
    'posts_per_page'    => 3,
    'post__not_in'      => array( get_the_ID() ),
    'no_found_rows'     => true,
    'orderby'           => 'rand',
);
?>

<!-- Related Projects Area Start -->
<section class="highlighted_articles related_projects_section mt-100 mb-100 pb-10 rpb-25">
    <div class="container">
        <div class="section-title mb-60">
            <h2>Muut projektit</h2>
        </div>
        <div class="row justify-content-center">
            <?php $wpex_query = new WP_Query( $args );
            foreach( $wpex_query->posts as $post ) : setup_postdata( $post ); ?>
            <div class="col-sm-6 col-md-6 col-xl-4" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="articles-item style-two wow fadeInUp delay-0-2s">
                    <div class="image">
                        <?php if (has_post_thumbnail( $post->ID ) ): ?>
                            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'image_full' ); ?>
                            <img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
                        <?php else: ?>
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/post_thumbnail.png" alt="<?php the_title(); ?>" />
                        <?php endif; ?>
                    </div>

                    <div class="articles-content">
                        <h4><a href="<?php the_permalink(); ?>"><?php echo substr(strip_tags(get_the_title()), 0, 60); ?></a></h4>

                        <p><?php the_field('projects_excerpt');?></p>

                        <a href="<?php the_permalink(); ?>" class="learn-more"><?php esc_html_e('Lue lisää'); ?> <i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>
            <?php
            endforeach;
            wp_reset_postdata(); ?>
        </div>
    </div>
</div>
</section>
<!-- Related Projects Area END  -->
