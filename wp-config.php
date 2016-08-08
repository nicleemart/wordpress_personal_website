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
define('DB_NAME', 'wordpress_personal_website');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'z8MSx.3d:xX&4Bbh3* +;,yvBqPA3,~Vr[8/]m6ykGz[<0QhEqu{8)J|i5WlE{:r');
define('SECURE_AUTH_KEY',  '-Zr8)!)OF+fxVQsXR#fL?zX#8$&z&)I}V]4X~UKxx:9:FCMxA?8R@:7@[8Tp QF:');
define('LOGGED_IN_KEY',    '|jD-cpwaB_e;_Xe2Kpr_qDXT#5WBr<]7^:Ak{UEGX%j/{g^-j350O^hfTVPxVIvB');
define('NONCE_KEY',        'oN+8|vzvchZ_=9~@ID*IOAvI^vlH.P&+_]*:F/5P4/*}pNB5mU/qVH6]z{pn9Pp:');
define('AUTH_SALT',        ';:=ugPbf..*z},%O!=T)e)~eHG TMzU*K:!Xlr7<!n3WP~;)V#HlP{k#kUB8dn{E');
define('SECURE_AUTH_SALT', 'M)efh(2L/1N*7{n{!~Y})G(=f6imiNgvSkMU8]SZ=DY9aiwN,Ue`,;(>A[k|!IMn');
define('LOGGED_IN_SALT',   'IJSUOG4i2?~&:KUM ,OSssyaOjXm*^pV5J{UI)8>eA0Gags!`[27W<w(93R8Z8 ;');
define('NONCE_SALT',       'xAg_:5TKOZ_whD5Ul:ZF#vD}S]LykMq!rG:PC!YsxQZ~L-0ei_I^.{ey9vs81 ?#');

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
