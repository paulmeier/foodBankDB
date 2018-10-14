<?php
//   view -

//   This view uses an associative array in a Smarty object passed from the model
 
// set view values
include 'std_view_attributes.php';

$objView->assign('page_title','MFB Organization Form') ;
$objView->assign('page_heading','Organization Form');
$objView->assign('view_content','organizationForm.inc.tpl');

$objView->display(MASTER_PAGE);           // display page using template

?>
