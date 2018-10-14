<?php
//   Page controller - Administrator Menu


if (security('A')) {                          //  user MUST be an administrator
   include "m/model.inc.php" ;
   include "v/view.inc.php" ;
} else 
    header( 'Location: ?' );                 //   header to return to front controller

?>
