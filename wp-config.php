<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'dwwm2074_wordpress_template');

/** Database username */
define('DB_USER', 'dwwm2074');

/** Database password */
define('DB_PASSWORD', 'jeanpaul');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'IYvwi#PX(!a*Xn=7;+P#|<]~ubgslbb5Gq>{sf<5_3FlctFd` CnO:taaNY.gH C');
define('SECURE_AUTH_KEY',  ')?p,uvS8yask8o59dPcL]##Y^vL^:f-X5Hl_hcEs:%a{.,-ygq.belM U9QES/t}');
define('LOGGED_IN_KEY',    '4):}#f(mqa&,_q_]}V1aDuB>K&cL)|#Zoz4[heuz1>F[j1X{GVJ2p^l~.)LtZA}&');
define('NONCE_KEY',        'dM <yF73lUu`8iio.iG@*I4[>3@p8[<$J([X8Rhz_6ledgCkE1i(Mn!~7wT.j.nm');
define('AUTH_SALT',        'Jq(W[B7IlA0QCV)N)_Fn.ck|:**H_|vb~q#QM6dbodqf^OWCXGGomp&i488n!YZC');
define('SECURE_AUTH_SALT', '0$ZRf>k,<=iaO/!(#4vq^X$QO^7dB7gtDl|eJ|QYMC2|/-Z064/-Hn*]u%MK=W><');
define('LOGGED_IN_SALT',   '<C|`tP]$k:3Q39xoI%LfsA.tX+T/8BGS/daEWPl:B#[J{~IV8`z)1s^QkPgc*a)a');
define('NONCE_SALT',       'ue2y9GG395[367Ez_@bqxpb-4dSZAQ#e=@K`+Zs},N/7Atsl1wcsJ5>`In}N:Hh*');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_template_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define('WP_DEBUG', true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
