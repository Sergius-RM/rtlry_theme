<?php
/**
 * The template for displaying archive pages
 *
 */

get_header();
?>

<!-- 404 Section Start -->
<section class="lost_page" >
    <div class="container">
        <div class="no-results not-found mx-auto text-center">
            <h2 class="page-title">Mitään ei löytynyt</h2>
            <p>Anteeksi, mutta mikään ei vastannut hakutermejäsi. Yritä uudelleen eri avainsanoilla.</p>
        </div><!-- .no-results -->
    </div>

    <div class="container-fluid lost_search">
        <div class="row align-items-center">
            <div class="col-sm-12 col-xl-6 mx-auto text-center">
                <h6>tai käytä sivustohakua</h6>
                <div class="search">
                    <?php get_search_form();?>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- 404 Section End -->

<?php
get_footer();
