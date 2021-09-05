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
define( 'DB_NAME', 'wp_medibound' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '}h( Zze?[+UyvIArHoo];`4&IX+k)(o.H]*#k}~,TF&GUzm6D.*&Ye1OK`EvE|*@' );
define( 'SECURE_AUTH_KEY',  'sZP^zy1j2N-&Zei3wf(_XHOHx4gohS*pq_5e> )v#95ktoo3:Dp<,3XKf&qC{T0W' );
define( 'LOGGED_IN_KEY',    'o0JjC9zHJ(M>,/|:*fN6+M]FuQGn> qE=C=u!-<9[$s?Sff[I>L$mk:&#1 J~P7n' );
define( 'NONCE_KEY',        'fjUUn,dMtJQ44ZJ3d[l#QQ5XXpj;qRrH2;rmKP[W/g*k3$LL^ &k<Ql{lI!c[Bek' );
define( 'AUTH_SALT',        '466dn|@,PsshsD.<*DV?.4GNxOmz+P}.] wu H_`Pbs<}WL&RYjT<%er8?:M!}$t' );
define( 'SECURE_AUTH_SALT', '5spdx//L|G^6D;>Y8cHQmMo%<9@7f(Jj2%FL-%9:</^PCp!eo*a~zWUTS]Re=>{<' );
define( 'LOGGED_IN_SALT',   'mr!O(>-z /;t!l%-UEd3uh/%uQRftoI>?MgDZmPHsYV/ZsF[`<2m:F6v.t2y@.EM' );
define( 'NONCE_SALT',       '.HL7x7*Ce=jPDU@D;5QZD>!PuMjSK+;gqS,0)(RvA6jt1k/V0HQPx*r>Aw[4.[_V' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_medibound';

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
