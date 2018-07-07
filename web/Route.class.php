<?php
namespace Web;

class Route{
    public static $_urls;

    public static function get($url,$controllerName,$controllerAction){

        $_controller = new \stdClass();
        $_controller->name = '\\Controllers\\'.$controllerName;
        $_controller->action = $controllerAction;

        $dependence = new \stdClass();
        $dependence->url = $url;
        $dependence->controller = $_controller;

        self::$_urls[] = $dependence;

    }
}