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
define( 'DB_NAME', 'lasse_godtkjaer_dkunesco' );

/** Database username */
define( 'DB_USER', 'lasse_godtkjaer_dkunesco' );

/** Database password */
define( 'DB_PASSWORD', 'ktu68jtv' );

/** Database hostname */
define( 'DB_HOST', 'lasse-godtkjaer.dk.mysql' );

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
define( 'AUTH_KEY',         'b0tz_};QNO@7Ac+y3D`E>^1?kJ;W!&qF5(!qVK_rnx{W8-)fyO(#`4#2z#-g6o6B' );
define( 'SECURE_AUTH_KEY',  'oVuUUPAqLRkB+<q7Ce,?~&zR;eQy o%%w;Un7H*%e$JmNW@4i@*(~qriJ/PP<$`S' );
define( 'LOGGED_IN_KEY',    'gQuowQUsn>R-3rbLH6r4nG;[qdVhma.j^_7ROV6|6Q6]IV:T4Y!%or!CQF2%W)Vm' );
define( 'NONCE_KEY',        'gDFe%+1+X)}^cE(i~F.+^kcu(PZ!ovKULD<p:x:)7@?> )Qym0`FF4pK9F(p$!%j' );
define( 'AUTH_SALT',        'm/Z7hgo*rF]OZc*G}R{D*@}S?K&V9]Za0ib0CR]`)*}O-Y(&#m|ICKy]H()P8((Y' );
define( 'SECURE_AUTH_SALT', 'oFqlVC>JVxc7^M:lW~?@O:IewEr +[7,0-q5}N<g*hQ@p>KwQYwim kywpn6#-Zf' );
define( 'LOGGED_IN_SALT',   '>pT{]&#x9XJg8)Y%Rt:,r8B.?>.l/?;k[KdaOJ]<j5x$q#c1;q(5tj2-LW2Gfy>;' );
define( 'NONCE_SALT',       'o73N;JEi,bcV0@?Q,V(2I|?sU{(iMeO2pnQ{|o~NtiQZ~lq}[d/9~Mm?NFVA1&F_' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_Unesco';

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
