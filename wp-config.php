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
define( 'DB_NAME', 'cabinet_db' );

/** Database username */
define( 'DB_USER', 'cabinet-root' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'Hw?OfD>T[;C4G!WNQx_{Nw]Qo-p_nQS>O1K_%`VUhFi%hjy0.ulb;Z n)-~9Iy+K' );
define( 'SECURE_AUTH_KEY',  ';7ENnr$<b X&M$z-wa:RAQ9SQi6-~D1bN#_;jTK,]7Y~Bq3Rc.SNMK_$BD.X{3nQ' );
define( 'LOGGED_IN_KEY',    '}3ViSHL_owsL5]B4`:xT7)k*z@g$vZ=!yJgMcAbX%t=LJLO/9,9fvxCJ{:FoY!|R' );
define( 'NONCE_KEY',        'iFok5-.5H#_!!EB(|kjeYt~IuD={0JPLzPOBwg.axWB9T^:XB9r2RliZYDspZ[RP' );
define( 'AUTH_SALT',        '7%LF(44AH.9%60sGZ$4f-[[abSP`PYVO#/3?s&V+3#^C=eh]0+|2l`!gdE q}(Y^' );
define( 'SECURE_AUTH_SALT', 'A)u/cCP%w;6D49cz69^FiZSEO45WKU]QQYq a_GG&B/lUKEy<-LAU}/bPZoj,Pf9' );
define( 'LOGGED_IN_SALT',   'iUsj`}l7z{n)cCakVY&Q=SV-#=zD0`T[D=FdgA.c!Gc7;g)k:^an.7=x#9x-Zj96' );
define( 'NONCE_SALT',       '*+$FgNJhxYD*:+o%^bM]}*>h]5BuS4,%N1Hw]8wsWB&LIC(|L$Z`kNS5<qc<JTwC' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ds_';

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
