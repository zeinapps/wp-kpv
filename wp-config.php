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

define('URL_ADMINISTRASI', 'http://admin.kpv.local/dashboard/');
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp-kpv');

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
define('AUTH_KEY',         'iF3Ba:$m+nbLr-/1wW31As^1g$QuI*v[W^T_AH^$JQjUC;f2!Oh7<=9<D3TC[pTg');
define('SECURE_AUTH_KEY',  '9l M!Th=jMC@:8!F{BdXaaC60]gVgUlN8c)al1$| TQN:ZZCAz=Ev3`4ma}&k*e1');
define('LOGGED_IN_KEY',    'ZE1hi%c6jn7(QoY.ZC9c :6CCMg:Bh]up3#m%hufqYz9d%Jcr:j5#WW:wj!:}PKC');
define('NONCE_KEY',        '`)RZ_qkw<)JBW9/VG9O.kL,DCU!L=Cuhg+x]&<)b@aETd{jMXJ7e.Mkgf&r1dAp%');
define('AUTH_SALT',        '^!7SF}zM.UjdnZ:RM1?J,zCV]P6mxoJ^OLqGy]5GX9QBGqx*<b%~lr+-+h{RO`^t');
define('SECURE_AUTH_SALT', 'j6_r3~Lt^|z3OP#e8X~A,=OHa/X}e8Pms5l#lH40rIjYt6-pOant@_g|xO/loeYC');
define('LOGGED_IN_SALT',   'c$&u$]nn}WV0nP_V^kDeY6}QUKZ,~wI?%nfoVPP[qrvlOG;rC{8EFzW;VM9MYxf;');
define('NONCE_SALT',       '2}(n=[tVT?XQ+.m QXFKxUR(#z2Y%0xh~8C8|K5Y?G&`_!|20aY8T 6J+5(?7v`J');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'kpv_';

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
