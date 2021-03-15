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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hasin-vai-woo' );

/** MySQL database username */
define( 'DB_USER', 'hasin-vai' );

/** MySQL database password */
define( 'DB_PASSWORD', '01784373' );

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
define( 'AUTH_KEY',         'UZaQ*KZvIV!LR<I?AIqqz!m b0H`_rOXLdOCL2J8iKWkDHFI~rnosq)mJv]D1sS!' );
define( 'SECURE_AUTH_KEY',  '1w+eU$]#>lnEK.-(CGa&<;R~)J zrgVz{LI<Yp,Pb<r`O4A?nJ`TQxwxm_B<dZC.' );
define( 'LOGGED_IN_KEY',    '~-[ft90OO]@G zC17h=lST4:S|Pk>E6{MWb@_RxTLLTYc>I?Upe{g[EXESklvczE' );
define( 'NONCE_KEY',        '~5yL+2)r1boU[OZ<TA?t,wZ`;E!1w9Xn@Hx}3>Pd3$f13M,}]viIo?Mr}8CUjSkX' );
define( 'AUTH_SALT',        'ZXMZ%YbNlPc)gxBJQAxH&R0X9EB0H$:v 52`^~by<q^U~hD>mCYp~EN[c,Q:q8&K' );
define( 'SECURE_AUTH_SALT', 'OmgrqvWSN<*pQTO6oVlA7>2Ec*2+cRiQ0T^T@$UE3Q4U$qnppxTn^}f{fit{vN`(' );
define( 'LOGGED_IN_SALT',   'zYu*CW~ 43Z~F:wZ_,l#jJz949mX<HHME ]WX=XAEn8|3n!~vZC]>EuFvH8s-0f.' );
define( 'NONCE_SALT',       'ZP.g`OnIq|m7_b>;qFu}J=mKOHAWw-fE~7,NzpN g~>L:B0MzqS^bMn5j/vx5SG;' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
