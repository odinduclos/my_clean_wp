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
define('DB_NAME', 'my_clean_wp');

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
define('AUTH_KEY',         'keBDhr^K;2F{Z`cPlBZ!o1LR3D.dT=W+bu&I*Tl#;L `#I:T4bg#/9H@ZOLhMjwa');
define('SECURE_AUTH_KEY',  'O_y@M{(OfZ%Y@g8T*Ud>H~s*&B;L7.RfNV$6Z5mJZ3!wxB;!dMp<lT`Y#QP7;k5U');
define('LOGGED_IN_KEY',    '(rGl5cvW$Nfcyk7?cX|clU4,o[7a2y>ae`1szZX^FAS2$*nNq}XxMH--_cYTB8jf');
define('NONCE_KEY',        ',ir]UQ-|2P3u<!}ubA3-VY#dCq#wXggC8%J@uU;;o`yTU;H5Q!`D4/h?jKmHp];M');
define('AUTH_SALT',        'gu@<L}D])M*DB-xD4uNo|guTElgL`fGo7LZ-e&[x4J#4?,Q8O@$0@yF*((5GCyIF');
define('SECURE_AUTH_SALT', ':m!tI^uh9%mNZ:DmmVo~{O5JVJ82gJ>{9.%YPb=9Oc/O5X.9i0xT{*C[|*d;u7/o');
define('LOGGED_IN_SALT',   'xq$R~!Z>_zK>f,X1Gvw/[TThguc2|s0rnP0l8C+0Cr4_i-^=<x5RRYxyf=%QdR@!');
define('NONCE_SALT',       'o^).FgJoV}}.;Th{2weA92wwR1o$yg-dK}(]wRrM@[ju o.Vsb zQQxMguzaweAl');

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
