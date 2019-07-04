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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'w5d3' );

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
define( 'AUTH_KEY',         'jO8)3ocs9J+P3#wY&6(ml*%s2&Qb6_:r9}ts+EQd>;i|Bq<U!E~:B$}KU.>IYuHh' );
define( 'SECURE_AUTH_KEY',  '(4*[hl8)C!wiM+sxg&(ws%HK!bMCkGEw]Lgf!dQ])S#j1z/#nw((AjJj&9gumv~h' );
define( 'LOGGED_IN_KEY',    'Vtl5in[rE@}G./s4g3P@6z4iC &M @JiM@7Y9WvS#C{uZ&a!mj/_(tFFtJ6AHLoI' );
define( 'NONCE_KEY',        '~9uhZM+:s2Aiv8sC6;laPwT#c 8os;?4-m3Zzf]P[W}29]&mA`*2Rv1z[(7Q/EBj' );
define( 'AUTH_SALT',        'hx[7oN55)Pv2Vd}? 2$c(7PkdSf=*3oI*byF^>0I,2gcb_O5r#.f_i6tK1w3eM:I' );
define( 'SECURE_AUTH_SALT', 'MOT _$7wnK4RKp3H{`rasq20W=ztT;zC+8[~7Vb/k*$#DcT2coH4B`.j Bk&*-uO' );
define( 'LOGGED_IN_SALT',   'ixZ9YU^Q{H6U({A_fX-y0dR..ZsO9]8ZLM*-.xGR|lKX+AFh<oN pqKaa,e5NFyT' );
define( 'NONCE_SALT',       'cYtMaa:2174CNRNdWE)@,.LUT_^DeJ[nMB4eyLUC%0zZ8 S.4fq6yH^c.hL9 b`8' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
