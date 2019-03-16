<?php
namespace App\App\Routes ;

use App\System\Http\BaseRoute ;
/*
    | This class is using to set routes map in BaseRoutes::routes
*/
class Api extends BaseRoute
{
    protected $prefix = 'api' ;  // Feel free to change this prefix. your query will be like http://example.com/api/<....>


    public function __construct()
    {
      //   $this->get('u', function(){ return 'yyyyy' ; }) ;
    }

}
