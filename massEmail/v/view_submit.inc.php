<?php
//   view - public menu

//   This view uses an associative array in a Smarty object passed from the model

// set view values
include 'std_view_attributes.php';
$objView->assign('page_title','Midwest Food Bank') ;
$objView->assign('page_heading','Mass Email');
$objView->assign('view_content','massEmail_response.inc.tpl');

$objView->display(MASTER_PAGE);           // display page using template

?>
