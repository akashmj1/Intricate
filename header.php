<?php
/**
 * The header for our theme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    
    <div id="wrapper">
        <div id="wrapper2">
            <!-- HEADER -->
             <header id="header">
                <div class="container">
                    <!-- SITE BRANDING -->
                    <div class="site-branding">
                        <?php
                        if ( has_custom_logo() ) {
                            the_custom_logo();
                        }
                        ?>
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
                        <?php
                        $description = get_bloginfo( 'description' );
                        if ( $description ) {
                            echo '<p class="site-description">' . esc_html( $description ) . '</p>';
                        }
                        ?>
                    </div>
                    
                    <!-- NAVIGATION -->
                    <nav id="site-navigation" class="navbar">
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'primary',
                            'menu_class' => 'navbar-nav',
                            'container' => false,
                            'fallback_cb' => 'wp_page_menu',
                            'depth' => 2,
                        ) );
                        ?>
                    </nav>
                </div>
            </header>
