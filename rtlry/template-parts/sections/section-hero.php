<?php
$image = get_sub_field('hero_img');
$right_image = get_sub_field('hero_top_icon');
?>

<!-- Hero Section Start -->
<section class="hero-section" >
    <div class="hero-container container-fluid" style="<?php if (get_sub_field( 'hero_img')): ?>background-image: url('<?php echo esc_url($image['url']); ?>');<?php endif;?>">
        <div class="container">
            <div class="row align-items-center">
            <div class=" col-sm-10 col-md-8 col-lg-6 center-area">
                <h1 class="hero_title mx-auto">
                    <?php echo get_sub_field('header_title');?>
                </h1>
                <?php if (get_sub_field( 'content')): ?>
                    <span class="hero-content d-block mx-auto">
                        <?php echo get_sub_field('content');?>
                    </span>
                <?php endif;?>
                <?php if (get_sub_field( 'hero_link_url')): ?>
                    <a class="read_more_link" href="<?php echo get_sub_field('hero_link_url');?>"><?php echo get_sub_field('hero_link_text');?>
                    <!-- <img class="arrow_ico" src="/wp-content/themes/rtlry/assets/images/ico_arrow.svg"> -->
                </a>
                <?php endif;?>
            </div>
        </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->