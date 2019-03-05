<?php
namespace App\App\Routes ;

use App\System\Http\BaseRoute ;

class Api extends BaseRoute interface 
{
    protected $prefix = 'api' ;

    public function __construct()
    {
        $this->get('u', function(){ return 'yyyyy' ; }) ;
    }

















    private function get($index, $function)
    {
        BaseRoute::set($index, $function, $this->prefix, 'get') ;
    }

    private function post($index, $function)
    {
        BaseRoute::set($index, $function, $this->prefix, 'post') ;
    }

    private function delete($index, $function)
    {
        BaseRoute::set($index, $function, $this->prefix, 'delete') ;
    }
}
