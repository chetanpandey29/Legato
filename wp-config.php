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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'legatose_wp_legato');

/** MySQL database username */
define('DB_USER', 'legatoseatcover');

/** MySQL database password */
define('DB_PASSWORD', 'Manish123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'I]DyE:P1d|&X[Ca3QCC)vT<nAny#y1N699*mkZVU8i9mE*J,u|lk|VpA?f(EXw.5');
define('SECURE_AUTH_KEY',  '*Fh~Pc^J*azvquK+82iYufn$<IZ64xLMObn%%Nm5qpzK#!$JiD2<ZDXvlSb%!;p4');
define('LOGGED_IN_KEY',    '9PKa-k]S>ZS<Se5>Y./HY,W6!C=<P[v}F!103x=x/ryze144rdFo_1wgv,U2XQeP');
define('NONCE_KEY',        '|jc8b7[@QlH]ta`^6WD:L>2LY6JM<cZ5I$z+~#[)RRX[0?..l~8b`LzO3@G7rUw#');
define('AUTH_SALT',        '@w1W$ePI.V]d#*m5&}1Cb/WCCEQgA)@6eZFJa!b!Qx9,zDa-LN|)[6!n7WtgBg*t');
define('SECURE_AUTH_SALT', 'ux^Fkg{A.<P;;;U4`d//c9u`(^UErzS9*h7$bzplS-6g!4iA>E+JoQc/%LdCpe%O');
define('LOGGED_IN_SALT',   'mfu:_CLF,oj_n8TA@Kr;-+sn-Tp+rdu;&p=8f=js8#DYJ?{OHJQ1R]lX,7NB?#pN');
define('NONCE_SALT',       'A4{X&*DMuYda^3J]Iv..A~e8{}_ Ae*m:{GZ4l+Y<==gV`mqbch+jNeH9~R6nA t');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
