<?php

/**
 * This const get the actual method (GET|HEAD|POST|PUT) in lowercase
 */
$method = $_SERVER['REQUEST_METHOD'] ?? 'get';
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
$port = $_SERVER['SERVER_PORT'] ?? null;
$port = $port? ":{$port}" : null;
define('PORT', $port);

/**
 * Getting actual host, like: http://mysite:8000
 */
$scriptName  = $_SERVER['SCRIPT_NAME'] ?? '/index.php';
$scriptName  = dirname($_SERVER['SCRIPT_NAME'], 2);
$serverName  = $_SERVER['SERVER_NAME'];
$host        = $serverName . PORT . $scriptName;
$host        = str_replace('//', '/', $host);
$host        = trim($host, '/');
$host        = SCHEME . "://{$host}/";
define('HOST', $host);

/**
 * Getting actual host addr, like: http://127.0.0.1:8000
 */
$remoteAddr  = $_SERVER['REMOTE_ADDR'] ?? '127.0.0.1';
$host        = $remoteAddr . PORT . $scriptName;
$host        = str_replace('//', '/', $host);
$host        = trim($host, '/');
$host        = SCHEME . "://{$host}/";
define('HOST_ADDR', $host);

/**
 * Get path to root directory
 */
$core = dirname($_SERVER['SCRIPT_FILENAME'], 2) . '/';
define('CORE', $core);

/**
 * Get actual branch, like: mysite.com/[teste], mysite.com/[user/23]
 */
$branch = $_SERVER['PATH_INFO'] ?? null;
$branch = trim($branch, '/');
define('BRANCH', $branch);

/**
 * Create a const to view all defineds consts in this
 */
$info = get_defined_constants(true)['user'];
define('SERVER_INFO', $info);
