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
define( 'AUTH_KEY',         'n-W3`?2ll rc]DD@?~d&S7*BjK.cpB8nU 68r=z|k>XF!G.g2vitY{dcy(To#s}~' );
define( 'SECURE_AUTH_KEY',  'tXmG5oso7 ;BU=jJ#pHl6g$_8B9fIs$kl4~B,&KP%zxbTQ]zc!z)xf|o-?O&XROX' );
define( 'LOGGED_IN_KEY',    'PGl,5`fjOJshw$,63>9(R$K#1^kp^E;_G`73UmR&ZEpg{hai7y:ai|y^9v<]*@7z' );
define( 'NONCE_KEY',        'Wuz#,Nr)zQ11dk2FS1q;(ZxibsRB(Mdsh%d)yZU3C}RON/ZTdW-ws*%(HjECVimr' );
define( 'AUTH_SALT',        'k8Oj0in<erCRGdi)5#439D`s>Hv:lf_{/|zoWmF&H,xp}{zVW[Wn[KtKuFuA,M;M' );
define( 'SECURE_AUTH_SALT', 'fW{b@J#Y3jnIY]`$=Jwt/LhZ#e4S3 *Zgs18^S)hED8_h^I-*@UR(.2%vl Itks,' );
define( 'LOGGED_IN_SALT',   'Ygm|q( #4zjcVhcc/=Wp}Rw`~OdjoZ;F{0gV/+K`/vs{j|%zS$}?792%t(Lv@_6z' );
define( 'NONCE_SALT',       ']_)=>+%ZcN]YxTf|]btcXA=J}?9@hV3Utp=F+!DT`iT;`Bs33-dahxX:q`$$FtC6' );

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

/* Add any custom values between this line and the "stop editing" line. */

define('WP_HOME', 'https://zitadel.a24iriabc.iesteis.gal');
define('WP_SITEURL', 'https://zitadel.a24iriabc.iesteis.gal');

if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
    $_SERVER['HTTPS'] = 'on';
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
