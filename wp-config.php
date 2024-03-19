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
define( 'AUTH_KEY',          '.0]@)`<+mcMRv.,B7?182?W8OursbN(C:7yvAx7fi&py0L`o&cWWtk6AaY.W5YRA' );
define( 'SECURE_AUTH_KEY',   '#qUIPffcyBhw2K4yJ>MWLpaa.^ow0JJz_7R,_K|$ck+G&19{eVU9x|ty]M%?OFao' );
define( 'LOGGED_IN_KEY',     'chEdg ERnV5{4o@F#l}5D0UbqYUS@hu.?G iz>>Zx0{L.^=i1D>!h`BB5G?05rWO' );
define( 'NONCE_KEY',         '_|Jty)`?YY`#%U>mzxR81Itk-J(J2ez7;+s%fb3uBN,dTp*p6*`r[m[Jg(NCcmC5' );
define( 'AUTH_SALT',         'Y.-BT:DIvVe:5Zu$jPbe;5QA CqL0<4x/X0XC,niX*Jk^$G,BxS9Kx6^dBojE17P' );
define( 'SECURE_AUTH_SALT',  ')[Zh&6ILkRRWsyCo>:0$@C^@l3g:*wv!S`R6Mo>5(Y-)hT,|ef*^Bh$l*)a!5FEW' );
define( 'LOGGED_IN_SALT',    ';&BWe7Ez*<X]4>GSaG=;,D0_4Gp:JC/7&t)IwY=&BKD5:)sLxzzsr<[!s.7ESfMX' );
define( 'NONCE_SALT',        'lj!luy;N#|SP%6QOp!--=_D#1jR$eG?|]+AfxmPA4oRVJJTgIqeLG4xY>:P$hPli' );
define( 'WP_CACHE_KEY_SALT', 'EK6 ba:.y<$icl#Ugq4GO,(w]p3o4oEDV?b@&C 1#.33-&Pk31x 1wwKD+NLu^!$' );


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
