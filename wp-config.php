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

if ('www.galeriegalerieweb.gabi.com' === $_SERVER[ 'HTTP_HOST' ]) {
	define('DB_NAME', 'galeriegalerie');
	define('DB_USER', 'root');
	define('DB_PASSWORD', 'root');
	define('DB_HOST', 'localhost');

	//define('DB_NAME', 'gabic402_galeriegalerie');
	//define('DB_USER', 'gabic402_galerie');
	//define('DB_PASSWORD', '-nXmrpVMKSM)');
	//define('DB_HOST', 'http://www.gabicool.com');

	define('WP_DEBUG', false);
	define('WP_SITEURL', 'http://www.galeriegalerieweb.gabi.com');
	define('WP_HOME', 'http://www.galeriegalerieweb.gabi.com');
} else {
	//define('DB_NAME', 'galeriegalerie');
	//define('DB_USER', 'galeriegalerie');
	//define('DB_PASSWORD', 'DKI[f.*,hEx~');
	//define('DB_HOST', 'localhost');
	//define('WP_DEBUG', false);
	//define('WP_SITEURL', 'http://www.galeriegalerieweb.com');
	//define('WP_HOME', 'http://www.galeriegalerieweb.com');

	define('DB_NAME', 'gabic402_galeriegalerie');
	define('DB_USER', 'gabic402_galerie');
	define('DB_PASSWORD', '-nXmrpVMKSM)');
	define('DB_HOST', 'localhost');
	define('WP_DEBUG', false);
	define('WP_SITEURL', 'http://www.galeriegalerieweb.com');
	define('WP_HOME', 'http://www.galeriegalerieweb.com');
}

define('DB_CHARSET', 'utf8');
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
define('AUTH_KEY',         'TP}d1Rdfu1:-3]dKZz{^j1EVd[|k+m~%BdV-:U|vr_fVV9;np;]ns=O%~l^6k0Ua');
define('SECURE_AUTH_KEY',  'xp915hB![+<,ASL.+]s><m!#N|#9D?c&;ECRHbmySflo&RcntuF$94uTIw6^r}/~');
define('LOGGED_IN_KEY',    '__/?Afj^B^;v<f!J59D:E--Kkam-&A>G,S@MI<ij+<j.=)Ofix;24!O64RYP7..|');
define('NONCE_KEY',        'LpCWhCK-S98MXhZUy*_$6U#9x2k0#,_DVoo>,I_@q{~>vSlGQSTKKy9.V^iDv1B|');
define('AUTH_SALT',        'btVdN@cXu({p%c{fOz6Q+]b(Yt@]t@pQ_ccvK,:vI2d,Hkso++OJ3kqDLz={mnq1');
define('SECURE_AUTH_SALT', ',H+UO+G&k)1[uy{.8J~(+!=|?ovkaw8EnA%cN._8q?H6.|d9}XvKdRn{svE)AR@j');
define('LOGGED_IN_SALT',   '(3<[jk%w+Wr8W*+PtcvXWm;hkR#x*:H<v|L&(U)-HNw53z1l`3@(=Tpd9%#n6RUY');
define('NONCE_SALT',       'Q{}])[j#||f([nCPWx+=jZ>1;#O4K$bZG8PKpxEYp8vV1I(P$h{>dTxV&IM,I8eh');

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

define ('WPLANG', 'fr_CA');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
