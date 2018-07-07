<?php
use \Web\Route;

class Kernel {

    public static $controllerName;
    public static $controllerAction;

    public static function tie($uri=''){
        self::findController($uri);
        $controllerName = self::$controllerName;
        $controllerAction = self::$controllerAction;

        if(self::$controllerName){
            $obj = new $controllerName();
            $obj->$controllerAction();
        }
        else view('errors::404');
    }
    private static function findController ($uri)
    {
        foreach(Route::$_urls as $url)
            if($url->url === $uri){
                self::$controllerName = $url->controller->name;
                self::$controllerAction = $url->controller->action;
            }

    }
}