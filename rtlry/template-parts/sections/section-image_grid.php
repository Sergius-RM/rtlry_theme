<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

?>

<!-- Image Grid Area Start -->
<section class="image_grid_section">
    <div class="container">
        <div class="section-title">
            <?php if( get_sub_field('h2_header') ): ?>
                <h2><?php echo get_sub_field('h2_header'); ?></h2>
            <?php endif; ?>
        </div>

        <div class="row image_list">
            <?php if( have_rows('images_grid') ): ?>
                <?php while( have_rows('images_grid') ) : the_row(); ?>
                    <div class="col-12 col-sm-6 col-lg-4 text-center image_item">
                        <?php if ( get_sub_field('image_item') ):?>
                            <?php $image_item = get_sub_field('image_item');?>
                            <?php if ( get_sub_field('image_url') ):?>
                                <a href="<?php echo get_sub_field('image_url');?>"><?php endif; ?>
                                    <img src="<?php echo $image_item;?>">
                            <?php if ( get_sub_field('image_url') ):?>
                                </a><?php endif; ?>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
</section>
<!-- Image Grid Area END  -->
