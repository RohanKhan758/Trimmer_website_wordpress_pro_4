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
define( 'DB_NAME', 'naheddb' );

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
define( 'AUTH_KEY',         '6LnoaS^o*Rk$UfCb/>4w$;g);EeCeCQ1s](^`9sE.v/paD_>T8[Lil8!D =(yMr0' );
define( 'SECURE_AUTH_KEY',  '^{l`!7ud6A,n`6?v#qqcjp5a9._.;,/`MXTdFcI_9}xoh>_Gn:X^@}&x8nPp)8,^' );
define( 'LOGGED_IN_KEY',    'IUQG|6B6qoj.H1;O~rD`]nuJ2AkTrlE.KW%#B&d^:sRbov5;m%J~3]a!dPT3K$_B' );
define( 'NONCE_KEY',        'BfO+t#qrZ}X,.`.bXMugb7XiSpZ#bpd(f#vmrc<@TuccIBcbNT:`o}S>Ja#+<?D_' );
define( 'AUTH_SALT',        'lioccBVpW.W=u5W/+<oHVRLW LwUcK&j_IzJry8UtvN1*ih/Y%1kma2&Ei|o;4- ' );
define( 'SECURE_AUTH_SALT', 'Wzd >*sh~!}U{jqri=2WbPn6:,4/bacJhqfGuJgNYS},_Cy#*EQ=x@@?*rIfIp;t' );
define( 'LOGGED_IN_SALT',   'Fk/I*}O(cKfPKrS9mN{9hztBv[d->_O37hYDT^s<!<1f~>G0P5LlW%.DT)d`x0Pj' );
define( 'NONCE_SALT',       ':}j=/R3c|?y@xd0!zU>wU;XB2ADW#Yk,T:nFEW`QLg.iAz^lP/af>CJ0nP?NrIJJ' );

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
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
