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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'custom_wordpress' );

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
define( 'AUTH_KEY',         '[59f=DyJ[?q(#]#mm|Yl.KtroCBeDQ&-WL`^U$gl%q{KwO /G_Df5b![S[3YXP~m' );
define( 'SECURE_AUTH_KEY',  'zPa1!QD]<l<:E{ kdniqp1G?3}029:4ZgyPH.Az2gF+c>U%>3,V#vQ_ y&{BdL2b' );
define( 'LOGGED_IN_KEY',    'gOfJNFfye$H2ci=*KX7h/HC^RXV}pfa8sjsWsH2twNpvP?IZl=c](&`N&q::<hs.' );
define( 'NONCE_KEY',        'x`48KD/qm`nf>Ew_#WqZ)@B,!^~; AxAz~Q!#Y[5B_<(hVKM$p?~IY-rCAfP~ni4' );
define( 'AUTH_SALT',        ' xHwPZ44wY=>$h~:[|e?Ta1BJa$KHG >3D$l^Jknhv;{$^|`XyZpQR($Khdpp.O_' );
define( 'SECURE_AUTH_SALT', 'I44VA`BTg`TbVHl[OPC-&kf4u0#lkE4s6:TK=7iw<YT2g6Hs7b7aPU])G>L4Y`>+' );
define( 'LOGGED_IN_SALT',   'g(`CEZr||p~PvWxCUc8>?IJAIHwsE;B/wTva{})HuyJGt@c3bLag_j?#_j>xfx|,' );
define( 'NONCE_SALT',       ')w3-mkQzrzGXfqa]4W2&CZ&VB<-p_cc72KS=r+7t]$JuC{}P8xMbyaFBR&i0c{EV' );

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
