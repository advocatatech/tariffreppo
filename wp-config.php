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
define( 'DB_NAME', 'testdb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '&|(=?:!3M,7vy$Q[kWu)^FDfE;EkOY:?@0,ziuu8sH_FcXh4mfK5T>jGu72@lB4d' );
define( 'SECURE_AUTH_KEY',  'xVm9p3kr0mXbm9O>KMGLPwyvVw2WPimo-C,(!8NPOynWIU#[%FwA9HMnj`*$~tzE' );
define( 'LOGGED_IN_KEY',    '4g5soknHOi{9kzV<anaq>*+IQEqH|C)Eg-65pI#~XxL& *1S7M$^}Fd9x;JyOtVz' );
define( 'NONCE_KEY',        'A?gm8KJG,&:l($QfPk(FcBy(/w3MF;Z%mrX/97[dL&d`:OUwT;RtmT+-n[OeZ$Fb' );
define( 'AUTH_SALT',        '8{B>QQu$Wr3,L)|TW7)ac`xc}]q0,Y%)~rG`]h~)JFA{|3)oyz4+9D*+31X1| N<' );
define( 'SECURE_AUTH_SALT', 'JZQnb%fB Y1Xg1WnO$HZ]^1z(Nt_h20PoX.q[M!b[uX+0bid K*_G(kg-0x% gY_' );
define( 'LOGGED_IN_SALT',   'Gy<4?[$*px|@s0Ia.3jET0(r}i~P),(fF3%T,0T}%AR@uPM=Qrgf6snS9k=nx!Mq' );
define( 'NONCE_SALT',       '&I1u|-[`qeA=mKV4:IyupM>{3zsMq{X?1[FmZC*m|@l_{aIyj >R^_NE^QZ1@.Ps' );

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
