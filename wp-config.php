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
define('DB_NAME', 'aereolinea');

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
define('AUTH_KEY',         'a7#n.}~CU%I%gGOo&K>}n!Dq83=Q-zIUag_/ACf#)@rFvyB.=7^G&?FzJAPf{o=j');
define('SECURE_AUTH_KEY',  '.*73lcLXw(6D-<7y{P  +dCSqH>#<FOT0ZcRW?9aFm0H(v8fdCGP#B!kn_R;lY7f');
define('LOGGED_IN_KEY',    'W8jQz)fN:IDW!?dpYT>:2ox+Dn,!$MO|>5il;V$%NjW!xeHDyj2kc5e=t7 68?Sh');
define('NONCE_KEY',        'bO36-=4CLt[Ro=Vd2l0wYya(<`LQ.I5f&Sp<P 3A<10}FS7oy 9rz~v[}Lt-os&n');
define('AUTH_SALT',        'mwwd@E%&Dh:0&WfE$.P?ZJ1*x}q`fbl+((&4Hd;BXBdxc`UQA<wf{5>Jua%+N(V8');
define('SECURE_AUTH_SALT', '@apn$4<:v$|-</khV>X8);L~<cd{OJrN*3FdJB5km10O!?DW~41@ZvtTJ}&%uG-m');
define('LOGGED_IN_SALT',   '{Mey4lMhnxpUH% c wkk5xH@Y~O#r=)|@8QtE@]F@9nV$Aft{h@]H0&W_ByY_$,x');
define('NONCE_SALT',       '7zI(|n4/,r* AL9N:fc-  EL538RPhj=dL f`X1TVULWbYyCK L!|0D0BVK6AQRm');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'al_';

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
