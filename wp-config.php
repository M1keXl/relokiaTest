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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'relokia' );

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
define( 'AUTH_KEY',         'Z7BL(L)YrT/9vgUDR`Fu4O{Lqp;WsYe?j@^|R$O!0iW*X5Ua?R~oTIG2&Htaq6<{' );
define( 'SECURE_AUTH_KEY',  'y0YIy(qO|?X7<}?Z:*0o[dG$3E/Zx^FR`.xN[~lu/114V5IlT23_0;Sto>zZ$t|J' );
define( 'LOGGED_IN_KEY',    '9n*|J!%C./gBTDVgJ2%|GG0!0WQ()0zcZRclbW.Gx:,[(_:8.!>[yZNGG7w8Dazc' );
define( 'NONCE_KEY',        '5[!zZYTbU3bmIbG0zWXWq^Q&.tD=]f5qdA4[w9*fg8f_3p)L`TLc0;)0ehTtuM0{' );
define( 'AUTH_SALT',        '8:O!;z0h.5M?kP(}TsVOH]||C&1M[>=YE1SxL$o7P<$qI]x[TGyckhy/$Z+.O9iW' );
define( 'SECURE_AUTH_SALT', '<nlat< PKa(5r0?d7g?o:+#Uzbzj /*|nr)7xgk=f02Zwm/,Yq2:LXgTz`y+%dtY' );
define( 'LOGGED_IN_SALT',   '3sf0N%P<f#(x`rjR9WSQUX{bFV,YsT>.(6Ixbf-([ucl^:LRl_lqb{Aeub,&|J%j' );
define( 'NONCE_SALT',       '(t}R4_&@,-WTWhmuyS1+3P(h#=>)nm]pNN}yZ%(%A*L:,`TYhk0:C4^PWi]uEL!D' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
