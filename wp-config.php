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
define( 'DB_NAME', 'hba' );

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
define( 'AUTH_KEY',         '_-R4XG53eWnt`98wIRH.Ej%^1c.B~G@pHE2!2]#9la.W8m_ath]V91OE!6/$Fuel' );
define( 'SECURE_AUTH_KEY',  'basWai_ufXp6[}]nh0dJUkT^+O +q5^!kS@F6er8[GaV!jG:EE[n`rd_/%4E%q^|' );
define( 'LOGGED_IN_KEY',    '|R.)B_>8^cK-{M=B 8JsLYZYn~q3{#)*su/yuCYwp<)Ln!&N7)oAr:U;D4=Jk+7Z' );
define( 'NONCE_KEY',        'Gts{1nUbowY{4rmjKZqPo`Hu3*fW/Esa=eXt(sA`@P0>TLmeRcm;5>lYyEiZd6 .' );
define( 'AUTH_SALT',        'blHf8?;K?C$4uWa :}CTKP5>2|n`_BG[n74b.L:QFw cm}rzQcQ9{H5~5E/F]LO{' );
define( 'SECURE_AUTH_SALT', 'Y|bijM8!`qt};)#K*^dUOOqwnRG#{%+h7]t`/sEGC[6rY[WB*/#7o*gL50&0c(11' );
define( 'LOGGED_IN_SALT',   '-fQ1xS-0t`DO$a7Ud3rda}&Z&Jk`$jebB=rwW9k1@F5#&TOi&WOlgEt&v2EQMJ<z' );
define( 'NONCE_SALT',       '-0]A./3QtcP$-YtU9Y:iieYIiL855s)_fq&-qH*bSoU-P_c7ouX_5n(P[U(tTQ=j' );

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
