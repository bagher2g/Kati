<?php
namespace App\App\Controllers ;
use App\App\Models\Author ;
use App\System\Database\Slimdb ;

class TestController
{


    public function welcome_world()
    {
      global $orm ;
      global $_QUERY ;
      try {
        $product = new Author();
        $product->setName( $_QUERY->telement() );
        $product->setWeb( $_QUERY->lelement() ) ;

        $orm->persist($product);
        $orm->flush();
      }
      catch ( Doctrine_Connection_Exception $e )
      {
          echo 'Code : ' . $e->getPortableCode();
          echo 'Message : ' . $e->getPortableMessage();
      }
      return "نویسنده با موفقیت ایجاد شد  " . $product->getId() . "\n";
    }

    public function salam_donya()
    {
        global $orm ;
        $o = $orm->createQuery("SELECT u.name, u.web FROM App\App\Models\Author u");
        $o = $o->getResult() ;
        echo "<pre>";
        return print_r($o, true);
    }

    public function add()
    {
        $slimDb = new Slimdb('project', '../app/slimdb') ;
        global $orm ;
        $slimDb->insert('slimdb.txt', $orm) ;
        return 'test';
    }
}
