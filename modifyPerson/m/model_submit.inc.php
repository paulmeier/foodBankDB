<?php
//   model -  - modify person

//   This model uses an associative array in a Smarty object to pass data to the view


//General Information
$_orgId			=   $_POST['Org'];
$_type			=   $_POST['Type']; 
$_personid      = $_GET["id"];

//Contact Information
$_FirstName 			=   $_POST['FirstName'];
$_LastName 			    =   $_POST['LastName'];
$_Email 				=   $_POST['Email'];
$_Phone 				=   $_POST['Phone'];
$_Gender 				=   $_POST['Gender'];
$_Type 				    =   $_POST['Type'];
$_Street 				= 	$_POST['Street'];
$_City					= 	$_POST['City'];
$_State 				= 	$_POST['State'];
$_Zip 					= 	$_POST['Zip'];
$_Phone		 		    =   $_POST['Phone'];
$_submitDate 		    =   $_POST['submitDate'];

// Access the database, And check for any unique keys that exist.
   $db = ADOdb_connect($cfg);                                      
   $query="UPDATE contacts SET OrgId = '$_orgId' WHERE PersonId = '$_personid';";
   $rs = ADOdb_query($db,$query);                                  
   
   //Submit happens in a number of different tables
    $query="UPDATE people SET PersonId = '$_personid', FirstName = '$_FirstName', LastName = '$_LastName',
	Street = '$_Street', Phone = '$_Phone', Email = '$_Email', Gender = '$_Gender', City = '$_City', State = '$_State', Zip = '$_Zip',
	submitDate = '$_submitDate', Type = '$_type' WHERE PersonId = '$_personid';";
    $rs = ADOdb_query($db,$query);
	
   if ($rs) {
      $message="".$_FirstName." ".$_LastName.", Has been updated";
   } else
      $message="Modification was not successful.";

ADOdb_close($db);


$objView->assign('Firstname',$_FirstName);
$objView->assign('Lastname',$_LastName);
$objView->assign('personid',$_personid);
$objView->assign('PersonFound',$message);
include 'std_links.inc.php';

?>
