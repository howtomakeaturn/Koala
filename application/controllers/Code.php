<?php
class Code {
    
    function getIndex() {
      $posts = R::findAll('post');
      echo Template::make('code_index', array('posts' => $posts));
    }
    
    function getAdd() {
        $post = R::dispense('post');
        $post->text = 'Hello World';
        echo Template::make('add_code');
    }        
    
    function postAdd(){
        $post = R::dispense('post');
        $post->text = $_POST['content'];
        $id = R::store($post);       //Create or Update
        header('Location: ' . '/code');
    }
    
    function getView($id){
        $post = R::load('post', $id);
        $typo_lib = new Typography();
        echo Template::make('view_code', array('post'=>$post, 'typo_lib'=>$typo_lib));
    }
    
}
