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
define('DB_NAME', 'sql12200981');

/** MySQL database username */
define('DB_USER', 'sql12200981');

/** MySQL database password */
define('DB_PASSWORD', '7iheti7aCw');

/** MySQL hostname */
define('DB_HOST', 'sql12.freemysqlhosting.net');

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
define('AUTH_KEY',         'C@<AgodsP^B27qVvyDE70NUEZ<g`TVe)3<#G?VT7euMytB@31I8/KrF&oST86LK#');
define('SECURE_AUTH_KEY',  'RLQaTJ!j42P_Z`uUI!NaucEj@H`CW.k~=*0Yl#$d)QoBRj9EF?4?0@d]Im6^9H.`');
define('LOGGED_IN_KEY',    'gXn(fFMGR,0J Uqeax3qMp`c>|Obvd[x)[;yOlJAcXLe(eygke*vsZ{~1l8}+=ai');
define('NONCE_KEY',        'npKJ*FqQTXI^5Rb4FJ|u)>x8+_^1D*_Dsb?T+k8![rT&^5c`y,=&&~|0(km&90v$');
define('AUTH_SALT',        'hRRh-GB_Xk8zS&;Jb$kM>12ekg|prHk7>GI;S(`Lnaznzy]kT nNWBR(ju@CgW<Q');
define('SECURE_AUTH_SALT', 'o}X8AmQ]LWtGOans/GrCUi :/` o)}:T,tenp}O2Si63]^7QMnvy5*ZYiV?asOo`');
define('LOGGED_IN_SALT',   '=]3&v8)*&G1rj/5;qinpd  e(([zZ^IdSoeHGl~5Q&vk;/pnBZ#&i`ZL #iBVE87');
define('NONCE_SALT',       'TS+wEbnwGxdA(`T-9S!*h_t:V$f=PI,{p@DaC|K)yjh2?e}~g|s;x66h`vJ[R@Ji');

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
