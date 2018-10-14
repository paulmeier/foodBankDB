<?php
//   model -  - modify users

//   This model uses an associative array in a Smarty object to pass data to the view


//Contact Information
$_Adminusername 			=   $_POST['Adminusername'];
$_Adminpassword 			=   $_POST['Adminpassword'];
$_Orgusername 				=   $_POST['Orgusername'];
$_Orgpassword 				=   $_POST['Orgpassword'];
$_Personusername 			=   $_POST['Personusername'];
$_Personpassword 			=   $_POST['Personpassword'];


// Access the database, And check for any unique keys that exist.
   $db = ADOdb_connect($cfg);                                 
   
   //Modifying Admin
    $query="select username,password from users WHERE username = (select username from user_info where access = 'A');"; 
    $rs = ADOdb_query($db,$query);
	$_currAdmin = $rs->fields['username'];
	
    $query="UPDATE user_info SET username = '$_Adminusername' WHERE access = 'A'";
    $rsA1 = ADOdb_query($db,$query);
	
	$query="UPDATE users SET username = '$_Adminusername' , password = '$_Adminpassword' WHERE username = '$_currAdmin'";
    $rsA2 = ADOdb_query($db,$query);
	
	//Modifying Organization
    $query="select username,password from users WHERE username = (select username from user_info where access = 'O');"; 
    $rs = ADOdb_query($db,$query);
	$_currOrg = $rs->fields['username'];
	
    $query="UPDATE user_info SET username = '$_Orgusername' WHERE access = 'O'";
    $rsO1 = ADOdb_query($db,$query);
	
	$query="UPDATE users SET username = '$_Orgusername' , password = '$_Orgpassword' WHERE username = '$_currOrg'";
    $rsO2 = ADOdb_query($db,$query);
	
    //Modifying Person
    $query="select username,password from users WHERE username = (select username from user_info where access = 'P');"; 
    $rs = ADOdb_query($db,$query);
	$_currPerson = $rs->fields['username'];
	
    $query="UPDATE user_info SET username = '$_Personusername' WHERE access = 'P'";
    $rsP1 = ADOdb_query($db,$query);
	
	$query="UPDATE users SET username = '$_Personusername' , password = '$_Personpassword' WHERE username = '$_currPerson'";
    $rsP2 = ADOdb_query($db,$query);
	
   if ($rsA1 && $rsA2 && $rsO1 && $rsO2 && $rsP1 && $rsP2) {
      $message="".$_orgName.", Has been updated";
   } else
      $message="Modification was not successful.";

ADOdb_close($db);

$objView->assign('changed',$message);
include 'std_links.inc.php';

?>
