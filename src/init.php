<?php

/**
 * This const get the actual method (GET|HEAD|POST|PUT) in lowercase
 */
$method = isset($_SERVER['REQUEST_METHOD'])? $_SERVER['REQUEST_METHOD']: 'get';
$method = strtolower($method);
define('METHOD', $method);

/**
 * Define if this is HTTPS
 */
$isHTTPS = (isset($_SERVER['HTTPS']) && 'on' === $_SERVER['HTTPS'])? true : false;
define('IS_HTTPS', $isHTTPS);

/**
 * Define if this is http or https urls
 */
$scheme = IS_HTTPS? 'https': 'http';
define('SCHEME', $scheme);

/**
 * Get the actual port or null
 */
$port = isset($_SERVER['SERVER_PORT'])? $_SERVER['SERVER_PORT']: null;
$port = $port? ":{$port}" : null;
define('PORT', $port);

/**
 * Getting actual host, like: http://mysite:8000
 */
$scriptName  = isset($_SERVER['SCRIPT_NAME'])? $_SERVER['SCRIPT_NAME']: '/index.php';
$scriptName  = dirname($_SERVER['SCRIPT_NAME'], 2);
$scriptName  = trim($scriptName, '\\');
$serverName  = $_SERVER['SERVER_NAME'];
$base        = $serverName . PORT . $scriptName;
$base        = str_replace('//', '/', $base);
$base        = trim($base, '/');
$base        = SCHEME . "://{$base}/";
define('BASE', $base);

/**
 * Getting actual host addr, like: http://127.0.0.1:8000
 */
$remoteAddr  = isset($_SERVER['REMOTE_ADDR'])? $_SERVER['REMOTE_ADDR']: '127.0.0.1';
$base        = $remoteAddr . PORT . $scriptName;
$base        = str_replace('//', '/', $base);
$base        = trim($base, '/');
$base        = SCHEME . "://{$base}/";
define('BASE_ADDR', $base);

/**
 * Get path to root directory
 */
$core = dirname($_SERVER['SCRIPT_FILENAME'], 2) . '/';
define('CORE', $core);

/**
 * Get actual branch, like: mysite.com/[teste], mysite.com/[user/23]
 */
$branch = isset($_SERVER['PATH_INFO'])? $_SERVER['PATH_INFO']: null;
$branch = trim($branch, '/');
define('BRANCH', $branch);

/**
 * Get the actual URL
 */
$requestURI = isset($_SERVER['REQUEST_URI'])? $_SERVER['REQUEST_URI']: '';
$requestURI = trim($requestURI, '/');
$actual = BASE . $requestURI;
define('ACTUAL', $actual);

/**
 * Get the BASE from actual url
 */
$url = BASE . BRANCH;
define('URL', $url);

/**
 * Create a const to view all defineds consts in this
 */
$info = get_defined_constants(true)['user'];
define('SERVER_INFO', $info);
