<?php
spl_autoload_register(function ($class) {
    $class = str_replace('\\', '/', $class);

    $path = __DIR__ . '/app/' . $class . '.php';

    str_replace('\\', '/', $path);
    if (file_exists($path)) {
        require_once $path;
    }
});