<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

if (is_archive()) {
    $by_category = 1;
    $by_tag = 1;
} else {
    $by_category = get_sub_field('filter_by_category');
    $by_tag = get_sub_field('filter_by_tag');
    $by_search = get_sub_field('filter_by_search');
}

?>

<!-- Posts Filter Section Start -->
<section class="posts_filter_section" >

    <div class="container-fluid">
        <div class="container posts_filter_list">
            <div class="row">
                <?php if (!empty($by_category)):?>
                    <div class="col-md-4 mx-auto posts_filter_item">
                        <?php wp_list_categories('title_li=Luokat&orderby=name'); ?>
                    </div>
                <?php endif;?>
                <?php if (!empty($by_tag    )):?>
                    <div class="col-md-4 mx-auto posts_filter_item">
                        <?php wp_list_categories('taxonomy=post_tag&title_li=Tunnisteet&orderby=name'); ?>
                    </div>
                <?php endif;?>
                <?php if (!empty($by_search)):?>
                    <div class="col-md-4 mx-auto posts_filter_item">
                        <div class="search">
                            <?php get_search_form();?>
                        </div>
                    </div>
                <?php endif;?>
            </div>
        </div>
    </div>

</section>
<!-- Posts Filter Section Start -->