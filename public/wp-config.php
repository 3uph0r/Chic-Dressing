<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '+^RytNi*2KpIExS^E}N`4(K=`+vSGth3GT3h.]miQr2Kb2Qo9JkHk,6?,^2$L3B2' );
define( 'SECURE_AUTH_KEY',   '(xM=+4z|X+8qmw9R[btJB^ix6xn9?)jd-0r./_)+:e/(.?p`@p{(lv!u{2@_wL-j' );
define( 'LOGGED_IN_KEY',     'wXsO,gIW!J|%:]j&B@%J;Ay[cqoVp<j19dFO8t9&f2CP f2hk1-YR4KW_s4V2c$J' );
define( 'NONCE_KEY',         'q=6^KW*ngxi}aV3Z8WF(@3VV-6@;|:llZA>hWAabqIO(4_;A0g>bUC*6Nr8zEEd?' );
define( 'AUTH_SALT',         '~vO@k w2ZL;UI0wx8CWD.1L!nL`.y?ct];W@O8Mpb&T_aoyxUH6ki+Dl4,1y]f{m' );
define( 'SECURE_AUTH_SALT',  'dIxIk5*j)}2)y~eoS6TD$:g9@*M^>0+K>%1B|v3A07mt-v4A*mHLX,FzahtW{7WK' );
define( 'LOGGED_IN_SALT',    '6wiu;YE,&^G>A]/`UrJj@_n{p%n|xnfh hDR-d}vF`|U>,i(16 ;|sM>pndxQ9_.' );
define( 'NONCE_SALT',        '=e]-DP^5#mUrt>,cJ%??)/e%f$.P;za!Dn1l~#NBPxujTN!=gn{,]^c:!P?DPyM]' );
define( 'WP_CACHE_KEY_SALT', 'i01rjLo4UybXgczo3O<iV+.D$p[]8XJ=5#P<k4b$q2=x7|jsq0k8MK,[r!@]^lJd' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
