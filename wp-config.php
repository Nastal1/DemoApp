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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'green_apple_recruitments_db' );

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
define( 'AUTH_KEY',         '7=8RDavjOC-kQ}8}H,U<62slm1%jY*b@/E3H=N{T8V.5#;MlNv0kn`ka[-1il?j#' );
define( 'SECURE_AUTH_KEY',  '];mL1{u#;^841rDP7j<9V+>vL}rc.ql>zZonV9:N8bgaeJbd7v7<sL[GkqwsD&Xn' );
define( 'LOGGED_IN_KEY',    'j-Lm.MdL%bo:MZ8bR;0Y9m2Ff+Ol3P4tv15x^<hm-%J+A:5mPQM1Jk2AOR_rn(:%' );
define( 'NONCE_KEY',        '^_bIm=xX>rN:]gE?x<Tne1tVw!9=V(}b8}9^LsvRq#T7h+6sXU4|/8wG R[ [e>y' );
define( 'AUTH_SALT',        '&a!fdvS0{6puy>7BIH^m5v(Td_jw2bA:aj~>#ghSVnov2>b,!8ZC}K~GRc%*S>uE' );
define( 'SECURE_AUTH_SALT', 'sB;,4u!9L>65pgS7#$eE^W@xdII]eF)d x8:w6-}:^Wy:=?DV<=|QkaTf/Qlmvkv' );
define( 'LOGGED_IN_SALT',   'k-oiin 3Q]s*8rlJaMiph|q!Gvm)%@WM,Z}r5l)w`4R_jWCOc6dg8urGDl1}ikSM' );
define( 'NONCE_SALT',       'BYg`EajHmZa$f.E:jYy2<AKrXvpQl4VXW(Lv)U77_,Cj|(E:pry|KF^GdQ6*1pk?' );

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
