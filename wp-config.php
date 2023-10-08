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
define( 'DB_NAME', 'mywordpress' );

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
define( 'AUTH_KEY',         'zRcO;jVtuIfm4@R`j-5c_pSf:e}bO;q_(}]OReE:WFsCPWz>g){-UKX9Jex+(M.s' );
define( 'SECURE_AUTH_KEY',  'd>lp]Ul3NmMMnEUVlIg*g05S0as+5Ns`lmK5VIpwriwZwBQ7oMA{Y!L7II?v3Z9n' );
define( 'LOGGED_IN_KEY',    '?i{=km#?`~m1]71!l^T#XkW. gfb34ZgVTRXY <QJbHU}il:[513TuQHLN`L]r}.' );
define( 'NONCE_KEY',        '&/j)c*&neS9,[+0~F4y9X0lKi(JJ33U-3pH/P`@kr;|tp+KWpkL[Y#?~<l^J.fg@' );
define( 'AUTH_SALT',        '$mHK&>B@7QIPxk!?egkAC+EH+5W^SK^OYel=:I%dg#$B)4LOSi=6hB)R_Tz|X3#R' );
define( 'SECURE_AUTH_SALT', 'Bw$_f@4_g<{p1 Xx[Mx5{+Fb}%cPk~Mi^q{3rJTMg>GR(4)|A/RS^kWELXO0|%*y' );
define( 'LOGGED_IN_SALT',   'EjOYt@2Rf:uVu;~2,|STokjz.:@nqFr/7!#w#!dit[JgtMgkHY+(<XS):f2Mea46' );
define( 'NONCE_SALT',       '#.7R%SXpJ{t`U8!wMi3RI,OkcAY,)i]<4ux196bR;e2~!+DHUKGX(nVql,k>^PW:' );

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
