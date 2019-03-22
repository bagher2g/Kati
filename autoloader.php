<?php
/*
    Load all helper required
*/
$autoloader_files = c('auto_loader', []) ;
foreach ($autoloader_files as $af) {
   require_once $af ;
}
