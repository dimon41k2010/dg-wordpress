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
define( 'DB_NAME', 'dg_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'dimon41k' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '.$$qe%a#/QnMrtbu^hSSJUO1tXNYY@HrG9k]_.wz`$FjGL?[jmWmPfuJ(PMW6CF:' );
define( 'SECURE_AUTH_KEY',  '~I`:?tEs}p_G.a2BKS<0#x_A}[WtI$c%;Rt}1h%33C TsR]Y:hgO+6]`BxzEpC31' );
define( 'LOGGED_IN_KEY',    'B8D_~Uam<u:yD3pZmt%({;i.E/~t}g0a:ZxU/H}&$VyK;R+DSxQS_@z~em]ku8gs' );
define( 'NONCE_KEY',        '[TwTv`Km!UWIRCDY~KBiVLO+DqRsyP-aS1{>WOhWTA21N<oN}bAdfuEHC/ipxtf}' );
define( 'AUTH_SALT',        ':{~2]$}?ypgT #FmJi0/+1+O q1$o41ry-X&kQ>`=DV]VHzxjU(`` X<f|kztfM+' );
define( 'SECURE_AUTH_SALT', ':x[j=]13Y -RU*q4GS:|3)u==oJxQW0-gW~sw8),DM`K#BC<`=-oqi&Mo8Bv^isr' );
define( 'LOGGED_IN_SALT',   ' u#u{,M_$6*8SfB{cmu9xltseZKL|:JBxyk{^(Fch^[{scy0_%9v2o;o$|m^Dc`!' );
define( 'NONCE_SALT',       'O7~HkEOtGW<V8r}|droB0LG9l.Ah|k=3guV.= v+OtSBl;=%c<[`+!j7j@ce^=IH' );

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
define('FS_METHOD','direct');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
