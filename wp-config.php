<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'e-commerce' );

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
define( 'AUTH_KEY',         'kr[~]fLIQ1<TQOq3I0BhyAzFBPMpRsMB/U}&;h:z#vpJP2x~kQ#Vx$oYNEsRG.6{' );
define( 'SECURE_AUTH_KEY',  'IZ?>?Uom,Cmnc}2J27U5YK+B$BPfMr4z5*0]2C?syGG]{KO/&8kqj %J,8V1 6T2' );
define( 'LOGGED_IN_KEY',    '$Spwqy&gyG%j1c856#5[fr[:1n_ODKCCFLPSNd>}:&wW.&Gcpkehpry5pD}RK~5)' );
define( 'NONCE_KEY',        'gpdess:9{#fu/%N8[Jm*J*4+c{S=$gUm3YsGU-YS(8(F+<FHJB_Ic^HwFB:o9q|(' );
define( 'AUTH_SALT',        '-gEm!o,F643uc%8|<o#jT:2`2DS#+(fEliAW;E`@;O=o|ult:jgxre;fb/OUG299' );
define( 'SECURE_AUTH_SALT', '0EB!iu,z<:7b4sXg#QdVhRZdRvl-~q4K$xij$mIT(%D9ZKB$R3b(fZ`=61e}LY}X' );
define( 'LOGGED_IN_SALT',   'G=I<>V]9Y%8ixc9c4e[5]zc?WL!/o=p~f@e&ey60tm rRZR! HEr<u;!Y{lGnR`3' );
define( 'NONCE_SALT',       '[_5hgX5mBJspBO>h2@&M?(k>}CpuWi#[yPzci(8A^?__w*RVz]Ox#i}Q:CDl{6RS' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
