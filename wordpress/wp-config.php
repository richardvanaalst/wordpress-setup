<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */



/**
 * Define the server environments, without www.
 */

/** Current server environments */
define('ENVIRONMENT_NAME',          $_SERVER['SERVER_NAME']);
define('ENVIRONMENT',               preg_replace('[^www\.]', '', ENVIRONMENT_NAME));

/** Localhost */
define('ENVIRONMENT_LOCALHOST',     'localhost');

/** Development */
define('ENVIRONMENT_DEVELOPMENT',   'dev.example.com');

/** Staging */
define('ENVIRONMENT_STAGING',       'test.example.com');

/** Production */
define('ENVIRONMENT_PRODUCTION',    'example.com');



/** Path on server (including starting slash, no trailing slash),
 *  if setup is not running in root, else leave empty.
 *  Also set this path in .htaccess rewrite rules.
 *  E.g. when running on `http://localhost/wordpress-setup/`, add `/wordpress-setup`.
 */
switch (ENVIRONMENT) {

	case ENVIRONMENT_LOCALHOST:
		define('ENVIRONMENT_PATH',  '/wordpress-setup');
		break;

	case ENVIRONMENT_DEVELOPMENT:
		define('ENVIRONMENT_PATH',  '');
		break;

	case ENVIRONMENT_STAGING:
		define('ENVIRONMENT_PATH',  '');
		break;

	case ENVIRONMENT_PRODUCTION:
		define('ENVIRONMENT_PATH',  '');
		break;

	default:
		define('ENVIRONMENT_PATH',  '');
		break;
}



// ** MySQL settings - You can get this info from your web host ** //

/** MySQL hostname, database name, username and password per server */
switch (ENVIRONMENT) {

	case ENVIRONMENT_LOCALHOST:
		define('DB_HOST',           'localhost');
		define('DB_NAME',           'wordpress_setup');
		define('DB_USER',           'db_user');
		define('DB_PASSWORD',       'db_password');
		break;

	case ENVIRONMENT_DEVELOPMENT:
		define('DB_HOST',           'localhost');
		define('DB_NAME',           'wordpress_setup');
		define('DB_USER',           'db_user');
		define('DB_PASSWORD',       'db_password');
		break;

	case ENVIRONMENT_STAGING:
		define('DB_HOST',           '');
		define('DB_NAME',           '');
		define('DB_USER',           '');
		define('DB_PASSWORD',       '');
		break;

	case ENVIRONMENT_PRODUCTION:
		define('DB_HOST',           '');
		define('DB_NAME',           '');
		define('DB_USER',           '');
		define('DB_PASSWORD',       '');
		break;

	default:
		die('Boo, no environment defined! Edit <code>wp-config.php</code> and add the correct credentials for this environment.');
		break;
}

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'auth_key____________use_link_above_to_generate_unique_64bit_keys');
define('SECURE_AUTH_KEY',  'secure_auth_key_____use_link_above_to_generate_unique_64bit_keys');
define('LOGGED_IN_KEY',    'logged_in_key_______use_link_above_to_generate_unique_64bit_keys');
define('NONCE_KEY',        'nonce_key___________use_link_above_to_generate_unique_64bit_keys');
define('AUTH_SALT',        'auth_salt___________use_link_above_to_generate_unique_64bit_keys');
define('SECURE_AUTH_SALT', 'secure_auth_salt____use_link_above_to_generate_unique_64bit_keys');
define('LOGGED_IN_SALT',   'logged_in_salt______use_link_above_to_generate_unique_64bit_keys');
define('NONCE_SALT',       'nonce_salt__________use_link_above_to_generate_unique_64bit_keys');

/**#@-*/



/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';



/**
 * Set portable site-root URLs
 */
define('WP_SITEURL', 'http://' . ENVIRONMENT_NAME . ENVIRONMENT_PATH . '/wordpress');
define('WP_HOME',    'http://' . ENVIRONMENT_NAME . ENVIRONMENT_PATH . '');



/**
 * Disable WordPress auto-update
 */
// define('WP_AUTO_UPDATE_CORE', false);



/**
 * Limit the number of post/page revisions
 */
define('WP_POST_REVISIONS', 25);



/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'nl_NL');



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
switch (ENVIRONMENT) {

	case ENVIRONMENT_LOCALHOST:
	case ENVIRONMENT_DEVELOPMENT:
	case ENVIRONMENT_STAGING:
		define('WP_DEBUG', true);
		break;

	case ENVIRONMENT_PRODUCTION:
	default:
		define('WP_DEBUG', false);
		break;
}



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
