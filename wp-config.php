<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pcdr' );

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
define( 'AUTH_KEY',         '(Tj7j~r[d4/);I5An>U=f[%4>B4>kQ5Bx{h9|z*{#a(b)hKHE2}mf`N0mZ`_R9Np' );
define( 'SECURE_AUTH_KEY',  '>pGS=2GhLN[K;7e<;?G2! 1b+#pvy#fy1XU9s^HP< PHXnL0=<B 1s/L8nOj]23J' );
define( 'LOGGED_IN_KEY',    'J}jPsc/Kj Y0_#ihq?coFyte(CZ|Y3VUg^Z-Rpn5m=G TJ1*iB3Yt1I &vbcwj?~' );
define( 'NONCE_KEY',        '_.w}45?FwZ7rdWX0t<R ^[u@j7-^?#Qqk LOVn]lR;|505HHbrhG3#%:s,q?GO?|' );
define( 'AUTH_SALT',        '@+lwUHyl/jMm/ABf5Esow,}-G${Nd.:_f]F]Q]s$xrI$&[$ca%1vluVm-:aEfUZm' );
define( 'SECURE_AUTH_SALT', 'tR=ewH!owU<He5zOOM80]5V=1K!D_/PAZ;R11fBL$xr5RgmDjf,xHlUaw%JL)fWZ' );
define( 'LOGGED_IN_SALT',   '!^dCnK%6P`,y4@KC%|M~FcCjHWjO8~k-km1%erF)Lkz2!xLO%_,Q#p(E2*PCu4 9' );
define( 'NONCE_SALT',       '3-,]H1A9nI!{YlGA=`vZNXy J(;.+}Y=$Mzg/TTGz5Xkex,e:I?%G@R=E8DFYT@+' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
