<?php
/**
 * The template for displaying comments
 */

if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php
    if ( have_comments() ) {
        ?>
        <h2 class="comments-title">
            <?php
            $comment_count = intval( get_comments_number() );
            if ( 1 === $comment_count ) {
                esc_html_e( 'One thought on &ldquo;', 'electronics-store' );
            } else {
                printf( esc_html( _nx( '%1$s thought on &ldquo;', '%1$s thoughts on &ldquo;', $comment_count, 'comments title', 'electronics-store' ) ), number_format_i18n( $comment_count ) );
            }
            the_title( '', '&rdquo;' );
            ?>
        </h2><!-- .comments-title -->

        <ol class="comment-list">
            <?php
            wp_list_comments( array(
                'style'       => 'ol',
                'short_ping'  => true,
                'avatar_size' => 50,
            ) );
            ?>
        </ol><!-- .comment-list -->

        <?php
        the_comments_pagination( array(
            'prev_text' => esc_html__( 'Older Comments', 'electronics-store' ),
            'next_text' => esc_html__( 'Newer Comments', 'electronics-store' ),
        ) );
    }

    if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) {
        ?>
        <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'electronics-store' ); ?></p>
        <?php
    }

    comment_form( array(
        'class_form'      => 'comment-form',
        'class_submit'    => 'btn btn-primary',
        'submit_button'   => '<button name="%1$s" type="submit" id="%2$s" class="%3$s">%4$s</button>',
        'label_submit'    => __( 'Post Comment', 'electronics-store' ),
        'title_reply'     => __( 'Leave a Comment', 'electronics-store' ),
    ) );
    ?>

</div><!-- #comments -->
