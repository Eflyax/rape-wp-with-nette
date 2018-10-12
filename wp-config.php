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
define('DB_NAME', 'eflyax_rape-wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '(Jg)B1F2U@: qq!Avlj.=|y[SbME2&}XW/jb&a52QWL9*B]wzi/b2r,pqr],|4KZ');
define('SECURE_AUTH_KEY',  'mg]:kfh:K?t?s|~[h:lxh7jEjJgG}-d:[U*@H(?hbj*Z~LNV>0/w5ymM11f2_d&t');
define('LOGGED_IN_KEY',    'C(.M>u#&gRq5eV]Grr=uU-}!{t25#`K~%d$JUUjkVm{-Wc![Nni}lCC$pQ+R_F*8');
define('NONCE_KEY',        '},,tK_3<e^0fM.2q!( 9gE~^Vy5AK!NhB>t1)D$qoT:DlYmIm|xkTs>u/Qzu`[UR');
define('AUTH_SALT',        '*uwE.x@nltp4sVgfi)v?vLSj.ys+`^Z58ZXG?Bd=8o~} gimHTK#|)ng*v*&;Jvz');
define('SECURE_AUTH_SALT', 'O;Z D8Mz(/y@W*sb0+$Ri+iu}}O`&Y)%Z:kb4!TgnD0rHI~5Mo-gL((p$1,R?M2P');
define('LOGGED_IN_SALT',   'VFQ2I5=<TSXPr{YCZsBW+4_(mi@*wq&a>#%yZ.?-8lKc`V#u8tB77UbD%L$,x>rr');
define('NONCE_SALT',       ',m+);rV;WFEY4Y#V7+6bxW7wsYLxmgc.X>4J#yu>SO7TpueMmT?o9qZ?!dJ1iJ!_');

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
