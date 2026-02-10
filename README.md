# Electronics Store - WordPress Theme

A modern, responsive e-commerce WordPress theme for selling electronics and gadgets.

## Features

- **Responsive Design**: Mobile-first approach with Bootstrap framework
- **WooCommerce Compatible**: Built-in support for WooCommerce product listings and shopping
- **Product Showcase**: Featured products on homepage with customizable layouts
- **Multiple Sidebars**: Primary and footer widget areas
- **Navigation Menus**: Support for multiple custom menus
- **Custom Logo**: Full support for custom site logos
- **RTL Ready**: Supports right-to-left languages
- **Accessibility**: Built with accessibility best practices
- **Bootstrap Framework**: Uses Bootstrap 3 for responsive layouts
- **Font Awesome Icons**: Included Font Awesome icon library
- **Advanced Sliders**: Multiple slider options (Camera, Nivo, BXSlider, CarouFredSel)

## System Requirements

- **WordPress**: 5.0 or later
- **PHP**: 7.4 or later
- **MySQL**: 5.7 or later (or MariaDB 10.2+)
- **Recommended Plugins**: WooCommerce (for e-commerce functionality)

## Installation

### Method 1: Manual Installation via FTP/File Manager

1. Download the theme folder
2. Extract the ZIP file to your computer
3. Via FTP or File Manager, navigate to `/wp-content/themes/`
4. Upload the entire `theme028` (or rename it) folder to the themes directory
5. In WordPress Admin Dashboard, go to **Appearance > Themes**
6. Find the "Electronics Store" theme and click **Activate**

### Method 2: Upload via WordPress Admin

1. Download the theme and ZIP the folder
2. In WordPress Admin Dashboard, go to **Appearance > Themes**
3. Click **Add New** → **Upload Theme**
4. Choose the ZIP file and click **Install Now**
5. Once installed, click **Activate**

### Method 3: Using WP-CLI

```bash
wp theme install /path/to/theme-folder --activate
```

## Configuration

### Basic Setup

1. **Site Title & Tagline**: 
   - Go to **Settings > General**
   - Update your site title and tagline

2. **Create Navigation Menus**:
   - Go to **Appearance > Menus**
   - Create a new menu and add pages/links
   - Assign it to **Primary Menu** location

3. **Setup Homepage**:
   - Go to **Settings > Reading**
   - Choose "A static page" and select your homepage

4. **Configure Widgets**:
   - Go to **Appearance > Widgets**
   - Add widgets to Primary Sidebar and Footer areas

### WooCommerce Configuration

1. Install and activate **WooCommerce** plugin
2. Go through the WooCommerce Setup Wizard
3. Create product categories and add products
4. The theme will automatically display products on the shop page

### Custom Homepage (with Featured Products)

1. Create a new Page called "Home"
2. Set it as the Static Home Page in Settings
3. Create a product category or collection for featured items
4. Add product widgets to your homepage

## Theme Files Structure

```
theme028/
├── style.css                    # Theme header and main stylesheet
├── functions.php               # Theme functions and hooks
├── index.php                   # Main template
├── header.php                  # Header template
├── footer.php                  # Footer template
├── sidebar.php                 # Sidebar template
├── single.php                  # Single post template
├── page.php                    # Page template
├── archive.php                 # Archive template
├── search.php                  # Search results template
├── 404.php                     # 404 error page
├── woocommerce.php            # WooCommerce template
├── comments.php               # Comments template
├── template-parts/            # Reusable template parts
│   ├── content.php           # Default content template
│   ├── content-single.php    # Single post content
│   ├── content-page.php      # Page content
│   └── content-none.php      # No content message
├── assets/                    # All CSS, JS, and image files
│   ├── bootstrap.css
│   ├── style.css.liquid
│   ├── responsive.css.liquid
│   ├── font-awesome.min.css
│   └── [many more assets]
├── config/                    # Theme configuration
├── layout/                    # Original Shopify layouts (reference)
├── snippets/                  # Original Shopify snippets (reference)
└── templates/                 # Original Shopify templates (reference)
```

## Customization

### Custom Colors & Fonts

Edit the CSS files in the `/assets` folder:
- `assets/style.css.liquid` - Main styles
- `assets/responsive.css.liquid` - Responsive styles

### Custom Header PHP

Modify `header.php` to change the header layout and logo placement

### Custom Menus

Edit `functions.php` to modify menu locations and add additional menu areas:

```php
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'electronics-store' ),
    'secondary' => __( 'Secondary Menu', 'electronics-store' ),
) );
```

### Child Theme (Recommended)

For safe customizations without modifying the original theme:

1. Create a new folder: `/wp-content/themes/electronics-store-child`
2. Create `style.css`:

```css
/*
Theme Name: Electronics Store - Child
Template: theme028
Version: 1.0.0
*/

@import url("../theme028/style.css");
```

3. Create `functions.php`:

```php
<?php
function electronics_store_child_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'electronics_store_child_enqueue_styles' );
```

4. Activate the child theme in WordPress admin

## Google Fonts

The theme automatically loads Google Fonts (Roboto). They are included via stylesheet tags in the header template.

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari 9+
- IE 9+
- Edge (all versions)

## Plugins Compatibility

- **WooCommerce** - Full support for products, shopping carts, and checkout
- **Yoast SEO** - SEO optimization
- **Jetpack** - Additional features and security
- **Contact Form 7** - Contact forms
- **Wordfence** - Security

## Troubleshooting

### Styles not loading
- Clear browser cache (Ctrl+Shift+Delete or Cmd+Shift+Delete)
- Go to **Appearance > Customize** and save changes to refresh theme cache

### JavaScript issues
- Check **Plugins** and deactivate conflicting plugins one by one
- Ensure jQuery is not disabled
- Check browser console (F12) for errors

### WooCommerce not showing properly
- Install WooCommerce plugin
- Go through WooCommerce setup wizard
- Create product categories and products
- Update permalinks in Settings

### Menu not showing
- Go to **Appearance > Menus**
- Create a menu and assign it to Primary Menu location

## Support & Documentation

- WordPress Official Theme Handbook: https://developer.wordpress.org/themes/
- WooCommerce Documentation: https://docs.woocommerce.com/
- Bootstrap Documentation: https://getbootstrap.com/docs/3.4/

## License

This theme is licensed under the GPL v2 or later.

## Changelog

### Version 1.0.0
- Initial release
- Converted from Shopify Liquid theme to WordPress
- Full WooCommerce support
- Responsive Bootstrap design
- Widget and menu support

## Credits

- **Original Shopify Theme**: Template Monster
- **Framework**: Bootstrap 3
- **Icons**: Font Awesome
- **Responsive Design**: HTML5 and CSS3
