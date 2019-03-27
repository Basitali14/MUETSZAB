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
define( 'DB_NAME', 'testwordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'uJ2?;GVJf>us@DHo^W&A_gqgF:%:O.:FhnnkF~r6mU9^R1ADlBa{XB>Pc+l[-;c ' );
define( 'SECURE_AUTH_KEY',  '[_Y)2bYEuq!_{bU^$U z h~4KCCHZ1*.J24T7S}i>Upbz[`M:cdu~=qw}X&Mw157' );
define( 'LOGGED_IN_KEY',    'WW[sVy)GRPAqo+s]03~U<5*f,(=$?#}2Cn`e~s}IsR-D#0mN#T8L9c/?,HtWG6--' );
define( 'NONCE_KEY',        '`9Xou3B*7um.v6S95GDy!w{SA_5zR7le2~^i[{@T8f#_a$Y;f?=swwXRR3+td,.^' );
define( 'AUTH_SALT',        'nFjy>~YppZ]PvW2uLBV%x l/(+)V&Snt<c4KG5fO;XT(dQN_j/T-!w(I4h/1B[VP' );
define( 'SECURE_AUTH_SALT', '*/PG:duYxPnH+{n;A?=8iu -:$::nH;{ov*L5[7Lm!^Z N3ZD<jo0Yuzyi*_LG|+' );
define( 'LOGGED_IN_SALT',   '}N%#ReXuV=m[3LoWJP{Pz4HKO#&VKPS7^zA<md_cph.*n$=_^Y^fI/plx_KzAtfP' );
define( 'NONCE_SALT',       'ew.K`(d8FrgJw_9<Otn*wLo/r^anFPE_/a1/~%6s3,5Dg*)+7mIH3p1TY,g;!.R{' );

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
