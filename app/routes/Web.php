<?php
namespace App\App\Routes ;
/*
    * This class is using to set routes map in BaseRoutes::routes
*/
use App\System\Http\BaseRoute ;
use App\App\Controllers\TestController ;
use App\App\Controllers\ContentController ;

class Web extends BaseRoute
{
    protected $prefix = '' ;  // Feel free to change this prefix. your query will be like http://example.com/api/<....>

    public function __construct()
    {
      //  $testController = new TestController ;
      //  $this->set_prefix('content') ;
      //  $this->get("welcome-world", function() use ($testController){ return $testController->welcome_world() ; }) ;
      /*  $this->get('add/{salam}', function() use ($testController){ return $testController->add() ; }, [
              '{salam}' => '[[:digit:]]' ,
          ] ) ; */

      
    }

}
