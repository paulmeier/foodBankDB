<?php
//  Login model -  This is a virgin request

//   This model uses an associative array in a Smarty object to pass data to the view


// 'timeout' will be set if this invocation follows a timeout
if ($_GET['tout']!='') 
   $objView->assign('timeout_msg',$timeout_msg);


include 'std_links.inc.php';   

?>
