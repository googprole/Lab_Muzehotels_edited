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
define('DB_NAME', 'muze_website');

/** MySQL database username */
define('DB_USER', 'muze_user');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         '0a+|[s^|%vS^P6,X>|?SG[F[KL d)IP7+Ax()b3} d~!_7,&w+!Z%HtaEMsFNOW ');
define('SECURE_AUTH_KEY',  'QhnCER!J je^HaipTEq5Qf53Q7x$X2^ClGkv3Q@d(.&*KxL5&c hW0CMLyhae:v~');
define('LOGGED_IN_KEY',    '|+y[}OYXf)as-5,I8FwlP8!e ?G>-#[1#wez }Vs ZeEOS%^-F|3FV{`3=$}I)nr');
define('NONCE_KEY',        'gAl&[`Y` `(w-<[N3|d~,<EG$!ykcIaGQ3&)I~f|U7Wu4f$0?$UWz(!s/gIti%p2');
define('AUTH_SALT',        'Qa.S 7S8w.XE09Sh_lVP^^5xJ1@iK5x`&%cBe1{-@OQNZq3y6,G0TuS*5rTK)7gE');
define('SECURE_AUTH_SALT', 'Lq] _up+MH -7H,BthXucgl85(}$@2oI6._XIh_w uiM:.#/VNB.&7DOaEM20H,c');
define('LOGGED_IN_SALT',   'VRRAyc-,RL>}VXSKSpdz:T=].+|4K,V@#^lY;JZe&MMJP#:Sv1op<$&FAiL>rb.U');
define('NONCE_SALT',       '1Rt_M%5S[a}=Nh?e#.c5rFa_w5C(`Eqd&X&1g6-WpUbRT#88C#5 IYyqWvCpF7mR');

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
