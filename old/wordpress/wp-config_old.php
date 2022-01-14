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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         ';3Tk{Bfqs07lH<7[f7-x&Easv+HO)jCX22STssrD%KM:;MuO.z1&Vl%f,-}_}en`' );
define( 'SECURE_AUTH_KEY',  'Oox0zI-Opf0}:3h<~PgEwDhH^XqFYS^uFIFfs<!X!,_Bw:WN-*PBW]A,5:X=axwX' );
define( 'LOGGED_IN_KEY',    'suYki[~k@m-P{=[z?(?~ @dmb,.+:kbK%#qjGEBJJ|o4O`=uyx_XH[BSgtMnziF>' );
define( 'NONCE_KEY',        'hr.chbLw2fJgj*a@; m;im,RGK)P_YLV,8`I3E$`mB|A8Le8aJ.sw@s2b-!2-4xJ' );
define( 'AUTH_SALT',        ',(RX7#AwCY&Xa[|*4B)7Ya<d{=k&LgF9bIP7mNQNOx%[>3p2Qf~0a5k/,x&m0rek' );
define( 'SECURE_AUTH_SALT', '/WArrvoRl#zepWPhVhrDUX(L|}dyv|G(?;{n:gi9qgfTp:J0W/H@-J`D2SoO0PKh' );
define( 'LOGGED_IN_SALT',   'p-qJ hLvTCt3n9d`BA^fljWZJ-9;l6Ws:|J<+ n~Uo&af{dAbZ.c`I_ea he|oP&' );
define( 'NONCE_SALT',       'L-<rZH`^Ap8%kN9r%)f KpBplvB/c;m6KAbEi6#|?k:k$%Ju :>3h%]F-[n{VKiR' );

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
