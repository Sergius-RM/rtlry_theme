<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

?>

<!-- Awards Section Start -->
<section class="awards_section">
    <div class="container-fluid">
        <div class="container text-center">
            <h2 class="mx-auto"><?php the_sub_field('h2_header'); ?></h2>
            <div class="mx-auto awards_content"><?php the_sub_field('content'); ?></div>

            <ul class="row awards-list">
            <?php if( have_rows('awards_list') ): ?>
                <?php while( have_rows('awards_list') ) : the_row(); ?>
                    <?php if (get_sub_field('awards_link')): ?>
                    <li class="d-flex align-items-center">
                        <img src="/wp-content/themes/rtlry/assets/images/icons/Medal.svg">
                        <a href="<?php the_sub_field('awards_link'); ?>" target="_blank">
                            <h4><?php the_sub_field('awards_iten'); ?></h4>
                        </a>
                    </li>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
            </ul>
        </div>
    </div>
</section>
<!-- Awards Section End -->