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
define('DB_NAME', 'simpleword');

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
define('AUTH_KEY',         'J:,x8KA;]@93C.8eWnUY{u[%w2MrG?Pm3~&Hg*L k&[-xdfT A6]@?g~ZY})C@AS');
define('SECURE_AUTH_KEY',  '+@Hc=3/P >u@qSmW.%&B?6ny5cd-Wmfa;A,ZVbq/LV(mOnB$W94QtO^10~r4-f!g');
define('LOGGED_IN_KEY',    ')f44$mmrdPK3G[{]71x5D.$j+/~kXU;Mm]gpBMQ%_+0g#n+NC|!ez+^t](SU[`,}');
define('NONCE_KEY',        'H4.J}SMIm#$ezzxFgA?T}&zqRMa#Wtk jkpbMHq-cV[0;] Hd`:N`LY.X{!G$_*z');
define('AUTH_SALT',        '8$``rIga;AYX(M:bxc6wz!)tz(gmyPjk0),Zn<Id(V$WT0,{g]TFU/)tDDmJ*7<-');
define('SECURE_AUTH_SALT', '$,D0.{7d:%?0rPbBbp#PRiD:/~Jl>*aqVmf:Q/r&/,$MkFC7$sMo6sYG__.VB^}c');
define('LOGGED_IN_SALT',   'o3)[r-rDtXrt-0#oz07A!1cWHjO DJJXcpR]uh3~8Voad%c2]~/($xkp6/{-uX9)');
define('NONCE_SALT',       '@T}CEL_PQW]ub?^YsvxLtfw%8(.JZ@Y$;=u@P^YlNwR&&{o9?iXra^X?@(Esh8i,');

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
