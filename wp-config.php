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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_custom' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'e5(>EI?=u:nR|JZdv7 >l}f+GXb|1P|KyL,l=Os7XgUm9xNCQK=up{1gdD#-@8zl');
define('SECURE_AUTH_KEY',  '(*wL$R..gs)]>,v3v<r#$cn-MC&K$yG6r&u|R cgFa|%][AA4#(2Ta70:>[j589!');
define('LOGGED_IN_KEY',    '~qN-SD!N<l#%Zwu{ohJ1F`<*6!+d$$/(hjI_>X2C)=(IV0/xe|/95jbkzM8i%bfm');
define('NONCE_KEY',        '!+5tP`ybUt-PoK`|!djl@rCDO<~`*j$+tw$z6O{{&S]2,Gjl -K5.?nM`B9|V[ck');
define('AUTH_SALT',        'cfY_drIOW~bK.~v;!-P>$K2~g +ZhS*Md]v-@}4sxtSE/fp$i|Zo{[qP3]+;DWg|');
define('SECURE_AUTH_SALT', 'Acht[_Az;SvLINlOLi$Nwx@ ,](iZU!)=%gx(V-Mubt$.$19qH&8=ltxf+W+|jns');
define('LOGGED_IN_SALT',   '6~mRY8I{o)4$S;vPTk!$QZcn@g!As+9(f)P/.%@rv;s|*cYK eP `7XK3.GZpp$i');
define('NONCE_SALT',       '($LKw+*oc`z$x-VMQ9E1||:<su@dUR5vr2>Q-Kt 68Y(uC%H&ezMd)c Z{rL)Z^:');

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
