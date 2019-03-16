<?php
namespace App\App\Controllers ;

class TestController
{


    public function welcome_world()
    {
        return 'salaaaaaaam!' ;
    }

    public function salam_donya()
    {
        $a = time() ;
        return view('app\views\test.php', ['title' => 'سلام دنیا!', 'r' => $a]) ;
    }

    public function add()
    {
        return 'سلام با استفاده از این قسمت میتوانید وارد سایت شوید' ;
    }
}
