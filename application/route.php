<?php
    $routes = array(
        "/" => "HelloHandler",
        "/code" => "IndexCode",
        "/code/add" => "AddCode",
        "/code/view/:number" => "ViewCode",
        "/code/edit" => "EditCode",
        "/code/delete" => "DeleteCode"        
    );
