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
define( 'DB_NAME', 'moinho' );

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
define( 'AUTH_KEY',         '$ifWJ;lvZYi%WEa8{g|>y`C#~ST#9L}NF]Ao. yBV}cs(*K0(3L@B%m=I/]~0yR#' );
define( 'SECURE_AUTH_KEY',  'YHw+|Yr.lGzM={4tbU2,Y_gyqLAqu#p<CE]OsNw}^%7u;]Fw9y?-{w:NZ9:<,N>,' );
define( 'LOGGED_IN_KEY',    ';n_2a}tkUuJ`rl;jb)O.[3Sz,zjbE+%yz-FMd<;mm~jQP^n`i&qHj.]%F)`|4=dM' );
define( 'NONCE_KEY',        ']b1I`G%+U0o|Or]3?X%3&Zu*=i[|K*8pez6@AMkM1[_:YuIr2WpIar]8Bqe:: tz' );
define( 'AUTH_SALT',        'XCWYcAVAB[Uly{g^nuLW~y(:,6PGX0t`zR@D=B_sY)T}d/2pysXumWMbw[;owepD' );
define( 'SECURE_AUTH_SALT', 'xl/43=ilzf??H(J$Si92fCNJ6Jw@).Spgp,!0tB u0h$MfjwY#8$%nwp}n<0sU&{' );
define( 'LOGGED_IN_SALT',   'JSQG@h~t<(h9$7>tj5IS{Gn>sa!e&c+<}s9D=E,+7D}T,(T]Rv)mS$o&K*9IrsgR' );
define( 'NONCE_SALT',       'um,Lk:_=-H&3xlnq-w]5{mWJAe)V]1;&8/a|x}+e6P4y0uX<;.n.P8m>q8_R}95t' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
