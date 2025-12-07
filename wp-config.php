<?php
define('WP_CACHE', true); // Added by WP Cloudflare Super Page Cache

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'podkast' );

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
define( 'AUTH_KEY',         '8j*72`2#h.PZEoYi]m^M,}OE~|Zf+aKXa#s+U0@e+YMbG}aE-[5KeICP6uYbj~ur' );
define( 'SECURE_AUTH_KEY',  'H~TaaBg7u{t<q6RPW@I4x6hW6|[-w`%[4kq{:(^MU};y 1--}vQYP,JCQd-L/umz' );
define( 'LOGGED_IN_KEY',    '<;y[M,yT=.,X4jBi4X`o9@Pz-`!U[U/C_]tnWvRC)%D}^-lD:Np^b9}MVzF<P&t<' );
define( 'NONCE_KEY',        'r_=z^ry#[(EHo{2~*k$ Vbr.FAPjq22EI*+(^)d*;C|A2t7$]A:ck5.gpZNs(%Zj' );
define( 'AUTH_SALT',        '-*6wSaqFUE0tl7V?;)?^M46O#t )g,W}1F;tSi.-?AzXZ>~a@YMI &Y[OZ^gaXU,' );
define( 'SECURE_AUTH_SALT', 'L*WnLerZHf|1r&bw?LT%[+JZMwNlN0:#sS[|Ig7P}exPR>SN0,7khe{z@*Uj,qOA' );
define( 'LOGGED_IN_SALT',   '?r>~>u!(yjLF@2{4O ,j1:Suvm4MTt*NDvozAlu#f_fuJJd+CBqWfzZLE?3|oiJh' );
define( 'NONCE_SALT',       '-$F gKFX0HB17oRZ31P}c*YRK)sd6f~#b-i6ydxie*3j^nat#:oGz4Y _$-0uxWB' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
