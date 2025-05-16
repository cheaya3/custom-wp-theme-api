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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'xKp[}#yw!;t7 +]d=hw|UrIV*Qa`S]Gdpw@Q1}=UDkz^$=KIYk/~erFIYa`fsyk6' );
define( 'SECURE_AUTH_KEY',   'L%~O@ avGXtTt:g*pU[b%Bg_#u:Pzt!;yH^uQLLv#F`W2+1-mWAM?c5stbl([Bkk' );
define( 'LOGGED_IN_KEY',     'kP&c5i~/f,86J!,NuCh?s7QP^29jcymjjWgU/ut.@KJUr[|(m|Qbju,:$Jb%U[BX' );
define( 'NONCE_KEY',         'a@Y~$?ILwFlSSrc{+#o|v/sng#]eI#Y<4-Z5?ZD?zX@W)Q<,gE=GJ_C4M{@@94;b' );
define( 'AUTH_SALT',         'i2LzoqxXb@1q#JjZW87~wGSv2#r?/i >/[cNqe%-`pMK}7+8C!xZ-hu;l@lpksSD' );
define( 'SECURE_AUTH_SALT',  '4FQ[D)U&^P>l+m^Bkr^3m?,qf@<wOFJI-y?Yia,aYGFzTXAOm@djxCYCH_`jcGo*' );
define( 'LOGGED_IN_SALT',    'Lh^Qq9QD^R9t^y+S2?[D b]#%yf1kr R&-3oLm9+Ssjh&T{k>Oyj]KC+ !7[83qj' );
define( 'NONCE_SALT',        'X=*LAK/Ab|SXe$idhJ/(W{M+v/q731EOc.Y~gT84yD*Zb_1@-r~]h4#k$fv.^zWa' );
define( 'WP_CACHE_KEY_SALT', 'E7Bj8{GU.2*&%^Y+(7#~%Tfqq@@.SckV_^:Z2,X,-ouuOY~W^178-wW^5)$~`sP=' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
