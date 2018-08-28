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
define('AUTH_KEY',         '>y#lWP&O*&=!BPC*S%~X19yn[NRrypA{.J&]t|N3r.n,YU`F].i@r{rhfz]=z$sN');
define('SECURE_AUTH_KEY',  'P5R2&{b)2L5]rhIrfd~),nYJb[q3`,Hz+Dl%bNznla RNE@@_#]bA4r0DodX=tNL');
define('LOGGED_IN_KEY',    'LZfi=_jLOBy//4S4_D>7Z_.Zz6VzF;@ *PaQV8ZleX|(Hn^qSFU6?W!,fmlq?T)9');
define('NONCE_KEY',        ':E*:*{QKC59XG gVdqf&tS_SPWltL5rD`?UGz!0!~2Ej,2tC<VHVe70[C4el/`%i');
define('AUTH_SALT',        '2pOAx;?}Mf{%hqLo5IZ}NW^{Fcl|!vg2VGkC+q~*d*}^:d<H&i>zez:SO3GStbzT');
define('SECURE_AUTH_SALT', 'b&#U&%5aH3>+k7N0HNc5vrbNXpjW<=1H^(TIrbcC*rwd%,sC>=n3?kg%E7N9S-2@');
define('LOGGED_IN_SALT',   '.~P<DfpK|k5[g6Uyask}`~)sU_HdOY@@YaD/5hAA4S&CFMfbg/ys[gTF(rYrx%+o');
define('NONCE_SALT',       'CmgsF3/$- RvTG0[-Yz`[qo+R7N)WcLt~_EY0Y~fU@#8_]hqP5_yl=J+~;Y2VU*E');

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
