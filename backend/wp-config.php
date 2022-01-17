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
define( 'DB_NAME', 'preview_galoo' );

/** MySQL database username */
define( 'DB_USER', 'cedric' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'JK0l0P2(d]]bR&--|rK=!_R[j^2%l%]BgzL}Sno-h:r<8ayMLk{dQ:B{:G];.1zN' );
define( 'SECURE_AUTH_KEY',  '*+2f$*&eUrejiCtt<RLlz_jK&cu_P>kuJU]Oso&@2q+z[<jRh<8[-,#5LHe0taz|' );
define( 'LOGGED_IN_KEY',    '-eh<2642;EM]^4Bh$e2Gn2ulBGDl,o^^ORh1!iNF9Sc[B_Erk.h#;[>!9y6tmcab' );
define( 'NONCE_KEY',        ';fc#@+`R 4.Z|&35hUK HC1Ibqk<_6v>}uw2T*J@X3;ClO] DISptk}~a7o:v$>I' );
define( 'AUTH_SALT',        'M(<Tnvwe(9?an3K]m~vBQNqW>#.oz}sH5{Pz&sr^xl9jin.A*5K6vjkpprpP2{7b' );
define( 'SECURE_AUTH_SALT', 'VozbgrOuRzg-Gt RQ}@N[h0?1JSQvEh^I_Oz[B98ZB>Xv]rMCa]WhHek2!o&_H3s' );
define( 'LOGGED_IN_SALT',   'EW~Ua2XCMkp/5]=?tLv!R6S+w+1e[X1Z$S:I5V_zVT^ng*O}dTW,U#BXb;Q3nkV9' );
define( 'NONCE_SALT',       '6+KmX3gOtD3<b}1eFo^~2)/ ^Z<M8b%{ThbS1Mx~/ $LHA)7Mj74g.^m}Q}gZb>9' );

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
