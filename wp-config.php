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
define('DB_NAME', 'bcp');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'db1Rrnmz1');

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
define('AUTH_KEY',         '#!cq`|{U:}e!qg+[Vt#ttmY4q<l@pJciUbnqu=tkq]<eobw_CP+`!j7Z#=n+RIQ^');
define('SECURE_AUTH_KEY',  'Or=cm>AC04P]|kGetSkMPJMv< vk*/D{%-S+/-2iWYEO)--n-J[MolLbhJ/Jx5_X');
define('LOGGED_IN_KEY',    '-<p,096VL+{ko /V6P}w}GA6M[|U^C@8Ukdg,d*7~emOA c[l&)t[A|.f{[z;DBi');
define('NONCE_KEY',        '+ikNcO/*L-h0JuhVFHmX?q:mF-J!3TPT0K`{]qzX=gK!1j|039v13$T^SaE61;#0');
define('AUTH_SALT',        '[+ C_apbCO&a8/*E a4E++<WimMwcS<y ;Jv|/f!:i|%*A4}p8pN6oGb+Fc-_-GR');
define('SECURE_AUTH_SALT', ' Nw_^!C|Wnjs/Op]*Oq*/ +p+p(z$%:Jj$/cv`S1h_.7_wE>L/~^-Bm>|0r~>.aX');
define('LOGGED_IN_SALT',   'AMX;ow }45<q2iK-> XgQ4O<v1/~d||J?[K[sOyla POlHP^N)&KLvE},:_2U}~{');
define('NONCE_SALT',       'ncX$sM}p|ax^V|-;i*lr?[yxle @~s{Ay|.HLgl!Ko:hgCo-+7-WEZNdF)w^-|zY');


define( 'WP_MEMORY_LIMIT', '256M' );
define('FS_METHOD', 'direct');
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache



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
