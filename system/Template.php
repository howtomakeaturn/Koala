<?php
/*
 * A template library with no dependency on anything.
 */
class Template{
    static $template_path;
    
    static function configure($config){
        self::$template_path = $config['template_path'];
    }

    static function make($view_name, $data = []){
        ob_start();
        extract($data);
        require(self::$template_path . $view_name . '.php');
        $contents = ob_get_contents();
        ob_end_clean();
        return $contents;
    }
    
}
