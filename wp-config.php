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

/** Added to disable FTP login when uploading themes, e.t.c */
define('FS_METHOD', 'direct');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'codeline-wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Admin1-2017');

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
define('AUTH_KEY',         'H|07;1AMlhyU|>lGYn4.rgoE;REs3.W~$=oEoQ;t.&CDP{^Xv+zK.]mEE/k,Un!L');
define('SECURE_AUTH_KEY',  'dGY-dRxl4{XU%ip|9RXS@6Pahu0/YSHLylrKj2ZA9wI~zfCzOULF5pU&1{znV}}f');
define('LOGGED_IN_KEY',    'C~KBzu1ofIk,on^O3fs@3siZ-B!^9(G71D)J@O:eXmzwh&MV75-<2h#;>fbi4^QC');
define('NONCE_KEY',        '[oa5kAGu,W~olEN8a|)4zXv*<MC#CDBT_Q$YStED4GaLGlt4=Oaj`$Oc)vn6_>lv');
define('AUTH_SALT',        ']/i<G;)]II|rOI ]Y2d+die5&3k6u:6^Zj (?eHUuY9QFhTk6gRNJ^k:6m6O>!Hi');
define('SECURE_AUTH_SALT', 'kQT{|@U$Ggf):+4F|CM~JxZ?6!>#hG<DXI;4X0`1u5`0rJEt,#$``@Mt!w.|ygV8');
define('LOGGED_IN_SALT',   ',OTb;?.i6ZS+`N<jj-go;t zai_dXfISFrnsWY>;wCct3pu*qDkBJ6|tj*^SlAq$');
define('NONCE_SALT',       '}hpP>Mv~Ay-U<8m4LS0J:Bb_zv iPd.EkN%XQu4Cf)S4{@iN_E9^%Y8B{@7+f&`o');

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
