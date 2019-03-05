<?php
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
define( 'DB_NAME', 'dt1' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'O/iZkHuW;A0@07/x!6elWjz#FU2D8WnJ>xY[s?d,4yJ6_9d@_XJP|d#g+}UI8[lN' );
define( 'SECURE_AUTH_KEY',  '@^+V]_?Y,;Dda3!j%!9}!BTFZnUSiExpE9/-Q;*=%IvmC[eXh|$[P1V:f(%6A37-' );
define( 'LOGGED_IN_KEY',    'A_ut:]OXsM|iV8hqPkS3i5zNE^>hJlcUWpC2xKX]]@t.f9{a*WW/;A$Le 9^D`jF' );
define( 'NONCE_KEY',        'X;PYakqdp(=Aai2~`:0=# ^bL2k&00E}-(Ng|K8 ;^)(HCZk1UI4DT!]Npw9y/qZ' );
define( 'AUTH_SALT',        'QF3}cAViCYlF[cX ,Jp09~c1Js-m?Z~%P~^t>QKHZ55zYWJ.kBae%{N<kBh#Y[3T' );
define( 'SECURE_AUTH_SALT', '^ofCo#yYLt?lTc}S%5K.tJbM6Y/7D>i&UViZV$3[?l:F+b6DoTA?nwk> QBr8Eed' );
define( 'LOGGED_IN_SALT',   'N/YRA]@p(N|%]gdy>R[H`xe{?bX-?fP-3%otI-M]`;+k<JvJh1f6yWUIM.$%4W@Z' );
define( 'NONCE_SALT',       '3t=@F`I2fGTC/%YmGFC0RDFwiSc0@4>l)S3q>Y>2Ufhs$K~jaagp$bMywG:H:Ssa' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
