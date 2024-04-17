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
define( 'AUTH_KEY',          '64Oq0~v<Dsn`@dgvK+7]B;{Shwq(h~&c``[|,`^2:q_{&W0WB7&(7MG865-Chdc#' );
define( 'SECURE_AUTH_KEY',   '0;-xD6@_=zuL]Y9e#n4`+;wk`a:t]GK%NrW/%XelinL ?0#dW@p!@.V48iCnsHp(' );
define( 'LOGGED_IN_KEY',     'xv8^,~- #8<`8nwkgGATH,(_x!SZWusu`#fo<,G.;`2<fnc?$Y.CnSru$mD.ps&-' );
define( 'NONCE_KEY',         'X-uTer`5=K6x$%-9.O*dA|0D*w}RM}PcHappc0YCdd{tiez{WpWcS_ghoIO%,{y}' );
define( 'AUTH_SALT',         '4&XfNtcB9-Pwqv<-f2M6l{C2RZIEd6OD@;Qo`(QkFW)g-PF`aLvC:vZ+Np<sL!cb' );
define( 'SECURE_AUTH_SALT',  'k^/U7k1UQC#E,Ptp+CVJGLAvWg$`kf?p9J{mwx _;/+zv[%e<~$)g0WW.x%BSxql' );
define( 'LOGGED_IN_SALT',    'd-U/(+g6X/6hTxN0tQJG]$r0]24FyZqaN{VhgU{AJAGPy5!2}JC{];owl|Pa*y(f' );
define( 'NONCE_SALT',        'nJ2rvCL>*FJ5%/i+2#e8,B019e#g?S5bb5)juIUjJ+66l&`#QQYC/``/8p7mx;KQ' );
define( 'WP_CACHE_KEY_SALT', '/>k1fLmOQ:591GO*7~Tw-u*][Eh,+CF.[zW>,cD`6(@4LtS>=+A6tLV.zg?TPc?w' );


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
