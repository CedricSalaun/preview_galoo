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
define( 'AUTH_KEY',         '<#MaN4F$0}tR`>Kl_-Tky%LU8]68vp9QX#nG- Y2A/#2Yrc.P9~<}3H3,e3kOhG^' );
define( 'SECURE_AUTH_KEY',  '{GOz2nQpgOX8sJp$4!Oxv# Rw3R l_ V2I5^^|LRlu91~rd%BP <E8fMcfz-FtrI' );
define( 'LOGGED_IN_KEY',    '~i%K|`?.$LY>3R<t_-dNBG!1`Z0Rx<=DS^_*6/Q6X_;-)IY,H(!F+*A?[J)?y4]~' );
define( 'NONCE_KEY',        ':i)9$u3v,%r>lTHWk@@YMb6Rvo)q=XAHcEmK>CcE;QH1ziC#K6jqS^k1q93f5C%,' );
define( 'AUTH_SALT',        '9K(u_EICy48ScZJY=*#]){`K%Ne.Xd<:nYi|/r7!80C_32OeisZ?6MfZ|S{1DB>e' );
define( 'SECURE_AUTH_SALT', ']ew|qBT4?ZI9:y.CpP-p8uYVU^en##yDqnYd.Y]#7Q?7J#.(zLaoiINO7(!2vwin' );
define( 'LOGGED_IN_SALT',   'Mer/;y61e`LotO 6V3BnW%LE`q_j{c kd(I|k<4R1}fs7ox7k?p %Rk[1Fa/}#n?' );
define( 'NONCE_SALT',       'N3J.iwpmlF%z@r5$!y(K$i-0_5PS_.~y{z8U*Y?-NslEW%(gCOGJbb?e:DV}O r-' );

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
