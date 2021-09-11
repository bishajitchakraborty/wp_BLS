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
define( 'DB_NAME', 'BS' );

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
define( 'AUTH_KEY',         '6S~Z<i>f6cPm~8|dIB)oono}7x;Lsql9noz]GDv!lPaFgsbga o5f3-KO N{%GUf' );
define( 'SECURE_AUTH_KEY',  '-i3f;OgfDpMLMJgT<{L|fbiZG3^:z.:uA]?ykQu`c7_B(P71Yedi<b0qQPXr|h0i' );
define( 'LOGGED_IN_KEY',    '#nw%IX&VT!=T4Iql,8/c.N^FCpCudF{bGlecTS}%0.S{{xS;, HiPms1~-^ng!C=' );
define( 'NONCE_KEY',        'eu3x|D.}5^,fTSi%EbAN[#EE:-@k:I[)$:#Rv[Qs6-`2yjrsyp3_gN7CUs5gA:sE' );
define( 'AUTH_SALT',        '(+fiMf.%(k3Qp.`1$95%$zs=FYY#>TE!ea;510fb^PX)m]p7S6,i32[y=&a~St9-' );
define( 'SECURE_AUTH_SALT', '2nAyl@uIo_~o!0]e1Z=W,802(]dbNvlvUz(CRIB{&d9>R_p~(ENI5K3xX[;J${C7' );
define( 'LOGGED_IN_SALT',   'F};VXp$q#.sT[tTWR=ez8`Sq`HQUM;p9#/Off7gV!Ar!9FAa[6 51B.M;.e_JN#d' );
define( 'NONCE_SALT',       'S_mJ5EjDFA-T1h58O-Tt.]fPa`QTUnx>Iam8O`yTJ[=~Q==6&yVS2;hoP]W$`|5{' );

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
