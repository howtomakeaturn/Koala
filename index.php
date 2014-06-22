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
    define('TEMPLATE_PATH', APP_PATH . '/templates/');

    // We don't wanna key in the string '.php' everytime
    define('EXT', '.php');


    require SYS_PATH . 'Toro.php';

    require SYS_PATH . 'Template.php';

    require SYS_PATH . 'rb.php';
    R::setup('mysql:host=localhost;dbname=koala',
        'koala','koala');    

    // Autoload user's class
    function __autoload($class){
        include_once( APP_PATH . 'controllers/'. $class . '.php' );
    }
    
    require APP_PATH . 'route.php';
