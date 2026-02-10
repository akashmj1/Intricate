<?php
/**
 * Template part for displaying pages
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

</article><!-- #post-<?php the_ID(); ?> -->
