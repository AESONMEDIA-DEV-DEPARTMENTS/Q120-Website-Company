<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u240499017_8kcPa' );

/** MySQL database username */
define( 'DB_USER', 'u240499017_txZT5' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Z6PR9s4vuF' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '+x3!a]1XYiDSI6DsON4-28`gOtG98pxbFF53/M9U~sqP{.ABoV{bW?x5M52b80~q' );
define( 'SECURE_AUTH_KEY',   'R?3L)hs~=tp#ot,LZZs2E $NnHO.2%5<7*@PL%MJs1O#.U2V:EW0ZZ3&K>aET9ML' );
define( 'LOGGED_IN_KEY',     'iUM+:Ud$JlKU c@Fn^<D8C3ZReQ~VK*I7w,6ZmKU0?,cvsGB^*:R?%)zL;jL0WD8' );
define( 'NONCE_KEY',         'LelUS?5lV;2cJ*?Ne5:P*jR$*eA>mo;%=96nLf}A]XKEN6Nk0lhTllB:2.&I]f0v' );
define( 'AUTH_SALT',         'c=2 g%qi{SA !0qgO-T$(#$jcoN_mkMG6wO>UJq.`Rmr0Mm:f=HV_tBVA;sGx#OS' );
define( 'SECURE_AUTH_SALT',  'bYcU9S_SU>)Y=zQrkP,a5T0CE}%w$Hd 9nwVWa>vyO<0@*Bv @Qs!LtF8W}?e8s^' );
define( 'LOGGED_IN_SALT',    '9No#Q(^R9%0Kys&,e(XVxX}mPx$}lRVg94KnBg+z`EK!l(tRmmJ:|eFgw+/(!+Oc' );
define( 'NONCE_SALT',        'GxmiZz(Wn1@s0T&GUnfIlL.A3b>{?:,o5(HI$>W0]MG|w,cIM,O)I<;3!67t>Z?U' );
define( 'WP_CACHE_KEY_SALT', '(]kA?_O^_Fxpuimky]X2{CSJ$5EY|,xW5o~<]v4}0tO9M05*J{b]&1c^Um^SiPxh' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
