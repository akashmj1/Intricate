<?php
/**
 * The template for displaying archive pages
 */

get_header(); ?>

<main id="main" class="site-main">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-8">
                
                <?php if ( have_posts() ) : ?>
                    <header class="page-header">
                        <?php
                        the_archive_title( '<h1 class="page-title">', '</h1>' );
                        the_archive_description( '<div class="archive-description">', '</div>' );
                        ?>
                    </header><!-- .page-header -->

                    <?php
                    while ( have_posts() ) {
                        the_post();
                        get_template_part( 'template-parts/content', get_post_type() );
                    }
                    
                    the_posts_pagination( array(
                        'prev_text' => '&laquo;',
                        'next_text' => '&raquo;',
                        'type'      => 'list',
                    ) );
                else :
                    get_template_part( 'template-parts/content', 'none' );
                endif;
                ?>
                
            </div>
            
            <aside class="col-md-3 col-sm-4">
                <?php get_sidebar(); ?>
            </aside>
        </div>
    </div>
</main>

<?php get_footer();
