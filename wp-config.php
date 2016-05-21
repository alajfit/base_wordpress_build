<?php
// ===================================================
// Load database info and local development parameters
// ===================================================
if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
	define( 'WP_LOCAL_DEV', true );
	include( dirname( __FILE__ ) . '/local-config.php' );
} else {
	define( 'WP_LOCAL_DEV', false );
	define( 'DB_NAME', '%REPLACE_WITH_DB_NAME%' );
	define( 'DB_USER', '%REPLACE_WITH_DB_USER%' );
	define( 'DB_PASSWORD', '%REPLACE_WITH_DB_PASSWORD%' );
	define( 'DB_HOST', 'localhost:3306' ); // Probably 'localhost'
}
// ========================
// Custom Content Directory
// ========================
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content' );
// ================================================
// You almost certainly do not want to change these
// ================================================
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );
// ==============================================================
// Salts, for security
// Grab these from: https://api.wordpress.org/secret-key/1.1/salt
// ==============================================================
if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
    define( 'AUTH_KEY',         'put your unique phrase here' );
    define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
    define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
    define( 'NONCE_KEY',        'put your unique phrase here' );
    define( 'AUTH_SALT',        'put your unique phrase here' );
    define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
    define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
    define( 'NONCE_SALT',       'put your unique phrase here' );
} else {
    define('AUTH_KEY',         '0t@r107GX(+0r{tv1y3}g0$k|QgGacpiWi/M(GH@<$#mlB!,@N?w!TjCY2#sed>8');
    define('SECURE_AUTH_KEY',  '+]r`UtUm3SNXUEg3gsdSYv=0DnnfI|k=pdZv.qOf9.y:(g,0<QRW|>AmJZA233#S');
    define('LOGGED_IN_KEY',    '%F|P<|~|}[[|/3/cPh35jK)o78<aErNsQ)|Od,V2.Ey:itR,H|CQuMo*b-+N+rEu');
    define('NONCE_KEY',        '[$|j5f+fHz[p+|t?@=kJvhMpl3LC{F|I}v-}ate#52b7zzI_9)MO~ ]_P#IJh1*J');
    define('AUTH_SALT',        'rDOc+JlQVsMf{QfM~KoHgL[Mm:bR!TU|tSf~ pzjO9o*T&]6C8QE}vob5#m}.-kB');
    define('SECURE_AUTH_SALT', '~{D/I;l$E;z}PY%,q)nHhok9r;$)gq6/*wCAUj/G&nE*g*w7pi2Jh-HsS- m@>G%');
    define('LOGGED_IN_SALT',   'E4&X98cyH9+8Ar $Z|R-(jO9)iPnJq*M+qo<d in>tiyd0|a1,+<a/)@Jq)Yd;@O');
    define('NONCE_SALT',       'NsLZA5x`* Jn*X|sM{8b|0WAh55WpBbbr`d.~k7aLhphG(~NkL|}j_KYh<t;[|ht');
}
// ==============================================================
// Table prefix
// Change this if you have multiple installs in the same database
// ==============================================================
$table_prefix  = 'wp_';
// ================================
// Language
// Leave blank for American English
// ================================
define( 'WPLANG', '' );
// ===========
// Hide errors
// ===========
ini_set( 'display_errors', 0 );
define( 'WP_DEBUG_DISPLAY', false );
// =================================================================
// Debug mode
// Debugging? Enable these. Can also enable them in local-config.php
// =================================================================
// define( 'SAVEQUERIES', true );
// define( 'WP_DEBUG', true );
// ======================================
// Load a Memcached config if we have one
// ======================================
if ( file_exists( dirname( __FILE__ ) . '/memcached.php' ) )
	$memcached_servers = include( dirname( __FILE__ ) . '/memcached.php' );
// ===========================================================================================
// This can be used to programatically set the stage when deploying (e.g. production, staging)
// ===========================================================================================
define( 'WP_STAGE', '%%WP_STAGE%%' );
define( 'STAGING_DOMAIN', '%%WP_STAGING_DOMAIN%%' ); // Does magic in WP Stack to handle staging domain rewriting
// ===================
// Bootstrap WordPress
// ===================
if ( !defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/wp/' );
require_once( ABSPATH . 'wp-settings.php' );
