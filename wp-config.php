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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hr_website' );

/** Database username */
define( 'DB_USER', 'Admin' );

/** Database password */
define( 'DB_PASSWORD', 'I!Z]FMf(ch[.[nmF' );

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
define( 'AUTH_KEY',         'Dv-o2pcHs:%-=}7mg`z^t/4pe}pHV]QVjDhGBg?4ZeN^cVb>W5/UONSv}IzJRfxw' );
define( 'SECURE_AUTH_KEY',  '5G/Eds]$Jj(<?pumM{D,I%Y&&s1Qn[D[FgHwR>*Gb50a}vq#IGU v.y,uth:LJ^d' );
define( 'LOGGED_IN_KEY',    'gY^-wCLiMTjJ1{},j]xonT;I+cA7lJuRMv+vjiN.Xqs([._Qw,dVn]jBU%S@ibE>' );
define( 'NONCE_KEY',        '-X}5(=RXuoKK| CVJuIK]zNZ`U^!4~4k)2BE^85ux0rHTQv=6WdNovlaloT$3%}!' );
define( 'AUTH_SALT',        'cwcMDP6j!8;ufIS~j{2?+=TfVE~Pn])gX8#49m[<R*|t{oNqNGms#RVG{YVK)4db' );
define( 'SECURE_AUTH_SALT', 'a])Z;4esQw8<?Sa6xKCYh*K8(i 8[X<?d*`]x)lbZ?#Ux-Pt>wmg-NYtD~: IL+l' );
define( 'LOGGED_IN_SALT',   '@F5A oT,701W|6CJ9ti9=E~Pb^)/B}rQKA3e=ZVd{DIETQu7N$S0g5$MD~NnbpsZ' );
define( 'NONCE_SALT',       'MG<(o5Gm:um8/`,hd_Aa!MA4>|)No$LC>]!SDyqyI(#LQF.5y|B~1xC .HTwH>tB' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'hr_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
