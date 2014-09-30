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
define('DB_NAME', 'neoubeauty');

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
define('AUTH_KEY',         '7/0=Qb|eahEa#`|k^@~KN:@5l8bmNB*81N[`,+41~N4;:s[~QDJ;3OEXk:)|,6F3');
define('SECURE_AUTH_KEY',  ',wvP2;G%s%s+f5ohDjFND]<5d.|%-e`q;L`pL_(R51J}F$#MY-^lM3~zGOUfE<>Y');
define('LOGGED_IN_KEY',    'z*)>RZFGj?_Z!DS~eACKi]V*q-2U>]mmU?q3D0p?b}<ee=~)LWA:. O7LTiO&$WL');
define('NONCE_KEY',        'A{HuY1Di8)TrGIyGZ2D3[+J.eUpgfwjf1A0*7O32e} &ly`(_|Rkr49sIRNQO~y)');
define('AUTH_SALT',        'LgrC^O;Ilu+*T.%yHh_|^I@{gie2[C)X[_9G:-5L+#4oV=]>Y2G2+b{z{62 E=2(');
define('SECURE_AUTH_SALT', '0Hk9GiR67|_{]0p-<{v E.c6X<q-nlwU`k_#-Zg?~D%g||&IG%UhWP>Q>e+Gm?RA');
define('LOGGED_IN_SALT',   'ztfL0^40Byl%p}]wtdrGPS_~(.P49ns%n&$u6~CTqYU0NW*npP28ipt&aZ,>wj+T');
define('NONCE_SALT',       'GCxeNCS|)pRsIb3Po8WLtdaetgm _#0~N)VH1q[,Z~lt^*J[;LRbKMn~XS{^:{TT');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'neou_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'vi');

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
