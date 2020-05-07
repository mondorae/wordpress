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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '|{QCJRg3w69o[YI%sl@J108Hy#T^#[cV!PV,ZlgXFec<I^t!H3zA~fawB=p-F3Ll' );
define( 'SECURE_AUTH_KEY',  'b@MBEvp?,CFQ:.Zy}CetbjZ;)():l{(fQ5P1<q,rru<U/G],YBw7PxQo2P4,pJxV' );
define( 'LOGGED_IN_KEY',    'mN:-T38E5C5!y&6h}q *~$Ipft;_V 8EkT`@,CAF7mzVqYh[1ZTJKgj^;Y[97*yG' );
define( 'NONCE_KEY',        'e2ll%|s`$*=`>c:lR!w[G]q1|XsX~65[R >sm!rGTCZ)d+lF9=SE|q-0bVF?RG`s' );
define( 'AUTH_SALT',        '8P-Lx:]_D{)Gfe!%XU2T-|_wi<Y(jkywZiEi/>tZeMFVSsuS1%5*44a<+:K`*SXw' );
define( 'SECURE_AUTH_SALT', '%ttZ]?|mzDlY7o9=HJ-Va1!($P);o?Y1x98F+5^>ma&n;OqO|1#,gS-]z=l?^Vu8' );
define( 'LOGGED_IN_SALT',   'cch@vM33OxbhX{f[~sv^>4tybTpPg<Hjr,]<>6k<U$}[LTHuB ^N0`q@zbj8Iyph' );
define( 'NONCE_SALT',       'WVFOf)EaN]cLjG*TOd+`AX:s_xF-<9ho>Mz@z!.s %y3(l1)=9(@PwsA*_VL&)X5' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
