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
define('DB_NAME', 'fridge');

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
define('AUTH_KEY',         ']Q%N#.SuV!5~a^=#no`YYT*@IjF;WKFLOFj/TlPA:O5t`a76$z`BX;t}?jg%Ub#?');
define('SECURE_AUTH_KEY',  'U1Vq4o|ndQ&k8d2jL-yXJs!1a_B:4>KpPntD~eu?QR_p=~%5!.IZ?pDSbL:Y5qjy');
define('LOGGED_IN_KEY',    'Uhu|yH%NTgq#c!OjCB:q;F09*+y9KWv.W6wmDY 9$u49C)s#XQ5A&,`Fb,C&c7%{');
define('NONCE_KEY',        '{c3=)t-WesU Kg/8cP7>p%^qQyk@P,W*s<+Q$OgXs[8T3~WJF8;,#a,7-e+y&~O`');
define('AUTH_SALT',        'gFx,.h;=`8lv(7BDNBl&M89Y`_y54!ccrmH6MSn>/TY<=@]<0^zwIkv@D/MHwwH@');
define('SECURE_AUTH_SALT', '332Ai7-o:-=`Mcd7cxC4bu;_@K_KQf(K~)(4>=&1:xLjubBn?V],zDPor%6tllX`');
define('LOGGED_IN_SALT',   '/V-cX.4Z=!IrM|r9XydGGV]RYyrT?HH4P-&kDnKiz3[#q$V4iMWX#na@A,V[a:$?');
define('NONCE_SALT',       '&5.MhwpT.FAle_Y$e%q@fWLdsVN@#Y^63}nYLuHQ6qiS](]/9-wETu2Wo}v`o%xu');

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
