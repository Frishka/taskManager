<?php
// libs
function view($view){
    $path = explode('::',$view);
    require (__DIR__.'/../views/'.implode('/',$path).'.php');
}
function dump($p){
    echo '<pre>';
    var_dump($p);
    echo '</pre>';
}