<?php
namespace App\System\Http ;

class BaseRoute {

    public static $routes = [] ;
    public static $routing_prefix = '' ;


    public static function set($index, $function, $prefix, $method='get', $params=[])
    {
        $index = ($prefix!=='')? $prefix.'/'.$index : $index ;
        $index = str_replace(array_keys($params), $params, $index) ;
        self::$routes[$method][$index] = $function ;
    }

    protected function set_prefix($prefix='')
    {
        BaseRoute::$routing_prefix = $prefix ;
    }

    protected function clear_prefix()
    {
        BaseRoute::$routing_prefix = '' ;
    }

    protected function get($index, $function, $params=[])
    {
        BaseRoute::set($index, $function, BaseRoute::$routing_prefix, 'get', $params) ;
    }

    protected function post($index, $function, $params=[])
    {
        BaseRoute::set($index, $function, BaseRoute::$routing_prefix, 'post', $params) ;
    }

    protected function delete($index, $function, $params=[])
    {
        BaseRoute::set($index, $function, BaseRoute::$routing_prefix, 'delete', $params) ;
    }
}
