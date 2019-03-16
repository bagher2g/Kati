<?php
namespace App\System\Http ;
use App\System\Http\BaseRoute ;
use App\App\Routes\Web ;
use App\App\Routes\Api ;

/*
    | This class is responsible for run whole the app
    | Every single request is handeling throw this class

*/
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

    /*
        | This method is responsile for run whole the app
    */
    public function run()
    {
        /*
            Feel free to comment or uncomment whatever route config you want
        */
        new Web ;
      //  new Api ;


        $routes = BaseRoute::$routes ;
        $elements = implode('/', $this->query->elements()) ;
        $function_name = $routes[$this->detect_method()][$elements] ;

        return $function_name() ;
    }

    /*
        | For benchmark purpose this method will record when the request is done
    */
    public function set_finish_time()
    {
        $this->start_time = time() ;
    }

    /*
        | This method determine what HTTP protocol using
    */
    private function detect_method()
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
