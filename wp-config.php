<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'binni' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '-eC]yLeRJ@cE**=34RvWz6PFA5M6cS_;mg{@5Q E73X(SF~tz% xeVHzG2r[D=hI' );
define( 'SECURE_AUTH_KEY',  '#bxk-7sx01L #)1Hy$9Z0qQ%SE$lQ#9:&yj6C{WDKz][Y-&F7A&{6Co_<8N..rri' );
define( 'LOGGED_IN_KEY',    'yT<]7x|x^cbJ_4B^6Q?2}I8h@{%cly;]78yLEo/!)Ro^vn^j7(GDQyRf1]z_byqa' );
define( 'NONCE_KEY',        'eKwF!-Psm9>Cf0U1xP@P@Iqq_S,}A%a;FAJIa@/^-3#XfLMO4F]m$F1rnUF5};Vi' );
define( 'AUTH_SALT',        '0v>A(u`QJ?.8K^6W3:5`blV*FA)&{{0f*E(vy4D My8R}sq#^9rSlm?6T[qx}k=c' );
define( 'SECURE_AUTH_SALT', 'X>:D%UL^/`asa6yx=G[fw|5:$@;RX}ASo>Y{g4QxW0!Ygi}4s>!iz-!->%w0knsM' );
define( 'LOGGED_IN_SALT',   'OGCoi7mwSu)|V9Y2.niGdC<S( z:GyLFZ[nQ5Bi5cBrH0R@8VF0#$]YpCAVumk}9' );
define( 'NONCE_SALT',       '-ucB3*rImWYb(cSq51WNI%}KJgr}KZ.ndWgyQO^pzGQ{`qgn)4W^:w1c3>qHlc{I' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_binni';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
