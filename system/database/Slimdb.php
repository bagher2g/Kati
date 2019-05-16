<?php
    namespace App\System\Database ;
    
    class SlimDb
    {
        private $dir;
        private $db ;
        /**
         *
         */
         public function __construct($db='local', $dir='slimdb')
         {
            $this->dir = $dir ;
            $this->db = $db ;
         }
         /**
          *
          */
         public function insert($file, $value)
         {
             $file = $this->make_dir($file) ;
             $value = serialize($value) ;
             file_put_contents($file, $value);
         }
         /**
          *
          */
         public function delete($file)
         {
             $file = $this->make_dir($file) ;
             unlink($file) ;
         }
         /**
          *
          */
         public function update($file, $new_value)
         {
              $file = $this->make_dir($file) ;
              $new_value = serialize($new_value) ;
              file_put_contents($file, $new_value);
         }
         /**
          *
          */
         public function select($file)
         {
             $file = $this->make_dir($file) ;
             $s = file_get_contents($file);
             return unserialize($s) ;
         }

         /**
          *
          */
         public function exists($file)
         {
             $file = $this->make_dir($file) ;
             return file_exists($file) ;
         }

         /**
          *
          */
         private function make_dir($file)
         {
            $dir = $this->dir .'/'. $this->db .'/'. $file ;
            return $dir ;
         }

    }
