<?php
/**
 * Template part for displaying posts
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'product-item' ); ?>>
    <div class="post-thumbnail">
        <?php
        if ( has_post_thumbnail() ) {
            the_post_thumbnail( 'electronics-store-featured' );
        }
        ?>
    </div>
    
    <div class="post-content">
        <header class="entry-header">
            <?php
            if ( is_singular() ) {
                the_title( '<h1 class="entry-title">', '</h1>' );
            } else {
                the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
            }
            
            if ( 'post' === get_post_type() ) {
                ?>
                <div class="entry-meta">
                    <?php
                    printf(
                        esc_html_x( 'Posted on %s', 'post date', 'electronics-store' ),
                        '<a href="' . esc_url( get_permalink( get_option( 'page_for_posts' ) ) ) . '" rel="bookmark"><time class="entry-date published updated" datetime="' . esc_attr( get_the_date( 'c' ) ) . '">' . esc_html( get_the_date() ) . '</time></a>'
                    );
                    ?>
                </div><!-- .entry-meta -->
                <?php
            }
            ?>
        </header><!-- .entry-header -->
        
        <div class="entry-content">
            <?php
            the_excerpt();
            wp_link_pages( array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'electronics-store' ),
                'after'  => '</div>',
            ) );
            ?>
        </div><!-- .entry-content -->
        
        <footer class="entry-footer">
            <a href="<?php the_permalink(); ?>" class="btn btn-primary"><?php _e( 'Read More', 'electronics-store' ); ?></a>
        </footer><!-- .entry-footer -->
    </div>
</article><!-- #post-<?php the_ID(); ?> -->
