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
define('WP_DEBUG',true);
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'JnGXAh_:pk*8S<&[_[n_Kj%iC8r<|H)x%33vvB=$|yj:LK<luJqVpZs5}jz~IQU)' );
define( 'SECURE_AUTH_KEY',  'Vc]{;i@.ZspqwNKX(pjTV;i4_DL0dz)m{MFsfV#?=@x~ $N%VddK[lgleQjXhH[?' );
define( 'LOGGED_IN_KEY',    'eb$N~m?]|OuPi(7d9e.38vIBJ82Y9{4OgAa@-V3syskD$U<,|!.0m6IgEdFHDO^#' );
define( 'NONCE_KEY',        'V$qLEV{+x&v?XRQhAyE@=6z#=U9>18Xwrp[wv1LJ^%;DF=U:K7/m,<<lxd_WpK,2' );
define( 'AUTH_SALT',        'v.2ZywLZ,CfZ2)?V)6t3?|Q;jkD*e.4ZaoO{}2b^Hj2t;#>G#TkDz]Ut1$=r@B+ ' );
define( 'SECURE_AUTH_SALT', '- ?>g^cCi])CsK/0_LV|9*p,(3>4AEE7[fU2J!-LP9g/x59i=&j/FYM&XmswN1V=' );
define( 'LOGGED_IN_SALT',   'EcRDd<k9I)-jOgP|G>A+sqQfv+L%;8b.Z-_(lp;x}Fv4U]vfNA,;GX,{bXUmotxA' );
define( 'NONCE_SALT',       '?)%#<:4[e(T:#eODG>b362b,3H8nid07h8 V7&[d4II@iCQY?6:4O+H`K7pr GHh' );

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
