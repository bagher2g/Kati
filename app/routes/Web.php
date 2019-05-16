<?php
namespace App\App\Routes ;
/*
    | This class is using to set routes map in BaseRoutes::routes
*/
use App\System\Http\BaseRoute ;
use App\App\Controllers\TestController ;

class Web extends BaseRoute
{
    protected $prefix = '' ;  // Feel free to change this prefix. your query will be like http://example.com/api/<....>

    public function __construct()
    {
        $testController = new TestController ;


        $this->get("welcome-world", function() use ($testController){ return $testController->welcome_world() ; }) ;
        $this->get("سلام-دنیا", function() use ($testController){ return $testController->salam_donya() ; }) ;

        $this->set_prefix('user') ;
        $this->get('add/$1/$2', function() use($testController) { return 'hi' ; }, [
            '$1' => '[[:digit:]]' ,
            '$2' => '.' ,
        ] ) ;
    }

}
