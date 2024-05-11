<?php
/**
 * The template for displaying footer.
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

$copyright = get_field('footer_copyright', 'option');

?>

<!-- Footer Area Start -->
<footer id="site-footer" class="site-footer" role="contentinfo">
    <div class="container-fluid">
        <div class="row">

            <!-- Branding Area Start -->
            <div class="col-sm-12 col-md-4 col-xl-3 site-branding">

                    <?php
                    $header_logo = get_theme_mod('header_logo');
                    $img = wp_get_attachment_image_src($header_logo, 'full');
                    if ($img) :
                        ?>
                        <img src="<?php echo $img[0]; ?>" alt="">
                    <?php endif; ?>

            </div>
            <!-- END Branding Area -->

            <!-- Footer Nav Area Start -->
            <div class="col-sm-12 col-md-4 col-xl-3 footer_nav" role="navigation">
                <?php wp_nav_menu( array( 'theme_location' => 'footer-1' ) ); ?>
            </div>
            <!-- Footer Nav Area -->

            <!-- Contacts Info Area Start -->
            <div class="col-sm-12 col-md-4 col-xl-3 footer_contacts">

                <?php if (have_rows('topbaremails', 'option')) { ?>
                    <?php while (have_rows('topbaremails', 'option')) {
                        the_row(); ?>
                            <a class="d-flex" href="<?php the_sub_field('top_bar_email_link');?>" target="_blank">
                                <i class="bi bi-envelope-fill"></i> <?php the_sub_field('top_bar_email');?></a>
                    <?php } ?>
                <?php } ?>

                <?php if (have_rows('topbarphones', 'option')) { ?>
                    <?php while (have_rows('topbarphones', 'option')) {
                        the_row(); ?>
                            <a href="<?php the_sub_field('top_bar_phone_link');?>" target="_blank">
                                <i class="bi bi-telephone-fill"></i><?php the_sub_field('top_bar_phone');?></a>
                    <?php } ?>
                <?php } ?>

                <?php if (have_rows('physical_adress', 'option')) {
                    while (have_rows('physical_adress', 'option')) {
                        the_row(); ?>
                            <div class="physical_adress"><i class="bi bi-geo-alt-fill"></i> <?php the_sub_field('short_physical_adress');?></div>
                            <!-- <?php the_sub_field('googlemaps_code');?> -->
                    <?php } ?>
                <?php } ?>
            </div>
            <!-- END Contacts Info Area -->

        </div>
    </div>

</footer>
 <!-- Footer Area End -->

<!-- START Copyright Area -->
<div class="container-fluid footer_copyright">
    <div class="row align-items-center">
        <div class="col-sm-12 col-xl-6">
            <?php echo $copyright;?>
        </div>
    </div>
</div>
<!-- END Copyright Area -->