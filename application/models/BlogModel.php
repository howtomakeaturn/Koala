<?php

class BlogModel{

    static function getAll(){
        $posts = R::findAll('post');
        return $posts;
    }

    static function create($data){
        $post = R::dispense('post');
        $post->title = $data['title'];
        $post->text = $data['text'];
        $id = R::store($post);       //Create or Update      
        return $id;
    }

    static function delete($id){
        $post = R::load('post', $id);
        R::trash($post);
        return TRUE;
    }

    static function clear(){
        R::wipe( 'post' );      
        return TRUE;
    }

    static function get($id){
        $post = R::load('post', $id);
        return $post;
    }
  
}
