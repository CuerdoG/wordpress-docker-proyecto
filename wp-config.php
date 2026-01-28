<?php
/**
 * The base configuration for WordPress
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
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
 */
define( 'AUTH_KEY',         '`M(~n_edq;7A{<izF3,w-F(?vF`##Qn5aq-ar}b0GH:*|!,-qH u]s0_p;$2]?8O' );
define( 'SECURE_AUTH_KEY',  '5BVA_8Opm9@%;E[M0 %0,BjJ|f&!M2cb-z0:]#F,Yp#Ot&!HID0Nc~+aTQ&ys6K,' );
define( 'LOGGED_IN_KEY',    '}c[b0D_TEF,S[7E^7IBcD[S*8TG9pIJDTVZ=F[<YG4^0iJBA|JE>7p3/C *,%HgE' );
define( 'NONCE_KEY',        'ELFm]SZ!_[Iz1@TysZ/7f3%.|+R3}hzUm9u+HJ9AAhD)Wy[x>~s)-/l.j9!vZR}L' );
define( 'AUTH_SALT',        'm:e0}Kz,|s%kzI7+Yf8@dr*.ql/{Biq9g&R<!5Iov(~qHyV7LccfFvMA]Eg7fWLz' );
define( 'SECURE_AUTH_SALT', 'nL6N6wy>8V<A!qjHZ#NWmyt2BrQ2w,=qJrX6[f7BF?# )X.Y,{%azxd|$M4Vl2Q[' );
define( 'LOGGED_IN_SALT',   'bMFN^<7C&2DQglvCluEPp_4)7,y`5q&!x`S3zfM2TmNCE]r/eplHIaZ|Adc)}gm*' );
define( 'NONCE_SALT',       '}doVpPL{]c0aI9X8$,F.$CYe 5zC+V]ZFOVieWS)X`aJBKwX;(ex~2~HkG<pfQ }' );

/**
 * WordPress database table prefix.
 */
$table_prefix = 'inmo_';

/**
 * For developers: WordPress debugging mode.
 */
define( 'WP_DEBUG', false );

/* -------------------------------------------------------------------------- */
/* CONFIGURACIÓN PERSONALIZADA ZITADEL                                        */
/* -------------------------------------------------------------------------- */

// 1. Método de escritura directo para evitar peticiones de FTP
define('FS_METHOD', 'direct');

// 2. Detección de HTTPS para evitar bucles de redirección
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
    $_SERVER['HTTPS'] = 'on';
}

// 3. Configuración dinámica de la URL (IP o Dominio)
if (isset($_SERVER['HTTP_HOST'])) {
    // Forzamos HTTPS en las URLs de WordPress para que coincida con tu puerto 443
    define( 'WP_HOME', 'https://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_SITEURL', 'https://' . $_SERVER['HTTP_HOST'] );
}

// 4. Forzar SSL para el panel de administración
define('FORCE_SSL_ADMIN', true);

// 5. Desactivar avisos de FTP
define('FTP_USER', '');
define('FTP_PASS', '');
define('FTP_HOST', '');

// 6. HARDENING: Desactiva el editor de archivos integrado
// Evita que un atacante con acceso al panel modifique el código PHP
define('DISALLOW_FILE_EDIT', true);

// 7. ESTABILIDAD: Limita actualizaciones automáticas a versiones menores
define('WP_AUTO_UPDATE_CORE', 'minor');

// 8. OFUSCACIÓN: Elimina la etiqueta 'generator' del <head>
// Oculta la versión exacta de WordPress para dificultar el footprinting
remove_action('wp_head', 'wp_generator');


/* -------------------------------------------------------------------------- */
/* That's all, stop editing! Happy publishing.                                */
/* -------------------------------------------------------------------------- */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
