<?php

    $controller = isset ($_GET['c']) ? $_GET ['c'] : 'dashboard' ;
    $controller=$controller. 'controller';
    $method = isset ($_GET ['m']) ? $_GET ['m'] : 'dashboard' ;
    
    require_once('./controllers/'.$controller.'.php');
    $obj= new $controller();
    $obj->$method();
    ?>