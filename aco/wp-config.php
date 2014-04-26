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
define('DB_NAME', 'aco_wp');

/** MySQL database username */
define('DB_USER', 'wpaco');

/** MySQL database password */
define('DB_PASSWORD', 'doge');

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
define('AUTH_KEY',         'Ks+Cc*(i!;F?Ns2#NVJyb<Krey8KXlNR0kca#Zzkd,Ve*:{cW}sD*|=8~jwM;isg');
define('SECURE_AUTH_KEY',  'vF;_s:F}v6d4ud|%OH+]AA6Oy5IC|n +,|?|ZaVj~1Vl+PNJ_2GXf=Mlu6{KrQR0');
define('LOGGED_IN_KEY',    'iO!eX&_L3x/x<J7o=.->V`_TL{+w-.6!34eauRI4%&L|BCS,@JU*uiU*<F^}-hX)');
define('NONCE_KEY',        '|bqu>C20;7gdhU#5:-Z96?|(VhXRadIF;i0UoEUZX8x;P@{tcN|>sURNu=WV.657');
define('AUTH_SALT',        'l ~nk_eBbkD,^3=r~L=Uh=l`$#-8Og8kZp(p3*E<H|Pen9OfbLz-&/X$+SP#z~i^');
define('SECURE_AUTH_SALT', '-r$OvNqyVQ{iWsJl.vFAwRWGVJra2FLr{YB+-n{87 o^uqeBO!}c`7S~3vRR,Jtz');
define('LOGGED_IN_SALT',   'y##41%P}%dDQ=|1 30o;Y `dsW$B^nDj~NvAfc;yxa*x`K9a33@y9E&kJ,E!7t+k');
define('NONCE_SALT',       'oQ?k<>KBTl&>PwtgkCM+NZJGj+K%a(?hE4EwpT-welYqHw!7is|_5,F|M]s-+[YU');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'aco_wp_';

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

