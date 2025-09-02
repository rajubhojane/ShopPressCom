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
define( 'AUTH_KEY',          '1JF~p$1qD{2 Z#`3X)0:NZk0s<#ELXXi8Kvy$g-y!@/uj62|wX{dmT]wR8YEhpcC' );
define( 'SECURE_AUTH_KEY',   'V>.(_4oMQMvKKU[2.SAR~m/Rp{-2?S%k7V8bQFJ_~az>L}fgV@zdJlm:q4CQ48/)' );
define( 'LOGGED_IN_KEY',     '*0xVUV8s2JPsX:te6`Vg<F{,?t01b*w^2vHMRAkz qc#(k[2ss:.2jIJQ5?4![/0' );
define( 'NONCE_KEY',         'A5qC8[?s%g)_8 bG ?TbHy*Sv0b=3kwKJeg|3pSJE!NaXGaaj@26KI}ff)nys)R@' );
define( 'AUTH_SALT',         ']h;.at<icaM+z!w4wd3zEcc#F@KnWLK1h<QX!`W_*H,#]8VU+_V|V$i;7~8P&-| ' );
define( 'SECURE_AUTH_SALT',  'Fwo?4LCHVBvvH#`~|I`Cd-/40r:F-I+T1=mYWz?KQEMZY?7DN@5{>K3Yf~0qk<|[' );
define( 'LOGGED_IN_SALT',    '1@SK,w8vn<c?|J*cqdiT#*yn?Ob*4l<S|#qkL:Oj/YEZ={TAt#Nl#fRJ)r<Jy Em' );
define( 'NONCE_SALT',        'JAe#Mqc^BGW5V7U00-7Ld~MVSr.jOfj35F-O7Rw$a7@LYSVZ%,D!hAz{]@qA!g<4' );
define( 'WP_CACHE_KEY_SALT', 'pn#}wyj1SzmlB@?okRm>CX@A_tE=joTmki{E/)7M)=7VDtTV8wjT[0AlN==fN7uO' );


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
