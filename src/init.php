<?php

/**
 * This const get the actual method (GET|HEAD|POST|PUT) in lowercase
 */
$method = strtolower($_SERVER['REQUEST_METHOD']);
define('METHOD', $method);

/**
 * Define if this is HTTPS
 */
$isHTTPS = (isset($_SERVER['HTTPS']) && 'on' === $_SERVER['HTTPS'])? true : false;
define('IS_HTTPS', $isHTTPS);

define('SCHEME', $scheme);

// getting actual host
// the PHP_SELF points to /public/[index.php] file
$phpSelf        = dirname($_SERVER['PHP_SELF'], 2);
$httpHost       = $_SERVER['HTTP_HOST'];
$host           = "{$httpHost}{$phpSelf}";
$host           = str_replace('//', '/', $host);
$host           = trim($host, '/');
$requestScheme  = $_SERVER['REQUEST_SCHEME'] ?? 'http';
$host           = "{$requestScheme}://{$host}/";
define('HOST', $host);

// getting path from general files
$base = dirname($_SERVER['SCRIPT_FILENAME'], 2) . '/';
define('BASE', $base);

// getting path from core of this project
$core = dirname(__FILE__, 2);
$core = str_replace('\\', '/', $core) . '/';
define('CORE', $core);

// getting actual branch (e.g.: site.com/my/actual/branch)
$branch = str_replace("{$phpSelf}/", '', $_SERVER['REQUEST_URI']);
$branch = trim($branch, '/');
$branch = empty($branch)? '/': $branch;
define('BRANCH', $branch);
