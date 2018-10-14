<?php
//   model - 
//   This model uses an associative array in a Smarty object to pass data to the view

$id = $_GET["id"];

// Access the database
$db = ADOdb_connect($cfg);          
$query="DELETE FROM organizations WHERE OrgId = '$id';"; 
$rs1 = ADOdb_query($db,$query);
$query="DELETE FROM contacts WHERE OrgId = '$id';"; 
$rs = ADOdb_query($db,$query);
$query="Select indivAgeId from orgdetail where OrgId = '$id';";
$rs = ADOdb_query($db,$query);
$indivAgeid = $rs->fields['indivAgeId'];
$query="DELETE FROM orgdetail WHERE OrgId = '$id';"; 
$rs = ADOdb_query($db,$query);
$query="DELETE FROM orgfoodsources WHERE OrgId = '$id';"; 
$rs = ADOdb_query($db,$query);
$query="DELETE FROM surveyquestions WHERE OrgId = '$id';"; 
$rs = ADOdb_query($db,$query);
$query="DELETE FROM surveyratings WHERE OrgId = '$id';"; 
$rs = ADOdb_query($db,$query);
$query="DELETE FROM indivage WHERE IndivAgeId = '$indivAgeid';"; 
$rs = ADOdb_query($db,$query);
$query="DELETE FROM orgclientpop WHERE OrgId = '$id';"; 
$rs = ADOdb_query($db,$query);

if($rs && $rs1)                        	 		
	$objView->assign('deletestatus',"Organization deleted");
else
    $objView->assign('deletestatus',"Delete failed");

include 'std_links.inc.php';

?>
