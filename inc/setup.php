<?php
/**
 * Electronics Store Theme - Setup Assistant
 * 
 * This file helps with initial theme setup
 */

// Only run on first activation
function electronics_store_setup_on_activation() {
    $setup_done = get_option( 'electronics_store_setup_done' );
    
    if ( ! $setup_done ) {
        // Create sample pages
        electronics_store_create_sample_pages();
        
        // Create sample menu
        electronics_store_create_sample_menu();
        
        // Mark setup as done
        update_option( 'electronics_store_setup_done', true );
    }
}
add_action( 'after_switch_theme', 'electronics_store_setup_on_activation' );

// Create sample pages
function electronics_store_create_sample_pages() {
    $pages = array(
        array(
            'post_title' => __( 'Home', 'electronics-store' ),
            'post_content' => __( 'Welcome to our Electronics Store. Browse our collection of latest gadgets and electronics.', 'electronics-store' ),
            'post_type' => 'page',
            'post_status' => 'publish',
        ),
        array(
            'post_title' => __( 'About Us', 'electronics-store' ),
            'post_content' => __( 'We are a leading electronics store offering the best products and services.', 'electronics-store' ),
            'post_type' => 'page',
            'post_status' => 'publish',
        ),
        array(
            'post_title' => __( 'Services', 'electronics-store' ),
            'post_content' => __( 'Our services include product delivery, installation, and customer support.', 'electronics-store' ),
            'post_type' => 'page',
            'post_status' => 'publish',
        ),
        array(
            'post_title' => __( 'Contact', 'electronics-store' ),
            'post_content' => __( 'Get in touch with us for any inquiries about our products or services.', 'electronics-store' ),
            'post_type' => 'page',
            'post_status' => 'publish',
        ),
        array(
            'post_title' => __( 'Blog', 'electronics-store' ),
            'post_content' => __( 'Latest news and updates about electronics and gadgets.', 'electronics-store' ),
            'post_type' => 'page',
            'post_status' => 'publish',
        ),
    );
    
    foreach ( $pages as $page_data ) {
        // Check if page already exists
        $existing = get_page_by_title( $page_data['post_title'] );
        if ( ! $existing ) {
            wp_insert_post( $page_data );
        }
    }
}

// Create sample menu
function electronics_store_create_sample_menu() {
    // Create menu
    $menu_name = __( 'Main Menu', 'electronics-store' );
    $menu_exists = wp_get_nav_menu_object( $menu_name );
    
    if ( ! $menu_exists ) {
        $menu_id = wp_create_nav_menu( $menu_name );
        
        if ( ! is_wp_error( $menu_id ) ) {
            // Get pages
            $pages = get_pages();
            
            // Add pages to menu
            foreach ( $pages as $page ) {
                wp_update_nav_menu_item( $menu_id, 0, array(
                    'menu-item-title' => $page->post_title,
                    'menu-item-object-id' => $page->ID,
                    'menu-item-object' => 'page',
                    'menu-item-type' => 'post_type',
                    'menu-item-status' => 'publish',
                ) );
            }
            
            // Assign menu to location
            $locations = get_theme_mod( 'nav_menu_locations' );
            $locations['primary'] = $menu_id;
            set_theme_mod( 'nav_menu_locations', $locations );
        }
    }
}

// Add admin notice for setup
function electronics_store_setup_admin_notice() {
    if ( get_current_screen()->base !== 'toplevel_page_electronics-store-options' ) {
        $setup_done = get_option( 'electronics_store_setup_done' );
        
        if ( ! $setup_done ) {
            ?>
            <div class="notice notice-success is-dismissible">
                <p>
                    <strong><?php _e( 'Welcome to Electronics Store Theme!', 'electronics-store' ); ?></strong><br>
                    <?php _e( 'Sample pages have been created. Go to', 'electronics-store' ); ?> 
                    <a href="<?php echo admin_url( 'admin.php?page=electronics-store-options' ); ?>">
                        <?php _e( 'Theme Options', 'electronics-store' ); ?>
                    </a> 
                    <?php _e( 'to complete your setup.', 'electronics-store' ); ?>
                </p>
            </div>
            <?php
        }
    }
}
add_action( 'admin_notices', 'electronics_store_setup_admin_notice' );
