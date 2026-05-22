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
define('DB_NAME', getenv('WORDPRESS_DB_NAME') ?: 'tranpari_transfer');

/** MySQL database username */
define('DB_USER', getenv('WORDPRESS_DB_USER') ?: 'tranpari_transfer');

/** MySQL database password */
define('DB_PASSWORD', getenv('WORDPRESS_DB_PASSWORD') ?: 'i5vs&10BK_');

/** MySQL hostname */
define('DB_HOST', getenv('WORDPRESS_DB_HOST') ?: 'tranpari.mysql.tools');

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
define('AUTH_KEY',         'AWyYsM6dRR)wmsjqP653V(dtMYcd*)hOFeL%C8@Qema20baBUlA2us8PlB4UYLjx');
define('SECURE_AUTH_KEY',  'RAgJEL*TA(2SH*qaNzr)oIvXholR7#11v%R()bLprLiAQL8*H92c&5x79spZkANT');
define('LOGGED_IN_KEY',    'lMT&h6t8IwRNmZrWC*1V@mdDi^l6*P5a(W48K45#hS%xr9Hv&jORUyxdixDtygEW');
define('NONCE_KEY',        'DeM*^aFd2Uj*C79YGl)2dFBX)gCu3LbjS#2NuQf52BUBJWCNWen61Kpf(ASQ8@wM');
define('AUTH_SALT',        'oJTii5*!!EvBP#y2TRsHBGRk1b@dJHqH&JIaR#epsh@hW)PlRYlJfv3EwApo(HwP');
define('SECURE_AUTH_SALT', 'QWFiDUd2iFu3@T1OiUY5Fwm3#Qi6O!bwigCV#p6nhG&7d1PW6YE2(JUvx*ZruXnl');
define('LOGGED_IN_SALT',   'E7Ue@gaC1qDrOEcumFiwS&(z(JiPfr@I%tE*%RUxvLUAlDYTOzCIkVLgXkbCwh!T');
define('NONCE_SALT',       'jMMwQ9SFC(0(8%Ec&q%YuKLk^a)Z8&pd(TDQw!SOO#zKgT2aXd%RhT9#kjswYBLg');
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

define ('FS_METHOD', 'direct');
