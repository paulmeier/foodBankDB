<?php
//  default model - 404 error

//   This model uses an associative array in a Smarty object to pass data to the view

$objView->assign('renter','?publicPanel');
if(isset($_SESSION['panel'])) $objView->assign('loginlink','?'.$_SESSION['panel']);
else                          $objView->assign('loginlink','/?'.LOGIN);

include 'std_links.inc.php';

?>
