<?php
namespace App\App\Controllers ;
use App\System\Classes\BaseController ;

class UserController extends BaseController
{

    public function __construct()
    {
        $this->load(['form_helper', 'validation_helper']) ;
    }

    public function signup()
    {
        view('user/signup.php', [
              'title' => 'ثبت نام کاربر' ,
          ]) ;
    }

    public function send_active_code()
    {
        return 'ok' ;
    }

    public function hello()
    {
        return 'salam' ;
    }


    public function math()
    {
        global $_QUERY ;
      //  print_r($_QUERY) ;
        switch( $_QUERY->nelement(4) )
        {
            case 'plus' : return $_QUERY->nelement(2) + $_QUERY->nelement(3) ; break ;
            case 'minus' : return $_QUERY->nelement(2) - $_QUERY->nelement(3) ; break ;
            case 'div' : return $_QUERY->nelement(2) / $_QUERY->nelement(3) ; break ;
            case 'mul' : return $_QUERY->nelement(2) * $_QUERY->nelement(3) ; break ;
        }
    }
}
