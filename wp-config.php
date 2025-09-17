<?php
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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'siteoffline' );

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
define( 'AUTH_KEY',         'NqqZ3P[_y{e-~#4l)(RS,5+{K<+zHE%sWNzPfWeL3:@L+/+nAmG[p=I(uTXF5]87' );
define( 'SECURE_AUTH_KEY',  'Eh~[+6E7dE=P=crTvJ&8W>1Jkj}*}8$OuroNt|@V_Xtc0wRhDCG]isl8AdV}p#%N' );
define( 'LOGGED_IN_KEY',    '7ZNP<sdBAig/h~lLL&6+|vu.TULenN26o>OiO2&F79CvQ2_6xe$+nIg*!xO=:ZD:' );
define( 'NONCE_KEY',        'P8bjxAphX;BqK0TcojQT1kHyAOiwydR*WmO&BVW ;-WIz4^;wK:)c{] I%*sd`?E' );
define( 'AUTH_SALT',        'BGuZl?exdubUdAyuR$[XUdQ)l0*JNaQ)aa)]VYd2,C0T-Xv$}*5b:27i-Cpo^WiI' );
define( 'SECURE_AUTH_SALT', '?7%qXz_gXDdw.o>$J>&JqUK+lB:8:#iOb6;V740g+R%ei)B7nb7fy4k&r)3S.k$u' );
define( 'LOGGED_IN_SALT',   'uSAK!tU%nR^1]:G|l-wj)Ynv_BlL^o.;-uo_|7~z/HNI:%-@(svtN$j&J0mYx($B' );
define( 'NONCE_SALT',       'bT*1pCSxp+~aIh0K=Us=bb[,lY(Z(e3cF,q|wW~lxrho02UGDWC&oi.,gmDzarbK' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_siteoffline';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
