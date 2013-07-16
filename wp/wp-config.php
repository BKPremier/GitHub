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
define('DB_NAME', 'bkpremie_wp');

/** MySQL database username */
define('DB_USER', 'bkpremie_wpuser');

/** MySQL database password */
define('DB_PASSWORD', 'teO~a=(xkLIw');

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
define('AUTH_KEY',         'ni1=1VzHm4]pD&M`ida= i~F60q>TN/j37S^l^,fO!+p/+=5Z`MsNP&RJq/+IEUe');
define('SECURE_AUTH_KEY',  'eFhm)As(}d9e!3tNpw&kHfd#*wNAcX@=.SS(<E{Zkql|C8gW3~0i-a<i?THST%+*');
define('LOGGED_IN_KEY',    'a:Tou>#mB3mIX1/_NS^~O13iHFPpd3ui3*-o|U$<EM|9Q~+Ww)SsN@-Td&aDD))4');
define('NONCE_KEY',        'OKmmF?-;+%QfpG4?3`[~4/4L*@9rTU&4w`nE=K|`e6}/7cvlOyj!eHerN)On1f+-');
define('AUTH_SALT',        '}zcgo MrA)rj+C=Mr/L^rsnH+N1UFk|9(r{]/ 2kY^5[Wj+dK9F6CGjQ-uJ7~=Mg');
define('SECURE_AUTH_SALT', 'V+Qz?O+AS&rqIYc4F;gipk%B$>?Y+B9Cg@QmJ-T<g~thqAq?k}Zck`~;+o|0xh@I');
define('LOGGED_IN_SALT',   'Z-(ZECvGYBW(ek%_**)P!b2It8[dP{3+M(]!t}z/tEuNr<6bOIzEJ1QoIL*3/v>I');
define('NONCE_SALT',       '5W7_6yOu*y!t0WJo{I]]8R[(~J|+MbSg_bQx`Je4!,{A[3+I9-X|fB+`2%LZ-:iF');

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
define('WPLANG', '');

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
