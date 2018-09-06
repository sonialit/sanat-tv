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
define('DB_NAME', 'sanat');

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
define('AUTH_KEY',         't^nA-QaNxLzbhDDkKxY}pA6SJ6L=cK82q%{lp&)]+-7TgLN4S:X]b?!nKGq}uHFN');
define('SECURE_AUTH_KEY',  'c]%.+hLNK.#VR;DI[QL:?s#.+N/|6l<7~hMvRktU7k2TC9#g|c:-dbcO$b.1_U[Z');
define('LOGGED_IN_KEY',    '4akMkZ~iL/;apM=i NEm*e@a+qI^Jr4H!<MK$xJcH15y76+1/Hx5$%Kx>pvrE~;r');
define('NONCE_KEY',        'BPD7AM3=)1_*HQH2lF6GRRG^F<`Y6hZ.0dtmSI;%TX&uI,eF+8;hIs{C% kxq@v[');
define('AUTH_SALT',        'q4>kz/[i]^YxTTFtP.f1h[{<-T{(f23$ Tme_WIOu3}8m[N&k59-gY3(2*H*b0gE');
define('SECURE_AUTH_SALT', '!KMeNYcZ_uqkIk >L)DPYX%!?:lt=+ZWg?*E/i97PeaWEG_$xF$A&pAwyAMGD,i,');
define('LOGGED_IN_SALT',   'yl8sf.T9|C@7MYh.4$B6@=fR2}]E%e:le*d^.,DDI9ZLGHDV7 tNg;u.r( ap2On');
define('NONCE_SALT',       ')<e&_&}KkkbW;3U4*{,eD4T>(LQYxZddmBk[a6:wVR~@otqh{>5%:|QOpV.weP6^');

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
