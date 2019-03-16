<?php
namespace App\System\Http ;

class BaseRoute {

    public static $routes = [] ;
    public static $routing_prefix = '' ;


    public static function set($index, $function, $prefix, $method='get')
    {
        $index = ($prefix!=='')? $prefix.'/'.$index : $index ;
        self::$routes[$method][$index] = $function ;
    }

    protected function set_prefix($prefix='')
    {
        BaseRoute::$routing_prefix = $prefix ;
    }
    protected function get($index, $function)
    {
        BaseRoute::set($index, $function, BaseRoute::$routing_prefix, 'get') ;
    }

    protected function post($index, $function)
    {
        BaseRoute::set($index, $function, BaseRoute::$routing_prefix, 'post') ;
    }

    protected function delete($index, $function)
    {
        BaseRoute::set($index, $function, BaseRoute::$routing_prefix, 'delete') ;
    }
}
