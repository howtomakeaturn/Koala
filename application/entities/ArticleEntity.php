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

    static function delete($id){
        $post = R::load('post', $id);      
        R::trash($post);
        return TRUE;
    }
  
}
