WordPress setup
===============

This WordPress setup is for creating a content website, not a blog. It has an automatic switch for various domains, to move it from a development environment (e.g. *localhost* or *dev.example.com*) to a staging or production server (e.g. *test.example.com* or *www.example.com*) more easily. Includes useful plugins and clean settings as well.

This setup is based on the Dutch version (nl_NL), but can be transformed into any language as needed. However, as this repository develops, I'll only add and modify files and settings according to the Dutch systems (time zone and date, custom post type names, etc.). If you want to translate this to another language, you're free to fork it, but you're on your own. Well, not completely, there's a big WordPress community waiting to help you: [Codex](http://codex.wordpress.org/) and [Forum](http://wordpress.org/support/).

It is a setup the way I personally prefer to use, so it might not be completely to your liking. Even so, I'd like to hear some feedback or ideas on how to improve this. And possibly make it multilingual/auto-lingual.


## Contents

### Clean WordPress installation
- WordPress version: **3.9.1** *([Check here for current WordPress version](http://wordpress.org/download/))*
- Installed in `wordpress` subdirectory, so there's a cleaner document root *([More info](http://codex.wordpress.org/Giving_WordPress_Its_Own_Directory))*
- Removed default plugins Akismet and Hello Dolly
- Removed old themes TwentyTwelve and TwentyThirteen
- Removed dummy posts, comments, pages and widgets
- Added two default pages: *Home* and *Contact*
- Export of database

### Edited `wp-config.php`
- Environment switch: set *site URL*, *home URL* and database credentials accordingly, so the installation can be transfered to another domain more easily. *(Still need to update all URLs in the database using *Search & Replace* plugin.)*
- Debugging on or off based on environment
- Limit number of post revisions to 25 instead of unlimited
- Set language to Dutch: 'nl_NL'

### Modified settings in admin pages
- Set time-zone to 'Amsterdam', time and date to Dutch system
- Homepage set to static page 'Home'
- Disabled comments and incoming links
- Cleaned up screen options *(Dashboard only shows necessary blocks 'Right Now' and 'Recent Drafts', re-ordered some blocks to a more intuitive spot, removed all comment blocks/colums in Posts, Pages and Media)*
- Set all media sizes to 100x100 pixels - Sizes should be set through the theme's `functions.php`
- Permalinks to use Post name *(example.com/contact/ instead of query example.com/?p=123)*

### Pre-installed plugins
I consider these plugins to be default ones that are needed in almost any website. They are not yet enabled in the admin panel, but pre-installed for easier setup.
- [Contact Form 7](http://contactform7.com/)
- [Total Slider](http://www.vanpattenmedia.com/project/total-slider/)
- [WordPress SEO by Yoast](http://yoast.com/wordpress/seo/)
- [WP Super Cache](http://ocaoimh.ie/wp-super-cache/)
- [Add Custom Post Types Archive to Nav Menus](http://wordpress.org/extend/plugins/add-custom-post-types-archive-to-nav-menus/) *(I will integrate this one into my own plugin for adding custom post types soon.)*

And while developing, these are extremely useful:
- [Regenerate Thumbnails](http://www.viper007bond.com/wordpress-plugins/regenerate-thumbnails/)
- [Search & Replace](http://wordpress.org/extend/plugins/search-and-replace/)

### Theme
At this moment, the theme is still the WordPress' default *TwentyFourteen*. It's a nice responsive theme to start with, but I prefer *Bones*. Any time soon, I will create a fork of *Bones* and include this in here as the default starter theme.


## Usage
Follow these steps to use this setup.

### 1. Installation
Clone/Unzip/whatevs the 3 items `wordpress`, `index.php` and `.htaccess` to the *DocumentRoot* of your website: `public_html`, `httpdocs`, `www` or other. If you're on Unix, `.htaccess` might be invisible, don't forget that file!

### 2. Import Database
Import the correct MySQL database export file provided in `db`.

### 3. Edit `wp-config.php`
- Add the correct URL and database credentials (lines 17-58)
- Change Authentication keys and salts via the @link provided in the comments (lines 69-85)

### 4. Admin pages
- Edit admin credentials in *General* and *Users* settings
- Enable plugins as needed

### 5. Create theme
From here on out, it's your party.
