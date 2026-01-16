<?php

spl_autoload_register(function ($classN) {
    $paths = ["core/", "App/Controlers/", "App/Models"];

    foreach ($paths as $dir) {
        $file = __DIR__ . "/../$dir/" . $classN . ".php";
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
});
