<?php
class Code {
    
    function getIndex() {
        $posts = CodeRepository::getAll();
        echo Template::make('code_index', array('posts' => $posts));
    }
    
    function getAdd() {
        $post = R::dispense('post');
        $post->text = 'Hello World';
        echo Template::make('add_code');
    }        
    
    function postAdd(){
        $article = new ArticleEntity();
        $article->setContent($_POST['content']);
        $article->save();      

        header('Location: ' . '/code');
    }
    
    function getView($id){
        $post = ArticleEntity::get($id);
        $typo_lib = new Typography();
        echo Template::make('view_code', array('post'=>$post, 'typo_lib'=>$typo_lib));
    }

    function getDelete($id){
        $post = ArticleEntity::get($id);
        $post->delete();

        header('Location: ' . '/code');
    }
    
}
