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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'douxbonheur_wp158' );

/** Database username */
define( 'DB_USER', 'douxbonheur_wp158' );

/** Database password */
define( 'DB_PASSWORD', 'SpM243([q6' );

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
define( 'AUTH_KEY',         'tiib1xm5tfi2emo1i5jii23uqo96n98xd4lc7f2ob14vhxf7hecvgywcmplyir4n' );
define( 'SECURE_AUTH_KEY',  'yzpz9fvzgye58u8elkm5kdatmhbqwmgp4gep1blzx0cz9ggudeuhh8ocf4bnsti7' );
define( 'LOGGED_IN_KEY',    'c72ffrptnu562ztundcy12rriy9zbwv1retnhabwidyndocc3bzxukdnkcwoxydt' );
define( 'NONCE_KEY',        'kemimc6el6nditassk5nnaca73rejeapeuvtlyb4jhqdgtyl8xfslhuhpzlpiet0' );
define( 'AUTH_SALT',        'gncqmbv85an87azknqvfhf15iu7vli6netin6bcoduywnzvkyo4zao0tozi2mqho' );
define( 'SECURE_AUTH_SALT', 'u2yyolitbjzn2gbguonvkwomnzi2uxn83mgwj8atyosrgkuxvlwicui8boue9k0v' );
define( 'LOGGED_IN_SALT',   'aczwzak8kkobms8ernlrupddcswhhsoxwjcw2llygpeip6z9dflavwjeigbinmdp' );
define( 'NONCE_SALT',       'nkcu8ptzlzsmhvcphclfub4j9gmsgfy7q1k1mwc3wmotaxgrfnfdm7rpyp73ovyr' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpmw_';

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
