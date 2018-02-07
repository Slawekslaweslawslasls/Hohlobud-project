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
define('DB_NAME', 'hohlobud_db');

/** MySQL database username */
define('DB_USER', 'hohlobud_db');

/** MySQL database password */
define('DB_PASSWORD', 'hohlobud_db');

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
define('AUTH_KEY',         'j*C19G.]CP#t%LZ03k-gk&1E!=RjKT.GKr:RXsb _&OfKY&s-dFiE<`0!5_J.GTU');
define('SECURE_AUTH_KEY',  '-?LD(xB3aMxx@DVtr0-A}D+oBM{Udk!Th+UwjQ4D@H#q&qtXQ<l/;t9d97s=&tj0');
define('LOGGED_IN_KEY',    'g-Mkf!d.@/9^WB]c34w]`h? G_&68`JOi%cod/c.Cv7O^ST [uDu-7;!YNP,Hj3M');
define('NONCE_KEY',        ':8HsX7s [=_$NP9*[|LG@egLW0<=Of&VM>dox7-)#gH3Fv!=?ao>J}cG|^tofEq%');
define('AUTH_SALT',        'eyF]-){^(L?m<I]lWV!9pED~(Xv#@uTY2 qIi!^sA{Qly[?8I~rM+n74j?l)WGr~');
define('SECURE_AUTH_SALT', '_ao6I;_ToODjLhw1^gZ6Mo:aS:z5Jj|2GO:yQXe/A+p6b]9wtx]4$#|G::EQ55h^');
define('LOGGED_IN_SALT',   '~Eu.~!At,4]/Qed;:rl,WPY#ap)0>*di&^pQp>@ %+,KiF|g*YV/mU6}GCr0G+!_');
define('NONCE_SALT',       'kbV!1`km3AhQ//p L$mt_NO]Wiq[9)?f^_rv0*,2#GKZKsh8< $Q|W<CTRn&+ `a');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_hohlobud_db';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
