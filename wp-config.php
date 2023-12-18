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
define( 'DB_NAME', 'AI-Learning-g6' );

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
define( 'AUTH_KEY',         '4NbCmJx1rb#g+I7aL2=/]~OBF@c r3vHBGWlX3n%[hxjb:5,#6i[Cn`1>^i[D<db' );
define( 'SECURE_AUTH_KEY',  '4R7fiv#xJ8~RJ<;|fgC5>=2|!?D&j]d`gNSQEln.|/nIFcdb.`_^*A|!=Z!R`04k' );
define( 'LOGGED_IN_KEY',    '[Wcm%Uy3V:. KqW`py(!qEOHpxKj Ip!q-={&oFcnU{kykul3b}9sid6!@{FKRC,' );
define( 'NONCE_KEY',        'dt?DkJq~H&F!&/Y|`XM)^r$<],H`_26^=URmvZz2X9zPQ>v*rm}bD%n#c$SX%R?6' );
define( 'AUTH_SALT',        'l_tabQM&Fsr|5zaw3={UNxT(CZD3Lm91&/F$G4o s ]Ry)=@/5Fn/EJCCJ0V,a{ ' );
define( 'SECURE_AUTH_SALT', 'h[gm)~Ycym:J!12XM|T=htG+eeq>Y]upqY.Q,m3j-M>_(>MeQh&BZsO;/4}Q,m0-' );
define( 'LOGGED_IN_SALT',   '@ag<UIE`5aY]U77@?l$PnJ9 <|W@%:9{.G`:_c,Y9yY^S}^jvo9(TUu/nuUmoO|j' );
define( 'NONCE_SALT',       'Wg ~b}WwE*4HWR3]n4cFoFGaDnYG9T4 ocxC-]%=o2-_2 D]t K{Tl0w7[Q&lpsg' );

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


