<?php
//   model - logout

//   This model uses an associative array in a Smarty object to pass data to the view

include 'session_destroy.inc.php';

$redirect="0;url=".APP_URL."/";                   // jump to home page

// move Model values into Smarty View array
$objView->assign('redirect',$redirect);  

?>
