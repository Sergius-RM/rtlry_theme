<?php
/**
 * The template for displaying header.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$site_name = get_bloginfo( 'name' );
$tagline   = get_bloginfo( 'description', 'display' );
?>

<!-- Start main Header -->
<header class="header_area full-width" role="banner">
    <!--Header-Upper-->
    <div class="site-header">
        <div class="site-branding d-flex">

            <div class="navbar-brandlogo_area no_mobile">
                <span class="header-logo-darkmode">
                    <?php the_custom_logo();?>
                </span>
            </div>

            <!-- Contacts Info Area Start -->
            <div class="header_contacts d-flex align-items-start">
                <?php if (have_rows('physical_adress', 'option')) {
                    while (have_rows('physical_adress', 'option')) {
                        the_row(); ?>
                            <div class="physical_adress d-flex">
                                <i class="bi bi-geo-alt-fill"></i>
                                <?php the_sub_field('short_physical_adress');?></div>
                    <?php } ?>
                <?php } ?>

                <?php if (have_rows('topbaremails', 'option')) { ?>
                    <?php while (have_rows('topbaremails', 'option')) {
                        the_row(); ?>
                            <a class="email_adress d-flex" href="<?php the_sub_field('top_bar_email_link');?>" target="_blank">
                                <i class="bi bi-envelope-fill"></i> <?php the_sub_field('top_bar_email');?></a>
                    <?php } ?>
                <?php } ?>
            </div>

        </div>
        <hr>
        <div class="sub_header d-flex align-items-center">
            <div class="nav_area">
                <!-- Main Menu -->
                <nav class="site-navigation">
                    <div class="no_mobile" role="navigation">
                        <?php wp_nav_menu( array( 'theme_location' => 'menu-1' ) ); ?>
                    </div>
                </nav>
                <!-- Main Menu End-->

                <!-- Mobile Menu -->
                <div class="navbar <?php print $navbar_style;?> is_onmobile">
                    <span class="navbar-brandlogo_area">
                        <span class="header-logo-darkmode">
                            <?php the_custom_logo();?>
                        </span>
                    </span>
                    <div class="collapse mob_menu" id="navbarToggleExternalContent">
                        <div class="text-center" role="navigation">
                            <?php wp_nav_menu( array( 'theme_location' => 'menu-1' ) ); ?>
                        </div>
                    </div>

                    <button class="navbar-toggler is_onmobile" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <!-- Mobole Menu End-->
            </div>
            <div class="search">
                <?php get_search_form();?>
            </div>
        </div>
    </div>
    <!--End Header Upper-->
</header>
