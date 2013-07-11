<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', '_moz');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '/m;+a~BFl0b _+-_+Qb95j2zL[W r6pSw=1brRhg<JpuJoK(*&w%/&kc2Cho_2|u');
define('SECURE_AUTH_KEY',  'd!]tlU(O0$_~+QAVX1)<[Yg;pQvIl;V(5]K0K9}#%]mDSI-):wfYP-v5IGJM&cQo');
define('LOGGED_IN_KEY',    'K[ 6%5-_+M;Sa=Sz@+>e~Rbw|.5yDiNjm__*+V?Mp0v-&F}t-4~d=}[GQ*T>w{Yv');
define('NONCE_KEY',        'C^=wck| |(p}nnMkGa`R>HW^Ztefpf|qS5FsG kf/y?dlmF:N?}z4wDz=mZJZw(O');
define('AUTH_SALT',        '@yU6|Cg-K11d)2|,j]#7#53&6#LwaQWN)7w@KzfDfN30]gPt`ZU)C}m&awMBm?k<');
define('SECURE_AUTH_SALT', '+*AOoHnfKU67|XI)f7HKzIa$CD|gL~JWy0MYZkM`o9ZZ0#,AF,sSQaW7;9y:>sQ&');
define('LOGGED_IN_SALT',   'NaTZ<<-Xo@U7kPBzk-^h1tW{0n|xZAUyd2e-_r?->V.d5t8S1l{-C=J=?X/pXA8a');
define('NONCE_SALT',       'f%hbO$vE)rzPS/ZvJw5e4(`VtGN&UioV:;)PMh@cf+ula+ltb=u/=g@G8:%X@1I2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
