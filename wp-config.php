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
define('DB_NAME', 'id247151_wp_5e5612933b5340690a5c2d39127ad777');

/** MySQL database username */
define('DB_USER', 'id247151_wp_5e5612933b5340690a5c2d39127ad777');

/** MySQL database password */
define('DB_PASSWORD', '9ba565cd70cc24b47473f48c3aabb5c1b442dfe9');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'o9i17FOt&**2O!OK!2etGeNRTox#yH$#zSKY6Jjf');
define('SECURE_AUTH_KEY',  '@R89u56TY!gW%O41mFI!A8famcHAKPE7CoPcA5Y9');
define('LOGGED_IN_KEY',    'OKm#J*If1N&czSd#EJoZJMkAjjSV%#u#87g2gc88');
define('NONCE_KEY',        'Jh@tV%B!7cn1Oydg7DNeum&VZXoCCSrZTFI&yFiB');
define('AUTH_SALT',        'TwpRZsYkaDovMGh%@vxta%KTzN2XA@#6YFp!dfZe');
define('SECURE_AUTH_SALT', 'TH0DS7vpFQ9Vp5^%xPuP@B50*WJWC$D$4iui^^y0');
define('LOGGED_IN_SALT',   'qHl5vRbARwQulgWFR%59jnf$vzSJOdtnJ5ApoWHO');
define('NONCE_SALT',       'P9rk^MIy91HQ%IoUvJVtKf7Y!ieETISV4IKbHN0z');

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
