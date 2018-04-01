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
define('DB_NAME', 'wp-subtle');

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
define('AUTH_KEY',         'U3+G6oavGU}oQw*PZ4K;&KFvJWsGBNMTW~3%>v-4J4Hyjsx= lIKinq?],m%PpRM');
define('SECURE_AUTH_KEY',  '.QS=GgL%xSlESr[d.@kPr|Oovnv%VY?@lJ!_qLa.{+ KR/GqiGde[w TuJv{u&;O');
define('LOGGED_IN_KEY',    '-AG&1U6_0%zV*Y2~=#[1!}&9()~rq gb4+gT1U-f~)PaYu#P%:&C+xfogvtm3+fy');
define('NONCE_KEY',        '>`KQ!WZ./&a>R>97=Ecrf< _UP yv#+nv70yw%NaSHhsK0]sm<)^%oOenZF~f`1g');
define('AUTH_SALT',        'Tpq(n~f/v$Ty/w2Y(QeGe,4|* OgtlLrw_S5jt-!BG-jJ<2APb-<tu*~nYCvm_Aw');
define('SECURE_AUTH_SALT', 'UsC>% gw4Wx-pp!@^_PPUmH14W<_!L,>36Ow.jTSVp/zc*SE/Jmxp?]m[]Zh0mC%');
define('LOGGED_IN_SALT',   ')s(.c_gnpj0$U>TG#YOacVg<@q/99GVNds9$:Bfb6|q8e=Mi4>:a,d`st+bE[N>&');
define('NONCE_SALT',       't_`rk;e+_M7J}09Rw/a1DQ1Imkp<<i]`PGP4~;0ii9Z4Y }Pg**~qNUm*|#d%~h|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'bravo_';

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
