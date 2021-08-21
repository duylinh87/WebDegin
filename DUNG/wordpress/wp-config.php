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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '{mROhPZnnq~+w[7: ]cNnUC&OUUbi[Hjb^E1^vSJOw]1F.S.BT1Q0P[(c {hhIcK' );
define( 'SECURE_AUTH_KEY',  'YZXqAs WM`@%1+NFh xFqAm^G(q,22~L;|XvH|bd)JB):n5XJpfjE;Ay[C=GBm-`' );
define( 'LOGGED_IN_KEY',    'uUuWy1$/NFG78MnJayxB.%2 wQ573Q,Z<]QQT,-/8j!8U*8)9f[a`_Po2O?1oy8%' );
define( 'NONCE_KEY',        'RJsopUubi+wIsK{cMIiUM-FUW(f9lBA0am/h1ej &2DOk}8%Jx^yE%7[nbN6SJdr' );
define( 'AUTH_SALT',        'xsLG$i,Qs2s*}kbR u%cE2/- Cfh:lu)[vaFQjb]9F?+j,ax(%*yrMvDN/CLYV=r' );
define( 'SECURE_AUTH_SALT', '@lUfp-BGctD<%ye* UQU?jWt1{h)6[{l#BF6~fWMiRvN91Nl,(),i&-ukk>8%9:s' );
define( 'LOGGED_IN_SALT',   'DDK)-z~`B;k-<#UTzCEs:Sb=}]#|VTsn~Dq|$=4PQ)5WdXxfTE86KSey Vfx`&Q*' );
define( 'NONCE_SALT',       'PGP[rxitT+_a9*VL&D?)D[m-hS,Y/jA-OgXYC_}#K63xg*#R&69X-SsA5*sLE#0e' );

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
