<?php
namespace App\System\Http ;

class BaseRoute {

    public static $routes = [] ;



    public static function set($index, $function, $prefix, $method='get')
    {
        $index = ($prefix!=='')? $prefix.'/'.$index : $index ;
        self::$routes[$method][$index] = $function ;
    }
}
