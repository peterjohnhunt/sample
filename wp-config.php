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
define( 'DB_NAME', 'sample' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '3s,J3^nT|=fB<g:8fQ$m1oT}8mLFE[FOI^EYb,ZjkP`@+qX*gpzO#m}*+vH7-*|U' );
define( 'SECURE_AUTH_KEY',   '+uVaPur;` 9ju-QBjj6BZt`zOGpP_3oXZXI^r25>]jC%8c0L w=*|[2-N%mU8wn=' );
define( 'LOGGED_IN_KEY',     'r)_)yqR9kf)sK<u2*<>*I}KDtW8x;T%q0Y>J]?EfhhK4H:whn*P]!~AN37b~xz}/' );
define( 'NONCE_KEY',         '6G5Ag{iz=mRz_~Sl>*{}k^pjWT*w;cXmFs1+YMtiJQ`=dg%43<hm!PIFfXD[,As2' );
define( 'AUTH_SALT',         'Va@[d@YyZqx% d}5MT_br6-gF.ak4*J(XK#>H0pGKc/[IVxc_|;UVY Ot`TFP.7p' );
define( 'SECURE_AUTH_SALT',  'G<1PXILfr0;~dkUPrUo|J13XwM`DSyAg61Tk($.1.5|AD0+EgmZMU,yj7[ ~%u(h' );
define( 'LOGGED_IN_SALT',    'JO3YbKgs#i)+;_r+ayFOGW{(Q%:7@YtB5ruL]N7C$&T_/JLl{m<|$ZlKJ`-odhpO' );
define( 'NONCE_SALT',        ']Q:N1!bdC$S%T@aY}B7~7UY$*=SBqx;4(|dKf>}0i9s{>@8~`vDi|RmKuG!z)w24' );
define( 'WP_CACHE_KEY_SALT', '9Y.;@/p|r^:h&i-&l/G 6%5G)GR_V&UUvA%Bc_jE4LE/4H okEM]`SGLz9S&BC+4' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

define( 'WP_DEBUG',            true );
define( 'WP_DEBUG_LOG',        true );
define( 'WP_DEBUG_DISPLAY',    false );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
