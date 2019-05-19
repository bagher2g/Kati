<?php
namespace App\App\Controllers ;
use App\App\Models\Content ;

class ContentController
{

    public function __construct()
    {

    }

    public function create()
    {
        global $orm ;
        try {
          $author = new Content ;
          $author->setType('thread') ;

          $orm->persist($author);
          $orm->flush();
        }
        catch ( Doctrine_Connection_Exception $e )
        {
            echo 'Code : ' . $e->getPortableCode();
            echo 'Message : ' . $e->getPortableMessage();
        }
    }

    public function get()
    {
       global $orm ;
       $o = $orm->createQuery('SELECT u.type FROM App\App\Models\Content u') ;
       $o = $o->getResult() ;
       foreach($o as $i)
          echo $i['type'] .'<br/>' ;

    }


}
