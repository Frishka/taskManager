<?php
namespace Web;

class Route{

    public static $_urls;

    public static function get($url,$controllerName,$controllerAction){
        if ($_SERVER['REQUEST_METHOD'] !== "GET") new \Exception('Fatal Error',400);
        self::$_urls[] = self::setParams($url,$controllerName,$controllerAction);
    }
    public static function post($url,$controllerName,$controllerAction){
        if ($_SERVER['REQUEST_METHOD'] !== "POST") new \Exception('Fatal Error',400);
        self::$_urls[] = self::setParams($url,$controllerName,$controllerAction);
    }
    public static function put($url,$controllerName,$controllerAction){
        if ($_SERVER['REQUEST_METHOD'] !== "PUT") new \Exception('Fatal Error',400);
        self::$_urls[] = self::setParams($url,$controllerName,$controllerAction);
    }
    public static function delete($url,$controllerName,$controllerAction){
        if ($_SERVER['REQUEST_METHOD'] !== "DELETE") new \Exception('Fatal Error',400);
        self::$_urls[] = self::setParams($url,$controllerName,$controllerAction);
    }
    private static function setParams($url,$name,$action){
        $std = new \stdClass();
        $std->controller=new \stdClass();
        $std->controller->name = '\\Controllers\\'.$name;
        $std->controller->action = $action;
        $std->url = $url;
        return $std;
    }
}