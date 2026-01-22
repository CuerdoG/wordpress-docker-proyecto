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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'wppass' );

/** Database hostname */
define( 'DB_HOST', 'db' );


/** Database ftp */
define('FS_METHOD', 'direct');

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
define( 'AUTH_KEY',         '`M(~n_edq;7A{<izF3,w-F(?vF`##Qn5aq-ar}b0GH:*|!,-qH u]s0_p;$2]?8O' );
define( 'SECURE_AUTH_KEY',  '5BVA_8Opm9@%;E[M0 %0,BjJ|f&!M2cb-z0:]#F,Yp#Ot&!HID0Nc~+aTQ&ys6K,' );
define( 'LOGGED_IN_KEY',    '}c[b0D_TEF,S[7E^7IBcD[S*8TG9pIJDTVZ=F[<YG4^0iJBA|JE>7p3/C *,%HgE' );
define( 'NONCE_KEY',        'ELFm]SZ!_[Iz1@TysZ/7f3%.|+R3}hzUm9u+HJ9AAhD)Wy[x>~s)-/l.j9!vZR}L' );
define( 'AUTH_SALT',        'm:e0}Kz,|s%kzI7+Yf8@dr*.ql/{Biq9g&R<!5Iov(~qHyV7LccfFvMA]Eg7fWLz' );
define( 'SECURE_AUTH_SALT', 'nL6N6wy>8V<A!qjHZ#NWmyt2BrQ2w,=qJrX6[f7BF?# )X.Y,{%azxd|$M4Vl2Q[' );
define( 'LOGGED_IN_SALT',   'bMFN^<7C&2DQglvCluEPp_4)7,y`5q&!x`S3zfM2TmNCE]r/eplHIaZ|Adc)}gm*' );
define( 'NONCE_SALT',       '}doVpPL{]c0aI9X8$,F.$CYe 5zC+V]ZFOVieWS)X`aJBKwX;(ex~2~HkG<pfQ }' );

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
$table_prefix = 'inmo_';

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

define('FS_METHOD', 'direct');

/* Add any custom values between this line and the "stop editing" line. */

define('WP_HOME', 'https://zitadel.a24iriabc.iesteis.gal');
define('WP_SITEURL', 'https://zitadel.a24iriabc.iesteis.gal');

if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
    $_SERVER['HTTPS'] = 'on';
}

/** Opcional: desactivar avisos de FTP */
define('FTP_USER', '');
define('FTP_PASS', '');
define('FTP_HOST', '');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
