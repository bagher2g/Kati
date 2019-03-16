<?php
namespace App\System\Http ;
/*
    | This class will render the request and seperate it to elements
    | Using this class BaseRequest can figure out what uri query wants
*/
class BaseQuery
{
    protected $elements = [] ;
    protected $first_element = '' ;
    protected $second_element = '' ;
    protected $third_element = '' ;
    protected $last_element = '' ;
    protected $is_empty = false ;


    public function __construct($uri='')
    {
        $uri = $this->render($uri) ;
        $this->elements = $uri ;

        $size_of_elements = sizeof($this->elements) ;

        if( $size_of_elements == 0 )
            $this->is_empty = true ;
        if( isset($this->elements[0]) )
            $this->first_element = $this->elements[0] ;
        if( isset($this->elements[1]) )
            $this->second_element = $this->elements[1] ;
        if( isset($this->elements[2]) )
            $this->third_element = $this->elements[2] ;
        if( isset($this->elements[ $size_of_elements-1 ]) )
            $this->last_element = $this->elements[ $size_of_elements-1 ] ;
    }

    /*
        | Return first element of query
        | URI: http://example.com/user/admin/manage?id=2
        | felement() would return 'user'
    */
    public function felement()
    {
        return $this->first_element ;
    }

    /*
        | Return second element of query
        | URI: http://example.com/user/admin/manage?id=2
        | selement() would return 'admin'
    */
    public function selement()
    {
        return $this->second_element ;
    }

    /*
        | Return third element of query
        | URI: http://example.com/user/admin/manage?id=2
        | selement() would return 'manage'
    */
    public function telement()
    {
        return $this->third_element ;
    }

    /*
        | Return last element of query
        | URI: http://example.com/user/admin/manage?id=2
        | selement() would return 'manage'
    */
    public function lelement()
    {
        return $this->last_element ;
    }

    /*
        | Return n'th element of query
        | URI: http://example.com/user/admin/manage?id=2
        | nelement(2) would return 'admin'
    */
    public function nelement($i)
    {
        return isset( $this->elements[$i] ) ? $this->elements[$i] : '' ;
    }

    /*
        | Return elements of query as an array
        | URI: http://example.com/user/admin/manage?id=2
        | eelements() would return ['', 'user', 'admin', 'manage']
    */
    public function elements()
    {
        return $this->elements ;
    }

    /*
        | Return true if query is empty ( first page )
        | URI: http://example.com/user/admin/manage?id=2
        | is_empty() would return false
        | URI: http://example.com/
        | is_empty() would return true
    */
    public function is_empty()
    {
        return $is_empty ;
    }

    /*
        | Return the query as array of elements
    */
    private function render($uri)
    {
        if( $uri == '' || $uri == '/' )
        {
            $uri = [] ;
        }
        else
        {
            if($uri[0] == '/')
            {
                $uri = substr($uri, 1, strlen($uri)-1 ) ;
            }

            $uri = explode('/', $uri) ;
        }

        return $uri ;
    }

}
