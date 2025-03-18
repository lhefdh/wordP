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
define( 'DB_NAME', 'La_vie_des_plantes' );

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
define( 'AUTH_KEY',         ' .6!fs):*a1C;izZ%_1/Q_Sq29<eR^]c8}BMTa=O?ixHGMV }hm%)<vy-&AF!eqq' );
define( 'SECURE_AUTH_KEY',  '2(G<<@[S5#*RMJ]M[T7;jw<bLw:4R4|]}[O@^d(%%#+HI{=<m|aGzZ(Ty-D+0wXV' );
define( 'LOGGED_IN_KEY',    'DMFgx&Xjt@zjL90 .Nqkc@v_ j%N=@~HnI4t|}$ X!S?to&vhLY3-NQBQXk4cWT9' );
define( 'NONCE_KEY',        'd`g=p,,q%_cqm]oqIZXKokow^.-^UJ6ELH9$O?kB 0uieR`rO<dc->[#x=%gc|/1' );
define( 'AUTH_SALT',        '%G};bdF^ }_!@36CAnS(p[({7kftnxFy(->hV=Lr-UFVBqOME!NyI4xjAo:56x$g' );
define( 'SECURE_AUTH_SALT', '`ZP+o{V>/Ap0U3O [1*dEYCfKXn^,[U+FK$_W4j`cl@CW]^v0Q.{Ezi@k~30F@MY' );
define( 'LOGGED_IN_SALT',   '8G#jmu;ZoA!Yho|ZeJVzReM ly>Vcx;$$cKx9{Aff|P{KAI7F!cSN^oS#NL+?8^?' );
define( 'NONCE_SALT',       'nXY$7oQrfO+zM,jD~hZ)Ls~UP}tSQu4rPq39E?>N%>L7e!Dr^$eqD,Z{9+sA#t%l' );

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
