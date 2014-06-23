<?php
    class IndexCode {
        function get() {

          $posts = R::findAll('post');

          echo Template::make('code_index', array('posts' => $posts));
        }
    }
