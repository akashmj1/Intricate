# Complete WordPress Setup Guide for Electronics Store Theme

## Automatic Setup

When you activate the theme for the first time, the following happen automatically:

✅ **Sample Pages Created:**
- Home
- About Us
- Services
- Contact
- Blog

✅ **Main Menu Created:** With all sample pages automatically added

## Manual Configuration

### 1. Theme Customizer

Visit **Appearance > Customize** to customize:

#### Colors Section
- **Primary Color** - Used for links, buttons, accents (default: #3bb614 - Green)
- **Text Color** - Main body text color (default: #777777 - Gray)
- **Heading Color** - All headings (H1-H6) color (default: #333333 - Dark Gray)

#### Typography Section
- **Body Font Size** - Choose from 12px to 16px (default: 14px)

#### Contact Information Section
- **Phone Number** - Display your phone number in footer
- **Address** - Your business address
- **Email Address** - Contact email

#### Social Media Section
- **Facebook URL**
- **Twitter URL**
- **YouTube URL**
- **Instagram URL**
- **Pinterest URL**

### 2. Navigation Menus

**Location:** Appearance > Menus

**Two Menu Locations:**
1. **Primary Menu** - Main website navigation
2. **Footer Menu** - Footer navigation links

**To Create a Menu:**
1. Click "Create a new menu"
2. Give it a name (e.g., "Main Menu")
3. Add pages, posts, or custom links
4. Check "Display location" for Primary Menu
5. Save

### 3. Pages

**Location:** Pages > All Pages

**Essential Pages to Create:**
- Home (Set as homepage in Settings > Reading)
- About Us
- Services/Shop
- Contact (can use Contact Form 7 plugin)
- Blog
- Policies/Terms

**To Create a Page:**
1. Pages > Add New
2. Add title and content
3. Set featured image (recommended: 300x200px)
4. Publish
5. Add to menu

### 4. Blog Posts

**Location:** Posts > All Posts

Create blog posts to engage your audience and improve SEO.

**Post Options:**
- Featured image (shows in listings and on post)
- Categories (organize posts)
- Tags (improve SEO and navigation)
- Author (auto-assigned to current user)
- Publish date (scheduled posts supported)

### 5. Widgets

**Location:** Appearance > Widgets

**Available Widget Areas:**
1. **Primary Sidebar** - Shown on right/left of posts and pages
2. **Footer Widget Area** - Shown in footer (4 columns on desktop)

**Recommended Widgets:**
- Recent Posts
- Categories
- Archives
- Search
- Text (for custom content)
- Navigation Menu

### 6. Logo & Site Identity

**Location:** Appearance > Customize > Site Identity

- **Site Title** - Your website name
- **Tagline** - Your website tagline
- **Logo** - Upload your company logo (recommended: 300x100px)
- **Icon** - Favicon (recommended: 32x32px)

### 7. Homepage Setup

**Location:** Settings > Reading

**Option 1: Static Homepage**
1. Select "A static page"
2. Choose your Home page as the Front page
3. Choose Blog page as the Posts page

**Option 2: Blog Homepage**
1. Select "Your latest posts"
2. Homepage shows recent blog posts

### 8. WooCommerce Integration (Optional)

If you installed WooCommerce for e-commerce:

**Installation:**
1. Plugins > Add New
2. Search "WooCommerce"
3. Click Install Now > Activate

**WooCommerce Setup:**
1. Go through WooCommerce Setup Wizard
2. Configure payment methods
3. Create product categories
4. Add products
5. Set up shipping
6. Configure taxes

### 9. Additional Settings

**Settings > General**
- Site Title
- Tagline
- WordPress Address
- Site Address
- Timezone
- Date Format
- Time Format

**Settings > Permalinks**
- Choose your URL structure (recommended: Post name)

**Settings > Discussion**
- Comment settings
- Notification options
- Comment moderation

### 10. Plugins

**Recommended Plugins:**

**Essential:**
- Jetpack - Security, speed, SEO
- Wordfence - Security

**For E-commerce:**
- WooCommerce - Online store
- WooCommerce PDF Invoice - Customer invoices

**For Content:**
- Yoast SEO - Search engine optimization
- Contact Form 7 - Contact forms
- Duplicate Post - Clone posts/pages

**For Performance:**
- WP Super Cache - Caching
- Smush - Image optimization
- Autoptimize - Minify CSS/JS

## Template Structure

### Main Templates
- `index.php` - Default/Blog page
- `page.php` - Single page
- `single.php` - Single blog post
- `archive.php` - Categories/Archives
- `search.php` - Search results
- `404.php` - Page not found

### Navigation
- `header.php` - Site header with logo and menu
- `footer.php` - Site footer with widgets
- `sidebar.php` - Sidebar area

## Available Helper Functions

Use these functions in your templates or theme options:

```php
// Get theme customizer values
electronics_store_get_phone()      // Phone number
electronics_store_get_address()    // Address
electronics_store_get_email()      // Email
electronics_store_get_social()     // Social URL (pass: 'facebook', 'twitter', etc)
```

## CSS Classes for Styling

Use these classes for custom styling:

```css
.container      /* Main container */
.row            /* Flexible row */
.col-md-*       /* Desktop columns */
.col-sm-*       /* Tablet columns */
.btn            /* Button base */
.btn-primary    /* Primary button */
.widget         /* Widget box */
.widget-title   /* Widget title */
.site-title     /* Site title */
.site-branding  /* Logo/title area */
.navbar         /* Navigation bar */
```

## Mobile Responsive Breakpoints

- **Desktop:** > 768px (3 columns layout)
- **Tablet:** 600px - 768px (2 columns layout)
- **Mobile:** < 600px (1 column layout)

## Tips for Best Results

1. **Images:** Use high-quality images (min 1200px width)
2. **SEO:** Use Yoast SEO plugin for optimization
3. **Performance:** Optimize images using Smush
4. **Security:** Install Wordfence for protection
5. **Backup:** Regularly backup your website
6. **Updates:** Keep WordPress and plugins updated
7. **Testing:** Test on mobile devices
8. **Analytics:** Install Google Analytics for tracking

## Support

For theme support and documentation:
- See README.md for detailed documentation
- Visit WordPress.org support forums
- Check WooCommerce documentation (if using)

## Common Questions

**Q: How do I change the primary color?**
A: Go to Appearance > Customize > Theme Colors > Primary Color

**Q: How do I add a phone number to the footer?**
A: Go to Appearance > Customize > Contact Information > Phone Number

**Q: How do I set up WooCommerce?**
A: Install WooCommerce plugin and follow the setup wizard

**Q: Can I change the layout from right sidebar to left sidebar?**
A: Currently the theme supports right sidebar. To change, modify the column order in your page builder or contact support for a custom solution.

**Q: How do I create a contact form?**
A: Install Contact Form 7 plugin and use the shortcode on your Contact page

---

**You're all set! Your Electronics Store website is ready to go!** 🎉
