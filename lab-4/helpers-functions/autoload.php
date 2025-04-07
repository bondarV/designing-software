<?php

spl_autoload_register(function ($class) {
    $relativePath = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';


    $patterns = ['CoR'];

    $externalPath = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR;

    foreach ($patterns as $pattern) {
        $fullPath = $externalPath.$pattern. DIRECTORY_SEPARATOR . $relativePath;
        if (file_exists($fullPath)) {
            require_once $fullPath;
            return;
        }
    }
});
