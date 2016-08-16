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
define('DB_NAME', 'ppa');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'd;CJU}y-|*TNI<$dRzP.5.s%AU](=^jnPY-igb2#!E_u:F0+SSINb|aWjzo^V,&f');
define('SECURE_AUTH_KEY',  '}fY+cm}P/5><]hd:v{K3N{Mbg8xc?avkM=Zmw3]cR<0IH{C3?}Gk&P5z,3`]ki#y');
define('LOGGED_IN_KEY',    'z~@SZ[x;iqm0I-Ur|gkK>3wq,n>o](h5(X/HHVI@#QJ$yjYJ0#jbPOQL4Og/yPG>');
define('NONCE_KEY',        'F<1m;k,c <bCckE?@?SfKVG+Z&dZHSb0KUU-7$DF+?&/2GmY+6q+St-u}+v+}$O]');
define('AUTH_SALT',        'Iqfj|2pM~nft[aI:KqP%:9|xWs{ll%NgR$MT|TF$9y)6bD0IeGOaII.U6(=(?NMn');
define('SECURE_AUTH_SALT', 'nAG?pF6&|xbQ4ybwAQ>D3Jvj.Qw@jsP`OWFoS`)d:I_46NKw`*T}B p;lRsJ)k0J');
define('LOGGED_IN_SALT',   'wwH&//FtJ 8a=07]F#-.zmh,O]]JlJ(5DfyzRD$0f7BVVW#s0MQ+34*3=2>cty{C');
define('NONCE_SALT',       'Szi%m <c,V2PBfLx|LZki7vQ;8xLQiK}1fa_:q]uy%^`^lU|Mqf/O+emjPZO:iQE');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
