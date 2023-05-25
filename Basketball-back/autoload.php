<?php

spl_autoload_register(function ($className) {
    $directories = [
        'App\Http\Controllers',
        'App\Models\Main page',
        'Core',
        'Database',
        'routes'
    ];
    $projectDir = __DIR__ . '\\';
    $prefix = 'Server\\';
    $prefixLength = strlen($prefix);
    $cleanClassName = substr($className, $prefixLength);
    foreach ($directories as $classDir) {
        $file = $projectDir . $classDir . '\\' . $cleanClassName . '.php';
        var_dump($file);
        $file = str_replace('\\', DIRECTORY_SEPARATOR, $file);
        if (file_exists($file)) {
            include $file;
        }
    }
});
