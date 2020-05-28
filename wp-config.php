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
define( 'DB_NAME', 'analou' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define( 'FS_METHOD', 'direct' );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '_.>!bki073bqgHaT]AF;hWq*BwHbiUtT6}lauJKZ*%-4x_,cbH4A:Ey_JIunX-lB' );
define( 'SECURE_AUTH_KEY',  'wZfT;?~qdPj^Lhj%L>>w)w3J9}~lT@H*S:g9>2UMezkw@R]!#aS-|.7hM4r;aM7s' );
define( 'LOGGED_IN_KEY',    ',XZF._it*`eQS(Y2@:?{r|cu2DP&&q&UL5k2FXT/G36y ;{zGPQ)Ia-mpnA)MA3~' );
define( 'NONCE_KEY',        'QWf%o6I-{Y7&Er$sQi7nje;<kb:x@^.nwt7yUGMfua7|sPU[n1Le1n%yUlHVYUB1' );
define( 'AUTH_SALT',        '47T* f&;_dW )jkQ9]Iw3ZSe=4m=eHzoI_w`oE[TJEd-Ppo:0boIJ8Y8$B><&Exk' );
define( 'SECURE_AUTH_SALT', 'Ily<<hIm-<-- eY?H-tz]79.P+In,#t 6eX0H5yqP+LO$0HpLqxb{hFwqZ<LH1VU' );
define( 'LOGGED_IN_SALT',   '8ZxtXsX+e1K1..{r$=DC/M)EL2<w}7YxlIja4TVl&]i`<Q{FZjGdd|+y=1<s_6o3' );
define( 'NONCE_SALT',       'RB.S;UW]j039MU.2wC!^f6XzYG|y-[+I]$;a,sAALD|Q/d8i|tM=+@k@{rgi>}YK' );

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
