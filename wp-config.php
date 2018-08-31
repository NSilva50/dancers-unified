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
define('DB_NAME', 'dance-uni');

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
define('AUTH_KEY',         'g)*VN1!R`m50LstQ1b!~h$)*hLp)R,j?*bc<GiXR*k)V#g/oH_qv,E<28v*#VC:=');
define('SECURE_AUTH_KEY',  'g6u(OA1i3gQs35B4~ALHdEayPs8ZeCTpm+wuvUZq0pF_8EO_>#6g<rMRc]}#bWy3');
define('LOGGED_IN_KEY',    'e41x}MgHmjT;v(&O.?dC1,u0D=!$Soi2.J<8Og-Z]i9p7+aBMvOc5UE@j-EAJt9S');
define('NONCE_KEY',        'Jc[AeJ[+m?S8_Xe*K11nV$?od]ws/=4=+T4IFjU=~B{4^~#cTC#<Buv@cL5Qa{_L');
define('AUTH_SALT',        '4b`eWrC~xx*-^893@FnuA-Ep%]-y;m,D}?v*eUJ#hki;x|Y`5qw0w&#+Z8MMy|c=');
define('SECURE_AUTH_SALT', 'tH1nt,V8Xxw<U!j,]i8q5%rzk#apthOe03WM9dz}[2.:*YKxm`HkCcOR}m0T 22V');
define('LOGGED_IN_SALT',   'T}_:H-lsQ^Oq5}w&~y5A1K?>k8Pm^kfPwL#>2ACk_pG2CXA?nq)ta9+[[b11d+`&');
define('NONCE_SALT',       ';Fq8AjMDe/1Z6WxZr1(IsSWO>zLO)`TTKqAJ8{g%YhPFWE><b3_:}77jATZ15]X*');

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
