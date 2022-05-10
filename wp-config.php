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
define( 'DB_NAME', 'woocommerce_store-brief-9' );

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
define( 'AUTH_KEY',         'Ae^f2I2!wRfDS<1pAe6?3w3;vby[T$:N Ig|4IthQm0[k}[w>i,}c@~<SW*v;_^,' );
define( 'SECURE_AUTH_KEY',  'B8S/jp~z2tyy:fTF&)L/MuC<&o[x<7_HeQ})g}}c&q YF;|j8m29@:&)ZrewaQtB' );
define( 'LOGGED_IN_KEY',    'Ajhagp6zv4TmcV*_)JC|U9.W]Y<M`3l0%2&8??<pKBK$y)7Yr7s~:p@G/Bc((reY' );
define( 'NONCE_KEY',        '8Ph*4K7;@s`[#%ag@nTQyimpSs~t(;t9ZpbenTMb; P(L<tTTu-s^7!afe[*tJ4&' );
define( 'AUTH_SALT',        '<#XD&IQ>~Wd7uIV5Ub9BeYP2%I!ms4PZYF]< dR n8~*m83JFTQ#e0^@b@AXfq>W' );
define( 'SECURE_AUTH_SALT', '|Z9i@b<TkBDV8IwJH|W(lhaH~`AyW6 FZ~dZ+,;S`X9;u__#*<Y2JkzHIYoZQ=e9' );
define( 'LOGGED_IN_SALT',   '?p=0M_Z0Bkr9-DguektCB:}jbi{:ZMs$[C%/fVis:7yX~*p_t7[`-:@>?T(|?1ok' );
define( 'NONCE_SALT',       '-gw}y/f>TB?&.p^B{m::zy6l]n<,s8d?o_Vyvol0D`l<VU+vgoLgi?Bh76DbUK=x' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
