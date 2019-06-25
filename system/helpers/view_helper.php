<?php
  /*
    | This helper will help you to load views
  */

  function view($path, $data=[])
  {
      include(VIEWS_DIR.$path) ;
  }
