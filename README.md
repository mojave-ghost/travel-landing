# Travel Landing - WordPress Theme

A clean, modern travel agency landing page theme built for WordPress.

## Features

- **Fully Responsive** - Works perfectly on all devices
- **Clean Design** - Modern, professional aesthetic
- **Fast Loading** - Optimized CSS, minimal dependencies
- **SEO Friendly** - Semantic HTML5 markup
- **Easy Customization** - Well-organized code with CSS variables
- **No Page Builder Required** - Pure HTML/CSS/PHP

## Sections Included

1. **Hero Section** - Eye-catching headline with CTA
2. **Features Bar** - 4 key features with icons
3. **Top Destinations** - 3 destination cards with pricing
4. **Booking Form** - Complete reservation system
5. **Why Choose Us** - 4 reasons with descriptions
6. **Newsletter** - Email subscription form
7. **Footer** - Site links and contact info

## Installation

### Method 1: Install to Local WordPress

1. Copy the entire `travel-landing` folder to your WordPress installation:
   ```bash
   cp -r /home/claude/travel-landing /path/to/wordpress/wp-content/themes/
   ```

2. Log in to WordPress admin (`/wp-admin`)

3. Navigate to **Appearance → Themes**

4. Activate "Travel Landing" theme

### Method 2: ZIP and Upload

1. Create a ZIP file:
   ```bash
   cd /home/claude
   zip -r travel-landing.zip travel-landing/
   ```

2. In WordPress admin:
   - Go to **Appearance → Themes**
   - Click **Add New**
   - Click **Upload Theme**
   - Choose `travel-landing.zip`
   - Click **Install Now**
   - Activate the theme

## Adding Images

The theme references images in the following locations:

```
/travel-landing/assets/images/
├── hero-traveler.jpg       (600x600px)
├── rome-colosseum.jpg      (400x240px)
├── architecture.jpg        (400x240px)
├── coastal-town.jpg        (400x240px)
└── why-choose-us.jpg       (600x500px)
```

### To add images:

1. Create the images directory:
   ```bash
   mkdir -p /home/claude/travel-landing/assets/images
   ```

2. Export images from Figma or use placeholder images

3. Add images to the directory with the correct filenames

4. Recommended: Optimize images before uploading (use tools like TinyPNG)

## Customization

### Colors

Edit CSS variables in `style.css` (lines 11-19):

```css
:root {
  --primary: #F4A100;      /* Yellow/Orange CTA color */
  --navy: #1E2A4A;         /* Dark blue headings */
  --text-dark: #2D2D2D;    /* Body text */
  --text-gray: #6B6B6B;    /* Secondary text */
  --bg-light: #F7F8FA;     /* Light gray background */
}
```

### Fonts

Currently using system font stack. To add custom fonts:

1. Add Google Fonts link to `header.php`
2. Update `--font-primary` variable in `style.css`

### Navigation Menu

1. Go to **Appearance → Menus**
2. Create a new menu
3. Assign to "Primary Menu" location
4. Add your custom links

## File Structure

```
travel-landing/
├── style.css           # Theme metadata + all styles
├── functions.php       # Theme setup and enqueue
├── index.php           # Main template (landing page)
├── header.php          # Header and navigation
├── footer.php          # Footer section
├── screenshot.png      # Theme preview (optional)
└── assets/
    └── images/         # Theme images
```

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome)

## Requirements

- WordPress 5.0+
- PHP 7.4+
- Modern browser

## Credits

**Design:** Figma Community Travel Landing Page  
**Development:** Mario Salinas  
**Version:** 1.0

## License

GPL v2 or later

## Support

For questions or issues, contact: marosw.sal@gmail.com

## Next Steps

1. ✅ Install theme to WordPress
2. ⬜ Add real images from Figma
3. ⬜ Test booking form submission
4. ⬜ Add screenshot.png for theme preview
5. ⬜ Customize colors/fonts if needed
6. ⬜ Test on mobile devices
7. ⬜ Deploy to production

---

**Note:** This is a static landing page theme. Booking form submissions need backend handling (consider Contact Form 7 plugin or custom handler).
