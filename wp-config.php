<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rowinas' );

/** Database username */
define( 'DB_USER', 'rowinas' );

/** Database password */
define( 'DB_PASSWORD', 'QcTOSgJATg7cYB' );

/** Database hostname */
define( 'DB_HOST', 'mysql.metropolia.fi' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'aY0-(g^aD79t$u@i#f<`+Ws:^cvynhq~?~F!0EUS.nFNZq>%_;R2Qcnqb^-mRwIX' );
define( 'SECURE_AUTH_KEY',  '}~:Emfk}s$lKquDu~+ VltOW9CH!FVnG_2F[o+Bi#L$p*pfo6s`mHjZsk&m=X/.b' );
define( 'LOGGED_IN_KEY',    'CCIg!u=QjqMfrLvp&V0Og*{J3&?L=VT)[TtIO7wG!X<N@E%@.^;{?Nvk;l6E&x}!' );
define( 'NONCE_KEY',        'NAPoGFaCRSQ(`_jb,NwS &@3<w2^Wwq*nh4;bPxVNL54wy?^cUZ)[9$:`Viv;Vg!' );
define( 'AUTH_SALT',        'G/(PDEAV[1O_s{d_d_+|tc.{oPa$W@O}oUfX6jW?c0,{[72R*N=#e]QF3l?m3$9|' );
define( 'SECURE_AUTH_SALT', 'BYcqf31{39YZmi7m*s_nL}$mqZ*b%Eg-$!;RNu5JqM|*<j[D>BMlOtre2VwaXS`V' );
define( 'LOGGED_IN_SALT',   'UkV<0Xr<5GprrOwqx}^$3W|I-I5AD[tpS`&2orS+,1q@/mW!V#v<[<wrpi*hu4<x' );
define( 'NONCE_SALT',       'J>&CJ)e{:0A `H`9<sCXm)Xo2f.7c3>oT5;Ei?#/,Bx_=sDLLwC dKocGc!iT=#u' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp3_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
