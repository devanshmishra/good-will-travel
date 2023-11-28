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
define( 'DB_NAME', 'good-will-travel' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         '4;dpDyDQCj0))Sar0QfDfIpa20zc5{rEF1B=A[zF!|-B$cq<EGo3TPLJQCg5[r02' );
define( 'SECURE_AUTH_KEY',  'vKHOCm?TjPlzOu]zlkAfD2W#js##^n*=R3/?bA}`$9A<.YS)W/npI.[3{V&v/g<6' );
define( 'LOGGED_IN_KEY',    'K2d=2#$!  [L|BD@w3a@g^,ekn>8K*+X3|$6OM`Sv2^l*W?2/22gb!; 5=Tb9CVn' );
define( 'NONCE_KEY',        'Mx}%P3<+F@H;A-Cs_TK(Jo0q)X1g3|JhO/!`O5~D49t0j t=L5iS+#&TG;?+o,^0' );
define( 'AUTH_SALT',        '93&:b.}lyThL|Kv5Z] ++__NVj)*ik#,dh+7U,oFZ34QY~avLa1HP>B&am~x!^@f' );
define( 'SECURE_AUTH_SALT', 'M_Tq61$0tvd8t0F+.=D0&w/HWQ~}i;{h)P2}>-GUD/}}?TR-qc$WPc:Xu; xdv)2' );
define( 'LOGGED_IN_SALT',   'a-27h={HeHKThD~$28imlr!j^H.jchnn1mI jlsg#E~g8}kg0bT6@hPM74 AZ^NX' );
define( 'NONCE_SALT',       'c *{.<D6/8}z*@rbXK@Ov0>PQ<X[pus6)DF:j4rct[^@B4gYZRz:}@MhT8)m}x #' );

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
