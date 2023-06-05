<?php
//use vendor\Autoload;
error_reporting(E_ALL);
ini_set('display_errors', '1');
require  '../autoload.php';

// Define base dir
define('BASE_DIR', str_replace('/public', '', __DIR__));

//$autoload = new Autoload();
//$autoload->register();


//var_dump($autoload);
// Start App


require_once '../bootstrap/app.php';