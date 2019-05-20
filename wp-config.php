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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'w,Dw1l/fK rN(Id>*<*IdF{=4( q+?r%X/nMBU>)7x32o-f81So$<$ N>%x-.k<F');
define('SECURE_AUTH_KEY',  'np|NYI,@jzZyedwY*px_A4bfK8~YO:KrVc3AP ry#82 @B}a~1k8JI3@rZ{nP1eE');
define('LOGGED_IN_KEY',    '=82L8l}vAv6:[Y-RR2G#=X>-Z{S;[Fj[O$Pmo,x=J3gHO<XOw}8A!)5|EIc8;&#2');
define('NONCE_KEY',        '6mk@|w@m{|&`X*W5KDTVF6|Zl7e~Y}ZWL~lQ>$WkTq@4S&SQfLxAtv#D>}T[w+&b');
define('AUTH_SALT',        'dm5P[`?p%O &I`Y#skZy:YK3/d{m?:boAyM+&D^9rx)Nu;n1Tyx[=STCfWsV6NEA');
define('SECURE_AUTH_SALT', 'QeBQZDH}hyPWXQU8JOdGubU>Um[t!|Tye`+fe2Wf}49l 8_6xl_T?wOHYc+kOWW{');
define('LOGGED_IN_SALT',   'T_sdr0B#XXE;3cH?RFx-F$u?(7K&mE>!L.eF?{jc[p|Hp26UyTQ/mylJ$Y7Eb6%5');
define('NONCE_SALT',       'sDzEeWNGPi_%su,VvXwlB3~j6kOl:qe#49!2.:|b]NEXvZD;,KF>R4uq}4{}.}o*');

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
