<?php
/**
 * WooCommerce template
 * This template handles all WooCommerce pages
 */

get_header(); ?>

<main id="main" class="site-main">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-8">
                <?php woocommerce_content(); ?>
            </div>
            
            <aside class="col-md-3 col-sm-4">
                <?php get_sidebar(); ?>
            </aside>
        </div>
    </div>
</main>

<?php get_footer();
