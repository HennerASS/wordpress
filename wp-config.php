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
define('DB_USER', 'Wordpress');

/** MySQL database password */
define('DB_PASSWORD', '1WordPressPasswort!');

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
define('AUTH_KEY',         '*i*Zt3YnsV;z?B&QD*M4%Z~=$rPEW,r<>Y;GXz+hz5U>-&yht%x|<B .0b`C9.e5');
define('SECURE_AUTH_KEY',  '.+q0Z6gy2Ax!lwJyU$TVXoX#be~}k^I/1T2}S},BjDI<K,1XGuZ5:Z%RX8qDtg;)');
define('LOGGED_IN_KEY',    '^i$#i.NTwzs 5o5c/E!v?zG#B1DntQ~;>9Qy_nZOgSW<41 Js z< )]sFU*l>n:B');
define('NONCE_KEY',        'T//N];L;p8X?=-A|G6DnkUN%.-4&T=pyjDFxn9DdE^;)/:lRJz2N/_ q5m_N|2|l');
define('AUTH_SALT',        'p:v+hQmp.4.w?KQ!X.AUF!]s~pru[{N%A/UpG/?bIG#C/u:dvr9m5,(U%Yy$1?3/');
define('SECURE_AUTH_SALT', 'FCJB6d[c( 9Y^]qlE5l+:lSU6`A^y$O1x1qE7.5G]0B,M%R&dQfqzMjOSI&3fO2Y');
define('LOGGED_IN_SALT',   'U`qS&d`/kaBkS&E$TEI|`*XwZgs2`,[tV3k^|XfHbru85Wn+?jfsF<majC^iR-)}');
define('NONCE_SALT',       '(9wrD<|Y@W5N?AWlSJg/ZTmKto7%_@ir%fM03]fA04[.kcwZ! e`Mf7_r$qc@h/e');

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
