<?php

class Router{
  
    static function serve($routes){
        $url_segments = explode('/', $_SERVER['REQUEST_URI']);
        $parameter = null;
        if (count($url_segments) == 2){
            $controller_name = $url_segments[1];
            $method_name = 'index';
        }
        else if (count($url_segments) == 3){
            $controller_name = $url_segments[1];
            $method_name = $url_segments[2];              
        }
        else if (count($url_segments) == 4){
            $controller_name = $url_segments[1];
            $method_name = $url_segments[2];              
            $parameter = $url_segments[3];
        }

        $controller = new $routes['/' . $controller_name]();
        $method = strtolower($_SERVER['REQUEST_METHOD']) . ucfirst($method_name);
        $controller->$method($parameter);
    }
    
}
