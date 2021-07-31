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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ecommerce' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '<@o6Qz[rAJ8]l.mqime)]SXv3|iZpfTb2wPLi]LAU3F0h^~iU9y(%&/YKlbU*uYd' );
define( 'SECURE_AUTH_KEY',  'qS?fVae9_rgDdDo^q.wi@O0Uw,{{.(7Qm@B2%@w5nql^sm^V<G|<X+|G,n=WCmrq' );
define( 'LOGGED_IN_KEY',    '`J=P~a@%?C?oH8q-{7d{8s)|d,ymcU8.` c0D|GZe*>2)nrj`9flZlI<T1*6:{?_' );
define( 'NONCE_KEY',        'R,_/FSzxDQ#yVm0 !i^s##1w1]{S>DYnIn|3J,Pv%G7,f(Ao(yekiM=^SIB=>=O|' );
define( 'AUTH_SALT',        ')^cw)!O78>8W#X%Q`P_j#=|VFE<I/>^m_$[|`` |L yFom72L_]0/B>J,a*{TPJ^' );
define( 'SECURE_AUTH_SALT', '>=)$yU{Dwr*dDwNO;2m>AbM!pF>6a<~,EhRp/6J8$I2RgU;jFA&)2DKr.H*o;KWX' );
define( 'LOGGED_IN_SALT',   'M4)DMK~-H]^F=}#cf},E9uhHPlt>[#pJD05lI.e$=DRYrcbcCmQQfqdg{SgfkyT>' );
define( 'NONCE_SALT',       'alJy(BbJ+RD9bAx>gi0g8Wn1HTNnZ7q}3H^fdwi?`z@,FF+h:z%MjN=`9yzInN`!' );

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
