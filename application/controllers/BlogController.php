<?php
class BlogController {
    
    function getIndex() {
        $articles = BlogModel::getAll();
        echo Template::make('code_index', array('articles' => $articles));
    }
    
    function getAdd() {
        echo Template::make('add_code');
    }        
    
    function postAdd(){
        $data = array(
            'title'=>$_POST['title'], 
            'text'=>$_POST['content']
        );
        
        $id = BlogModel::create($data);
        header('Location: ' . '/blog/view/' . $id);
    }
    
    function getView($id){
        $article = BlogModel::get($id);
        $typo_lib = new Typography();
        echo Template::make('view_code', array('article'=>$article, 'typo_lib'=>$typo_lib));
    }

    function getEdit($id){
        $article = BlogModel::get($id);
        $typo_lib = new Typography();
        echo Template::make('edit_article', array('article'=>$article, 'typo_lib'=>$typo_lib));
    }

    function getDelete($id){
        BlogModel::delete($id);        
        header('Location: ' . '/blog');
    }

    function getClear(){
        BlogModel::clear();        
        header('Location: ' . '/blog');
    }

}
