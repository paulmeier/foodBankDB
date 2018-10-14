<?php
//   model - 
//   This model uses an associative array in a Smarty object to pass data to the view

$id = $_GET["id"];

// Access the database
$db = ADOdb_connect($cfg);          
$query="DELETE from contacts WHERE PersonId = '$id';"; 
$rs = ADOdb_query($db,$query);     
                           	 		
$query="DELETE from people WHERE PersonId = '$id';"; 
$rs = ADOdb_query($db,$query); 

if($rs)
	$objView->assign('PersonFound',"Delete Successfull");
else
	$objView->assign('PersonFound',"Delete Failed");


include 'std_links.inc.php';

?>
