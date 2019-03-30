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

if (file_exists(dirname(__FILE__).'/local.php')) {

	//local database setting
	define( 'DB_NAME', 'wordp5.1.1' );
	define( 'DB_USER', 'root' );
	define( 'DB_PASSWORD', '' );
	define( 'DB_HOST', 'localhost' );
} else {

	//live database setting
	define( 'DB_NAME', 'azizulh0_universitydata' );
	define( 'DB_USER', 'azizulh0_univers	Delete User
' );
	define( 'DB_PASSWORD', 'univers' );
	define( 'DB_HOST', 'localhost' );
}






/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'c]l5X~xm2B?;M.4j)P1+|A(+)r+/]ppDt(-JW-`]I((s1vX.#2H%y_?|bOk at*,');
define('SECURE_AUTH_KEY',  'e>r_@MeE}K$6[wu92h3%X~bNQp?Qz%[<|1-@PXNe.&AK|bcwdZ+`2 ;7Ie)UBudz');
define('LOGGED_IN_KEY',    '1ada%cf0YCWH$:5;.9HukOC^$mx>}sli;>rT7LGlV(0?.X.R+X| Q7K1WH.!*8p9');
define('NONCE_KEY',        '=(ranG_{dy_O( *ysE|hjOh=.$$TKbd3Z*,z!+=[G8*,FPH2a*I2RrnY5On~w;jc');
define('AUTH_SALT',        '*T@U49~Yys5U-~+ti5!G[r09(>0% fUB6-<0;2~SPs[8LfFM*-+O{u;,+>zKjL/s');
define('SECURE_AUTH_SALT', 'W_iJ!h#:98oOP#zO.Kv<VHqphWJPx6whAp4%LQn/4O4XZV{s-Xrk44IN1eW@>B}S');
define('LOGGED_IN_SALT',   'wIBaw/@ZW3S5X5C WCzLZHGn6AU&>[tA*#mGOqM{q1wyeGzK{,)Nl+Pes;ju:CQp');
define('NONCE_SALT',       ');Bt1pa]$d|;{Bt|0<FVonR~Gn:?7KKWH8`/{H[MdUV|aDD)?`n!(Om-hblnk.>+');

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
