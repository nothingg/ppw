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

	define('DB_NAME', 'ppw');
	//define('DB_NAME', 'property_ppw');

	/** MySQL database username */
	define('DB_USER', 'root');
	//define('DB_USER', 'property_ppw');

	/** MySQL database password */
	define('DB_PASSWORD', '');
	//define('DB_PASSWORD', 'isylzjko');


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
define('AUTH_KEY',         'mKhLF>z3F%U+/.W{x0jd{T_dZk.<}!rt(>mVR?Wrdo]5[)awJVt8 `ZDm4jYLa&<');
define('SECURE_AUTH_KEY',  'oqS(aO{WXI::/AiKLy-nWv>wxF/!CB4R-_PA3^7|*;TelC#Ww9h|?&!RIAv OU /');
define('LOGGED_IN_KEY',    '}$&}9iyqNED4*+^/0n{>1+N uPm*zt]gwA*EB} PE@vQ]GsE;%V3L0c)=jP5^KL%');
define('NONCE_KEY',        'I^W4~WpL#s/Vdw8fI $jG=hNxI;`L!vQc908as^M:yg&Y5Iw!)]hUnk-IA=:hKj-');
define('AUTH_SALT',        '~02,,drIf6xY&nCFwV@BH5rer?|i=;b`/L:5h8&!R`Uf*Ef|`%5T+V*sC>>+C,Xd');
define('SECURE_AUTH_SALT', 'w]Z:SZK2y4`e^bs)^q@{Y|.NxwU;IpfpR-]De4JCaMBLILXu-iTN+@KgdZ=}3qQa');
define('LOGGED_IN_SALT',   'fE&Br*?zy6WLqq-s?4(0RofO&qAie)7+DRLFkS_)oFy@M4Z[O3Ts~[Q6kZ?Mw77`');
define('NONCE_SALT',       'fEA:un{-12FQn +(hhY6(4G!iX~hwnKbWe9+Px6<Ao8k-2dRXa>+HGLI18uiz+BO');

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
