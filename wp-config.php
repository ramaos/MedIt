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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'medit');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', 'root');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', true);
	define('WP_DEBUG_DISPLAY', true);
	define('WP_DEBUG_LOG', true);
	define('QM_HIDE_CORE_ACTIONS', true);
}


define('AUTH_KEY',         'WmGMqyrG6mhk5lt0hlUw7SQhpwA1YUuuckfUG2OhK/R9rtapoGOOp3J3qayX/odgqtQfAiid8sU5FmDms0I6yQ==');
define('SECURE_AUTH_KEY',  'CPkb7I3SLeScU2y/GhvZlXIt3OCoaGbo9TiLrgQRDLRqKNWHPttoV/jASOuey2O+lhv5vk2CwYtAVjBosyv+0g==');
define('LOGGED_IN_KEY',    'Fc4WsJO3HtQ574/NlF8nRDeE9BHCb8+V2aTx/4+KYNowT0M+f9NtGpXUHiL+UAEuv6v5WePSDrk3F/zF2lWbgg==');
define('NONCE_KEY',        'vLWVIpDLkpRO5b1PQKBX6UR1YHGUEgxdL58/1U98FOh95YZwEQTHKHLFDy8t7IAp3OIQk7yV1MGu2qRNzK1wug==');
define('AUTH_SALT',        't73/b4hro5lViTQ9AYlgqKm+2VWzU4Rl7UoZRWZZeZPUCGe2RXpyCdfyPKH/9jT50+o3Kp7NVYKyhavTmWtkYA==');
define('SECURE_AUTH_SALT', 'zuXHV0XnZFXXv7KV4rt5dECaMf5tO3kUBb1MFsZOSCoGRAkEBnLejesr9MKARYrq3kxpKXerVbLHHwgngnQIkw==');
define('LOGGED_IN_SALT',   'QfR1EjdlSHD2wf4gNUel3SJPpOUHFty6xsgcXl1xjz2YKOCTcNcuc3mhAZ8tSJW7pjnj31w2MvUk1C6FnZllZg==');
define('NONCE_SALT',       'NXQau7hXaxdWeoc4S2ciJ7gWqZFO0dnzWhh1kqvii1AgxNMb/mGWxyeQMrOjV7KdU7XwiJjhpEHZV20u4oDMTw==');
define('WP_ENVIRONMENT_TYPE', 'local');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
