<?php
/**
 * The template for displaying the header
 *
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

?>

<!DOCTYPE html>
<html
    <?php language_attributes(); ?>
    class="no-js"
>

    <head>

        <meta charset="<?php bloginfo('charset'); ?>">
        <?php $viewport_content = apply_filters('hello_elementor_viewport_content', 'width=device-width, initial-scale=1'); ?>
        <meta
            name="viewport"
            content="<?php echo esc_attr($viewport_content); ?>"
        >
        <!-- favicon here -->

        <link rel="profile" href="http://gmpg.org/xfn/11">
        <?php wp_head(); ?>

        <?php if (  get_field( 'google_analytics', 'option') ) :?>
            <?php $headcode = get_field('google_analytics', 'option');
                print $headcode;?>
        <?php endif ?>

        <?php if (is_single()):?>
            <style>
                .highlighted_articles h2 {
                    text-align: left;
                }
            </style>
        <?php endif;?>

        <?php if (is_archive() || is_page_template( 'template-blog.php' ) || is_page(45)):?>
            <style>
                .page_header_section {
                    margin-bottom: 0;
                }
            </style>
        <?php endif;?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>


    </head>

    <body <?php body_class();?>>

        <?php if (  get_field( 'google_analytics_body', 'option') ) :?>
            <?php $bodycode = get_field('google_analytics_body', 'option');
                print $bodycode; ?>
        <?php endif ?>

        <?php wp_body_open();
            get_template_part('template-parts/header');
        ?>
