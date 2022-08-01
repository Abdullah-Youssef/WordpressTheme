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
define( 'DB_NAME', 'wordpresstheme_db' );

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
define( 'AUTH_KEY',         '=:v/+E))Np3C!(gC=;Nh+4hlZT2c7e/4m83FZb>ZIC0WVE~-0r,d[@$.(6S]7]P>' );
define( 'SECURE_AUTH_KEY',  'sBL;U{@2!da~~+t=pzIshRlbZV7Gb4Cmh(SS{A[dU<uW3PDjQL|G$@`BEEmc8L`I' );
define( 'LOGGED_IN_KEY',    '%:!jLD^Kbp:j%pm[w3L(`tvcqU#7.O@[[+cD(XVyQi:VUk?G_]Cxw;v[w}O%F.Co' );
define( 'NONCE_KEY',        '+@Xa}r<{Yh,vxJ12wH$e)FOyNZ-n+y(qn|g>Lgt!xh@1~#fyzCkse!M7@Y DU?{T' );
define( 'AUTH_SALT',        ',(C=pf3ol:471oQ?{hzdXP/8qSvEy%Slq2Jx2lIME5pSttkO86#t3PeA[kR!/kQ|' );
define( 'SECURE_AUTH_SALT', 'Uik*RUM;WsXccey[~ym{fu)3[UMvw>@#ak_gVnQ3Kw)e|$c,#/q>te`K,>m{EF:f' );
define( 'LOGGED_IN_SALT',   '.M3O(Ga_WQp5{~b7z.01k[Xy}b<s>[[GQ*]{rBvCr<Y{v&x+uJqFg`x1{t$*!;BU' );
define( 'NONCE_SALT',       'fBT_^3/S~9X{F[[jQq?XLY~p`gOfu0(h5~9<oU:l3Ct&aNDuI0%iy)]%6Fu{L*m,' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wph_';

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
