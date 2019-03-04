<?php
namespace App\App\Routes ;

use App\System\Http\BaseRoute ;

class Web extends BaseRoute
{
    protected $prefix = '' ;

    public function __construct()
    {
        $this->get("welcome-world", function(){
           return "Hello<br/>Kati has a amazing routing servic, supporting GET, POST AND DELETE methods and beautiful routing." ;
        }) ;
        $this->get("", function(){ return "salam" ;}) ;

        $this->get("salam", function(){
            return "123" ;
        });

        $this->get("test", function(){
            return "1234" ;
        });
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
