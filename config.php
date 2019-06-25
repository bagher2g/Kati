<?php
    define('DATABASE_DRIVER', 'pdo_mysql') ;
    define('HELPERS_DIR', '../system/helpers') ;
    define('VIEWS_DIR', '../app/views/') ;
    define('DATABASE_DIR', 'system\database') ;
    define('ROUTES_DIR', 'App\App\Routes') ;

    define('BASEPATH', '') ;

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
             'router' => 'public/index.php',

             /*
                 Feel free to comment or uncomment whatever route config you want
             */
             'class_map' => [
                ROUTES_DIR . '\Web' ,
                ROUTES_DIR . '\Api' ,
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
            HELPERS_DIR . '\view_helper.php' ,
            DATABASE_DIR . '\Doctrine.php' ,
         ],
    ] ;


    /**
     * this function is really key function to access config file all over the application
     */
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
