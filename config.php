<?php
    define('DATABASE_DRIVER', 'pdo_mysql') ;


    /**
     *  All configs you need can be set here
     */
    $_config = [
        'home' => 'Kati',
        'router' => '/index.php',



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
        $temp = $_config[$index] ;
        if( isset($temp) )
            return $temp ;
        else return $def ;
    }
