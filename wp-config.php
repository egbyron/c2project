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
define( 'DB_NAME', 'wordpress' );
/** MySQL database username */
define( 'DB_USER', 'wordpress' );
/** MySQL database password */
define( 'DB_PASSWORD', 'wordpresspass' );
/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );
/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
/**#@+
* Authentication Unique Keys and Salts.
*
* Change these to different unique phrases!
* You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
*
* You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
*
* @since 2.6.0
 */
define('AUTH_KEY',         '8u{AjP~TbytGngx5XY`T`a{`FhH{&QnIOoHLAk7ZHb8y2$zL!!!8e~e**mTDqb.;');
define('SECURE_AUTH_KEY',  '5&MfbqIPr4<])/9@<] _Veo#x jglGOn+Di6F}<V+#>:@?t^JG-,uuST{TY!^N;]');
define('LOGGED_IN_KEY',    'tGAHxxEJs:nM35):;d5eN5=[>4mMG|Qvw,XRzE&:a7j^(!-N-k^]3@g9}eEeV>!w');
define('NONCE_KEY',        'HGiTV:H^<+!Zy$4D|UaHZf?,1s16%?wNiXw`&AXz/hMd1!5y-7>ZJ,S|Pav+t+ME');
define('AUTH_SALT',        'J7i/BLR-fnKmfekLro^el[go$V4rye`/h`Lj{/m<EBxx(+DEYygVB/up)Fesc+[[');
define('SECURE_AUTH_SALT', '8h`#;}qs4@eO+LSmYiIwJ)S2+&sOYg;ZS0?-M8^+?g@X&w|<T-+X!5/ItC(i*5GS');
define('LOGGED_IN_SALT',   'xxKjO.M@]!}z4H=&b~uCW!-`&exP;$VOJ5zP;Md7u#9<o?QjuJXHW16NN$F]PXIZ');
define('NONCE_SALT',       'KQiX [a~U],3sLpy/#2V0gdLe:( BIuW-?XG<mn$[,qOP`UM,:%j-F+z/F[k|#%Z');
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
