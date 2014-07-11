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
define('DB_NAME', 'db497486654');

/** MySQL database username */
define('DB_USER', 'dbo497486654');

/** MySQL database password */
define('DB_PASSWORD', '$*FIJe45o3)#*(%');

/** MySQL hostname */
define('DB_HOST', 'db497486654.db.1and1.com');

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
define('AUTH_KEY',         '*!LBp!6GspIhttp://localhost/TSIWebsite/+oXQH>)zw(bI^G0$AN&+|`ils~4K[@<HB+h72wYhttp://localhost/TSIWebsite/Kl6Y1P)T``:td>');
define('SECURE_AUTH_KEY',  '#F<EQ]nO{http://localhost/TSIWebsite/6Fi+?V1-i@}Z.3J|B^Ca}?Z_l*sBk40H8DqKY @e5m B{D&BVhttp://localhost/TSIWebsite/|5,tk=');
define('LOGGED_IN_KEY',    '2=Pk&}{#http://localhost/TSIWebsite/E/>h?h|(eRM-dj@qhwe+gA>1E|`l|z,Jhttp://localhost/TSIWebsite/-X?-wk9j%_-a~7ubQ;o2REtu');
define('NONCE_KEY',        'QW)3O(P)e=?4S@fP8v$OD}JvHehttp://localhost/TSIWebsite/8Ir-RCYJ!S@~2N6op/GcRhSy|]http://localhost/TSIWebsite/>qpgskAiq9_r');
define('AUTH_SALT',        '!QxXB9i3=-&m>@NB_$+q-K6http://localhost/TSIWebsite/dj8http://localhost/TSIWebsite/;%phZ&cDMVYyOQFHK}V5-H2vJvsB41{M}P&$v>');
define('SECURE_AUTH_SALT', 'D0b&q?kaJzy!:5-~qda4=Wk08=yQ2+d_0Y;AX8T^1J.b<http://localhost/TSIWebsite/Lp.9http://localhost/TSIWebsite/H^0H$_?5{+]bp|~');
define('LOGGED_IN_SALT',   '+&P9y|GZIsfYpw+{DJ<o^d*LN:http://localhost/TSIWebsite/+#}~?http://localhost/TSIWebsite/i+w{+j3keN_l/xw[`d$L^Pj7,M6fp~$Wj');
define('NONCE_SALT',       '?RnV7-#v!$`8a2GS5}tShttp://localhost/http://localhost/TSIWebsite/TSIWebsite/1*@.Z-Q$Q~[xa|`_C:<|&(+V[]y|H<1|L/XEC{1#+5*y');

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
