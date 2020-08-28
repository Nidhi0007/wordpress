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
define( 'DB_NAME', 'amazing-college' );

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
define( 'AUTH_KEY',         'W$Ow;BzAw[eqWQ8Il{ Kl#mr8N*%$O9^>t@{vXP}0O5?#Kq|@[dqo^,gBWs)eV+>' );
define( 'SECURE_AUTH_KEY',  'EkF+G(%qCp3w2u6+V*O|?CbDg.Q|1vWl(Cwj?!ASPMgV.P6aqJrx.t3fF+O}||4(' );
define( 'LOGGED_IN_KEY',    ';i_#/1Uy3Q]!.+^}/JSnaP@ <+7CEm/k37iOYR=g@tuq)oD@ht5b wPAQpC TpL4' );
define( 'NONCE_KEY',        'V-o,5Obr|oLvyq{Ht-~kTo,S]Bdc!5>n[TV >$:(c}qWR5:eT0b`5{L%lQc]0P_t' );
define( 'AUTH_SALT',        ',@TSjD[NZ4y*MMo]$>$uI$FYyZ.zT#v^<rtmRL9aO~wVVWg,g?tdP_E#yk =1vo@' );
define( 'SECURE_AUTH_SALT', '.l[|u;6n@W8SGj.>$TU#C/VwU>Gag#=x]jOJ1s|X /=L}-&Iq>: |+YUDt8F:8f.' );
define( 'LOGGED_IN_SALT',   '%8_k@]H2)R#rg059yL&2>-Hb;W/{f?&1S;t]B8*7<j_VBJ&rU1M!_WT,n<Llx-FL' );
define( 'NONCE_SALT',       'uu7MJin.bK{v-;i:/yHT(hidxV5+(s/NVE[X-3i=5jdB/zfzr_}PA:~p_xjS>]Mn' );

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
