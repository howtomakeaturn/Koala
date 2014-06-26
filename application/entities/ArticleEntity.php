<?php

class ArticleEntity{
    public $content;
    
    function setContent($content){
        $this->content = $content;
    }
    
    function save(){
        $post = R::dispense('post');
        $post->text = $this->content;
        $id = R::store($post);       //Create or Update      
    }
  
    static function get($id){
        $post = R::load('post', $id);      
        return $post;
    }

    function delete(){
        $post = R::load('post', $this->id);
        exit($this);
        R::trash($post);
        return TRUE;
    }
    // Now you wish you extend the ORM again...
    // which you think is pretty bad yesterday ...
    // The 'Entity' ...
}
