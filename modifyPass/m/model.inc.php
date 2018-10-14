<?php
//   model - 
//   This model uses an associative array in a Smarty object to pass data to the view


// Access the database
$db = ADOdb_connect($cfg);          
$query="select username,password from users WHERE username = (select username from user_info where access = 'A');"; 
$rs = ADOdb_query($db,$query);                                	 		

//RETRIVE ADMINDATA
while (!$rs->EOF) {
   $adminData[] = array( "USERNAME"=>$rs->fields['username'], "PASSWORD"=>$rs->fields['password']);
	 $rs->MoveNext();
  }
  
$query="select username,password from users WHERE username = (select username from user_info where access = 'O');"; 
$rs = ADOdb_query($db,$query);                                	 		

//RETRIVE ORGANIZATION
while (!$rs->EOF) {
   $orgData[] = array( "USERNAME"=>$rs->fields['username'], "PASSWORD"=>$rs->fields['password']);
	 $rs->MoveNext();
  }
  
$query="select username,password from users WHERE username = (select username from user_info where access = 'P');"; 
$rs = ADOdb_query($db,$query);                                	 		

//RETRIVE PERSON
while (!$rs->EOF) {
   $personData[] = array( "USERNAME"=>$rs->fields['username'], "PASSWORD"=>$rs->fields['password']);
	 $rs->MoveNext();
  }
ADOdb_close($db);

$objView->assign('adminData',$adminData);
$objView->assign('orgData',$orgData);
$objView->assign('personData',$personData);

include 'std_links.inc.php';

?>
