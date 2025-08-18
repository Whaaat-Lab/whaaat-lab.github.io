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

// quick fix, wrong URL
define( 'WP_HOME', 'https://whaaat.io/lab' );
define( 'WP_SITEURL', 'https://whaaat.io/lab' );

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'mouseand_WPKST');

/** MySQL database username */
define('DB_USER', 'mouseand_WPKST');

/** MySQL database password */
define('DB_PASSWORD', 'Nfz!rR[Dng!tb3JBI');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY', '1f68df07a99b435c589a5e53be767891cd25604217b31b94dd9683eced9fc43d');
define('SECURE_AUTH_KEY', 'b25c89963c6fa0ee3d0614141d2603d5633285f27c316186cfb6f424ebf10eb3');
define('LOGGED_IN_KEY', '186a96dffc2664e263a19900f6608893dd8ad25560d5cc1547a25758b38b0493');
define('NONCE_KEY', '52afc09d64d1787f58eed63f22557b80eb4250cd31c1ead2b2618bfe688712cb');
define('AUTH_SALT', '76505a5a50ee633906c1694971a8f08283e40701cb206c05d249e6eaa828978e');
define('SECURE_AUTH_SALT', 'f0f19f3471fe29a5abb2b5b8c9cbcd0a1566cc0348d366873160e108f3c8828a');
define('LOGGED_IN_SALT', '0822b60d30bf789aef8feecb8d8e57175e5a2bbd2d77131024174ebb4f762bf4');
define('NONCE_SALT', 'b332bbd1754e02d0d06f7b893cc8466ffe166d2b5e83784ac120a450a581412e');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'K5W_';
define('WP_CRON_LOCK_TIMEOUT', 120);
define('AUTOSAVE_INTERVAL', 300);
define('WP_POST_REVISIONS', 5);
define('EMPTY_TRASH_DAYS', 7);
define('WP_AUTO_UPDATE_CORE', true);

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
