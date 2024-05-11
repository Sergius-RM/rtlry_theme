<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

?>

<!-- Pricing Section Start -->
<section class="pricing_section">
    <div class="container">
        <div class="row align-items-center mx-auto">

            <?php if( have_rows('pricing_loop') ): ?>
                <?php while( have_rows('pricing_loop') ) : the_row(); ?>
                    <div class="col-sm-6 col-md-4 col-lg-4 mx-auto">
                        <div class="pricing_item">
                            <div class="pricing_info text-center">
                                <h2><?php the_sub_field('name'); ?></h2>
                                <?php the_sub_field('content'); ?>
                            </div>

                            <hr>

                            <?php if( have_rows('pricelist') ): ?>
                                <?php while( have_rows('pricelist') ) : the_row(); ?>
                                    <div class="pricelist_item">
                                        <h4><?php the_sub_field('service'); ?></h4>
                                        <div class="price">
                                            <?php the_sub_field('price'); ?> <i class="bi bi-<?php the_sub_field('currency'); ?>"></i>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>

                            <?php if (get_sub_field('button_link')):?>
                                <a class="cta_btn" <?php if (get_sub_field('button_id')):?>id="<?php the_sub_field('button_id'); ?>"<?php endif;?> href="<?php the_sub_field('button_link'); ?>">
                                    <?php the_sub_field('button_text'); ?>
                                </a>
                            <?php endif;?>

                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </div>

</section>
<!-- Pricing Statements Section End -->