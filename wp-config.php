<?php
define( 'WP_CACHE',true); 
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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'internee_db' );
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
define( 'AUTH_KEY',         '~4#t$`C|]y{-v|-S5]+y~$/YEH2jR(#N%LwI=ZNSEcvT}T*X6}i;QNy:^M.;-&;~' );
define( 'SECURE_AUTH_KEY',  'm32b*1%kZfrZX.Dr0_n?TEO5ZHv^EknL=^? %[|x{6hRL}6fT?pi]vW$4cu:ad{3' );
define( 'LOGGED_IN_KEY',    'p>XU~wia{!CYREd<|Gr]TRkB/!1N=PMWaG?X`DCh_D..K#}h~JML(Kq[~Cu5:L9_' );
define( 'NONCE_KEY',        '0E{{0s7g{pud{dI:-l1ava4+14ylvcDEw=_GI3pV$5=4+M7h#tOi`JDZL}(6;CnJ' );
define( 'AUTH_SALT',        'a1GgA%7L5r}vtF)PzlIYS^Qi)YDwH_I$nEW4)3b`0N@;d :wa5@S* >65V9b4Zz[' );
define( 'SECURE_AUTH_SALT', 'Tqg_4jx7_YgV=#Hv74vPQJQV_O)JPq(Kxy5e~{}fl`!/9B~*w<euqk~x7PP4hI>y' );
define( 'LOGGED_IN_SALT',   'uG_fCltx6*qV zes</@&YveIJ-bZO?h2]`6xpjeddJz+M}|m_%PQn,O84+~pb%mr' );
define( 'NONCE_SALT',       'k`3pD:c|F{,q7ReBgDrG,// CAZu0-E9@WeLy^a@ues-[k6/57I-vR}z8VjjOt7b' );
/**#@-*/
/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
define( 'WP_MEMORY_LIMIT', '256M' );
/* Add any custom values between this line and the "stop editing" line. */
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';