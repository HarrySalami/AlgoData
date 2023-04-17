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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dbwh8skgtfijk3' );

/** Database username */
define( 'DB_USER', 'uc6rc4lmnhcc2' );

/** Database password */
define( 'DB_PASSWORD', 'gyzb9imv9haa' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'K=zW%)tvDsYuCX0ULb(-,Cw6)q8#Y|/N@KtqYN}aX*QP/!UdTHhP$ |J54OAaG/O' );
define( 'SECURE_AUTH_KEY',   '{_AE7V$Hz8+e[|E%2Q#sCT[Tnak<SeU9c]Nsf,14!^%{m;0%mGt9$$tv5ZF00oX1' );
define( 'LOGGED_IN_KEY',     '>nMl$-ts[|^xh4b4p9JOW!a`.IMCA.GD3!}#Zw>0Y<sI[@.T_E(uno1.b/BB@&#v' );
define( 'NONCE_KEY',         '}Ib5gQ~B!&mJF8GS M.YNv@!NpsmV8yf&bx/W!.l_UJw)Y$IP>VdqIr%J2.2`Es%' );
define( 'AUTH_SALT',         'pu+tTatE|y=>s1xt;+pt9A?A~d~^S`mt,E(peILfo@(,|<M]Y$MzS675:AoqX!&5' );
define( 'SECURE_AUTH_SALT',  'SmJ-8_E.W#4-Twg,kgUsRg;f~#ReSX]%OdDLCPOAu1!{o]:x;*[9c/0+*+psFu/b' );
define( 'LOGGED_IN_SALT',    '*_fZU{g`5?VYiey}^`c<oT}zU!w3;R8u.*PIrY+EyA]ajAwSOKB(X-TQgWKRpZUr' );
define( 'NONCE_SALT',        '+B?7?aL>N*[TufZaP/hp].p15>y5TWKA}P>>GOk`)B8u6Y<(Rqex8=Kuh`,hO0.5' );
define( 'WP_CACHE_KEY_SALT', '3lG%pD$NE>l|wu:_$SadqE)+G371NQ0m@g^_2Af|-1/r1h-I?u]%s}syaMqS8q>5' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'nhm_';

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
@include_once('/var/lib/sec/wp-settings-pre.php'); // Added by SiteGround WordPress management system
require_once ABSPATH . 'wp-settings.php';
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
