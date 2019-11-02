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
define( 'DB_NAME', 'wp-blog-2019-3' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'fd026cc75cfeb0c934c4494970694e2b278122204dfcbbb9' );

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
define( 'AUTH_KEY',         '9j9uqZ^ZYW@bUy:@SxLJG x$r^jgmYwu{)QMX[|H}br){(yn{o8!*Xrh$)%Rm7ny' );
define( 'SECURE_AUTH_KEY',  'm/J=-/-9k.vI+u-hg2fd~;@_Ba!?LDX32(^_mLO0A3Plj,$KdxS>p|(2S7:!>o3o' );
define( 'LOGGED_IN_KEY',    '}z|V!f2diA+Wsf3&~If=>Z#?(8[$x`(VVNVN[;p/^U7ItdA{WT=ZejL]GQ)rlq!1' );
define( 'NONCE_KEY',        '.GS0=SM2eW@mWhV)O<y`DTMtUVtI$NQ4sdRVH].R,F a]WlZ5u9gEVZ`7Lx:DH4j' );
define( 'AUTH_SALT',        ' u%WVhnJ0<:oC3o[l;$$Xc2}+*{|jElo^d+YBYX%tg63Ce})UU]vL4WL`;f>ryti' );
define( 'SECURE_AUTH_SALT', 'wu00nF:l4Ai3SCc?h|Pist,ZQ~Bz^#;J5TF(sM-}d2)qxEnS3t@wFR5,RLY#Z$J,' );
define( 'LOGGED_IN_SALT',   '&zkjilk?)F>j}w-696=)^ueioMxS#cJjN[:/Xu9FT-1aAfq<CRYo7!_&}+1HyB+3' );
define( 'NONCE_SALT',       'n#a%NU ^j$(hN|?p{D8}H1/D2)%3t#iE*Ya:xb )lBGe}c-Fitj9NKNx|CVp$PYO' );

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
