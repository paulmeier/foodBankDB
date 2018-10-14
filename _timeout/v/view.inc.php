<?php
//   view - Timeout

//   This view uses an associative array in a Smarty object passed from the model

//   This view just redirects to log in page

// set view values
include 'std_view_attributes.php';
$objView->assign('page_title','Session Timed Out') ;
$objView->assign('page_heading','');
$objView->assign('view_content','');
$objView->assign('page_head','');             // change from standard value
$objView->assign('page_foot','');             // change from standard value

$objView->display(MASTER_PAGE);               // display page using template

?>
