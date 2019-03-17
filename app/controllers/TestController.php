<?php
namespace App\App\Controllers ;
use App\App\Models\Author ;

class TestController
{


    public function welcome_world()
    {
        return 'salaaaaaaam!' ;
    }

    public function salam_donya()
    {
        $a = time() ;
        $author = new Author() ;
        $author->name = 'bagher' ;
        $author->web = 'http://example.com' ;
        $author->save();

        return view('app\views\test.php', ['title' => 'سلام دنیا!', 'r' => $a]) ;
    }

    public function add()
    {
        return 'سلام با استفاده از این قسمت میتوانید وارد سایت شوید' ;
    }
}
