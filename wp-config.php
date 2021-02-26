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
define( 'DB_NAME', 'dbf6nujefw30iv' );

/** MySQL database username */
define( 'DB_USER', 'umawxr3jgsjyy' );

/** MySQL database password */
define( 'DB_PASSWORD', '5yp554q8ywgp' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'ki[7dC,swT/^Ll/Xu.2PT=J+KG<n-X#g<0xGu 0.~ Dk2@ s*nA9ByA!*3=9/Der' );
define( 'SECURE_AUTH_KEY',   'Plo@J)-.;`@6dCopMSC #E$$*Ncp2O8Y*uY=}1vgf6=FM ~+C+!_wW5a,CWGl/R;' );
define( 'LOGGED_IN_KEY',     '8)]~1Ecv@F;] `Wm_vG-f7d*7m0TDgu(_96b@!o%](1JO&`mh~f6h.-OIi>(9xxG' );
define( 'NONCE_KEY',         'k3[yZZyBykLq^yoeXS2{#f)qvkblt<@0#5Y>(ibxs01Wt_`Pl`5+_q6y[^LSu;tB' );
define( 'AUTH_SALT',         '*{KNNZgXL<P)IMZ.M*2lmJ(~i!@wO~_F$y$N*f2-45huMl8KV.yf_ig7,1D~-1Xi' );
define( 'SECURE_AUTH_SALT',  '0@fh8x0Df/Uy]HgF2QYk$&~~r&X*o]|D}vZy046RMi`7M|~k>$Xpv`]zjofohu<m' );
define( 'LOGGED_IN_SALT',    'O$-nA{W`.UR%m=|8s+9lQ<dUjc_:R^XPIKfE*;vD_NIiHI`ldxjnmL_~;@(2Y:;?' );
define( 'NONCE_SALT',        'LI*Sn@+oZm/UzY4}<<[@J2`6EeD[ZOkT]-~, $YYygcb%:^5f~ (Ik/u%oIN}Pa7' );
define( 'WP_CACHE_KEY_SALT', '*k{~9OTIk]=IDD_9Mc7M22$ ukR^T|O=zk=F:<>6V-HP?ayDNB^XmPT?>4;!Pe]J' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ggo_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
