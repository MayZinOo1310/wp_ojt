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
define( 'DB_NAME', 'wp_ojt' );

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
define( 'AUTH_KEY',         '0CPBF3q0SV3{T!6i:J=Nn^+e!rj92`;w5R,Qt*~ZVO olvOM/M0=H66yet,`h]CL' );
define( 'SECURE_AUTH_KEY',  'l@a[%iS_I$nstC_C6vYb>oW)j/-)b<w&S#joIz.V@CT80|]!-x~/ O}Ao] z=3R:' );
define( 'LOGGED_IN_KEY',    'nN&qp0_GdJy%@tl^/@X&V71i[s~mbQEW]ErS$$}HxK+y@(T0KS=rX9?b!LQ5#jG{' );
define( 'NONCE_KEY',        'H=IVWC cOJx%6xuXOc[-8szISt*-K42!p8)!.XfVR2ftnP$[]H`Bx0;(envbHp%d' );
define( 'AUTH_SALT',        'd(/:p^ltDM~1 eZj9Yi+LoYs&sQ/NXr2>wWjn_Q?h_1ywMLgooSK,iF^+YfFLzqt' );
define( 'SECURE_AUTH_SALT', 'l9?c`u,8>=@hrtsx3+-XzLZ0z`KAH?9dJD]]~vV%l8KdW|`?6hPT,h|4}Ak@-bPj' );
define( 'LOGGED_IN_SALT',   'OjDz$7t/<qb2.eGH`w?#RYOAZf~PV7)]F:rD:-n@H&&K$Z_[O],#yBc&W#T}#z}J' );
define( 'NONCE_SALT',       'bK`&sV`rnR( PG>,ujS8<fw+7{u88&9uj{PAfu{mh9]aD5+4JTV:0!45UAzCNh1)' );

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
