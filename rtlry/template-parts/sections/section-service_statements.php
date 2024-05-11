<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

?>

<!-- Service Statements Section Start -->
<section class="service_statements_section wrap_two_columns">
    <div class="container-fluid">
        <div class="container">
            <div class="row align-items-center mx-auto section_two_columns">

                <div class="col-lg-6 statements_image">
                    <?php if ( get_sub_field('image') ):?>
                        <?php $quick_order_image = get_sub_field('image');?>
                        <img src="<?php echo $quick_order_image;?>">
                    <?php endif; ?>
                </div>

                <div class="col-lg-6 statements_content <?php if ( get_sub_field('swap_blocks') == true ) { echo 'order-first'; } ?>">
                    <h2><?php the_sub_field('h2_header'); ?></h2>
                    <?php the_sub_field('content'); ?>
                    <?php if (get_sub_field('button_id')):?>
                        <a class="cta_btn" <?php if (get_sub_field('button_id')):?>id="<?php the_sub_field('button_id'); ?>"<?php endif;?> href="<?php the_sub_field('button_link'); ?>">
                            <?php the_sub_field('button_text'); ?>
                        </a>
                    <?php endif;?>
                </div>

            </div>
        </div>
    </div>

    <div class="container statements-icon">

        <h3 class="mx-auto"><?php the_sub_field('statements_icons_title'); ?></h3>

        <div class="row statements-item">
        <?php if( have_rows('statements') ): ?>
            <?php while( have_rows('statements') ) : the_row(); ?>
                <div class="col-xs-6 col-sm-4 col-lg-3">
                    <?php if ( get_sub_field('icon') ):?>
                        <?php $quick_order_image = get_sub_field('icon');?>
                        <img src="<?php echo $quick_order_image;?>">
                    <?php endif; ?>
                    <h4><?php the_sub_field('name'); ?></h4>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        </div>
    </div>
</section>
<!-- Service Statements Section End -->