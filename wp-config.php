<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'local.conflictsensitivity.org');

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
define('AUTH_KEY',         '_X!rF]S+bF%2]EQpO[u:~.XJ*,m-r#yBI<iH]59g_6$;a;huBEja52;.V@pc+QbI');
define('SECURE_AUTH_KEY',  'm<4UYm*[&xP[zl9EYN-fl,ooNR<!P~iy}P)#@C>ufJYwck]f+dp%onJuw/mq<Q`V');
define('LOGGED_IN_KEY',    'H:,^t4irAAM+Nw+u:,f>JrLL;pTx{7Bo.fW7;}irz*K[}EdC#jaA`D-x|ph!D`UG');
define('NONCE_KEY',        'tB#q~UvVfF<2?*5}hBm5uPq28uZUBC-|Xj`k )9]a/rwG<XXCaRoMJ3T~hwQ&~jj');
define('AUTH_SALT',        'Dq$>f?v&^=7hwdiQnYm4 Tv$w~XEEUukO_Mc+[)+7<3$iU7|2%]B!P?&MC o5^pG');
define('SECURE_AUTH_SALT', 'gBB4kSA9r[[_R+bdW#_BO.gD]C9%7pVnBn3|#eKon5N@._bf,GU}z,YYSX=G/diK');
define('LOGGED_IN_SALT',   '(?#)/YPxOA+.*m[2r8IW:rGx*!5Y}=P^%VIHp|ze5J.,Dc49FWvb+nylC_IbuAa$');
define('NONCE_SALT',       '$^:NY!Z_z!mi/qV.J,`bsJ7-u(|{KNjEGLz/2?<F^[ZW%_/E&1:xFuX^-I*skl/=');

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
