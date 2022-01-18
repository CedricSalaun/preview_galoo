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
define( 'AUTH_KEY',         'ir4;O*;H9lBs,ab*lTeLu8J9gSAcyhw&`Dm+Iy*g0)F0}c~0/4}?E8iIUkcSc<JN' );
define( 'SECURE_AUTH_KEY',  ' to7.;UnW~ZDOalHEgF~-6.@uw} f+sy!nf=AbK*Q[xn{b&A,`ojnZZdOU0b-ZxZ' );
define( 'LOGGED_IN_KEY',    'cx%AtGwMMh=2kq.JKZK5_O<ps,;YwHjizL~f.M]mUIrq:&Ty1h+e*=AqW(UFwM9y' );
define( 'NONCE_KEY',        '8rPCx[yZbYd#nWGeg<*~1?Tb9Kz%vE0$>ssS~t]L^I99A^ax!FB^}cQk~aGAUki>' );
define( 'AUTH_SALT',        'Lic7gAcQQ6:Ruz]rZ`P>w]oTLk6.):O!Xh;:^KxJ![+##_MF)[?-0GCsPkzvTQ>P' );
define( 'SECURE_AUTH_SALT', 'kQ:xgU_wn`#`$$z@|:6Kz<[P|c#3UX50eySk1)cDb_G/I/> qp_[g2txm`if*:d]' );
define( 'LOGGED_IN_SALT',   'a0q(jSL6Q@*|EE*474g4uRy~O9.r5)9WzAdsUOgzWJYlE@^4BV#jE.(m?rj`VP@3' );
define( 'NONCE_SALT',       'oF<Kzvg~}S|KEnVX{YT1 dz4PH0{q2}o2d4n9>xnxla2FG*%@QHBQ-T}Fe-/MF)v' );

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
