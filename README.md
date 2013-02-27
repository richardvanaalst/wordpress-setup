WordPress setup
===============

This WordPress setup is for creating a content website, not a blog. It has an automatic switch for various domains, to move it from a development environment (e.g. localhost or dev.example.com) to a staging or production server (test.example.com or www.example.com) more easily. And useful plugins and clean settings as well.

This setup is based on the Dutch version (nl_NL), but can be transformed into any language as needed. However, as this repository develops, I'll only add and modify files and settings according to the Dutch systems (time zone and date, custom post type names, etc.). If you want to translate this to another language, you're free to fork it, but you're on your own. Well, not completely, there's a big community waiting to help you: http://codex.wordpress.org/ and http://wordpress.org/support/.
It is a setup as I personally prefer to use it, so it might not be completely to your liking. Even so, I'd like to hear some feedback or ideas on how to improve this. And possibly make it multilingual/auto-lingual.


## Contents

### Clean WordPress installation
- WordPress version: 3.5.1
- Installed in `wordpress` subdirectory, so there's a cleaner root
- But delivering the website from the root (via htaccess: http://codex.wordpress.org/Giving_WordPress_Its_Own_Directory)
- Removed default plugins: Akismet and Hello Dolly (Really, what are they still doing here? Go play bingo with IE6. )
- Removed old themes: TwentyTen and TwentyEleven (Again: really?)
- Removed dummy posts, comments, pages and widgets (Now shoo!)
- Added default pages: Home and Contact
- Export of database

### Edited `wp-config.php`
- Domain switch: set site URL, home URL and databases accordingly, so the installation can be transfered to another domain more easily. (Still need to update all URL's in database using e.g. 'Search & Replace' plugin.)
- Debugging on or off based on domain
- Limit number of post revisions to 10 instead of unlimited
- Set language to Dutch: nl_NL

### Modified settings in admin pages
- Set time-zone to Amsterdam, time and date to Dutch
- Homepage set to static page 'Home'
- Disabled comments and incoming links
- Cleaner screen options:
-- Dashboard only shows necessary blocks 'Right Now' and 'Recent Drafts'
-- Re-ordered some blocks to a more intuitive spot
-- Removed all comment blocks/colums in Posts, Pages and Media
- Set all media sizes to 100x100 pixels; sizes will be set though the theme's `functions.php`
- Permalinks to use post name (http://example.com/contact/) instead of query (http://example.com/?p=123)

### Pre-installed plugins
I consider these plugins to be default ones that are needed in almost any website. They are not enabled in the admin panel yet, but pre-installed for easier setup.
- Contact Form 7 (http://contactform7.com/)
- Total Slider (http://www.vanpattenmedia.com/project/total-slider/)
- WordPress SEO by Yoast (http://yoast.com/wordpress/seo/)
- WP Super Cache (http://ocaoimh.ie/wp-super-cache/)
- Add Custom Post Types Archive to Nav Menus (I will integrate this one into my own plugin for adding custom post types soon.) (http://wordpress.org/extend/plugins/add-custom-post-types-archive-to-nav-menus/)

And while developing, these are extremely useful:
- Regenerate Thumbnails (http://www.viper007bond.com/wordpress-plugins/regenerate-thumbnails/)
- Search & Replace (http://wordpress.org/extend/plugins/search-and-replace/)

### Theme
At this moment, the theme is still the WordPress default 'TwentyTwelve'. It's a nice responsive theme to start with, but I prefer Bones. Any time soon, I will create a fork of Bones and include it in here as the default starter theme.

## Usage
Follow these steps to use this setup.

### 1. Installation
Clone/Unzip/whatevs all files and folders inside `www` (including the possibly invisible `.htaccess`) to the DocumentRoot of your website (public_html, httpdocs, www).

### 2. Import Database
Import the MySQL databse export file provided in `db`.

### 3. Edit `wp-config.php`
- Add the correct URL and database credentials (lines 17-58)
- Change Authentication keys and salts via the @link provided in the comments (lines 69-85)

### 4. Admin pages
- Edit admin credentials in General settings and Users settings
- Enable plugins as needed

### 5. Create theme
From here on out, it's your party.
