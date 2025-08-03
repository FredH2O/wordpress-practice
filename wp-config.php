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
define( 'AUTH_KEY',          'nGF+0zY&HnWzdOt6O*&M2=@:S{moy;M-M~@bkN{7?Jqjs0HO*h_&L!qRTL.(cau/' );
define( 'SECURE_AUTH_KEY',   's[_#lQAKy.)i>;I2O@W((-PX*!ToG*1{No3d70j`E/!h%;F{I. 6N vtQo10U>UC' );
define( 'LOGGED_IN_KEY',     '<fc-%0JRtN(#;^34~?-#iL5*077ow{nW;*f~1m2)U<DO1k*m-Wd;hg}bOavXxK<H' );
define( 'NONCE_KEY',         ' +~9IFA:tC{Ra/0[$n5,0pq>X3id4(?R1#ldixEWp/T8.L!MJ5n3k@cr~A@D<EaA' );
define( 'AUTH_SALT',         '-Ov].hXEp fXC8uhs_xmh;JK!*^(eX!ZzvQ`;-! Qta[z}Ne+GLo;b!<1EJS8HnA' );
define( 'SECURE_AUTH_SALT',  'k]3wB.bDtxS$Cq%u9kpRJMN<h`Et#VK#}ro7+gRgEBDx7,>Om!&Ku,gMWX&A+Dk?' );
define( 'LOGGED_IN_SALT',    '#Oyem8kbljw1Jq(~aLakVc?Uv8P8M@5V-84z:]i1Ejf3q0B[V-(K_A.ok^JH6V!m' );
define( 'NONCE_SALT',        'p1jve.07}xi7t?BniJN5(RaR4A @l,6wCYahOWU{nA@-:z$OX3~sAF3_Fo^{Vi(D' );
define( 'WP_CACHE_KEY_SALT', '4Dt` QChwJ,Gk^~):n4&|9qeVMTO%Iu_9n1fd/w52D8<(X FXw@sQe@R`,esHsQz' );


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
