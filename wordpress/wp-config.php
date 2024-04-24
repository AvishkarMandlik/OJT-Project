<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'a6nnxd:r]?rj1H2cxT{-$e:@LbRL{viSjdmfyA*b{v,Nf}d1P2&2XV5I7hI,drYK' );
define( 'SECURE_AUTH_KEY',  'VPj{o;iUv|@ud.^)9;wqflyW#{#afU/t6<Kx&Il|QmeB0)o~:#Ov6zciV%*{XU%W' );
define( 'LOGGED_IN_KEY',    '*iP*F.XyH_yW>Bp+QIPD,`.q%Z>?ckPIT,P`ukrWS(<W)]?y60|{v+4s*&amc.6L' );
define( 'NONCE_KEY',        'EZ|;VVGg%0!=BOx)yP %Y}vP_Sy{xbvPH0I@o$J2yR7{#?^?.90%zAP_FS2Y4r~3' );
define( 'AUTH_SALT',        'b/*o}5uJ7/ nFvG=X_=`!&@9[Ja(11F(@nI[Ke>KY9FCk?)+Q?!2R1![7JgU.Lp>' );
define( 'SECURE_AUTH_SALT', 'e~AU:5)6J3idGiB2T{{~perpkkY~o:5gHy<#hiCWBS>,.>!$iS54PGLa=@;6A3kN' );
define( 'LOGGED_IN_SALT',   'lS1N}Tq~k%],ahE+}G~_O-xiVAIt~Xms+@vI`l8/~Hq+g>r?D~54=Co3(!_??yQW' );
define( 'NONCE_SALT',       'z_o58ABm1ZtN&1<Gr^1$Q<mO ml)v(MUWVgd]tWAWZ,.n[s1h2]2D0lhm}Tg<2]q' );

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
