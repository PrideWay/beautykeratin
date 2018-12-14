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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'nOF+Yt35VoaGElvLzCImShnY03Ywe003FPY+cvRpPDZUkOUggu4Nh2AyMQfWlrP/NyRZER1O80XAD8AxOQ0Czw==');
define('SECURE_AUTH_KEY',  '91E4t+EwtVka0ovotH+22f5zgFPeSJ2LKQuHA7SxG5xJgBoHWBeAcHgXRue169iU/wZdF0I0MNQoMrKEsvl2HQ==');
define('LOGGED_IN_KEY',    'onzATyU7YR2jI/6qXVnvFqAznQA5T3IBMRjtFMsQIUS0reoixGiA9CEt7y7FGOg/NhYQN7WlP7tytv5N/oTNuw==');
define('NONCE_KEY',        'ExpKAUxw/4rcElL1JS1xtBPTLCLT1FhJe++KelgYEmikaLf53x0QIJXOBpUMOgnKJVr6VYtQn7bUWv4kSSNghQ==');
define('AUTH_SALT',        'Jmb+Eg8JdKcoJITbUNHhjeHWHgjiYRLKQ4das0pXe5NC0YmJptPTw9K+MwkvH0kVA4Eul7rjcoZh5jKRD6TY8w==');
define('SECURE_AUTH_SALT', '2Oc62W2whhGDWYTy0LVD9mlpy+xdBQgYrMiitoWUj9OItX2ziBy2q4U8TuO+jIKqAFkdkl9/Y/ru0ZTzZuwOTA==');
define('LOGGED_IN_SALT',   'JWVUFwr7p9Xaa6LwTZKum8MwqJwVFt/KnrcslxF7E17ZB2S7DiHz0N7MVclAT38kG2J0iYo5sAP2DqE2DYfp/A==');
define('NONCE_SALT',       'yYLWSan+m23HaqY/pl2eXwLUNcmqEe+QTLym4CD2y/MBIyZ8bTPCVzptbJ1CYG1Oq6BZRgOv2ZU17DGISGVXOA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
