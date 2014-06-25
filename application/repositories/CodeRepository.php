<?php

class CodeRepository{

    static function getAll(){
        $posts = R::findAll('post');
        return $posts;
    }
  
}
