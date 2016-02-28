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
define('DB_NAME', 'my_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'h,@#cY0[|MtHwYbL:Omg3(giyT@PBg9ke-KT6i&q`Lw{:*|<Y)K>]?9e)~z01SKD');
define('SECURE_AUTH_KEY',  '.+gPGQu=f)ERkoT:*,;TsZjAm[dhWX|pY9M4^p^9iac2O.YO+ vnv77<|?iFHu<t');
define('LOGGED_IN_KEY',    '4I_T/kb2eO-8|`u[]mC-m[nA]!:6N_N~ASgLEs._[RU)Yl6O:`,R)H2{UQU3e0Y&');
define('NONCE_KEY',        'BW|].v3Mcm$2|#<Pgy!5p~v=pagBIVz7!1k 0Ux>h0|q|H|gmOx]XqE[06i*<|O ');
define('AUTH_SALT',        '~hP-%qXTF+|?{nUD*<&(AP[?0HDb{<ijBZ$}MX~fUq?FM[+c?U 0[|MU|U|c9A.}');
define('SECURE_AUTH_SALT', ']ivL=Vly4,%+Xq|)Z^ Kul%>]Of.0-cg-1BP]M;!Ho[y!}vs8bqDuXl^WZJ1w?a8');
define('LOGGED_IN_SALT',   'KR`*r|%Fc.H`6|s.3:f*v! }{[[vV4OSc1U?=wMS`lVUOH^S0{JDSW>hD!r{K?^n');
define('NONCE_SALT',       'aLmhPsE,+mqG$mBVEV>1,V*J,x:-R;G_R5P%5V&xS#Sn} nHyMsT3u3_HE<38^7+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_root';

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
