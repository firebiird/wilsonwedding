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
define('DB_NAME', 'wilsonwedding');

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

define( 'JETPACK_DEV_DEBUG', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'cN~7mx<BNRT?Zgj$Q/b5Fd9.#?1+-=hf.Iz<H[xQ_X,N72xoKcMw|NW^aU-E9d>-');
define('SECURE_AUTH_KEY',  'u*cXd F2c2,AN.7zzN?%SE_qX@4:-m3JE3TEn9rPimYl=/$@i=;pkEy|IS4UR7{s');
define('LOGGED_IN_KEY',    'r~W-UNNal<8{Tm{f(IGT3D~lQz7O)/l6&}e^;LlN/dFp!-tEOEc_#V4&CxcoY{6*');
define('NONCE_KEY',        '[a^4f8>iP*uguVZ69<UO!WNJ<!iuYE_B$d81H9 LX&:@eapWn80b%`1pa@rVDb_y');
define('AUTH_SALT',        'WXH6$l= sCx@,/[]%IT0qUJ7!`Jx~48Mcv2i`IQh{ Dyk=#pu)(v:@4NzX;OSnuD');
define('SECURE_AUTH_SALT', '.M2::ei(Wkz&PUBD4ti~QY]?.z*LO:Y3i{P7qaH}7/RLN6QuIZ_b*?`o^X)1[X K');
define('LOGGED_IN_SALT',   'M{#l!eFt)f9a74/lZ tu]+@lv.27!(53OS$zC8:hEtrgewD<cdd[B=4RlfE!%S34');
define('NONCE_SALT',       'm)n[;VhDFTisVWc+ gYaj5Y*X;z,-$=hdujAQyn.YD%RwoeL]K6pa)?BO[&~M%Or');

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
