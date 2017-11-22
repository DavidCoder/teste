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
define('DB_NAME', '_wp_gomes');

/** MySQL database username */
define('DB_USER', 'gomes');

/** MySQL database password */
define('DB_PASSWORD', 'WXSJwZHYkl1YqMc5');

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
define('AUTH_KEY',         'S %5usGPAFql(~k%cH`,4l`rrzx#|k|2~rVl3pFF{+gTuk$u5}(<[;+aW:F]MPd9');
define('SECURE_AUTH_KEY',  'JG1UDog:m^}N%jB)/LL9(S*Qe%z~%r%6G qMA)jgr/a7b;dn#o6UDAWFwU{cUP-m');
define('LOGGED_IN_KEY',    ';gzzv-/fq2@-<:D1Bf*cx`;Pj=[:{_4w{],7)}]Cv&dvVB`XA^Vckp.X(F+C)0X:');
define('NONCE_KEY',        'XwD$#KSJ=IQfYL]BtZnGj@J3;H$xgh1$cyy6W5}S@qKGw`u<*{AU(T/Ba>j2{$Gx');
define('AUTH_SALT',        '(Aq:z!|6U6EpK^?Q~^gi^nxR,yYa#r}Rurb8s]u<1xw_b3Y1EkFs.lo482IO~VGh');
define('SECURE_AUTH_SALT', 'x6WEi%,=hO|NDDc7H&cX,yZA=_1vv#n;= XJ_%:n-bR~c=MuiZX3;v*WyOv9fl^f');
define('LOGGED_IN_SALT',   '|]Nouo* mlv*Nx-1eh#feu=`Y46z]4UY9;qXt6}!YvfdB*mT{FRf7%r&{lTjVJM7');
define('NONCE_SALT',       '6ZK=1w}%L(73Ji3k;Eu?.^ATHZm_lMs`u(>%(C},XU`O`K+fwTCc3cLg/dyW1Oj]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_gs';

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
