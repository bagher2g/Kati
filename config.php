<?php
    define('DATABASE_DRIVER', 'pdo_mysql') ;


    /**
     *  All configs you need can be set here
     */
    $_config = [
        /**
         *
         */
        'error_handeling' => [
            'app_mode' => 'local'
        ] ,

        /**
         *
         */
         'routing' => [
             'home' => 'Kati',
             'router' => '/index.php',
         ] ,

         

         /**
          *
          */
        'database' => [
            'pdo_mysql' => [
                'driver'   => 'pdo_mysql',
                'user'     => 'root',
                'password' => '',
                'dbname'   => 'Kati',
            ],
        ]
    ] ;

    function c($index, $def='')
    {
        global $_config ;
        $in = explode('.', $index) ;
        $temp = $_config ;
        foreach($in as $i)
            $temp = $temp[$i] ;
        if( isset($temp) )
            return $temp ;
        else return $def ;
    }
