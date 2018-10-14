<?php
//   model -  - Submit

//   This model uses an associative array in a Smarty object to pass data to the view

//Org Information
$_FirstName	    	= 	$_POST['firstName'];
$_LastName	    	= 	$_POST['lastName'];
$_Type    	        = 	$_POST['Type'];
unset($personResults);

$db = ADOdb_connect($cfg);

if($_FirstName==""){
	if($_Type==""){
	   $query="SELECT * FROM people WHERE LastName = '$_LastName';";
	  }
	else if($_LastName==""){
	   $query="SELECT * FROM people WHERE Type = '$_Type';";
	}
	else
	   $query="SELECT * FROM people WHERE LastName = '$_LastName' AND Type = '$_Type';";
}
else if($_LastName=="") {
	if($_FirstName==""){
 	   $query="SELECT * FROM people WHERE Type = '$_Type';";
	}
	else if($_Type==""){
	   $query="SELECT * FROM people WHERE FirstName = '$_FirstName';";
	}
	else
	   $query="SELECT * FROM people WHERE FirstName = '$_FirstName' AND Type = '$_Type';";
}
else if($_Type=="") {
	if($_FirstName==""){
 	   $query="SELECT * FROM people WHERE LastName = '$_LastName';";
	}
	else if($_LastName==""){
	   $query="SELECT * FROM people WHERE FirstName = '$_FirstName';";
	}
	else {
	   $query="SELECT * FROM people WHERE FirstName = '$_FirstName' AND LastName = '$_LastName';";
	}
}
else{
   $query="SELECT * FROM people WHERE FirstName = '$_FirstName' AND LastName = '$_LastName' AND Type = '$_Type';";
}
$rs = ADOdb_query($db,$query);
$objView->assign('rs',$rs);
//If nothing was found then tell the user.	
   if ($rs->EOF)                                  
      $message="It seems there is no result matching that criteria.";
   else
   	  $message="Results:";
	  
//Send the org's found into the org results array for display.
while (!$rs->EOF) {                      
   $personResults[] = array('FirstName'=>$rs->fields['FirstName'],'LastName'=>$rs->fields['LastName'],'Type'=>$rs->fields['Type'],'PersonId'=>$rs->fields['PersonId']);
   $rs->MoveNext();
}

ADOdb_close($db);

$objView->assign('personResults',$personResults);
$objView->assign('queryResult',$message);

include 'std_links.inc.php';

?>
