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
define( 'DB_NAME', 'IKEA' );

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
define( 'AUTH_KEY',         'H][{]BNlQbpZLv#nR78C3tSL1aN?ja{?4PLvJ/Y096s1wM/6dlhl6.T$bT<.0/}9' );
define( 'SECURE_AUTH_KEY',  '(Z{:R>,MC`a;^x-)08u6}]E+VGf9aO }aRDBFV;EI5#F%_+Hw(x5W8:oY/AG% 3 ' );
define( 'LOGGED_IN_KEY',    '3`UI)~]1=VkJ}C$*)~wds;qn+%;cEa{Evlar= :n_`EV4bD+-:74U|982&HgT,=k' );
define( 'NONCE_KEY',        'If9ETOu;W9qDzB@FECY_AhHrv>s3N&#_dv$YzVdE!(iUoQAiMaU:V%Csv&u$LCR8' );
define( 'AUTH_SALT',        '^+%CO|8u%:.J^mtY=7c`.!oq[&f2OHBt7=kLn7XFzB50TlHARUR4wjv,u%V,L?9I' );
define( 'SECURE_AUTH_SALT', 'UMb[W0Pyy,Ckj8&}Wa4uE7ZqNsKxi~bGt:pZ<DG2V.Gh4vOcWezJ1)B%JgG5w%n9' );
define( 'LOGGED_IN_SALT',   'R8kOH0srOT/MM6VFDNW<TM0F&VWsXBGC)a]&w@_AE2|qzJ?*+=XUy*N?P3%wYPU+' );
define( 'NONCE_SALT',       ' cU/V@Yfu4iXYD%BLQ|5o2UL2! %`D<,3UJkY.(;xI,7~#lNxb~h6jyvld0,)9F]' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ikea_';

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
