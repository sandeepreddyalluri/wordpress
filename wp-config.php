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
define('DB_NAME', 'demosite');

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
define('AUTH_KEY',         '!PN><8v$sboTkJro2g*clJ!;H#5PdaL8^}<20mcz}E(GB9d3As%UAQae<JDpE`X ');
define('SECURE_AUTH_KEY',  'x%OZ4?7b,8eDVZh8-90zz<|`cuR#`YntaKy.j2 4H(un/9}!LCBOP9(yi?$lg;k>');
define('LOGGED_IN_KEY',    'wkF>PE{F#+DgFhoB`@1mEX$$.yg0d*rw_`NQ4IzjC#h_pxzlpzN~~tAqRxVIyL4r');
define('NONCE_KEY',        '-xkn}!6[qK{77HwW-hw%MJH=r/?KB95`6Ox|w-,g(tIxP;3wF9~?:UtCyJSP-7F{');
define('AUTH_SALT',        '.edg)[QIj-]6U3n!R9E[Y@51P_8bJ_,Y7~Zmn<-o$,uu<+[.Bkxj]A6Z8cNck4,~');
define('SECURE_AUTH_SALT', '^_(7EQeli }r`zre Z&d}O?i*vGu &?xttOxtQ.LgZZVkME(U!V016#kB_`K,WV ');
define('LOGGED_IN_SALT',   '|,/1=.ftXDb)YY)oL]Zcj{Ua+~}ngYa&<X p>5cV:D|d)1SRr1}~krj,C[bA$o7:');
define('NONCE_SALT',       'KT2$ m_v<k-fSU6k=)3ZW>C`+I=81D ^</yJ&MK<AC4*k)J?+)@6oZ]@ivm[(&+<');

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
 
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
//define('WP_HOME','http://54.71.144.181/demosite/');
//define('WP_SITEURL','http://54.71.144.181/demosite/');
//define('DOMAIN_CURRENT_SITE', 'http://54.71.144.181/');
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/demosite/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
