<?php
/**
 * Template Name: Blog Post
 * Template Post Type: post
 * The template for displaying all single posts
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

<!-- start of the loop -->
<?php while ( have_posts() ) : the_post(); ?>

   <!-- Page Banner Start -->
   <section class="blog-banner single-projects-banner">
        <div class="container">
            <div class="row">
                <div class="col-12 mx-auto">
                    <?php if (get_field('blog_custom_thumbnail') ): ?>
                        <?php $custom_thumbnail = get_field('blog_custom_thumbnail');?>
                        <img src="<?php echo $custom_thumbnail;?>">
                    <?php elseif (has_post_thumbnail() ): ?>
                        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'image_full' ); ?>
                        <img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Banner End -->

    <!-- Blog Details Area Start -->
    <section class="blog-details-area single-projects-details">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-md-8 col-lg-8 mx-auto">

                    <div class="banner-inner">
                        <div class="content-writer">
                            <div class="post-meta">
                                <span class="posted-date">
                                    <span><?php the_field('projects_excerpt');?></span>
                                </span>
                            </div>
                        </div>

                        <?php if (get_field('projects_title') ): ?>
                            <h1 class="page-title"><?php the_field('projects_title');?></h1>
                        <?php else: ?>
                            <h1 class="page-title"><?php the_title(); ?></h1>
                        <?php endif; ?>
                    </div>

                    <div class="blog-details-content">
                        <?php the_field('projects_description');?>
                    </div>

                </div>
            </div>

        </div>

        <div class="container-fluid">
            <div class="row projects-gallery">
                <?php if( have_rows('images') ): ?>
                    <?php while( have_rows('images') ) : the_row(); ?>
                        <div class="col-sm-6 col-lg-4 mx-auto text-center image_item">
                            <?php if ( get_sub_field('img_item') ):?>
                                <?php $image_item = get_sub_field('img_item');?>
                                <img src="<?php echo $image_item;?>">
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <!-- Blog Details Area End -->

<?php endwhile; ?>
<!-- end of the loop -->

<!-- Blog Wigets Area Start -->
    <?php get_template_part('template-parts/blocks-blogs/section', 'related_projects'); ?>
<!-- Blog Wigets Area End -->

<?php get_footer();