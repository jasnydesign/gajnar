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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_grajnar');

/** MySQL database username */
define('DB_USER', 'wp_grajnar');

/** MySQL database password */
define('DB_PASSWORD', 'rafalek1996');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'R15#/Cy2H(^_?w_rnRr<?;6-JQG{[+heqjhz2K_8M]$,iji-~c=bA?ZD7E_k9pO|');
define('SECURE_AUTH_KEY',  'RV7Iq911)Nw2+=YS;xa#FVH]5}/3^KKxCa42Xc8(Hzh,NG2-f?PN9om1[K=;{CK(');
define('LOGGED_IN_KEY',    'b+rWz+FG@U$wBHnOtD(E^xq@ T0_dOiA>k/]8%P@?&sm3AC$z,#x4KOvBph77,Ww');
define('NONCE_KEY',        'gdx0aaMSeOQ6ce`C;?J6:[oPkzz`eXd-?iCd+yhC9W>(K=.~QlmC9(r(1jE5.vAG');
define('AUTH_SALT',        ',Ds8l6Z9;{6^hDM>+S]5xijSqDl*f1$Ga`w#e76U/5:Dg!so$7idw[&=,0nNq<S5');
define('SECURE_AUTH_SALT', 'vq,U/PF~YIa?20DpyF&%*iLY@F;|]dD-qM.j4!MA`o~eBOqlaIF ]Jo36`:%MBlO');
define('LOGGED_IN_SALT',   'IN}s}$[nq8+,@eGwY]aQjvB@q<90|.MT+v H[xuE[cSu@US|Dc<`pO*s[h(,k9S3');
define('NONCE_SALT',       'd`Vp!L&x@3kDf~Ida<^kHic85<[F215,UD81S$^x3Qo9y*pLxjgGU ,^&%~-)T))');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
