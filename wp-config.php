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
define('DB_NAME', 'test01db');

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
define('AUTH_KEY',         'qi*(x2o/.|>@5oT/TZ<y@sg.-p@@[^c|Z-|VNbdhx{A8p0$zbUSma(Jd/!mt.PY(');
define('SECURE_AUTH_KEY',  '3K#(A2NIvK?CwwJF{NLRi=%-?~2T73]DL2+>4:4|e:_UtxlRO,2Ryd4:?5mwYU3Q');
define('LOGGED_IN_KEY',    'W*DOOJC`<#;pbwpuv(P&]tm_Wlu!-IL6x5tg+|n}!]>&4vN7Q@i4l1e k^rHRn:/');
define('NONCE_KEY',        'mIL6QNftu*HdI{:vomh<7yWaW2sRSxx$|oZLKlk,^2MyKLHy%`*w-]1jjjKv#0HX');
define('AUTH_SALT',        '&h~+{vUk](?bU{MCOb[lSlds5-7-Q;IkO+nQ(R+o{8D;:^7R#zbnfE1oD+-VLegB');
define('SECURE_AUTH_SALT', 'er[Cf.kMK?h-u,sVQlb,R%QC233)&%2c%l`#q;&^BIGd#Z9E5Xh}Y|w;!-?67Ii8');
define('LOGGED_IN_SALT',   'f)&HU2g)Q[TJA.*7-fE_=PHvyR;T ,s$bRqKg%@l9_.j9<j|66UA=W}f~;E.=rTL');
define('NONCE_SALT',       'Llicl/v@c=b}b&v61cyM+3iQ-S%OF(~-;Jf#Nz$=m##eG*&fHx-vvlh-r1g4-F/z');

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
