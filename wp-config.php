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
define('DB_NAME', 'db_nrframe');

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
define('AUTH_KEY',         '|i7TcTX%DpAidp-dVo^1],Of^iAM`)&QpLSf!=?9}lrn&az_cRu:u`Q^x3TW;%d3');
define('SECURE_AUTH_KEY',  ')Owa_G2krw{eKL&<=ik&m]QV_m^dj%Z+*7/:X<G|-J3A11Hu%-{54xBq,RqUh_,,');
define('LOGGED_IN_KEY',    'FpE`o|:@2Z/Ez|oyE_EHt8EyA8UM<[(.PJknJ{i^EAwdbMPfQw)?](MCAmF_shF<');
define('NONCE_KEY',        'rS>-qiw}|53~3<d=X+,d<FH^c/h~Dc?x|yd%3gZSCgJ{^{eD=4^ikoY&!wVAm9GP');
define('AUTH_SALT',        '*VVWh6d$k3qaPb8f^W+?XApL0^{=QGe6ab;vpZ~E_Cq} vVWmfFY!9vI-T=,=^D2');
define('SECURE_AUTH_SALT', '0x^9}U4sK`HNf`HS5+VrAT4AyJmJ5e;=t=d=_y}6@&dx*a-T=<:k2^[SoV-rPo:h');
define('LOGGED_IN_SALT',   'Y@ynOM~ YTg?Jr{JP<9dHjCYOpL0j%Zl;67xZ^1oyd!fAI-]7*h~-LIW5VAhkG.5');
define('NONCE_SALT',       '<_k-$:|&#0_;;^0i>5KE2*Z 9}Qa1UwQCBT~i<2/AJwqMfM)-{(|cL=u6-=+C78p');

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
define('WPLANG', 'nl_NL');

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
