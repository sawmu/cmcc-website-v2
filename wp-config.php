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
define( 'DB_NAME', "cmcc" );

/** Database username */
define( 'DB_USER', "root" );

/** Database password */
define( 'DB_PASSWORD', "" );

/** Database hostname */
define( 'DB_HOST', "localhost" );

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
define( 'AUTH_KEY',         'ZvKE~j;irH7&P!xc8a)+3AjNK3+z>XoKt*i`at%8ZeO9l2~/cfF+tDCK[i}oC:_z' );
define( 'SECURE_AUTH_KEY',  '#DqhQJL3O@q.Vw7r;}/.NDw[,w5-uWW [z?rc**`hfeLv6E/Z[G70K51 *.o~?.n' );
define( 'LOGGED_IN_KEY',    'WgvZNrOn,GT6-2jTeJKHz*j]>+D.qVa:0PFKb7.QgWU#tZLgDe G3qA>m-Mt@w^R' );
define( 'NONCE_KEY',        'Us9+7jN;A}qi*Zdkby6}W34uL2%tmQY9<%3hvujhg):kXIw#M}ApgAO/d#x~SeaF' );
define( 'AUTH_SALT',        'z9ILj/P68D|lOI=`!_@otGhG%0|[5E}.ezKrK,n5CU 8a@D?DX>ixlW-|ALBp`,E' );
define( 'SECURE_AUTH_SALT', '}rKH!-(xF~8<P)thEf~y({dtpJE0:k%|$]{Jpt!#rFn8*h,Fl{GRVJ?_XsB..6q6' );
define( 'LOGGED_IN_SALT',   '7x)E%C6cX3j0^ju(6l0ApP!cyL]E?^E!XcRQ=NP*CMfCBdx8+9kCqUW^c0:aY1:-' );
define( 'NONCE_SALT',       '1L|?,|)d:=~9WeK6`9162_D6Lf=E`F#c)H-qVbF5VUN@hf-K`n4QAaRh6NnXVm_)' );

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



define( 'WP_SITEURL', 'http://localhost/cmcc/' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
