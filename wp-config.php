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
define('DB_NAME', 'vision_wp');

/** MySQL database username */
define('DB_USER', 'vision_wpsp');

/** MySQL database password */
define('DB_PASSWORD', 'e5oefu.c!8^A');

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
define('AUTH_KEY',         'W9w#)1[uwP~Ue20B|RYN*HXMCYN[#K~L]aI$w>jy>Gp#6 e{59Bd@;7Uh4}&uV=>');
define('SECURE_AUTH_KEY',  ')0N%t&MDJ^b%Avmhhxk@F9+_2=AAfnaYP`!v_H8vJA_40i;ACr0T:90Q/pfS7S.]');
define('LOGGED_IN_KEY',    'nGF?y=J6=Fe[68l!q0OXSNHB2E11D:#<Re.|v#YErH>4]zsBO.2`OQ=shdkx;`Q&');
define('NONCE_KEY',        'f@iPcXvM3N+Gh){Ke({s;&o{f<n$:kt=)CX9fh{z2g;,am3hgxE^]z>IxkW%04$V');
define('AUTH_SALT',        'Fu&$h Dy2 {|R%OYWx?+(Xn{c2TZX`eQ2x6%;{jdm_0CeINLX5op=4X${|vQ(H|r');
define('SECURE_AUTH_SALT', 'BZ1w.09:JK3xg]@WSFFdF!5Ej#I9]i[g,j-I@{=L*t(QM8[u-(]oh2ca#wjz)Bd1');
define('LOGGED_IN_SALT',   'RL<krW[3+N=Xy`J~Lis3iWfF{*$>!N%wmmwz5XfxSpWU#b{7b(;T8k(`CnZpDRPL');
define('NONCE_SALT',       '#X>J|0[u Q~@ &6$.H 6M|vl!)V45n!fR:j~-B9Ht9Dp8krw7r1UwqyM4Dn [w H');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpps_';

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
