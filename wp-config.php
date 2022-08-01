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
define( 'AUTH_KEY',         'v$s5Y!XMrGGW2f=LlLg@7y4I?,Up#<gZ,0.LItL+@IoG#+n@w+^7qqeRj6p?!x1w' );
define( 'SECURE_AUTH_KEY',  '!wN*}*yVpU#0)O8u5F$`k;3T i$dW_!+J`*Q-(b:Z{I%7)Zh[C9VP}=#^ss{-fT*' );
define( 'LOGGED_IN_KEY',    'Lye_IGO7_K6Vr&pIytV6a(w58d[cc(lO5tF-nJ %1_[3jw*NxM9o(jtjPw|IelDX' );
define( 'NONCE_KEY',        'm<6DuuX$mL/S>4g5I-{d/L_7H M]y[c:Q*Dt>+<<q9s+B|s@U?fAq$[0XBGi{xx!' );
define( 'AUTH_SALT',        '`96`bG l,Z|.t;EIDo+b{+1|;&3`EHwTVw1{#;U+{/F8*@t#Zd&N/IC;QO*}nXUr' );
define( 'SECURE_AUTH_SALT', ' zhJu*(c[syK6M&)3s/U(nQr#M`W^w!<5N:Cf?zT6cIi6m>?u*m+#u_{>T yfS*9' );
define( 'LOGGED_IN_SALT',   ';uH+jLw@{fdqfia?U#SX,/!vc<,7&oxKQim[l~hI583j>NirT^:0b?B~-Upyw@W1' );
define( 'NONCE_SALT',       '`{=-y%Q/~&fL~Hc8UO(0Ik.+,9HtjJP(F_>qJ@K2yMfjPE@<MS,O2Z9FRq7RC!,S' );

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
