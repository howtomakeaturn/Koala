<?php
    class AddCode {
        function get() {
    $post = R::dispense('post');
    $post->text = 'Hello World';

   # $id = R::store($post);       //Create or Update

            echo Template::make('add_code');
        }
    }
