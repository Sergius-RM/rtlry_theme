<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

?>

<!-- Contact US Section Start -->
<section class="contact_wiget_section">
    <div class="container">
        <div class="row align-items-center mx-auto">

            <div class="col-md-12 mx-auto text-center center-area contactus_content">

            <h2><?php the_sub_field('contactus_title_h2'); ?></h2>

                <div class="row">
                    <?php if( have_rows('contacts_wiget_info') ): ?>
                        <?php while( have_rows('contacts_wiget_info') ) : the_row(); ?>
                            <div class="col-12 col-sm-6 col-md-4 mx-auto contact_wiget_item">
                                <img src="<?php the_sub_field('icon'); ?>">
                                <h4><?php the_sub_field('title'); ?></h4>
                                <p><?php the_sub_field('text'); ?></p>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </div>

    <div class="container-fluid contact_wiget_gmap">
        <?php the_sub_field('contact_gmap'); ?>
    </div>
</section>
<!-- Contact US Section End -->