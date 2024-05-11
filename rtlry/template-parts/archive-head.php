<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

?>

<!-- Archive Hero Section Start -->
<section class="page_header_section" >
    <div class="banner_overlay"></div>
    <div class="page_header_container container-fluid" style="background-image: url('/wp-content/uploads/2023/02/headre_img_3.jpg'); background-size: cover;">
        <div class="container">
            <div class="row align-items-center">
            <div class=" col-sm-10 col-md-8 col-lg-6 mx-auto text-center center-area">
                <h1 class="hero_title mx-auto">
                    <?php single_cat_title();?>
                </h1>
                <span class="page_header_content d-block mx-auto">
                    <?php echo category_description();?>
                </span>
            </div>
        </div>
        </div>
    </div>
</section>
<!-- Archive Hero Section End -->
