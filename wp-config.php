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
define( 'DB_NAME', 'el_foro' );

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
define( 'AUTH_KEY',         'LZ{W}|E5gx4!7%vf?F]Et#7z}|6`7vsBXPVzI)?|$0f~=n2bX+^@zpjSsR Lp((G' );
define( 'SECURE_AUTH_KEY',  '86_;L>`F*v@EMusq]/B(hq%kU(*:`majbYbX_^EBX=}|-]4ODDFg$u t6)F$luAs' );
define( 'LOGGED_IN_KEY',    'mx#uslV#Pr#:(M]ORq@*AZRUN*aDQ)O<.,h/uuX_bcW{KUh?EUu!j( !*AQ}Y-Wr' );
define( 'NONCE_KEY',        'er{$]:^Jo/@n}gkBvZd9[SAfkJhfEYB8R(!Ci]15e%4F}L4`hHh-dNr#(k8.YK!e' );
define( 'AUTH_SALT',        '&fgc,b-|~V90Jy %<N`H bdS%Q;PVx?aSIa.v}s OKkSBnMu%eS$(scII*Jj@Qgp' );
define( 'SECURE_AUTH_SALT', 'x^b9&S2(U=14aW 9OA4v6^D!a_-jn1~lltj.KIdkzWto tG@&0-STFuJj-+S)D||' );
define( 'LOGGED_IN_SALT',   '( $q`fSwCl)L2$.EJf^=oy!-.$!+v)%[#DPa?-yzb ~m5Tr9`P2J7cf+Exo=Z%84' );
define( 'NONCE_SALT',       '0;B< Nx?T$)}hc1v!)%V<0$Z6OWX{1Wo|ee?5$=Hlfe48Ed13A@3v)xok!k,~tP/' );

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
