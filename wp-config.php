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
 * * Database table pfix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'neoskills_db' );

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
define( 'AUTH_KEY',         ',wmMeF7|L^W83Jda+=!KKoFW{`P=ar3FNkBHD:A3ob?T$C{~F5EBv[t*)i[SBQC:' );
define( 'SECURE_AUTH_KEY',  'q;0X=Oh2wlRP$d<pK0= .ejpxs{l{N7H4b%sg0Vs%-70bZ[rm-FC;Q57}/s{GTEh' );
define( 'LOGGED_IN_KEY',    'H~YF-}]wS@~FBSWpE;BVsy:GB.qV$ppoiEWi[?P?Ckt#dvo3H[NtMaa-T&e[0R=(' );
define( 'NONCE_KEY',        'n-MsOVO@OmO?B4ncn2%~Pt<4-EwB464RDq7!%+tu:-/0J]I*U%DR?YJ$rz#D-(Pr' );
define( 'AUTH_SALT',        'yKNbJ!)UTzGiu/S3$k=!U7Y8/#_ 6@16up>OT1/jLD%JeUWsClVMmZ[3T`WeZPqc' );
define( 'SECURE_AUTH_SALT', '%S:lMH!S0V!IxEMtt%rA(Y59D9!;j,~]Ol5rHL^(R-D[B@QmKZqwv.R*juaYFnEJ' );
define( 'LOGGED_IN_SALT',   'Vh+[10i%8nj]a~iOlB`oL:2]{^^S87@V<XmjQZ1-1hz<oLl}2F-[]J!Zqc(d.uH:' );
define( 'NONCE_SALT',       '%!dx-$8_}1i`hu;}|M@>hXeY@5kC&>UAx&?,uq[0B~B;#:>ZtS+H)diqOzEmtp/Q' );

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
