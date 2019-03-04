<?php
namespace App\System\Http ;

class BaseQuery
{
    protected $elements = [] ;
    protected $first_element = '' ;
    protected $second_element = '' ;
    protected $third_element = '' ;
    protected $last_element = '' ;
    protected $is_empty = false ;


    public function __construct($uri=[])
    {
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

    public function felement()
    {
        return $this->first_element ;
    }
    public function selement()
    {
        return $this->second_element ;
    }
    public function telement()
    {
        return $this->third_element ;
    }
    public function lelement()
    {
        return $this->last_element ;
    }
    public function nelement($i)
    {
        return isset( $this->elements[$i] ) ? $this->elements[$i] : '' ;
    }
    public function elements()
    {
        return $this->elements ;
    }

    public function is_empty()
    {
        return $is_empty ;
    }



}
