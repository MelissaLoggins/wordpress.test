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
define( 'DB_NAME', 'test' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mysql' );

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
define( 'AUTH_KEY',         'iOz^k!_`M=1`[]5g8;FmYQaPcStc.m!ThNc4:8WaIC%3(P/exh*Kyy~o@CqgpVG%' );
define( 'SECURE_AUTH_KEY',  '6JCp^?`il;2!^}IA!1Ctjt60V.1+CnjGWqEq/.AV_qT^?a:3yjs~_Cs^|.gRW6ir' );
define( 'LOGGED_IN_KEY',    'NESEzNMwNF  :zqZ~t}.}QSle??YWnXFz6-h:4yP]?3!kkNxvSm~hB gu{bion1c' );
define( 'NONCE_KEY',        '2VnR4T4pUKcx+}KK5Pglk>P4tdHUfT@LnqhI7C&!ir&8A(`Or<Z;6-,8TR8Haly8' );
define( 'AUTH_SALT',        'ENH~kT{X l|O}r6X><s6pM)gTrN6Pa39a,7Q%DSb1+04[T_+5z=[O}PCVl1n,n26' );
define( 'SECURE_AUTH_SALT', 'Jn$[S]m&SRnVjl;~l9zp+3ZCJ.]pw&lfE3/H/wxR/tqZQ{9JrjUu%N{2^8&$-lGH' );
define( 'LOGGED_IN_SALT',   '<!Sw[[|I(mG|x|cQnW>9y3v2Rgol z*}O[|%zK7Jx&]%&O)K6,EO`2Ghx|[-J+K5' );
define( 'NONCE_SALT',       'z<<86wCHx6^U#4n!e-PS~Ry#{VD6{ZQ9XTfmFlwtcV}F O-@Y1G;_cANwAUaX5!s' );

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
