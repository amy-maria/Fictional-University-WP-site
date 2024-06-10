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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
/** google maps */
define( 'API_KEY', 'AIzaSyDcojYXMigyexKqbLgWicOtfUz6r1XUoBo' );
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
if ( ! defined( 'WP_DEBUG' ) ) {
	define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
@ini_set('display_errors', 0);

	
}


define('AUTH_KEY',         'RVeWRlwydmCMyogxMkdYmIegv3nrt37YUCIZg7QD44sogGFIWmwPv4xPsR66P5KhFjQQG9tyc+3oFlytGWZ+zA==');
define('SECURE_AUTH_KEY',  'rzxzh4JvdbBe96rd5sMuzZewv7LdWY68EVoPkd0HHIYbXgiUQlYC/A/mneeKKL/afh/MftgSTLb+Gj8SxaTMCQ==');
define('LOGGED_IN_KEY',    'cZEtkAHiR0neFkut7CECh0d4QZlHzz2BgEtTHXlkxGvftjkHRaW+wZ3kdP9YnR0PoNRE41k/pXbrBuQBtg+uAw==');
define('NONCE_KEY',        'QF52CHPr+LMauXHf2EhAvOcFUNNvRP7QWOP1JoNwePIZ8uiV+YGDXKyrv838ll2pFkM10HYL/dFD4nbREzTmwA==');
define('AUTH_SALT',        'Szoog+yYye41LwHZG7hJJPIoa2lvzIGdkRQfWQdtobMzmOM8ugkxaGWgeJXT2ELWkf5h+YIlFTmmS0txZmoUtg==');
define('SECURE_AUTH_SALT', 'wbDUM69PY+afurhixff6CQrQJDIHzTIJHvRS7aXRvWuozedxUTVfk07FvM/eHWFRQjBs2q/kvtkbh8oOal4hIg==');
define('LOGGED_IN_SALT',   '7nPTfJPhZWxr5HA6OUPhphpKWym/lhTNz1kfSG9p1o0bSYqPCuYQdWmZeT7N0uH65HqmOKSXtviodyZHR3/7Xw==');
define('NONCE_SALT',       'qxrWEz78rgGxAdDwo5Bj0u8Y/w3SyQFnLcNYj/baW66dJmSmULQz0abbudqtSCSgmcsNqTSSh8NkEqjxPkd1aw==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
