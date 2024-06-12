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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'MF4^M8$K-b/oCdf9#Fv%n{JfDiWbKQ*bGJf<*xGPec#3vBJN7O?C.y~$w^C9BF|%' );
define( 'SECURE_AUTH_KEY',  'd4+yKU1=5P2s(=FLmN`VOjt^p,P15RZ/NX!_d!@[!5]|r(UWCF;TOcKN1=<a?//n' );
define( 'LOGGED_IN_KEY',    '3KD4zY3.+W(d2PT1#Mr`zNf0Hogq2?JakK,6+[[N+0&CM[;#:yWm<+MO+y)c-OYJ' );
define( 'NONCE_KEY',        '>t8OTKCavy^hSDQ). :)3|Sfz#Xcz}QAG_y/jDWV}1aNQ2YM_V$P^f5CeP;AWnPK' );
define( 'AUTH_SALT',        ' R2@Q3>6pJCaCEsA0JZW&7-E|6eRZZ D:dW!;8$&~;Qt< ,25N:S*4sTB=F*4{,_' );
define( 'SECURE_AUTH_SALT', '8w{l.]U{R<2z@Z.$*-$Jz*$]ZRzOh;pXrT7!MBmbM:HkAc0V{ QQmHt}iPsG}.NI' );
define( 'LOGGED_IN_SALT',   '*R#WS{&?k*p:*#@^7chvK.SI7:u@t2|x|KK*pXT32SxuW>E@z4,2vx}lgw^y[7Xn' );
define( 'NONCE_SALT',       '+Ij4SVOj?JO*;3m_A@>/N9Rk]] <:2`:x9Vv/oH|.Mi:eWz){|~9EwfGaYnr:on+' );

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
