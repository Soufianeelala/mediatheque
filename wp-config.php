<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mediatheque' );

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
define( 'AUTH_KEY',         '2?bCoNa[>?@H4J1nB_YJ+l/(m~UnZ3&ccB<Vw6N&z4!t:c0g6bM{??P?zf)U1I7V' );
define( 'SECURE_AUTH_KEY',  'Cyb{(POaRT#>TD0ip;#/)A1T6gg<9CbiFr}lOh:;^:uf+NsaFf-X2(4P1Oviud7C' );
define( 'LOGGED_IN_KEY',    '-}tdjq,.BlYOOt~mG`| `24GnLan.$Xi{(LLMf7NCc>C~y>J Js|dT?GINrV)C%]' );
define( 'NONCE_KEY',        'JOX,xFsC,I@nPHEuexfI8%cU/F@L5qD:ijChRGzl2y~X/nn4YY!EwfFkyR5@sh5S' );
define( 'AUTH_SALT',        'N}`i7Wr}6i#8A$wXvj=pTpC@m9h[b_gqZ EAC8gX#tV9N|+RFl384cZ%gV1jnP^s' );
define( 'SECURE_AUTH_SALT', '_o<&eCF#h?rg+H3In7r5r}d^Hy*:uS-d,0sG@`p1iQDn!{P|1v;OPWv)s.QCuJM6' );
define( 'LOGGED_IN_SALT',   'S@K[vqyLm&zQN+NkO50txT@`c{4GI~jX ^NMC4`vN;E[Q*; rd5QbH(m-`~OIRk1' );
define( 'NONCE_SALT',       'qRO[L1):UTK:>F(:<+/KM<PXRXH,Jh#9?vKr|PlDuoFG7AI-HVz=*J*BL63bN|~(' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
