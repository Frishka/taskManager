<?php
// libs
function view($view,$params=[]){
    $path = explode('::',$view);

    foreach(array_keys($params) as $name)
        ${$name.''} = $params[$name];

    require (__DIR__.'/../views/'.implode('/',$path).'.php');
}
function dump($p){
    echo '<pre>';
        var_dump($p);
    echo '</pre>';
}
function app(){
     return require_once __DIR__.'/../config/app.php';
}