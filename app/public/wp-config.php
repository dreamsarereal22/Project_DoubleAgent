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
define( 'AUTH_KEY',          '<OHT&9U;HjRyJ^X7!(Kv<@l#;_i[x5e RXRuYi*CBH$% S~VB#z7dHl=__ZGi]QG' );
define( 'SECURE_AUTH_KEY',   '_9/IH$@.yhmD/5=MJ7unSfE,zUAC8`il,=C|=*<^sv{$a.|<j.MDahtituOy]X$d' );
define( 'LOGGED_IN_KEY',     'PRBaGLG^FCxIUqOmmub5$Zv$zSya*k/E_%a?1gdKO:SWVk>HUEvYTOqa|&lQT{z7' );
define( 'NONCE_KEY',         '@aSohP26_sZx^%61l]nQ$Ou]<Esa7#YZX6n^^gr(Nc&<G}L0F-}VBL[C%BCRtk1#' );
define( 'AUTH_SALT',         'x;JwTwto{dQ;w1(bdzbym)ZqGauAvgPIb+BkVaUnZGwUpY?/KSCfq+A:s!4d2o4}' );
define( 'SECURE_AUTH_SALT',  '$CT0t$0Q|+U[wcf0q7%b/F48qE_U2DBm1d81++6tD_XxC ]%KMUACJax.f6Nk~H:' );
define( 'LOGGED_IN_SALT',    '-jAv&D$L%s1skz(uDf8?j5K9.Z`)4AmJQYX0]^?k/HXnpa;Vw|b$Qvcl}^NS_Z`X' );
define( 'NONCE_SALT',        'p[/^0fh{O9YwA=&2T)bOUMpLvL=IGKEd0c2{^2[uw[TzD;FAv5cRlx]PQY^18R.v' );
define( 'WP_CACHE_KEY_SALT', '?=S~dMq4#oX~@l+;q>&BrKR:.+&uNdn~S5AYCPA#`}m/eT^;rR=s*N6!umx7}.]l' );


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
