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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'm0[45.|<n(x1:=Ik,+[@ej+E|%@Ar.mk|g.]3.s6-#`lzOe[^6!yz<m0{XC-Om9+');
define('SECURE_AUTH_KEY',  'V*/8&:=5@>H5^6o4F0U[WGcGFcGMdDXO9$!@B8TnThW(oFF=dmal6(O -jWt&zj;');
define('LOGGED_IN_KEY',    'e&$7l5TfF,-;n$9yUacr+0e_iZjp6OwHb|OG:H6-ZlQm08<7T50LV-R1kG ;L)hb');
define('NONCE_KEY',        'FUxnILG||e-(V40i4SIr{l+If8>7xcED!rY{n))mi8*E@o*R4^@,Y0DL&|}Mis#W');
define('AUTH_SALT',        '-K[dj93B6[]iX!gz<fetSe%6CfJ0*plL_zmMwTpJ-mqlj/WAIG4~P*I%SlupOrp)');
define('SECURE_AUTH_SALT', ':}D+p!J93e+lU@Z!Q4L(~|JucAzrpmV!uH?f^HI(=! mGbkIR(W/i{l58y~aY{3}');
define('LOGGED_IN_SALT',   '^6wToCM~JF1wp+b]gBed2#C6t2ybjLH}q)Rf&UfjKg|4|M|1yM~kW<R)v8~bMga~');
define('NONCE_SALT',       '%6mX>+k~]GXfB(l]a+C]o{I!TNF++xky25fDmD=WAtR=w-|RSlbW|2eVbBwg2Adq');

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
