<?php
    define('DATABASE_DRIVER', 'pdo_mysql') ;
    define('HELPER_DIR', 'system\helpers') ;

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

             /*
                 Feel free to comment or uncomment whatever route config you want
             */
             'class_map' => [
                'App\App\Routes\Web' ,
                //'App\App\Routes\Api' ,
             ] ,
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
        ],


        /**
         *
         */
         'auto_loader' => [
            HELPER_DIR . '\view_helper.php' ,
            'system\database\Doctrine.php' ,
         ],
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
