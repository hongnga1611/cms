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
define( 'DB_NAME', 'cms_db' );

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
define( 'AUTH_KEY',         '.YTLCjMDvDGLK5^%$>#O5gH|Oe2E]Y!|hHWhDXEY<YY$!;FE3-(E` b-m3&i88zD' );
define( 'SECURE_AUTH_KEY',  'd.M;i0MN^K|D3w%Y=Y:~NNF_opZOgAH[REZ,^yWA{^bBn!.?q}l$,U%ZU$G:X=vw' );
define( 'LOGGED_IN_KEY',    '<_Mdp`VZM(%Fkm/{+R#Ff@R+*dvn&lmbKB_H[x;7sY##8zs(F2r5Z : g6inn_BD' );
define( 'NONCE_KEY',        'B&p+fkn?nmiu/_HC,0Qo6:<MeHU%|T,X]VZHQ$ah`7+;5KOfm;D#l~EU[oi0/*?s' );
define( 'AUTH_SALT',        ')R6!<{L:D[M)E~?[+d5}E|:^ :G)Z(H(Rj6~f|j}([Jw:=P$I=S81}^5mxJGr{je' );
define( 'SECURE_AUTH_SALT', '*Q--E!e#a^^x<[{f*t;6DN{H[L+G#p[n=)Ce:<Y|E^D&8577H#.%b[sp0dn@&]g1' );
define( 'LOGGED_IN_SALT',   '^%XtO;^=hG vK9z0t58|g}iBKOH~n4($jT%!^>-k[gxIWD2-(]DA!^U{32B6BKP`' );
define( 'NONCE_SALT',       'Gv2O:JE2w<2T/~rZi}TqMHv33C:KQie`R|j_X9/+`m`dQ{AT5EmIWp$zy/+2r L<' );

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
