<?php

    function validation($array=[])
    {
        $errors = [] ;
        $flag = true ;
        foreach($array as $k=>$rules)
        {
            foreach($rules as $rule)
            {
                if( !$rule($k) )
                {
                   $flag = false ;
                   $errors[$k][] = $rule ;
                }
            }
        }

        return $errors ;
    }
    function string($val)
    {
        return is_string($val) ;
    }
