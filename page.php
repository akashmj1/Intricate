<?php
/**
 * The template for displaying pages
 */

get_header(); ?>

<main id="main" class="site-main">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-8">
                
                <?php
                while ( have_posts() ) {
                    the_post();
                    get_template_part( 'template-parts/content', 'page' );
                    
                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) {
                        comments_template();
                    }
                }
                ?>
                
            </div>
            
            <aside class="col-md-3 col-sm-4">
                <?php get_sidebar(); ?>
            </aside>
        </div>
    </div>
</main>

<?php get_footer();
