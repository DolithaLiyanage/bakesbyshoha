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
define( 'DB_NAME', 'bakesbyshoha_db' );

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
define( 'AUTH_KEY',         ',|C]OTXJAX<#%UvQJsl}<u *mN>SsdjZGjRNR?Ig]F,6?z>dRnChrpe/u:p4/5JY' );
define( 'SECURE_AUTH_KEY',  'S}xtYoW9}X/!ru^vp4~)1G&@y?t+0Re0/bRCr!M!_K2/}^Xl8syWL=-n-x1]NwA`' );
define( 'LOGGED_IN_KEY',    '>%B?V^@q=LH*8YTj|W@mb!8<x`<MUsG99zuO7az&JqTNV)i7MBq,kSckd#eLC~&D' );
define( 'NONCE_KEY',        '*-<cakx}T;xWfGDB$&DcqqV0S&J)N*/e{WkLyK#ah;A[psz{dF(DGkMYzUzkiFlE' );
define( 'AUTH_SALT',        'lUCidph3W92H=Gi3a^-8T0Gf!q_xB#PcK#`/n=*yMvi*1*z%QJFha0;D/csph/@k' );
define( 'SECURE_AUTH_SALT', 'fPw{_jy{OH-&*jFOBa$E}}?OY)rSwe(5kI_%<{uXa> M$d4Hp:O?ba&z_Qgd@:_p' );
define( 'LOGGED_IN_SALT',   '&r6vP_S{D{eMp~TJ[a-.yr+rJa,?ny3jb$4P|og+F206UoCOGw+4HYvihe PFK^!' );
define( 'NONCE_SALT',       'uTB>_?8gAR*hPGB |$,C>$G?T@y=ITa1(^KUf,4=|,Eq^z7x.53:$<(J:ssNlC*g' );

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
