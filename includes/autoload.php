<?php

spl_autoload_register(function ($className) {
    $folders = ['controllers', 'models', 'views', 'config'];
    $file = lcfirst($className) . '.php';

    foreach ($folders as $folder) {
        $fullPath = $folder . DIRECTORY_SEPARATOR . $file;
        if (file_exists($fullPath)) {
            include $fullPath;
        }
    }
});
