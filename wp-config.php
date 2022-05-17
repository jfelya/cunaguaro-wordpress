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
define( 'DB_NAME', 'cunaguaro-wordpress' );

/** Database username */
define( 'DB_USER', 'jfelya' );

/** Database password */
define( 'DB_PASSWORD', 'jfelya' );

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
define( 'AUTH_KEY',         '3H3DspMkO{-6<|/dfA)aQbroTe^N3/uc]hp!9^](cvmbZH*V2r4RUopGwKCT{S/@' );
define( 'SECURE_AUTH_KEY',  'TfwV@xkb- up#WFHvaJGl./:&9rruwPM2~F#@Tj5X&h@JZ8^=UG%~u$N!}#DUiG3' );
define( 'LOGGED_IN_KEY',    ')g&*-0z!b3SUJ*hIylOkm+zGLBMixQ&GPxECa9%so<pOHTIVt 9:<~F;54TCM0cL' );
define( 'NONCE_KEY',        '>wvtlpaHl7nOO/E[f[ly|G|$C!O<{Uzc,C$+WuP!u+*lxEd@S,euVG@waBZgq5Tj' );
define( 'AUTH_SALT',        'G^b#$ru+),GGJLN;,znagpy#zc&W(Duf%::~J ,Clqq6l*:2.%0>Beb]FIs&I(%f' );
define( 'SECURE_AUTH_SALT', '8s%!n),MDS(mGLb(-CB~*l&(_l~m>HpiI;9h&D3YpR4xMONm<z=T=2ftOu/RX7U`' );
define( 'LOGGED_IN_SALT',   'xZV^xlj34?!-uc#+h<rHhd,ew4P)!kx6K[2UlNb08*-~uf6>~CTE_csRQ-Y@]m[X' );
define( 'NONCE_SALT',       'e6#q(/8:K@%YQwy Ksu)QC~G6n1]9X]d0EZ%k.[}xi/<R:fpLAC:CpT3h%vm;%Ll' );

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
