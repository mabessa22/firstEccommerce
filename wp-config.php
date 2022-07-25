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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress1' );

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
define( 'AUTH_KEY',         '$VbgInZK_@%D6pC_>wI&HD+v)i2jk@X;EnzcR!.[c4JOYb*1~oup-1RLE,05?fM ' );
define( 'SECURE_AUTH_KEY',  ']&Z$k-aC)tzs|B?sw0psb{tYIK1*@^ ^~1-5]$|ciSIF/4^W}?dh)Z?q8]8=Sew[' );
define( 'LOGGED_IN_KEY',    '<KXU2PfJk/ }[rY19_YPC6L.gN=f>T$tM7rg^4}InfUW@;0A[yP_ROm%. neZ5iM' );
define( 'NONCE_KEY',        'nrKr(#(1}cM,Tsh<n+8gd]a$MTj#7?I?E-!&Z-mH]}RdrTFLqJH&lj}|!afUm8|h' );
define( 'AUTH_SALT',        'P/5na+kyiKah~k1:+!a}5WRHw2j&35twBv|qouVo!u`O$`V2wt_5 6K>{IW%Oay/' );
define( 'SECURE_AUTH_SALT', '~~*oZY$;_C8gbncBa@e8Z2FEgjiGG:~M#iB?SbLO/={#E@pm?`BTgIY}o *>+V8P' );
define( 'LOGGED_IN_SALT',   'vI{e(#.[K kkn=hsKk3JL5uo#h!TUU(Xz,XI-n$N^=_P[C5~u?jE%E1g0;o>Pgd0' );
define( 'NONCE_SALT',       '!aC}{j(| Q6W<kkp#e(#-wcWh~j?%/g(Dw[U%6x?ImA{/<R+#OmE^gy=gLk:eV<z' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
