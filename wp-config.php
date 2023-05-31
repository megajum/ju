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
define( 'DB_NAME', 'iconfinder' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '~^r>.#-pquP,4vEzBCeT88x[G:m}Xv,Gm30FGM8=lVa%XTuf2]P0pC4EXeL`RJE;' );
define( 'SECURE_AUTH_KEY',  '3scy~b}e;:I|=i8z4SHyk0$f7n`:,CHIAP-Gj!r2d0g11`Eg3PeKc-HztW0&m?|x' );
define( 'LOGGED_IN_KEY',    '!U&~k&0S7XFngMa>YdwndZN JG /J}!h|]Fr6o?h112nvCa79(WG+G{/{`%D99g*' );
define( 'NONCE_KEY',        'a&Yx%}JJHeTg2+%@5jq0qLEE2?wfRKuOV76nMGp+H51jYx=W}F,@}F(fAUN b2r;' );
define( 'AUTH_SALT',        'sZ3%Tne/oO7K$u(HL6c8B&`^AsMD~Nn)MZxT3*T**AFNcg-iYKqQ8q0BA{wXn-r4' );
define( 'SECURE_AUTH_SALT', 'xtlDgEQjc<Mj4|vn*s$4sgZ}+~SmiB}SIIO](bf0gYFZQR/C+qYl-*v+TNG]mY9P' );
define( 'LOGGED_IN_SALT',   'Y`alZ|l3d)Q>~M{CXqXG+}yw%!GSD4_QRL<cTxHj)-VHGz2{*T8hkOTQAW/v47xW' );
define( 'NONCE_SALT',       'W-LKV}g%I,32g${NiUsSc+Wh>/)i!4h_>TZD9dB[0B9m[|{=s7? J7F!dKCuAAOJ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
