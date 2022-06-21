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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'booking' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '.$;6#n*bG9!s-_AXoD5!yne_*9X6-J0u9]w{(/WcR${N?i3}iB>o,&,CM_SW0iE:' );
define( 'SECURE_AUTH_KEY',  'jc(g3/k*p8`P]i<sOgw=bNc=_]fqiWwnGqdAz.y##Z~_-FvkmIwNvf *G{/T2^FQ' );
define( 'LOGGED_IN_KEY',    '%e;p`^ES]2,:w7v008CfZ(d1yPF;2-ff[Xt}1]yXe23s)(Cj>[7_^/:CGY_0Bv!V' );
define( 'NONCE_KEY',        'JYDv3:I8V`)BM]Z@3qv+9a}{$C_~OEscP}@FTK/l_W~-QsM/kBL]kvZF#rD#Oh^B' );
define( 'AUTH_SALT',        'eMHGX>!Edkzbz %QIe:{GLbYs,eBWGp$sY82tdRj%MUJiyw?V;WSqQ^WL[yB/Aql' );
define( 'SECURE_AUTH_SALT', '^q,/qGX(|;H9Kt2A^:CjgfOwlleoWrboEw/<>GX/PvcYIomDBw)h8LmqG~y~tb[J' );
define( 'LOGGED_IN_SALT',   'o]|8dP@ZOQ<xZ6x$6B1aqAW? n*3moh0?2d)<ZRQ@ad7NZ)GI@Zo6rk%wlg#/c1v' );
define( 'NONCE_SALT',       'Xw>@5~O?KgR<&}CB[a*~r;@ VZ~uu.MG6Xx3DG1[W|XmImsXRI3Jqu +k40[p@f(' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
