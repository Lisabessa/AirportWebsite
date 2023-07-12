<?php

spl_autoload_register(function ($sClass) {
    $sBaseDir = __DIR__ . '/include/lib/';
    $sPath = $sBaseDir . str_replace('\\', DIRECTORY_SEPARATOR, $sClass) . '.php';

    if (file_exists($sPath) && is_readable($sPath)) {
        require_once $sPath;
    }
});

spl_autoload_register(function ($sClass) {
    $aClass = explode("_", $sClass);
    if (isset($aClass[2]) && $aClass[2] == "Interface") {
        list($aClass[1], $aClass[2]) = array($aClass[2], $aClass[1]);
        $aClass = array_merge(array("local", "php_interface", "include", "lib"), $aClass);
    } else {
        $aClass = array_merge(array("local", "php_interface", "include", "lib"), $aClass);
    }
    $sPath = APPLICATION_PATH . join(DIRECTORY_SEPARATOR, $aClass) . ".php";

    if (file_exists($sPath) && is_readable($sPath)) {
        include_once $sPath;
    }
});