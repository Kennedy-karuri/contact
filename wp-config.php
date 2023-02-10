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
define( 'DB_NAME', 'contact' );

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
define( 'AUTH_KEY',         'Jt2[l%.@X)% aO!4Syx${vl&b,WiJMLyWCbNt9B{$x=!`#%8c0+RXcG5~0Ki,@Nr' );
define( 'SECURE_AUTH_KEY',  '.mFAxn__h1V%.g#]Y(})4L/4|h^1!T?mdoN*~Xg$^$pqbD:#I*OmMvEtXg$JD+v{' );
define( 'LOGGED_IN_KEY',    'Vb_p/c!N3r@#^ia!:5d!:UV/JS9lL9X;~{z=&v9*9EJC=B1|Ftv+7uWCv&nsk}FX' );
define( 'NONCE_KEY',        'aiRpDDgd|_*[ebYct+vrCs,R*]I*1L!|^d3faMTMIKY!fmJe:X&+=dpY:0ya[LQ-' );
define( 'AUTH_SALT',        'hxzE:+nX6KD%* t+=LetMrdl[)SxPEh5[+{@6v-He#`izTHN[OuFwRoB<+<dy:KG' );
define( 'SECURE_AUTH_SALT', 'g~j868da;4YG]y!9H,|m^2S$&T|#[b :;]}{XgU]c$;p3]v[q`0tQ.qs.hy9U6x}' );
define( 'LOGGED_IN_SALT',   'XNc.wr78S~s;y6vG}iU3C@ZR(2B!HoPb$Arho&cnrl5{qb;lc{ugB:-u$AGnRaiF' );
define( 'NONCE_SALT',       '6u`|M88L@w BC#vcn.;Hg8{oY[qS)]- mI+iH7F]@H9e=c$OO&]bjW};yDC_yqa6' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
