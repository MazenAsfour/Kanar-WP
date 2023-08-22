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
define( 'DB_NAME', 'kanar_wp' );

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
define( 'AUTH_KEY',         '*<vqrdT,]MjFROb{;cnY{7u#7u8iU_Y}KFW}~} A/S:,_C0>G n&l9|0QI{Mi(D,' );
define( 'SECURE_AUTH_KEY',  '/ik9UxfIVM IS]pw/4`YK.Imz::d<fW%TT,=rHVO)JL<,&u9j+,^=_ou=xp@MRn/' );
define( 'LOGGED_IN_KEY',    '/G;>Ma@Trw<eBC%`^F3#GQp4Ehjl%r<?gb=5[18b5dm]urd-LaDZ-a1ND=5X6=&]' );
define( 'NONCE_KEY',        '.pEsJ`*{t/neqR^ I5J*;[S>P24m!1AmKb UcBBai#5sH,wy*$E_Mp*lJC6s=*iz' );
define( 'AUTH_SALT',        '>XQZ-y>m#%6vz8YdeorK16SX.;&u_?;OWAt6uH>ocM*ner0ldO*3+v9]qXfsmB@#' );
define( 'SECURE_AUTH_SALT', 'G-)_dm_S|}/pGJV}n|L<?ZEUxTb)!?y1_?dlNV>zr;b./L3w0RJV@|,|Zyp1-]@E' );
define( 'LOGGED_IN_SALT',   'gy%i~mEED5o,r;WjJ YyI/5+B2c0N;-F!SYsAe!)#<vq{8WDU-%(K`}wT`y^E)@[' );
define( 'NONCE_SALT',       'vYr@*5C*o3_4Tj0-y16c]>@/V9@J[pN|NMYF_e8CPwyHE4DO=sUsE*Uwp0.O_^sq' );

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
