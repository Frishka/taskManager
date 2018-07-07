<?php
// libs
function view($view){
    $path = explode('::',$view);
    require (__DIR__.'/../views/'.implode('/',$path).'.php');
}