<?php
use \Web\Route;

class Kernel {

    public static $controllerName;
    public static $controllerAction;
    public static $_db;

    public static function tie($uri=''){

        self::findController($uri);
        self::DBinit();

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
    private function DBinit (){

//      self::$_db = \Database\DB::getDB();

        $config = require_once __DIR__."/config/db.php";

        self::$_db = new MysqliDb ($config['DB_HOST'], $config['DB_USERNAME'], $config['DB_PASSWORD'], $config['DB_DATABASE']);

    }
}