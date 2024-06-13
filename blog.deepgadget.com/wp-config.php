<?php
if(isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https'){
    $_SERVER['HTTPS'] = 'on';
}
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
define( 'DB_NAME', 'wordpress-db' );

/** Database username */
define( 'DB_USER', 'wordpress-user' );

/** Database password */
define( 'DB_PASSWORD', 'deepgadget' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'wd^GYTcvZt4)(n$B`&RE]AQR:,^[H|^qqt?L-Lb9 ! |kC=u9M3n,a=DstU1h/5+');
define('SECURE_AUTH_KEY',  'n149z@7u]B8].,$$4:LA.sP70s9&S#JKF.nVd=WkR2}lXYvA{/zJ,-R!0VK,Dd){');
define('LOGGED_IN_KEY',    'WD.9o:7-uwH-{OR-VRslHS&-}>>4j`Q<y3T-td8tOz24 VWF^W<l38L0(@`q@xQP');
define('NONCE_KEY',        'tI9R7|9JUK(~4J~-F#PAHwi%YD)~[qp-OlxN;yT=VW3,2FYOQA.ao/qQ6u3WE:|J');
define('AUTH_SALT',        '{sRBpQMmMUO@0eSD&CKb#+APl#xW?JZM@ Z!xXp~^F.JoNni;I^vwWxTlo+AIz.A');
define('SECURE_AUTH_SALT', '{Eb9u$9%E0($4eV+X_}+NjJ<-{>MW^1Um(-Qk|`e>+y(N%`h2amtz-,+3*Ola.]c');
define('LOGGED_IN_SALT',   '|WXI!MLCFRfGbU:3G$~0_;DGI@(!C8[6y|YrhmfUFJ(!Vwu6M7#XXY^!dEiEG#_Z');
define('NONCE_SALT',       'y]%^b#KpV:}{:S|=8|h &sPaGf_!)Yk(v!^eu/a;O}6usMjWgW8AV1yF!P(t.25[');
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
