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
 switch($_SERVER["APPENV"])
 {
   case 'dev':
    	define('DB_NAME', 'navigare');

      /** MySQL database username */
      define('DB_USER', 'kekks');

      /** MySQL database password */
      define('DB_PASSWORD', '1234567890');

      /** MySQL hostname */
      define('DB_HOST', '127.0.0.1');

      /** Database Charset to use in creating database tables. */
      define('DB_CHARSET', 'utf8');

      /** The Database Collate type. Don't change this if in doubt. */
      define('DB_COLLATE', '');
   break;
   default:
   case 'production':
     	define('DB_NAME', 'navdb');

      /** MySQL database username */
      define('DB_USER', 'navdb');

      /** MySQL database password */
      define('DB_PASSWORD', 'N4vigare!');

      /** MySQL hostname */
      define('DB_HOST', 'navdb.db.11146618.hostedresource.com');

      /** Database Charset to use in creating database tables. */
      define('DB_CHARSET', 'utf8');

      /** The Database Collate type. Don't change this if in doubt. */
      define('DB_COLLATE', '');
    break;
 }

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
 define('AUTH_KEY',         'M0&d|DjlqhQn}|Ux-DGXwyd*qCD0lb5ZN NI]HUb25G]<4X!bPm&C0vs(?pKJ%4d');
 define('SECURE_AUTH_KEY',  'ncnC(qu_]Z[KmRv^-([os^Si[Z}sg,H46Z|[zyL8bKZkWUF8Qa+c?#ST[pCTO:6U');
 define('LOGGED_IN_KEY',    '+kex@~!1;Lm1~K|q0pu;Qc<Ad x8HJiN*`J3!4]&d3vF+I-?X.;zAg{m(bIMkJw~');
 define('NONCE_KEY',        ')+h`<^MS~Bglp/C@kck54<,:{x`8C>g-cNQi~}x:ttL,+$w;B_wNq}#oDGKs$G5.');
 define('AUTH_SALT',        'mfyg)97/aOmvu+L!|cPIhkt- %>oxug`kPOrcv(>f/c-IZ/Qr`|}(er:>bFc$f4&');
 define('SECURE_AUTH_SALT', '-axv~0|@|suxrj|P)Y-L-B5%_O*XaB_/Q>N`-F[m|BTrT.5+%?-6![hw)z-^,h i');
 define('LOGGED_IN_SALT',   'j{a8!eQda4T5EssUf-D8O?8v3h$OHk^ P-m<=QA&=J)S!(<;6j/+-C$(6H-f&z03');
 define('NONCE_SALT',       'QGxLO!iw|r$_bvLN~DA.uJ;;p|L|~)0L8e*Z$7ov|xC^e{)lz`g=EqEiS054c$5j');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
