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
define('DB_NAME', 'JipayGrasseBones');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'TPdev_web');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

if ( !defined('WP_CLI') ) {
    define('WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST']);
    define('WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST']);
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'YPfVpTOKVWB5YZwklqFKa7HebsUtvv7CowgbLyuRplzg80n3lxXNQ0JCH9sivvOx');
define('SECURE_AUTH_KEY',  'WyQ7LWXgAiMyQLLFj3OdIbWMmG7qyNM7czAb2FtBtqIY3RxKpS5w7o6BixFNMVM1');
define('LOGGED_IN_KEY',    'QCK9kIon9kbPb8xLnQRWXw2BcEKdIF99aEu0uU57yMOx83WeBvSiyU4Sq6DIGSZe');
define('NONCE_KEY',        'LGEbTtQtGmz7wtjRrDUEdR6q3Bn1Ryu00Jo8X0FCC0V7ddmHM9G5Zq20xCBCAQcs');
define('AUTH_SALT',        'HzTiRS0Mh4lYD3jAXQvKB6K74HNnsDwUxivBOkseHRyfIaDiUC9kljGMTAbkbxNi');
define('SECURE_AUTH_SALT', 'GhttdWhjWowrvOyVVrEd0aZDdW1kvUcoklPB5srYLWHXDSN1ZXe4By2LvZoPtWLM');
define('LOGGED_IN_SALT',   'E15EA1pPAKHUoBNgU4OFGgfaoachzcTS9o9BkzqIQ2QFyAYJ4hlMSMnK8oBkKmKg');
define('NONCE_SALT',       'GolYJmeMmpFzOPvRMt5Sw6FqTFXnwTVNLpRDnzNHVO3viPSGZjKsXK6rdF3oodvZ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
