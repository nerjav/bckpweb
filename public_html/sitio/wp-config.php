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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/nestormo/public_html/sitio/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'nestormo_nerjav' );

/** Database username */
define( 'DB_USER', 'nestormo_nerjav' );

/** Database password */
define( 'DB_PASSWORD', 'QIayRgs0aeah' );

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
define( 'AUTH_KEY',         '^m.V,1NuRw}8S^cRkUnZV?d|+4HTmgc[IR5>z:O7*L~cx.S:g1n:3r:EAIC_1Mo`' );
define( 'SECURE_AUTH_KEY',  'qN%vLQ{{ygXh$UU<N~FJ.<S5_UBG-U7F(5NufNnHud,4V_zoYO)Ros4&yA+|-mm7' );
define( 'LOGGED_IN_KEY',    '&z-0_/!@J&KU?O$%#9613-QL.-ho_L&1CU4mc)7uM.$6K,bH/R_.`k%,a)nXx^tz' );
define( 'NONCE_KEY',        'nAZD)8p.VN;G||+9[{&5f6#b@Me?L1MtN(_O3q$*dZG=a7j@$_TNoqYx@1CYMpeY' );
define( 'AUTH_SALT',        '~cvesZ5niS4M!Lo[Jq!6vnI$/jk;_&gl`5oQjN]|Vpu2hhruX&Kl8!Y}.i_(kpTn' );
define( 'SECURE_AUTH_SALT', ';Ky/262GmZR)Y1,nj*5Vqn[OqJNGnWOc8mm89G!57LyL<,yDF O0SZJoTu_Rr,LT' );
define( 'LOGGED_IN_SALT',   'VUr/yWSxQG-3;=]QGX3Sh]p w)zPYWzTn#&&DO%#sEp;o9Jf1>c/2.cxZ(4p!f5N' );
define( 'NONCE_SALT',       '@R+zGV(umyB-=-%x+0QJ]7$p8J%xa/8ucK}MhiKH3lcI41y)bGOu,jR;*=}]}+Sp' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'nerjaV_';

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
