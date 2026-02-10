# Theme Customization Guide

## Using the Theme Customizer

The Theme Customizer is the easiest way to customize your theme **without touching code**.

### Access the Customizer

**WordPress Admin > Appearance > Customize**

Or directly visit: `yoursite.com/wp-admin/customize.php`

## Available Customization Options

### 1. Site Identity

**Default WordPress Section**

- **Site Title** - Your website name (displayed in browser tab)
- **Tagline** - Your website motto/description
- **Logo** - Upload your company logo
- **Icon** - Website favicon (shown in browser tab)

### 2. Colors

**Location:** Customizer > Theme Colors

#### Primary Color
- **Default:** #3bb614 (Green)
- **Used for:** Links, buttons, accents, hover states
- **Impact:** Changes button colors, link colors, widget titles

#### Text Color
- **Default:** #777777 (Gray)
- **Used for:** Main body text
- **Impact:** All paragraph text color

#### Heading Color
- **Default:** #333333 (Dark Gray)
- **Used for:** H1, H2, H3, H4, H5, H6 headings
- **Impact:** All heading colors throughout site

### 3. Typography

**Location:** Customizer > Typography

#### Body Font Size
- **Options:** 12px, 13px, 14px, 15px, 16px
- **Default:** 14px
- **Impact:** Main body text size

**Note:** Font family is Roboto (loaded from Google Fonts)

### 4. Contact Information

**Location:** Customizer > Contact Information

#### Phone Number
- **Default:** (800) 234-5678
- **Usage:** Displayed in footer
- **Format:** Any format (e.g., +1-800-234-5678)

#### Address
- **Default:** 8901 Marmora Road, Glasgow, D04 89GR
- **Usage:** Displayed in footer contact section
- **Format:** Multi-line supported (use line breaks)

#### Email Address
- **Default:** info@example.com
- **Usage:** Contact form destination, footer display
- **Format:** Must be valid email

### 5. Social Media Links

**Location:** Customizer > Social Media

Link your social profiles:
- Facebook
- Twitter
- YouTube
- Instagram
- Pinterest

Leave blank to hide the link.

## Color Customization Examples

### Brand Colors
Green (Electronics): `#3bb614`
Blue (Professional): `#007bff`
Orange (Energy): `#ff7f00`
Red (Sale): `#dc3545`
Purple (Premium): `#6f42c1`

### Text Colors
Dark Text: `#333333`
Medium Text: `#666666`
Light Text: `#999999`
Light Gray: `#cccccc`

## Code-Based Customization

For advanced users who want to edit code:

### Custom CSS

**Method 1: Additional CSS in Customizer**
- Go to Appearance > Customize > Additional CSS
- Add your custom CSS
- Changes preview in real-time

**Method 2: Edit style.css**
- Open `/style.css`
- Add your custom CSS at the end
- Save and refresh

### Child Theme (Recommended for Code Changes)

**Why Use a Child Theme?**
- Preserve original theme code
- Easy to update the parent theme
- Keep customizations safe

**Create a Child Theme:**

1. Create folder: `/wp-content/themes/electronics-store-child/`

2. Create `style.css`:
```css
/*
Theme Name: Electronics Store Child
Template: theme028
Version: 1.0.0
*/

@import url("../theme028/style.css");

/* Your custom CSS here */
```

3. Create `functions.php`:
```php
<?php
function electronics_store_child_enqueue_styles() {
    wp_enqueue_style('child-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'electronics_store_child_enqueue_styles');
```

4. Go to Appearance > Themes and activate the child theme

## Common Customizations

### Change Button Colors

Go to Customizer > Theme Colors > Primary Color

Or in style.css:
```css
.btn-primary {
    background-color: #your-color;
}
```

### Change Font Size

Go to Customizer > Typography > Body Font Size

Or in style.css:
```css
body {
    font-size: 15px;
}
```

### Change Link Color

Go to Customizer > Theme Colors > Primary Color

Or in style.css:
```css
a {
    color: #your-color;
}
```

### Add Custom Header

Edit `header.php`:
```php
<!-- Add after <header id="header"> -->
<div class="custom-header">
    <p>Your custom header content</p>
</div>
```

### Add Custom Footer Content

Edit `footer.php`:
```php
<!-- Add before </footer> -->
<div class="custom-footer">
    <p>Your custom footer content</p>
</div>
```

### Add Custom JavaScript

1. Create file: `/js/custom.js`

2. Register in `functions.php`:
```php
function electronics_store_custom_scripts() {
    wp_enqueue_script('custom-js', ELECTRONICS_STORE_URI . '/js/custom.js', array('jquery'), ELECTRONICS_STORE_VERSION, true);
}
add_action('wp_enqueue_scripts', 'electronics_store_custom_scripts');
```

## Widget Customization

### Primary Sidebar

Widgets appear in the right/left column of posts and pages.

**Recommended Widgets:**
- Categories
- Recent Posts
- Search
- Text (for custom content)
- Tag Cloud

### Footer Widget Area

Widgets appear as 4 columns in the footer.

**Recommended Widgets:**
- Text (for company info)
- Recent Posts
- Navigation Menu
- Custom Links

## Menu Customization

### Primary Menu

Main navigation at the top of the page.

**To Customize:**
1. Go to Appearance > Menus
2. Edit your menu
3. Drag to reorder items
4. Remove unwanted items
5. Save

**Custom Links:**
- Add external URLs
- Link to specific ports or anchors

### Footer Menu

Navigation links in the footer.

**To Add:**
1. Create new menu or select existing
2. Check "Display location: Footer Menu"
3. Save

## WooCommerce Customization

If using WooCommerce:

### Product Page Layout
- Edit `woocommerce.php` for page structure
- Sidebar will appear on product pages

### Product Archive
- Customize in `archive.php`
- Uses WooCommerce hooks

### Checkout Page
- Built-in WooCommerce styling
- Customize in WooCommerce settings

## Plugin Compatibility

### For Additional Styling

**Elementor Page Builder**
- Fully compatible
- Use page builder for custom layouts
- Disable theme default display if needed

**WPBakery Page Builder**
- Compatible
- Add custom CSS in page builder

### For Contact Forms

**Contact Form 7**
- Add shortcode to Contact page
- Style with custom CSS

**Gravity Forms**
- Fully compatible
- Advanced form features

### For E-commerce

**WooCommerce**
- Fully integrated
- Product pages use theme styling
- Customize in WooCommerce settings

## Performance Tips

**Optimize Images**
- Use Smush plugin
- Recommended size: 1200px width

**Minify CSS/JS**
- Use Autoptimize plugin
- Reduces page load time

**Enable Caching**
- Use WP Super Cache
- Improves performance significantly

**Lazy Load**
- Theme includes basic lazy loading
- Use plugin for advanced features

## Browser Testing

Test your customizations in:
- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers

## Backup Before Major Changes

Always backup your website before:
1. Installing new plugins
2. Making code changes
3. Updating WordPress
4. Updating plugins

Use backup plugin like UpdraftPlus.

## Getting Help

1. **WordPress Codex:** https://developer.wordpress.org/
2. **Theme Documentation:** See README.md
3. **WordPress Support:** https://wordpress.org/support/
4. **Stack Overflow:** https://stackoverflow.com/questions/tagged/wordpress

## Common Customization Packages

### Professional Look
- Change Primary Color to #0066cc
- Set Text Color to #444444
- Use 15px font size
- Add professional logo

### Modern Look
- Use vibrant Primary Color #ff6b35
- Dark heading color #1a1a1a
- Light text #666666
- Modern sans-serif typography

### Minimal Look
- Primary Color #000000 (black)
- Text Color #444444
- Heading Color #000000
- Light gray accents #f5f5f5

---

**Happy Customizing!** 🎨
