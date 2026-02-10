<?php
/**
 * Template part for displaying single posts
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <?php
    if ( has_post_thumbnail() ) {
        echo '<div class="post-thumbnail">';
        the_post_thumbnail( 'electronics-store-featured' );
        echo '</div>';
    }
    ?>

    <header class="entry-header">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

        <?php if ( 'post' === get_post_type() ) : ?>
        <div class="entry-meta">
            <?php
            printf(
                esc_html_x( 'Posted on %s by %s', 'post date and author', 'electronics-store' ),
                '<a href="' . esc_url( get_permalink( get_option( 'page_for_posts' ) ) ) . '" rel="bookmark"><time class="entry-date published updated" datetime="' . esc_attr( get_the_date( 'c' ) ) . '">' . esc_html( get_the_date() ) . '</time></a>',
                '<span class="by-author"><span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span></span>'
            );
            ?>
        </div><!-- .entry-meta -->
        <?php endif; ?>
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php
        the_content();
        wp_link_pages( array(
            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'electronics-store' ),
            'after'  => '</div>',
        ) );
        ?>
    </div><!-- .entry-content -->

    <?php if ( 'post' === get_post_type() ) : ?>
    <footer class="entry-footer">
        <div class="entry-categories">
            <span class="cat-links">
                <?php _e( 'Categories: ', 'electronics-store' ); ?>
                <?php the_category( ', ' ); ?>
            </span>
        </div>
        <div class="entry-tags">
            <span class="tag-links">
                <?php if ( has_tag() ) {
                    _e( 'Tags: ', 'electronics-store' );
                    the_tags( '', ', ' );
                } ?>
            </span>
        </div>
    </footer><!-- .entry-footer -->
    <?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
