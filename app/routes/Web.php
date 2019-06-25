<?php
namespace App\App\Routes ;
/*
    * This class is using to set routes map in BaseRoutes::routes
*/
use App\System\Http\BaseRoute ;
use App\App\Controllers\UserController ;
use App\App\Controllers\TestController ;


class Web extends BaseRoute
{
    protected $prefix = '' ;  // Feel free to change this prefix. your query will be like http://example.com/api/<....>

    public function __construct()
    {
          $testController = new TestController ;
          $this->set_prefix('content') ;
          $this->get("insert-author/{name}/{web}", function() use ($testController){ return $testController->welcome_world() ; },[
             '{name}' => '*' ,
             '{web}' => '*' ,
            ]) ;
          $this->get('add/{salam}', function() use ($testController){ return $testController->add() ; }, [
                '{salam}' => '[[:digit:]]' ,
            ] ) ;

          $userController = new UserController() ;

          $this->set_prefix('user') ;
          $this->get('راهنمایی', function() use($userController){ return $userController->hello() ; }) ;
          $this->get('math/{first}/{second}/{operator}', function() use($userController){
            return $userController->math() ;
          },[
                  '{first}' => '[[:digit:]]' ,
                  '{second}' => '[[:digit:]]' ,
                  '{operator}' => '[plus|minus|div|mul]' ,
          ]) ;



          $this->get('signup', function() use ($userController) { return $userController->signup() ; }) ;
          $this->get('send_active_code', function() use ($userController) { return $userController->send_active_code() ; }) ;
    }

}
