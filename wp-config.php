<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'accelerate203');

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
define('AUTH_KEY',         'VwxP[bNU[o^~_[NXj3I~%-2aQR,TDlHE^P7Pk+YwIu2-.t*^@G%,=|TSQC7}~Rd=');
define('SECURE_AUTH_KEY',  '(q0V,I55rV!9|QLyU~y)aCDM.ZG|iZS$,YW)pw0-)`]BH^X/Hu2;ejmFm_v ZsCK');
define('LOGGED_IN_KEY',    '++,`M1tXc^v0E((FfA;ZwWlx GP7`jOpSEB-so)Ex~l%Jzxc-xRa66%k~6Zl1rt?');
define('NONCE_KEY',        'd$fP/PyJ(]t%QxQs2@BH*&%5[I_W`At=Y1QuiXwpkT+n_b!!3Fu+0l]*ch[/|l-}');
define('AUTH_SALT',        'i/a&4u0l-#vh}s8Av3_PEamI8^H2R_;m5m{9Wg |Op|-{O2G =(V[c9X#%EJeKJM');
define('SECURE_AUTH_SALT', '>^MyOheo2vE4GP8[V< &|Q~Xo4-rc]ZZ0Q]Ebq-x(cXx&FONfn7 <2ao|m[7dEV9');
define('LOGGED_IN_SALT',   ' 5_/jW;?rrded!$o,#uW4iP0uU%U$g&oc7?.-a2+Cy ZN=w4o*1HG(GaxMD-gCgp');
define('NONCE_SALT',       'xau%4gpdhq&:2wSE=WC8-fj1Ocd04g9DqNF)+2|7a[wVwj}8MQG;6JJmiME].!d3');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
