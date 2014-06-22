<?php

class Template{
    static $template_path = TEMPLATE_PATH;

    static function make($view_name, $data = []){
        ob_start();
        extract($data);
        require(self::$template_path . $view_name . EXT);
        $contents = ob_get_contents();
        ob_end_clean();
        return $contents;
    }
    
}
