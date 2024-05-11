<?php
/**
 * Template name: Subpage Template
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 */

get_header();
?>

<?php if ( have_rows( 'sections' ) ) : ?>
    <?php while ( have_rows('sections' ) ) : the_row();
        if ( get_row_layout() == 'hero' ) :
            get_template_part('template-parts/sections/section', 'hero');

        elseif ( get_row_layout() == 'service_process' ) :
            get_template_part('template-parts/sections/section', 'service_process');

        elseif ( get_row_layout() == 'quick_order' ) :
            get_template_part('template-parts/sections/section', 'quick_order');

        elseif ( get_row_layout() == 'featured_benefits' ) :
            get_template_part('template-parts/sections/section', 'featured_benefits');

        elseif ( get_row_layout() == 'service_statements' ) :
            get_template_part('template-parts/sections/section', 'service_statements');

        elseif ( get_row_layout() == 'two_columns' ) :
            get_template_part('template-parts/sections/section', 'two_columns');

        elseif ( get_row_layout() == 'highlighted_articles' ) :
            get_template_part('template-parts/sections/section', 'highlighted_articles');

        elseif ( get_row_layout() == 'contactus' ) :
            get_template_part('template-parts/sections/section', 'contactus');

        elseif ( get_row_layout() == 'contact_wiget' ) :
            get_template_part('template-parts/sections/section', 'contact_wiget');

        elseif ( get_row_layout() == 'page_header' ) :
            get_template_part('template-parts/sections/section', 'page_header');

        elseif ( get_row_layout() == 'pricing' ) :
            get_template_part('template-parts/sections/section', 'pricing');

        elseif ( get_row_layout() == 'awards' ) :
            get_template_part('template-parts/sections/section', 'awards');

        elseif ( get_row_layout() == 'blog_grid' ) :
            get_template_part('template-parts/sections/section', 'blog_grid');

        elseif ( get_row_layout() == 'team' ) :
            get_template_part('template-parts/sections/section', 'team');

        elseif ( get_row_layout() == 'reviews' ) :
            get_template_part('template-parts/sections/section', 'reviews');

        elseif ( get_row_layout() == 'projects' ) :
            get_template_part('template-parts/sections/section', 'projects');

        elseif ( get_row_layout() == 'single_article' ) :
            get_template_part('template-parts/sections/section', 'single_article');

        elseif ( get_row_layout() == 'related_articles' ) :
            get_template_part('template-parts/sections/section', 'related_articles');

        elseif ( get_row_layout() == 'posts_filter' ) :
            get_template_part('template-parts/sections/section', 'posts_filter');
            ?>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>

<?php
get_footer();