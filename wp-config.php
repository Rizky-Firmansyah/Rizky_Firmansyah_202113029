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
define( 'DB_NAME', 'db_wordpress' );

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
define( 'AUTH_KEY',         'C!Sk>:1$ Wk.vZWN?X6q04F}ywT%5Pl^ru(?Wl0!!s~^e4kh=ybT2W(0eU?+PO:h' );
define( 'SECURE_AUTH_KEY',  'M|e$bDf9L3.># EBb$w5M-.Ha@ZrimO V^C9<G9WrUvz}czau)fT>9inW!p1<PCD' );
define( 'LOGGED_IN_KEY',    'GLXBSS}&.Ip+wXV_Xp7w91]FB`ML%c<[G Y6U.iQ[$;363C:]fx,?VB7^Fs[`fq?' );
define( 'NONCE_KEY',        'Lp.+&dX>{ pva{aNf@sV(,sziW*i;U<w JE5O~2A[E5w2U_;hQ/e 0[6q$Tr7noD' );
define( 'AUTH_SALT',        '+SU%pwoI;ST]>@:u[y4l/N<3n*7S%GY(|{>!A1Mq,dHT,f5vqZ4Y[t/!!f>(=vGt' );
define( 'SECURE_AUTH_SALT', '2q5&jKLEXB[ })2a$uURKC $33;@w9U cDnXpYYF$7+pD$LislEWFaW*pn:Oa[Y]' );
define( 'LOGGED_IN_SALT',   '=#g}Zo=PAIV~^{a6f4orjxIIiM]e#cucwA-&4XaiUEcgThDa^AnJ r%O+:VEtSEj' );
define( 'NONCE_SALT',       'P0Xod(V|fkdVZJ%ofg(3VnVt2@&;F6d$Cfm#fh?bpTO@Bc{T`]F:U7>~WxaJ.<$D' );

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
