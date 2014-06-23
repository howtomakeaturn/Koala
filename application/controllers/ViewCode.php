<?php
    class ViewCode {
        function get($id) {
            $post = R::load('post', $id);
            echo Template::make('view_code', array('post'=>$post));
        }
    }
