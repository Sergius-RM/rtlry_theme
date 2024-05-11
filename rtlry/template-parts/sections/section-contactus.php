<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

?>

<!-- Contact US Section Start -->
<section class="contactus_section wrap_two_columns">
    <div class="banner_overlay"></div>
    <div class="container">
        <div class="row align-items-center mx-auto section_two_columns">

            <div class="col-sm-12 col-md-8 col-lg-6 contactus_content">
                <div class="about-content">
                    <h4 class="sub-title"><?php the_sub_field('contactus_subtitle_h4'); ?></h4>
                    <h2><?php the_sub_field('contactus_title_h2'); ?></h2>
                    <p><?php the_sub_field('contactus_content_area'); ?></p>
                    <?php if( have_rows('contacts_contacts_info') ): ?>
                        <ul>
                        <?php while( have_rows('contacts_contacts_info') ) : the_row(); ?>
                            <li>
                                <a target="_blank" href="<?php the_sub_field('url'); ?>">
                                    <i class="bi bi-<?php the_sub_field('icon'); ?>"></i> <?php the_sub_field('contact'); ?>
                                </a>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Contact US Section End -->