<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'energiekompass');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '1D=XQpm}<LZRw1|ey1*n>! Ry]3vu9~yBX^~[.T0)&)YWq k(y%-a-Mg3/*So4}}');
define('SECURE_AUTH_KEY',  'pz=k*wsf;0wNV4!icl?076Fj*`ggv#qHP)o0,OO&puQg?7*s8.~KWsr3&f{iP,}b');
define('LOGGED_IN_KEY',    '(=#wCpHX2>J#4!~2kDD64M!E[k~t;9?nrb:G*y}(FCbvJHb*!d060g#|o%B+MRX>');
define('NONCE_KEY',        'C&]^`w-b/e(1@9,mwDJX ( XqoGNQg0P5ZZvD<3GcebCW: b3e.]OS*4#usk3Hbe');
define('AUTH_SALT',        'U^7=4/QA AxPe2%#VC(E]cm-T,r}d__sYJK|p9+4[UHmPcao`Hwso>#ZPx$zH>+o');
define('SECURE_AUTH_SALT', 'KR(,m_1>KWo<nGR~*~3?#R8*^sp11>Ql{5rbvhkC[k|!ldl-F}UTI6wgF0(YLLj2');
define('LOGGED_IN_SALT',   'faIWMRG+HPSn:/pQG-`5.{>YN0Y?CzL5z|rU%7:@]>)??L^.ASXVx@q`iMD*}7B]');
define('NONCE_SALT',       'Hbnr*@CybuJHQ,bKzY3%:>=.Q+VOemvipHmcgg99J ^Okg6Iy,1!X_^f*{#d[/u|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
