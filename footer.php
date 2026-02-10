<?php
/**
 * The footer for our theme
 */
?>
            <!-- FOOTER -->
            <footer id="footer">
                <div class="footer-widgets">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="footer-widget">
                                    <h3><?php _e( 'Information', 'electronics-store' ); ?></h3>
                                    <?php
                                    wp_nav_menu( array(
                                        'theme_location' => 'footer',
                                        'menu_class' => '',
                                        'container' => false,
                                        'fallback_cb' => false,
                                        'depth' => 1,
                                    ) );
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="footer-widget">
                                    <h3><?php _e( 'Collections', 'electronics-store' ); ?></h3>
                                    <ul>
                                        <li><a href="#"><?php _e( 'All Products', 'electronics-store' ); ?></a></li>
                                        <li><a href="#"><?php _e( 'New Arrivals', 'electronics-store' ); ?></a></li>
                                        <li><a href="#"><?php _e( 'Best Sellers', 'electronics-store' ); ?></a></li>
                                        <li><a href="#"><?php _e( 'On Sale', 'electronics-store' ); ?></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="footer-widget">
                                    <h3><?php _e( 'My Account', 'electronics-store' ); ?></h3>
                                    <ul>
                                        <li><a href="#"><?php _e( 'Login', 'electronics-store' ); ?></a></li>
                                        <li><a href="#"><?php _e( 'Register', 'electronics-store' ); ?></a></li>
                                        <li><a href="#"><?php _e( 'Order History', 'electronics-store' ); ?></a></li>
                                        <li><a href="#"><?php _e( 'Wishlist', 'electronics-store' ); ?></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="footer-widget">
                                    <h3><?php _e( 'Contact Info', 'electronics-store' ); ?></h3>
                                    <p>
                                        <strong><?php _e( 'Company Inc.', 'electronics-store' ); ?></strong><br>
                                        <?php bloginfo( 'description' ); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <p class="copyright">
                                    &copy; <?php echo date( 'Y' ); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>. <?php _e( 'All rights reserved.', 'electronics-store' ); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            
        </div>
    </div>
    
    <?php wp_footer(); ?>
</body>
</html>
