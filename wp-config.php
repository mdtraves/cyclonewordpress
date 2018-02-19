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
define('DB_NAME', 'cyclonewordpress');

/** MySQL database username */
define('DB_USER', 'CycloneAdmin');

/** MySQL database password */
define('DB_PASSWORD', 'cyclone2508');

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
define('AUTH_KEY',         's{*T,:Hb4*}/?7<~6,@FtYo1CjDfF;EGa6)LW&4xMgBYkk,zxg+0J>1|Bfb!r >b');
define('SECURE_AUTH_KEY',  '?!OE1i$AgWr!/[|<)=P1{Z-Fim{=3KV~Z*H6V>wgxCezAI0JHNXzi>K<tD2+S2dd');
define('LOGGED_IN_KEY',    'Vq<(eF?snzWGj1?cIbQe;?TA/+N~_z<<Br?]ay19$;$JRw[3W2=T[GW-)m+t, dz');
define('NONCE_KEY',        'KX]<%]6^o3oCuU!^1oSzT#9:DB}PWw,~Y+<4H]^r-rK#RX`f@q3sIU+.CO?O&F~d');
define('AUTH_SALT',        'DtFdS~8O*.dt-[3a8a  1= nKlz|pGM$xRL5b$1:@Tx#gG&2s2Xa/B4?D)cLPqc<');
define('SECURE_AUTH_SALT', '0$fWhDkxw{kn6o2?_(XgP9)k5+L)uvYPRE^;pKd]d=h J9aMI+eOL>PjNuR Imw.');
define('LOGGED_IN_SALT',   'Kc-# NzgusJhuS6Uj=8cV?<F&gN!fmtAo6,OxleV@CwWRj~60<B94M[p,7`-q4}g');
define('NONCE_SALT',       '|%xAwNdtA(lI!Oe|zD&0>aiQp.6JcovO=|P| `f+K=V$Fg+?S`afV?q*/`32UT T');

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
