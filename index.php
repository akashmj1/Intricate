<?php
/**
 * Main Index Template
 */

get_header(); ?>

<main id="main" class="site-main">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-8">
                
                <?php
                if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post();
                        ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <?php if ( has_post_thumbnail() ) { ?>
                                <div class="post-thumbnail">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                            <?php } ?>
                            
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <div class="entry-meta">
                                <?php printf( __( 'Posted on %s', 'electronics-store' ), get_the_date() ); ?>
                            </div>
                            <div class="entry-content">
                                <?php the_excerpt(); ?>
                                <a href="<?php the_permalink(); ?>" class="btn btn-primary"><?php _e( 'Read More', 'electronics-store' ); ?></a>
                            </div>
                        </article>
                        <?php
                    }
                    
                    the_posts_pagination();
                } else {
                    ?>
                    <p><?php _e( 'No posts found.', 'electronics-store' ); ?></p>
                    <?php
                }
                ?>
                
            </div>
            
            <aside class="col-md-3 col-sm-4">
                <div class="widget-area">
                    <?php dynamic_sidebar( 'primary-sidebar' ); ?>
                </div>
            </aside>
        </div>
    </div>
</main>

<?php get_footer();
