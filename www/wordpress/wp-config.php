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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_setup');

/** MySQL database username */
define('DB_USER', 'db_user');

/** MySQL database password */
define('DB_PASSWORD', 'db_password');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'p*H3.PrI0d[.Ui(Sf<r03):/W$o?-/ &4XK|6PQncs:O;`Idx-p4$}yAI|`L6Kic');
define('SECURE_AUTH_KEY',  'cg} 2+l/`c/0-1^!}NgBb-(pn.2O]@[9=|M.JmL&Tj=D:m$+BGk,MrkqHO~ER`-T');
define('LOGGED_IN_KEY',    'A>h++N>nx>gw!Iv(;r]ugW|}>1Nl(OlX7/|-P-V]!i&!Di5u%Zg}4a+>|+-#z7Pb');
define('NONCE_KEY',        '1lA*%r]D~i_(]$2XN8r`Wja?>a&@>]zCXQ0FP!Tdz!h1u$Xi}u G*`4^_h0J368A');
define('AUTH_SALT',        'L+Bp/(r*#cK,@HE/72Ib5,iZ<)b-tX87}@I(~)XlK^HCMm<8:,Cckq_N4*dV&(D<');
define('SECURE_AUTH_SALT', 'lm</Tv*L.kbX]Fce88ypL#GFdsMGZUghK+z5In|DH)./K]v4+uniLF/g[IIIxD%L');
define('LOGGED_IN_SALT',   '^0XM>p9I9%i%Gu)Qk+?yDZ2EX4{Uyzu`&&%N*-EPD-`<bXGG+Tp)z/DM[5J[]~)`');
define('NONCE_SALT',       '7X+hLwhchqFrA.|P%;mOff3RC6,Qe4|cQRLFI2eYTx?/&.`x8mic&+=ben$mc>}k');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
