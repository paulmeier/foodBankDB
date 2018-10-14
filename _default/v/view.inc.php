<?php
//  default view

//   This view uses an associative array in a Smarty object passed from the model


// set view values
include 'std_view_attributes.php';

$objView->assign('page_title','MFB Login') ;
$objView->assign('page_heading','Please login.');
$objView->assign('view_content','default.inc.tpl');

$objView->display(MASTER_PAGE);           // display page using template

?>
