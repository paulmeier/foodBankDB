<?php
//   model - 
//   This model uses an associative array in a Smarty object to pass data to the view

$id = $_GET["id"];

// Access the database
$db = ADOdb_connect($cfg);          
$query="select * from people WHERE PersonId = '$id';"; 
$rs = ADOdb_query($db,$query);                                	 		


//RETRIVE ORGDATA   
   $personData[] = array( "FIRSTNAME"=>$rs->fields['FirstName'], "LASTNAME"=>$rs->fields['LastName'], "STREET"=>$rs->fields['Street']
   ,"PHONE"=>$rs->fields['Phone'],"EMAIL"=>$rs->fields['Email'],"GENDER"=>$rs->fields['Gender'],"CITY"=>$rs->fields['City']
   ,"STATE"=>$rs->fields['State'],"ZIP"=>$rs->fields['Zip'],"TYPE"=>$rs->fields['Type'],"SUBMITDATE"=>$rs->fields['submitDate']);
   
   $query="select OrgId,Name from organizations WHERE organizations.OrgId = (Select contacts.OrgId from contacts where contacts.PersonId = '$id');"; 
   $rs1 = ADOdb_query($db,$query);
	$curr = $rs1->fields['OrgId'];
	
	$query="select OrgId,Name from organizations WHERE OrgId NOT LIKE'$curr%';"; 
	$rs2 = ADOdb_query($db,$query);
	while(!$rs2->EOF){
		  $allorgData[] = array("ORGID"=>$rs2->fields['OrgId'],"NAME"=>$rs2->fields['Name']);
		  $rs2->MoveNext();
		}
ADOdb_close($db);

$objView->assign('personData',$personData);
$objView->assign('orgData',$orgData);
$objView->assign('allorgData',$allorgData);
$objView->assign('currOrgId',$curr);
$objView->assign('currOrgName',$rs1->fields['Name']);



include 'std_links.inc.php';

?>
