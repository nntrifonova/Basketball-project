<?php

use vendor\Autoload;

// Define base dir
define('BASE_DIR', str_replace('/public', '', __DIR__));

$autoload = new Autoload();
$autoload->register();

// Start App
require_once '../bootstrap/app.php';