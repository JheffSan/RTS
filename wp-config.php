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
define( 'DB_NAME', 'rts' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'UNJkk9:ZYv4t`1wOs=qQ#vt=oVvB.]SV%WORW2W7>c`<n$)VK|m}?t+!_jYlM`fW' );
define( 'SECURE_AUTH_KEY',  'EnWP}E0dW/GHIIS}2:[BKHV%EKkmgAz2e@4Y ZuKou[* vX3ZK8R <c{?+0gV0$}' );
define( 'LOGGED_IN_KEY',    'SVhDKo<.[NGbII]B<eq6XQ[QcSN?HvbyJ@fFS4}%c`=&}Ig;Da/Lw %-C=`SJd9)' );
define( 'NONCE_KEY',        'xL+T[%8tB([ueIn`R *M#rQ6AK]C}Grb}cM@ssd=f+rKfc5g3N/j-KPL@uxvZ^*!' );
define( 'AUTH_SALT',        'F11v<`*TFu3-&v(l1)V5}yibmo+aZAdJ3sGI1}r]!@Ckn[H/]OiaJyob oIL$}L!' );
define( 'SECURE_AUTH_SALT', 'TFlLNlaCi[)4itSQU~RU/eTH?OR(;sZA#M5DaHGSyBG{V3m;ql/m/gcdodg5mdyt' );
define( 'LOGGED_IN_SALT',   '@+=-|?{ok_V,o^[XMZc$Rsj}LDPnBzfkyL>~J7T)w1a!3JpR^I9|.Jl#%n_%oo{=' );
define( 'NONCE_SALT',       'uqC-%yTJ?e5P}B6)1GT]B[dL4a`54xUyJ1[Cp7=tG1_@&T=(pq9bN(hhBA|ipOZ}' );

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
