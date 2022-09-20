<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'onlineshop' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'Nk-V D#^gI{0s]{LeIno),r5Da?v,^<I.*W{+w|viJPH*b+jx7baN*UMtJL?DyW6' );
define( 'SECURE_AUTH_KEY',  'X=m%kj-I(/%u|h{.6CSh!V9s{TBwgh@ge6{%4>nZktu,:N.@RLCCx3f7o;|]j`Ux' );
define( 'LOGGED_IN_KEY',    '@XyEls)s.S^7|UCY-%4)i(H;y7_?o[uTN<FD{5+pPf<I.F~qpRs%ZD-np_ tlxqZ' );
define( 'NONCE_KEY',        'GGjG%2R4EM#3XSwe3bUds(r@Cage6+`U Bn0Ix7nW7N%O/xX)kQ6Uc }zCKb9ie[' );
define( 'AUTH_SALT',        '6tN:(1hy?$Zs&m]fq<G}-BC3D(S .(_mHl{.wCB8EgE%ROVR 8.1 B@;Sc17v>Me' );
define( 'SECURE_AUTH_SALT', '3eP(;&xv8.1j9tJNgr!de5HO7i~1Cwg/b>@P;E)*_VjhCIZ8y,!B c9d1],b8a=d' );
define( 'LOGGED_IN_SALT',   'lfH04If%~6].q`/`;hqmS_a`?fg}LW[F]F}iTwH=r>RkbXkKQT2KgNIRn9S@Oq</' );
define( 'NONCE_SALT',       'P+.llh]l=[.[,)q-p{VLTc8O#P%WJRu3Ow>u}gM?&TI1NAwbh,,:i1?$U=P.G&xR' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ecom_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
