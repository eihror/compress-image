<?php

spl_autoload_register(function($className) {
    $filename = str_replace(array('\\', '_'), DIRECTORY_SEPARATOR, $className) . '.php';
    $path = __DIR__ . "/src/" . $filename;
        
    if (is_file($path)) {
        include $path;
        return true;
    }
    return false;
});