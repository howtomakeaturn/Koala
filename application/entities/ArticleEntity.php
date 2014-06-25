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
  
}
