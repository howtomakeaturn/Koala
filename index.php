<?php
    // Show all the debug message
    error_reporting(E_ALL);
    ini_set('display_startup_errors',1);
    ini_set('display_errors',1);
    error_reporting(-1);

    // System constant
    define('APP_PATH', realpath('application').'/');
    define('SYS_PATH', realpath('system').'/');
    define('BASE_PATH', realpath('').'/');

    require BASE_PATH . 'Toro.php';

    // Autoload user's class
    function __autoload($class){
        include_once( APP_PATH . 'controllers/'. $class . '.php' );
    }
    
    require APP_PATH . 'route.php';
