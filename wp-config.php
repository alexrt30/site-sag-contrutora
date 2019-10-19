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

define('DB_NAME', "ct");


/** MySQL database username */

define('DB_USER', "root");


/** MySQL database password */

define('DB_PASSWORD', "");


/** MySQL hostname */

define('DB_HOST', "localhost");


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

define('AUTH_KEY',         'zw#LlxMr9wL2:K~P/2Q< Wshiu&|8GDlc2]eUiOtTMDGXK~B,q_3MK3{aFeWWzXk');

define('SECURE_AUTH_KEY',  'pW{Eql22{Iu*#uvdLF<uI]W_2u@}`C-: .42}K{k$-B%;x>_kp<$.L#mC{M{aRtZ');

define('LOGGED_IN_KEY',    'nn_RI_Ym)Uy(b+oRGdP:u[QqC4?y_1R}Ob-%$$A>HzX qFHr`yVqn {v6l<tWG~L');

define('NONCE_KEY',        'b}Z1N|4>3KbQ=&dsMdNO=V*m~v1@*dT=o=b$l.wlL.[ZRd/ZlE@QuX3Ci]R+f#9$');

define('AUTH_SALT',        '2]3,(V@H9V=@/*0hW=:^_ywB#?i Emhl}m(poQ:EYOM)<~O3M;?)9EB% ;%$3WBG');

define('SECURE_AUTH_SALT', 'm?M`6B??=hy.,+`jJ*gZe:M-zeS^PB{dCy%y{NM?zWp3rU#>3xFg!Uu-BYdx%*!C');

define('LOGGED_IN_SALT',   'l=zgQ8qftm~`}m6e)KA_AOdG;yTv[6mBD>7?yirI9}pTU0MBjWi+7gw2cV^IF,!R');

define('NONCE_SALT',       'RE^I/hh=H;MWv3Lk9{ArA64+ugnr(JlORC6SCxaVeTecY@4:@!~:,7Rs)>qD>=;P');


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

