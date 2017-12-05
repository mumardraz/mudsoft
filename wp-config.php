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
define('DB_NAME', 'wordpress-4.9.1');

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

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'TcqQ9y;&tzR@>$AT:xOmTaJ(eM%PcZfb<BhM6<F8v]mQ)&X-;E~,59F9:O,HniTr');
define('SECURE_AUTH_KEY',  '{+)eY#jQ[`F :6lfh57)cACs8L{4bkm5G,e y^x-iYz)4%msa{i2q.{9:hFN}~E1');
define('LOGGED_IN_KEY',    'GM}dLSKtdYy4DI0)w|DvlnJ{oWoS}1-,kCg:+BTuajoMm6h4eY?%UHo2J76Kl$9o');
define('NONCE_KEY',        'tg~-)G>lGdl`{w9i^>f-8Ep52rZ4Siu^YE,My:]af]ap{[j|UA|ttzQj=Jd:sD;}');
define('AUTH_SALT',        ',E @3[vgs/tXb;2Fk(@k49nI/<wvnv4?%ZSlXYG@zw|g*=7}@|s^dcg/Ni@VT+[1');
define('SECURE_AUTH_SALT', '0s!PDh{9UH9F?H.S99nBgBZ]^CkJ.!.(1Ax9i?ljEUmJ_jVXDV}.kV2;CN)tT#w+');
define('LOGGED_IN_SALT',   '`tskhnU>H9j.t9t19+X<s6o#sD1U@}iCe4yjw)wGj[h&L>^:+6jKC%0[3|YREkJL');
define('NONCE_SALT',       '~6KM5@b74.7FUD=VGxxI.W%pUJ4nT%wKJTw?:~li ]-|.*:hF+=9R9=QmX+6]4^w');

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
