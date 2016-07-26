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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'c7iHHhB8cRc+M{/2tY,,j|O]{U<1`eSO1m<s9mam_EMN-IT+{xF{c0hpF{y6Ur-p');
define('SECURE_AUTH_KEY',  'MD9<?GM}DVZ/%cld/7wVd{s:c5(X? k4)@+0%)k$|+f4|UMB=iDMj+`qK0oQ:G=]');
define('LOGGED_IN_KEY',    'HWJ}x/AMt~Uw<I|:uPJ!6i,_4$UJCth-dj^)[++m)^}M&Z+GuQ0z:`-q0qnG$&H~');
define('NONCE_KEY',        '``/OH> O|ji>VTv#;|O8,j$y6wSa-8V!GHo3[OVwH|?Yy?QkoeHdW4l6Y7^Xe+Vm');
define('AUTH_SALT',        '(LzRt/=|cKrQ5Ur@oir/CvaJQ{9YkWo.#w{Ak fq7C,l4+{qyQVsRWwAY$sO9N{S');
define('SECURE_AUTH_SALT', ')8qafl-rY]n[Px+7,@j ArY1|kD5]dF;s|EGJ$-]x074v/oozykg(EMQ|QUluO?V');
define('LOGGED_IN_SALT',   '-2!H @#u~+m:14ZikEW|K?t,2Q1qni0o}4S d]&q5c^q-|VUHZ*|8*VqTo/?O<%T');
define('NONCE_SALT',       's;V/U7j>v)Fl=y..}FnTZc2Wq#5-K?|K^kk.cr~+ w@=a_WeVrl5,vZ[,<^ONxV|');

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
