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
define( 'DB_NAME', 'arhab' );

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
define( 'AUTH_KEY',         'Bik>!$Qti_~1:e}UXF6 F~Wze?YMWAwua(=nivv2oIGb!P#@]z2(->&*ci.1F|Yf' );
define( 'SECURE_AUTH_KEY',  'pH~-kuU_1xsoy$1aIrolBY_ el*HO}^6kmeAb}.7Pe$f*BX`pG}*K{.1Lt{$puec' );
define( 'LOGGED_IN_KEY',    ',~DzAD]c#Dbna9!vK0oojF1e)s~{9zcdP5#lH&]>6KaGtuYb:oe[{{ kG((I?.|U' );
define( 'NONCE_KEY',        'W,N._Ay>/N7VN|PFu%M?+5LgwT&apOJCl@F.dE_nR_d{mUB<CGc-$LD94mfEiTt`' );
define( 'AUTH_SALT',        '[dX_|1oFuv~zX0ZQQ;rPy5tMD&=kjyZvfhUmcXFr%p2p/1FT0@$Yhfl`OEE}uOG+' );
define( 'SECURE_AUTH_SALT', 'SB]%`7cUG}XO@C&5<6BMa0B,>kNzJ.O88qM~wC0|al!_#Q.D|{_?JarYGfKN8MaU' );
define( 'LOGGED_IN_SALT',   'I!XkpPTSPAf.i y)KzA<5pk7kzJ^xVJU%WMI;}^Lbvp1$bEu0z},~@{1pOwKQ6x<' );
define( 'NONCE_SALT',       'h*)t3g~khRS%_PVqw!Vj[Lax%?28j/$03KNH Q(eBC2CE*ow-D^ Q{Fi`UrG2qoc' );

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
