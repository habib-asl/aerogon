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
define( 'DB_NAME', 'aerogon' );

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
define( 'AUTH_KEY',         ' jT0>LP|[V+s-^j}v)L5eJq-thc8.Qaf*(6BgPVGNWVQ:x[}.#9o]!Hy21{j,S2R' );
define( 'SECURE_AUTH_KEY',  'pSbeRr1^VFple8Yg1%:)g9|(:jxR0,;x- (H|kCa,zo2ea@k!W)$8kyWLXb{R8b9' );
define( 'LOGGED_IN_KEY',    '_3rhPi)3bG?|>1{zgVh7`PM#`2tNBY(kSOn>A<DD`kEJ_:xsi>e.l-`@+n:S2a2Y' );
define( 'NONCE_KEY',        '>n5{cQjKZBgofWF{~~7Q>3$oP-zlSHBQ!dzNhCJ@^&=?yhb+@kK|QfH$KH`@Xa$Z' );
define( 'AUTH_SALT',        '&&!P8MMN8L`%f@5QyMJ(@^>F_@{w<ZLy7/A>rGzGz:^1$,-&#*:L0Q{~jGp]e>$]' );
define( 'SECURE_AUTH_SALT', '_a/wk,I*5uuT@Nt<*cq!VS5hk*.:lK23m*0ZEqE]hUadf*)B|97KS!TviE<[L>W~' );
define( 'LOGGED_IN_SALT',   'tnk=G_GKK~|B(OsKDVN?LP,9&2A7:(})d0C620,j ogEybm76fhnz9;qNWB+Ls?Q' );
define( 'NONCE_SALT',       'j&.A)gnWZ#n2CYI( sUt0[g3y#6m*@,W^[lKDG9eb+{@E|q*xHI~Q#lI5#58HdIy' );

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
