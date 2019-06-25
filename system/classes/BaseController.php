<?php
namespace App\System\Classes ;
/*
    * This class is father of every controller
*/
class BaseController
{
    public function __construct()
    {

    }

    public function load($files=[], $where='helper')
    {
        switch($where)
        {
            case 'helper':
            {
                foreach($files as $f)
                {
                    include( HELPERS_DIR.'/'. $f.'.php' ) ;
                }
            }; break;
        }
    }
}
