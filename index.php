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

    #require SYS_PATH . 'Toro.php';
    require SYS_PATH . 'Router.php';

    require SYS_PATH . 'Template.php';
    // Configure the Template class
    Template::configure( array( 'template_path' => APP_PATH . '/views/' ) );

    require SYS_PATH . 'rb.php';
    require APP_PATH . 'config.php';

    R::setup($configs['dns'], $configs['db_user'], $configs['db_password']);    

    /* Autoload user's class.
     * Including controllers.
     */
    function __autoload($class){
        if (file_exists( APP_PATH . 'controllers/'. $class . '.php' )){
            include_once( APP_PATH . 'controllers/'. $class . '.php' );
        }
        if (file_exists( BASE_PATH . 'library/'. $class . '.php' )){
            include_once( BASE_PATH . 'library/'. $class . '.php' );
        }
    }
    
    require APP_PATH . 'route.php';

    Router::serve($routes);
    #Toro::serve($routes);
    // End of the file.
    // That's all. The Toro router will handle all the things!
