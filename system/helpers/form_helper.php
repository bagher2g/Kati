<?php
    /**
     *  Form helper
     * this will help you to make a standard form as soon as possilbe
     */

     function form_fill_using_array($array=[])
     {
          $str = "" ;
          foreach ($array as $key=>$val) {
              $str .= "$key='$val' " ;
          }
          return $str ;
     }

     function form_open($action, $method='post', $attr=[])
     {
          $attr['action'] = '../..'. c('routing.router').'/' . $action ;
          $attr['method'] = $method ;
          return "<form ".form_fill_using_array($attr). " />" ;
     }

     function form_close()
     {
         return "</form>" ;
     }

     function textbox($name, $val='', $def='', $attr=[])
     {
        $attr['type'] = 'text' ;
        $attr['name'] = $name ;
        $attr['value'] = is_string($val) ? $val : $def ;
        return "<input ".form_fill_using_array($attr). " />" ;
     }

     function password($name, $attr=[])
     {
        $attr['type'] = 'password' ;
        $attr['name'] = $name ;
        return "<input ".form_fill_using_array($attr). " />" ;
     }

     function submit($name='submit', $attr=[])
     {
        return "<input type='submit' value='".$name."' ".form_fill_using_array($attr). "/>" ;
     }
