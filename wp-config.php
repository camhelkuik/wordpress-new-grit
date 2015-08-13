<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'new-grit');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'V:?+J[.]_?Cw^7.~-fe1 Flm+YTSjS`!xiUjDoC~}dE)@Q2J*0s }E*gsT#je~n!');
define('SECURE_AUTH_KEY',  '5FCJHtmi*m)Cx.C/*}MR :)Y2V4#vduCcH^eTIGz7d,C`{p[xXy.Rnb*TuoJQR?t');
define('LOGGED_IN_KEY',    'u 8#-Ig+2gSp;/wA[w`$0=XeNY|:Pplk3$*|u@EiNQTQ5uR[L0K.J(0c/PPy|kdV');
define('NONCE_KEY',        '?aD/sG~3gn95-/LY&BGTF7PzSct/|KsNS<Dr,j[{W/9`p4{0|+wi(-43:xs;^l`E');
define('AUTH_SALT',        'L&vH<7S=<#(-n]Nv2^ND) 7&nOK/$aS`vL<0s>+~AY4:t_TUO+DO}wZ+|;#*?qgu');
define('SECURE_AUTH_SALT', '!>(3w+D)Tw%yREnk4B&:;HGVF{-`rrx*X2aKR>p8GIqMb!9}0INS(lb0Ok|G)^v?');
define('LOGGED_IN_SALT',   'fvtuG52*@GH&Qs+dZ|BZ5P E||(Re~p`t09MKGls-ZKd>n:-.j`:W/fwS|0R6{<K');
define('NONCE_SALT',       't)G+7L[1K|=ce`@6RHrlkhcZPL,|] m8Q+2jWmj%@OL0D/+YWoUk<5W:k/tGHTYH');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
