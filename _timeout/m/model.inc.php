<?php
//   model - Timeout

//   This model uses an associative array in a Smarty object to pass data to the view


include 'session_destroy.inc.php';                     // destroy session

$redirect="0;url=".APP_URL."/?".LOGIN."&#38;tout=y";   // jump to login menu

// move Model values into Smarty View array
$objView->assign('redirect',$redirect);  

?>
