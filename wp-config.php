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
define( 'AUTH_KEY',          'Xy^3OkzZ:~-I}fH$YbSUMN]wMI+rP2vNUz_rP+ZFyLZ/Wa`kZLye1D/^/WL!$!U,' );
define( 'SECURE_AUTH_KEY',   '4a<f<^GfhWViVIJ?89n:}AH5ns1-frdHXS,H&{=kC{c|p`=;[O**c.wPP!CD1&6{' );
define( 'LOGGED_IN_KEY',     'p7=mRu^Q,;4)pr#n_:A{+ZAx( x99_>bl5mOE,[3z`G&j]#6Rn%1(O.bm;;ooDI]' );
define( 'NONCE_KEY',         '[uy7^RNJN8lwKf2);MJ1J,pwF|6cqNciaYio5wD*3dxC&~jm.)X:T5J6*KV@AY/`' );
define( 'AUTH_SALT',         '$Mzpp#X>((u;U5p9P8EuFwt{6>7wiT>L6nAn2pwCepx#8Bq& H4gfH&AzHnc{vnY' );
define( 'SECURE_AUTH_SALT',  '<RNWT}d}X8;ExUFFPPv53T9?/]$b8/uxyP;ZW>m5~wV1+Y WS!gL4^$E^qP0)uIZ' );
define( 'LOGGED_IN_SALT',    '$.0r|PLe*Z*ac0gG`cZ>(?2UpB:2;wqMNTrZf::w4m4AkkT1<u)`2Xf#27<b!~7Q' );
define( 'NONCE_SALT',        'dz;r4mJ>/i@7yl:y3[.dNXr!mTbq#Hd=QOZ`]8Myel!W<Rc@7#/*(0OB (b0tEx(' );
define( 'WP_CACHE_KEY_SALT', 'T.QrT,=9((M-.CW#_qi|[Qx=}N9.$y{(/Bv2BJ>Z-0{qnqhqno{@eD$|Z=NA*E}t' );


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
