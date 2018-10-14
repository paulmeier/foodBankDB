<?php

//   view - Logout

//   This view uses an associative array in a Smarty object passed from the model

//   This view just redirects to home

// set view values
include 'std_view_attributes.php';
$objView->assign('page_title','MFB Logout Page') ;
$objView->assign('page_heading','');
$objView->assign('view_content','');
$objView->assign('page_head','');          // change from standard value
$objView->assign('page_foot','');          // change from standard value

$objView->display(MASTER_PAGE);            // display page using template

?>

