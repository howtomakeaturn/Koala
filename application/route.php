<?php
    Toro::serve(array(
        "/" => "HelloHandler",
        "/code" => "IndexCode",
        "/code/add" => "AddCode",
        "/code/view" => "ViewCode",
        "/code/edit" => "EditCode",
        "/code/delete" => "DeleteCode"        
    ));
