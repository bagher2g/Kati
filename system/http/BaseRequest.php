<?php
namespace App\System\Http ;
use App\System\Http\BaseRoute ;
use App\App\Routes\Web ;
use App\App\Routes\Api ;

class BaseRequest
{
    protected $start_time = 0 ;
    protected $finish_time = 0 ;
    protected $query ;
    protected $data ;

    public function __construct(BaseQuery $query)
    {
        $this->start_time = time() ;
        $this->query = $query ;
        $this->data &= $_REQUEST ;
    }

    public function set_finish_time()
    {
        $this->start_time = time() ;
    }

    public function run()
    {
        new Web ;
      //  new Api ;


        $routes = BaseRoute::$routes ;
        $elements = implode('/', $this->query->elements()) ;
        $function_name = $routes[$this->detectMethod()][$elements] ;

        return $function_name() ;
    }


    private function detectMethod()
    {
        $method = 'get' ;
        if( sizeof($_GET) != 0  ){
            if( sizeof($_POST) != 0  ){
                if( isset($_POST["_delete"])  ){
                    $method = 'delete' ;
                }
                else{
                    $method = 'post' ;
                }
            }
            else {
                $method = 'get' ;
            }
        }
        return $method ;

    }
}
