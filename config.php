<?php
// HTTP
define('HTTP_SERVER', 'http://mutxopnamphuong.ddev.site/');

// HTTPS
define('HTTPS_SERVER', 'http://mutxopnamphuong.ddev.site/');

// DIR
define('DIR_OPENCART', '/var/www/html/');
define('DIR_APPLICATION', DIR_OPENCART . 'catalog/');
define('DIR_EXTENSION', DIR_OPENCART . 'extension/');
define('DIR_IMAGE', DIR_OPENCART . 'image/');
define('DIR_SYSTEM', DIR_OPENCART . 'system/');
define('DIR_STORAGE', '/var/www/storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_DOWNLOAD', DIR_OPENCART . 'download/');
define('DIR_LOGS', DIR_SYSTEM . 'logs/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_SYSTEM . 'cache/');
define('DIR_DATABASE', DIR_SYSTEM . 'database/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'db');
define('DB_USERNAME', 'db');
define('DB_PASSWORD', 'db');
define('DB_DATABASE', 'db');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');
?>