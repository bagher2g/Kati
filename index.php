<?php
require_once('autoloader.php') ;
use App\System\Http\BaseQuery ;
use App\System\Http\BaseRequest ;



$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], 5)
);

$uri = str_replace('/'.$config['home'].$config['router'], '', $uri) ;


if( $uri == '' || $uri == '/' )
{
    $uri = [] ;
}
else
{
    if($uri[0] == '/')
    {
        $uri = substr($uri, 1, strlen($uri)-1 ) ;
    }

    $uri = explode('/', $uri) ;
}

$query = new BaseQuery($uri) ;
$request = new BaseRequest($query) ;

echo $request->run() ;
$request->set_finish_time() ;
