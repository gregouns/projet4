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
define('DB_NAME', 'data-moto');

/** MySQL database username */
define('DB_USER', 'greg');

/** MySQL database password */
define('DB_PASSWORD', 'tititi77');

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
define('AUTH_KEY',         '?U(*EC=U#f0x@S0v$=PG<y%9Tj%tQx53V~m*!}%{Fv.k?>pe7NRVjk^3H]jh8?Ut');
define('SECURE_AUTH_KEY',  'rh):3cM-F=f+; Sws>v3)dC-,Ks5*_ #m}!p;Sc/tmwVJCvEy3<6R##gKM>UN,Ss');
define('LOGGED_IN_KEY',    '~aAkdQBW7DrEP#nlI(mPOxe@aVVcd,ZlzBG(OW; Vbr%rIr7x}UiXx|kt$}k@RU6');
define('NONCE_KEY',        '5S#T1M7^Xwhe{~z=eGY)%11SGHAe.il9<gEU,Nf#7V,--)&G),8gz7_DrBkNj)Q ');
define('AUTH_SALT',        '6K%O!t$NhF/-{ay<qskwV;=%NMP)xq[N.9bKzSFjk9V@]<+Cw}EJ@]5h|v:i-1G2');
define('SECURE_AUTH_SALT', '8$T0?Z3/XYB]G%a2~`I;NA6e?=U))0 RKDo]CFzVO2$G,kuE-6;mG2s7VCO!+*2;');
define('LOGGED_IN_SALT',   'R[abOMk8)=(>]5/_Ky7KB6m;y3xt[Ki@1!2E}w]xziX+)l*WYP|N=.903dFqFAx&');
define('NONCE_SALT',       ':P /v3_=z$S,[&l6fzhu^f11FHN!gB^;bJ@k|W1E6 Y*Z?w>a(U=~ikDaqLd.%V]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_moto';

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
