<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'mePvHx+c~5i?-{DFOm{9R:}1|I~:iVshl+@^.+l6<Z>8ikEg4SDm|;+Oq}5T*d=y');
define('SECURE_AUTH_KEY',  '.ISI(O`HR#@wOI/Q>dn+k%5#aP7w6@^&x4i1RI0<d|XBr5B|O-C+Ncnk,9*| cW$');
define('LOGGED_IN_KEY',    'ldryi:Ppi,q[ EZETbWqzmNjVBpq9AH;[g5[-Q!aew-,G+FYyt (rKk;:{H`aO#i');
define('NONCE_KEY',        'rqPD2.swp.0m46&dcf3ual~!eB-LFmY}USva_4z4?p0yXHzBClPWl|2$ +CV~bl(');
define('AUTH_SALT',        '7Zjjnk%gZR!(dA]j+)&k+eqH0Kf)$N:GCy^^2rVZ7Dz-fnsy6pN;u]D}HV/E$cnQ');
define('SECURE_AUTH_SALT', 'yN$|?lD_y{odO$F+MKQPI HC=H]w,{HS>+.ixtbvl4%TJ1[Nibp=GdB1g[gesOt-');
define('LOGGED_IN_SALT',   '~t-%M~ib.._:)Uy:nDs^I&],7Z-!A@V;,dGD2#65HnDH<.q;t2)6jMn,8/t9B*F4');
define('NONCE_SALT',       'dwl,#LYL0hENhlS73oiVIAUo=%^`-#l<&CiQQCK93`F)) &OqN|y+d))azxbP|nd');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
