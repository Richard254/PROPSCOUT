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
define( 'DB_NAME', 'propdb' );

/** MySQL database username */
define( 'DB_USER', 'propadmin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'qwerty47' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         's7.Mxtt@lZAlaDfF{uPtNSnP-Zi?TWFhH$=Q]-HFPyteTT(p-Q8H)Od+W5M2G_%N' );
define( 'SECURE_AUTH_KEY',  'T*{)n!ORd@:gw@~eG!Bx0RV[ H!h#`X#%sb[])iSCcU@8rY!|u>pjoWO:9j0P$vY' );
define( 'LOGGED_IN_KEY',    '=c,4a,|JB=f)QTf>/Ns;?~3h_[jf.E@ co0NTItt(}6}AiB92H63qnr( |xN?swf' );
define( 'NONCE_KEY',        '@iq5~aL$*O5Xqjw:f<q/`1Nrf hl9-}pZBo$jESFk{FGp `kx<atjS+t`g|]6]Jx' );
define( 'AUTH_SALT',        'hyyA]#e`06apE.2jqo^LKwloXQ1,@TR1f:3?OZ$|V9p^UVUk3pD%|Kmywrh>(8Ib' );
define( 'SECURE_AUTH_SALT', ';53,1WUT~fL@AMIfou}gN+2:~v7Yy5Wyl)?<]sJ<]hvM?fP)T)^4x8f9n4eTa)ja' );
define( 'LOGGED_IN_SALT',   'l}!Y3:ZG-`5jHw4ao#vBu2 y@wbK7kJJJ)$|6%g=KAb!1q#(KZq1NhO)T>X|Q/GB' );
define( 'NONCE_SALT',       '~:F$WKY@rO4yR]0(};)5XoOlP#KE;|Em)j]rEc<XMA]7GvYvE(71fFD;ug#4AUV@' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
