<?php
define('DB_NAME', getenv('WP_DB_NAME'));
define('DB_USER', getenv('WP_DB_USER'));
define('DB_PASSWORD', getenv('WP_DB_PASSWORD')); 
define('DB_HOST', getenv('WP_DB_HOST'));
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

define('AUTH_KEY',         'UzsU8+%-Rv*iu. ^[&|N%-|Qy-u*2Vs-dt}+WPb|PAu`C=~hpTC-+c;b7uji x{6');
define('SECURE_AUTH_KEY',  'X67KE3-^]2RwTH!z#tVW1EnP[S(moFV3,)Co#<>V(pR)Ej!Waco[kWX^ZK!rEuw@');
define('LOGGED_IN_KEY',    'iEC2]J(=7bAQz^yl8*0.X^}$]{@,;+|- 31gQ>s|EYL;MoW`o?/RcW|dqn+R7j|g');
define('NONCE_KEY',        '[CI+|aY2UqY-Orz}FBXkfzL>bEWm[}~xBc3@c+C+.g$&+qTFBmo?(_^-;lbMILeu');
define('AUTH_SALT',        'VFt)=YcfN8mKAs+m+gz1&fCIQK2gJPd#UWhwM(nLwHtmx3&1b(W~BPDrl4+~e?C>');
define('SECURE_AUTH_SALT', 'jY,&bc2 G{9x_BY>52YuhB6,VYJxw{Z4>f YZSl-l0hSvVg[OIWJViYWZuCc@GI7');
define('LOGGED_IN_SALT',   'Me&&Y=6VNI&PTD+G-~yx<$:YaAe.1h~3$U,2?rL+U?s`i,MaTXuu`8ECHYU.#Y-i');
define('NONCE_SALT',       'AkG07yRVuo=O`>dhgWXr)t.:vH7VT0Wk$(~V1axjKZ]AF18q[g]ULX3VpNtaC6eJ');

$table_prefix  = 'wp_';

define('WP_DEBUG', false);
if ( !defined('ABSPATH') )
    define('ABSPATH', '/var/www/html/wordpress');
require_once(ABSPATH . 'wp-settings.php');