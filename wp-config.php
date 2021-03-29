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
define( 'DB_NAME', 'plugin' );

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
define( 'AUTH_KEY',         'dV< u|(1rZstaYEb<kGtBbRCUE_yD!Pt!x.8,hk[WoOPy5YQdq}ytzdv];3-5xi3' );
define( 'SECURE_AUTH_KEY',  'mMhgYpDQEb0e-=03g76&DQ(^Xq<UG$4U@DgE+z{/%,IXul@|6V18}MZ8E~S#Yyt1' );
define( 'LOGGED_IN_KEY',    'wur;`Y[9C;K9=j8nuI83lmGY_ n_cvZHi?HBkxRv+:ka,j$[c1m:hJX60[Ic)w;=' );
define( 'NONCE_KEY',        'dPb[}+Z=xWpo_=C}V8s)$|qF+wj$n%,x{5mkdh8xb_cxtRwB!ZM9G9?fVPXO3!B+' );
define( 'AUTH_SALT',        'CB6{L[h1K<mTfgT?Gm5+#xG6BvxXjT1_sdp R>0c,DSDkABQ>tZMd`49&5 TQN2o' );
define( 'SECURE_AUTH_SALT', 'EPwK6{jP0;jC/I8BfkHszXu`FNS2[tcaExo_8VjMRkHBFoc2sY,;:D|GRnnv%l~Z' );
define( 'LOGGED_IN_SALT',   'DKQwy<)1sYXJm6`vWQ7c$*a6ST>lJ-7l5b&if`FXrj vlh)Mz4~p3wm#NwW1h#r$' );
define( 'NONCE_SALT',       '|5WX!aG-$3})yac=?O>Tz1}4&Gsj2%cbS>/t3L)mER2%V@v<8F)x 2I(@(y?d}*c' );

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
