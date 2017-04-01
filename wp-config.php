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
define('DB_NAME', 'wp');

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
define('AUTH_KEY',         'g<KaW+7[8B u<2qMu:)KyQ:-DH(%Q?tX%gHtns)2Hj~EA8ncYK({Lzt?E@PnaM@)');
define('SECURE_AUTH_KEY',  '/MJ19f)xx-lH$)tGz%Sc=EL~w.sqZ5I#+=9h/.EKli6 e;s@ij&tFlt4k{?.. dU');
define('LOGGED_IN_KEY',    '2s^[b=g/!33S8@hr<pe&p[>C.CJ&[C.sLjY_81Q_f|o*6:FWlTxN}oW(@W0;a/Pl');
define('NONCE_KEY',        '~#5}NwNL;hj8E8F/t(<ym_Dja-O7/BKtW91IkVlo~WlgD6$O,+X;iwPD)Igaz;h6');
define('AUTH_SALT',        '#G2jW.DI+0R27yclv.Ap|!A}gR:qmh)?70k2Q)YQ-:vtx#]iC8@q(~)hRS_*ym.x');
define('SECURE_AUTH_SALT', '&7r2)rU(?QO#hCW~.rzkXOLYqWsKJIiL[RZQje_K`F2Tf1CNAIL68z~Y!Di2Lxm]');
define('LOGGED_IN_SALT',   '%FR]mhQ[|3.g`ba^rY5__dq~Kb?D6q@p4~~7OiKVG+YZ-j.YSSS6Kx>QWk?~9gJ7');
define('NONCE_SALT',       'x9:20&k4Vf<Ekjl>n3~(WpK0O@r6j{;QdVX0zy s9b#ucl=+?*O,|n{FseZYmrpP');

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
