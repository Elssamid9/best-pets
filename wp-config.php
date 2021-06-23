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
define( 'DB_NAME', 'best-pets_db' );

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
define( 'AUTH_KEY',         '|a(sF:& 8s#GdBVVyyu]M3Q!Vc@coO5/!`;-ST0p^wj<D>!#:n)0.CK@>}8i%_/Z' );
define( 'SECURE_AUTH_KEY',  'o-]iwOGj=/.!v4W$VG2b>=`JQ^O..q{9]f:jij{wjENLHH??fP0+uj!E$QX!2_xx' );
define( 'LOGGED_IN_KEY',    '<0D~y(KK;CDx5TA Z)B*60CUz?:) Yr8V}T=806u}%?`;9|N6?*bTUob*X_%$&;J' );
define( 'NONCE_KEY',        '6n;nBK3C%hk_mC_^=9d0Ko6Lha9*m|/|1,yCex)Mi|YsaAx2k,!_i_|p9~oEtx:^' );
define( 'AUTH_SALT',        '|QO/nY}P=MM,ci.W%,cc6%FsEZ>[iGgD=?B%i$z%._rH3%y#B<o,4CuA,~&yz??2' );
define( 'SECURE_AUTH_SALT', 'KT,9O;K9m@Hm$3@y@3Mt_U{gZ7xQyn+ml$Hpf$H*SE%Fz}17/< 0ah` E[mPoTp*' );
define( 'LOGGED_IN_SALT',   '*:U,+ZD8FRJctc6Ic*./Dc&!=a$PA.8q<t|h(<87UC_ W`mxk8<@CrTa2G@j1g=#' );
define( 'NONCE_SALT',       'g@-|fs Xin0|qEF&5OWG F*SBKL%JY+AW/9d/w`Wh|?e70L(7Bga=.L<F}SDW]nz' );

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
