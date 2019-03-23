<?php
require_once('config.php') ;
require_once('vendor/autoload.php') ;
require_once('autoloader.php') ;

use App\System\Http\BaseQuery ;
use App\System\Http\BaseRequest ;



/*
    * Parse query and convert it to computer readable string
*/
$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], 5)
);
/*
    * Delete the first section of url
    * URL : http://example.com/index.php/user/login
    * Below code will convert it to :
    * URL : /user/login
*/
$uri = str_replace('/' . c('routing.home') . c('routing.router'), '', $uri) ;
/*
    * Pass the request to final parse the url and convert it to BaseQuery object
    * BaseQuery object can retrive as object and make it more human readable
    * The BaseQuery will pass to the BaseRequest
    * BaseRequest runs the request and shows the result in $request->run()
*/
try
{
    $request = new BaseRequest( new BaseQuery($uri)  ) ;
    echo $request->run() ;
    $request->set_finish_time() ;
}
catch (Exception $e)
{
    if( c('error_handeling.app_mode') == 'local' )
    {
        echo '<pre>' ;
            print_r($e);
        echo '<pre>';

    }

}
echo $request->get_time() ;
