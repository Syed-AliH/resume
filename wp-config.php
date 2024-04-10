<?php
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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio' );

/** Database username */
define( 'DB_USER', 'Admin2' );

/** Database password */
define( 'DB_PASSWORD', 'Ali@61101' );

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
define( 'AUTH_KEY',         'qxHBp^U$7$(Z|xchM;nFxzYHFQY-^y6s)?m. D6D-AFK5(4mSMRx@a&1f6 Dt1Rb' );
define( 'SECURE_AUTH_KEY',  'v`s#H}[8tRJ[ z 0`[auFN7P2<<,*Zftt5H29VC/Yh/n@!0Ag&VQ- bZZ/uFh@mi' );
define( 'LOGGED_IN_KEY',    'M},NDd~%*JbB5=t&-+&tKSJ9t<S-3SxG6g632JQUX4)(%JRD8bpIuP#V+NT{;EB~' );
define( 'NONCE_KEY',        'guB9L,ZK2g*eU0nO4.^D;Oy>=!{C0?PF6b15Rc`kM,v#X$P%updt{gH1/)|3x7Eg' );
define( 'AUTH_SALT',        'y.5k!Y%1YkQ}Vd# Ck<qeo]c4Vdwg9Di3]a/`EHb)(@yh^5JY#yIJj o]lO]kMjO' );
define( 'SECURE_AUTH_SALT', 'G0WopG8Pq $2G0R@.sdZKVuwoj`KQq[.^qq[ulzRR^Gv3KvS{Qr~3W[7E4gnb{;P' );
define( 'LOGGED_IN_SALT',   'e6=^QkN)k;`OXh4y~BoeODLE:V~;WAs%IuLc)KmOvqTqVa_Zjrc8v{g]-ZYb00/K' );
define( 'NONCE_SALT',       '^NEZsj3wOw)xXn/<{5Qm>def ,EtCIgav%pp6}5g4H=vPrj/D.3)8QV$-E=$s%XS' );

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
