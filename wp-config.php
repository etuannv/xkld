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
define('DB_NAME', 'xkld');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '~);w}qeM%@%x3P8P25oWNWlw+qj-,k e&cqq58bytbrYcnrg-)JF |A!q^ERE>gd');
define('SECURE_AUTH_KEY',  'JeWd^$DpN#R+sG{Hv&q0,[2+_nBBj&8Q^O/gg_zIBc/r|kAlyZ/gUe4c itw4MVd');
define('LOGGED_IN_KEY',    'lT|J^,4g>%gqZdQtNk@n>W8VfDZPkJFAkY+Y-Rdw|(tw$,ixe[M/z&6A;SH;,|r9');
define('NONCE_KEY',        'I+q/8E3:PAG5nv`rU;<Enf1b;OZ&Ll_]PU2~IPw(Q(w.+@?l3S/R^&QAMRX^5S)t');
define('AUTH_SALT',        'cP~NEa07V:V-0dSF6)@aAUo#a9W+,+8t73mbzuxX7G.Q0YE7I@P>i:xp-)A$uzot');
define('SECURE_AUTH_SALT', 'vq(N(b6kGvCUOO9nZKa;Q`-z5N5+%R&1s8o$PQcgd.Bx|G]uSc>tpH$g_x+33BUc');
define('LOGGED_IN_SALT',   '6V_Rfx;x6$ OLxOfr_xDK!8%jG_+>gz,I`q}>pfLK>#QWs.?>!Qe-n]ZC*+BiM)e');
define('NONCE_SALT',       'gzUY]|`-gOw)sIW0~Su$-M8Tx3G!1o9!whp|-/]mvtWP+LtaQw>H.ONH2.IgR^jb');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tld_';

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
