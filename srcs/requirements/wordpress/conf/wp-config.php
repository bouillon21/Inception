<?php
/**
 * The RMERRIE configuration for WordPress
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */


//define( 'WP_CACHE', 'true' ); закоментил при проверке бд
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '${DB_DATABASE}' );

/** MySQL database username */
define( 'DB_USER', '${DB_USER}' );

/** MySQL database password */
define( 'DB_PASSWORD', '${DB_PASSWORD}' );

/** MySQL hostname */
define( 'DB_HOST', '${DB_HOST}' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'dJ!7+S3Aw6|:m}oF-9i0+iRXi~FV1L[NHEGxcN!3IpG-@L:3I 7xpeLwYu-8@>q-');
define('SECURE_AUTH_KEY',  '.7+`Rq=;p.B-qbR/n&3W3%7P? /}$L=[+<@`,||-LO&}dNVY.~e6wjx}p&$.+VCS');
define('LOGGED_IN_KEY',    '^L?xL}{gF}Hyz[;`#^9.2-qAbnC9;bTYZTF]G2YGN<.-WMeDE7/t>Up:+A-O;A0-');
define('NONCE_KEY',        '#^K38(T|e8&Nzb%A>TB~#9j0Qhk#-w8t%XAZ;?;!>)Kxd3|iHVD%+!wC$29+fAul');
define('AUTH_SALT',        '%E*x}mZs5I|I_Jn<uog9/Nu@M]}f9v]3)jyz2z|H-7D&imPkkSGJW+al:jO32pvx');
define('SECURE_AUTH_SALT', '=WPo9 04yEidkz`&g->R#@Lk6QX!Y+Z2k|MVtN(sJa D4rW9lgUZ2oX YlkDm-U!');
define('LOGGED_IN_SALT',   'Z^!?er@A2?VQ~rG/,kYNg`hdION]E74Ie8Z|Oh}6#=X.25tB5hoz4b:=+|_YUzHa');
define('NONCE_SALT',       '[0GNu|^/ooE:k.._?L*wG[<4?_)#}E%F08Hw+M V1=j)T@|-7OC.LHveN+h)0+yh');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';