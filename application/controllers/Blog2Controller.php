<?php
class Blog2Controller {
    
    function getIndex() {

        echo Template::make('blog/code_index', array('articles' => $articles));
    }
    
    function getAdd() {
        echo Template::make('add_code');
    }        
    
    function postAdd(){
        $data = array(
            'title'=>$_POST['title'], 
            'text'=>$_POST['content']
        );
        $blog = new Blog2Model();
        $blog->title = $_POST['title'];
        $blog->text = $_POST['content'];
        $blog->save();

        header('Location: ' . '/blog/view/' . $id);
    }
    
    function getView($id){

        $typo_lib = new Typography();
        echo Template::make('blog/view_code', array('article'=>$article, 'typo_lib'=>$typo_lib));
    }

    function getEdit($id){

        $typo_lib = new Typography();
        echo Template::make('edit_article', array('article'=>$article, 'typo_lib'=>$typo_lib));
    }

    function getDelete($id){

        header('Location: ' . '/blog');
    }

    function getClear(){
        BlogModel::clear();        
        header('Location: ' . '/blog');
    }

}
