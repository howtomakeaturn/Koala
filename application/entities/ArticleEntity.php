<?php

class ArticleEntity{
    public $content;
    public $text;
    public $pm; // persistent model. which is usually the ORM instance.
    
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
        $article = new self();
        $article->pm = $post;
        $article->id = $article->pm->id;
        $article->title = $article->pm->title;
        $article->text = $article->pm->text;
        return $article;
    }

    function delete(){
        $post = R::load('post', $this->pm->id);
        R::trash($post);
        return TRUE;
    }
    // Now you wish you extend the ORM again...
    // which you think is pretty bad yesterday ...
    // The 'Entity' ...
}
