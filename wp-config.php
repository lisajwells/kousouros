<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'kousouros');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'xt_`v_RF|9^Ctu9Wx}y)iK5yT(?/9r|`y35k%GVU}$1U,/ HK|CwQVMMi@`s=2GT');
define('SECURE_AUTH_KEY',  '$dS3Gs<{SO6A%Bc! ?R&|/OMRBth-k_9y{0)I!@.T?F7mnF=UBZlAs%EIqq+JpKA');
define('LOGGED_IN_KEY',    'eS<*LBFA9W<BU++}Bn3*-z9L1<1KSM;*!7}t^xF<x5::cX&h<>4k6u<H,x$uL@-.');
define('NONCE_KEY',        '>83gU8ZC84~g(!ca_A:N;[9&LMX*I:m^{Bit7t{pr[ySB3e+mBj8Em^!h|||+?H/');
define('AUTH_SALT',        '69|_g0+8r1{Wz2_d;-i*1yCn3{LY2so<_mG%>0-VR)_To/0;ly/`wys)jy{H0{H[');
define('SECURE_AUTH_SALT', 'kpU9osxoNi_fek%M-C&@Pdkp-0~p/>Tqe|e(zqsBBAWEYo(ftHa+F&7&RoziBY8=');
define('LOGGED_IN_SALT',   '7,)l3UR.]X^-gk.j;=A}ew386;QtS(h/7~mZB#{ZP+~-F~6arVt[=+y)=O!2NF&T');
define('NONCE_SALT',       'F!kz|^m,oaD#W-e5gs|M0H6[iXx0?{GdW:+Qg5-+#+R[)DPS`h$d0Ct)@2-ygQ>.');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
