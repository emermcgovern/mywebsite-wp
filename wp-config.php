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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'jNXMBEiLAx^)[+)xs*A$d1Q 9.O.:i2F+NS-e5KEz@!8kT.Av@G,@CpWR{l[|)re' );
define( 'SECURE_AUTH_KEY',  '}2QRT-<IUfBFKcWCj!q9P2357>@A-2fWt|>f85rkLOo>$v?gd~[?N56)QCUf<cS-' );
define( 'LOGGED_IN_KEY',    'd:FFBn5o_ bY~G8Wq<]=K4k8Wf ?3b:bhoa$; GDNYu=:{4Q9TWCxlTmGh(c`,@J' );
define( 'NONCE_KEY',        '!jap}Ia?qu(M*A^rLz;^Y#t@9]_dw]~.Bv<@GD5hEk0.tw~QIOrkXw?)zfCxuG6)' );
define( 'AUTH_SALT',        'wbCb<P%Tv[mD$Ocq7%oxPT:2=z_1sD;5)ZIu@:i*N6vEFz$pm<.taN#5*`zOf[=y' );
define( 'SECURE_AUTH_SALT', '#|!cFa]M65vDlRwSSt<LVq;0ROlD[;5sLe*Sp`/q)]P7/yL!qR$w-sKy[{MJ!*/}' );
define( 'LOGGED_IN_SALT',   ')$-qG<r[je5&zf=Pje5qaRB5$57S!TC!$`<K*tsM<2o$)V+83,%H]^^87>Re(8+~' );
define( 'NONCE_SALT',       'jQ)_J{~ZZWZX.nj$38M6iABrZ4!z=$|1[L%Wq|tD9Q*QQw;T{H7cr$0(LtH>8~1&' );

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
