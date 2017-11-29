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
define('DB_NAME', 'riverkeeper');

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
define('AUTH_KEY',         '0.Kv.Db4^GX<#E,xxGY9k%1BuZ<!mYo.hLYhaV?~!wg3@=TUlt~u!4~2kKW`3~#0');
define('SECURE_AUTH_KEY',  '{,Z<qg0N.9)Z _q}?#TyEmwgPI1(=W*PL#-u-fjp1)oU|$f}8qUtj];S@GXL~H-U');
define('LOGGED_IN_KEY',    ':%2V:9_s@fRiUY*i9C8eQSO]T7uLnF|Ti 24;1BjS~r/nF/sA)3rzrBC&H9I37Sk');
define('NONCE_KEY',        ';7I!wiQ_XR,w|77:X(qSj@zxa8]N{wXr~a40qI[%Tu/fp@@1.J,!YL?VOc52J9Bd');
define('AUTH_SALT',        'uKkS1[dpO|1qL:gKY+pFvrBHI{dLd[s8URqYrir+_/iEU#$(;pJ-(#-[$SYn{cVv');
define('SECURE_AUTH_SALT', 'ID=ek/@65RQ#%)+uI%YMr+wE:;6~^Yd_>{AAuqQCg%YWFxzR:P_#;SY3&qnWAeFz');
define('LOGGED_IN_SALT',   'VR/z1C67/Az{0i!qqU bJ8G/}hl}{M9xPWO3pr-S1pR9dlP3M7s0BW%[MZe4O6|z');
define('NONCE_SALT',       'K0F@jS4(QtD-l4m_y-JAAbjVn%nJ9IVZ=rx}PCFzz]ef#SzE#uJ2IJn>6no[n#^(');

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
