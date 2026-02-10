<?php
/**
 * The template for displaying 404 pages (not found)
 */

get_header(); ?>

<main id="main" class="site-main">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-8">
                
                <section class="error-404 not-found">
                    <header class="page-header">
                        <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'electronics-store' ); ?></h1>
                    </header><!-- .page-header -->

                    <div class="page-content">
                        <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'electronics-store' ); ?></p>

                        <?php
                        get_search_form();
                        the_widget( 'WP_Widget_Recent_Posts' );
                        ?>

                        <div class="widget widget_categories">
                            <h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'electronics-store' ); ?></h2>
                            <ul>
                                <?php
                                wp_list_categories( array(
                                    'orderby'    => 'count',
                                    'order'      => 'DESC',
                                    'show_count' => 1,
                                    'title_li'   => '',
                                    'number'     => 10,
                                ) );
                                ?>
                            </ul>
                        </div><!-- .widget -->

                    </div><!-- .page-content -->
                </section><!-- .error-404 -->
                
            </div>
            
            <aside class="col-md-3 col-sm-4">
                <?php get_sidebar(); ?>
            </aside>
        </div>
    </div>
</main>

<?php get_footer();
