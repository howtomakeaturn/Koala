<?php
    class ViewCode {
        function get($id) {
            $post = R::load('post', $id);
            $typo_lib = new Typography();
            echo Template::make('view_code', array('post'=>$post, 'typo_lib'=>$typo_lib));
        }
    }
