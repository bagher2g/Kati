<?php
namespace App\App\Controllers ;
use App\App\Models\Author ;

class TestController
{


    public function welcome_world()
    {
      global $orm ;
      try {
        $product = new Author();
        $product->setName('bagher');
        $product->setWeb('http://bagher2g.ir') ;

        $orm->persist($product);
        $orm->flush();
      }
      catch ( Doctrine_Connection_Exception $e )
      {
          echo 'Code : ' . $e->getPortableCode();
          echo 'Message : ' . $e->getPortableMessage();
      }

echo "Created Product with ID " . $product->getId() . "\n";

        return 'salaaaaaaam!' ;


    }

    public function salam_donya()
    {
        $a = time() ;

        $d = new Doctrine ;

        return view('app\views\test.php', ['title' => 'سلام دنیا!', 'r' => $a]) ;
    }

    public function add()
    {
        return 'سلام با استفاده از این قسمت میتوانید وارد سایت شوید' ;
    }
}
