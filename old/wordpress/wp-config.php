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
define( 'AUTH_KEY',         '+^m}|q>P!%k^PcM[JxTan>L(X)c|O?5s~tg?U%DaCcuc_&;gsNi!T1m3auhS3DRk' );
define( 'SECURE_AUTH_KEY',  '9^.?AZgq}~2=]+LJK75ZBvY]tjXa>i)4K`,36pqC+CzW4x*4:JbM>$Qc2Xg1&8kS' );
define( 'LOGGED_IN_KEY',    'n@URsBq^3C=7n70ZPeb;C=q&vu.kY&jP1^A|&^-dkz7:A^M*W7M;ymocFn[OI(Td' );
define( 'NONCE_KEY',        '%)%?!6hU+3vJM.S3rbC@XZ%8#2vtJ*Qe {;XNBf*LGlAxPQs;753v!`:_09i+ 22' );
define( 'AUTH_SALT',        'qb;mFx>!wbz|a|B?xs!9d1;1=`m4KKbei-fGBH19FA12JKr7a_ZmY.LN>rzu;IH1' );
define( 'SECURE_AUTH_SALT', '0A_,O?~*4RTKJhe_$3dYDT9cA]bLIUuv*%|.?}g{yA1@<mBuQNFJD.Ah>5p+d)Fx' );
define( 'LOGGED_IN_SALT',   'QP {vsWh6ep+05FNfq7arD]%{uXGf.E{KbGYP2NZ2`4uePp&4Ql)%k]lFTRago[j' );
define( 'NONCE_SALT',       ' tg1wic{gm7kRPVQwOrknoZWIdmAiMP{~H.2I!8#^,C&K,ia_pC}m1Zda06IC9TQ' );

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
