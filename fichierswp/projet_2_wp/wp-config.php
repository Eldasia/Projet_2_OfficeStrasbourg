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
define('AUTH_KEY',         'MHIoLUl8mEbhkN94Kd/aPqB+D42fY5JtMFRdqC9ueO/Yrbm2Ea7LEWkPdpaGszFs9YzZU8b/5/UO313ScEaeZw==');
define('SECURE_AUTH_KEY',  'MSviMJaOwgSAAxs/xyQsGxQbT3FAnh+QGNc1NZgLLYi+mntEavVVvZRAtcJAjplmDpuRRqODwhgTpcsCXyizrA==');
define('LOGGED_IN_KEY',    'qXY78PpUMPDz/47sP3Jg3TB98GoLQTxuIG452yrWDDFS7vmByjvtLzkkE3SQo58RtDX10KiJfLVknmLKVzZl2w==');
define('NONCE_KEY',        '60CHrG46oomtr316NmcGJNE6j8UWPVsKmLRKPCVdUp1TLNcWyIf290nMNxbzs7oANbTziFeT8UA8G958tmCI2g==');
define('AUTH_SALT',        'v7+2PQpeTBoqkRkQfzal60e3aZJFvBVAOm+FMZsCPKRxyKl/psh7o+m89MlQs2MGDWxQzbSfxIqlicWs3kImfw==');
define('SECURE_AUTH_SALT', '6dEatybpPQm7+pGCuFPG6PILFZx+XiR7mRU9LfmU/zMwtJOHCWAcZfm7xGbA3hjpMYIZGsrrZkXNTn/Ag6x9wQ==');
define('LOGGED_IN_SALT',   'vQ6G+LMULfdS3G1U9cqcJEE6dmUeXcH/+R3Px2uLjVB1Js+/4/0JIqkMHOzyyJ+P1kyqq7hDR98SK4xEnTeEVw==');
define('NONCE_SALT',       'z+kK76wJ3N4fOqaVDncLjluV9EhniLoTLWijk5Qfe+7a+Ii2yxan8tCi0FsHfEUv+YLvvHl7aS5/RVYzUsfcEA==');

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
