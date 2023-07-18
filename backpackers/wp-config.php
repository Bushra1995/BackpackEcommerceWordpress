<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'backpackers' );

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
define( 'AUTH_KEY',         'yh#D??PU:xd[lNwaJ3B;0v<|FY#?^P$L|3F;-8GX:z|z!`FgXXDwH:2XoG%UCRp+' );
define( 'SECURE_AUTH_KEY',  ' 8vvl2+Hs!yPJ YTx|dk&c3y@W?P7V[FM[oY/ D,OQ.BH<~zAE/3s|<v}lfpn&ko' );
define( 'LOGGED_IN_KEY',    'bqCrO- 3*s@ovK=|(>Ye`mb<`BaI*3%D4/DU]k%CvkF*>j=M8[ZdmH.1AKWLZOIR' );
define( 'NONCE_KEY',        'Z>PuL8{vax&50(9s# 7Z d?|7<_({hO<}{mX0S/4 vfIvQgZJ=(Oc;36_QY}~PpD' );
define( 'AUTH_SALT',        ')/a}#.ggb^_rhh.oFb:b; :Vlg(N+O~u&C9$:6][8e_a&OwMi%i_(KUg66;it2g`' );
define( 'SECURE_AUTH_SALT', ',ss5|[A&(|#StSJ39]b_BKh/YsYbNo*PyA@1V!=>^u])Dr:!-n]ETSqjoBVo^&vQ' );
define( 'LOGGED_IN_SALT',   'vgy;[6tC%:B/~D`_`L,>Pf3VR*e:6?15tr2aN}|#b+%_sdac4Wtm]0Oe E-*Kqvp' );
define( 'NONCE_SALT',       'I,[X,B1aSHDuEvO^9Ye[j^$>Y0ja6D*M?8+UrwJhUq&4PA(pzEKmvn=;%=Gh@P`6' );

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
