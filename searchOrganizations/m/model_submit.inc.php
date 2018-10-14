<?php
//   model -  - Submit

//   This model uses an associative array in a Smarty object to pass data to the view


//Org Information
$_orgName 	    	= 	$_POST['orgName'];
$_City	    	    = 	$_POST['City'];
$_State	    	    = 	$_POST['State'];
unset($orgResults);

$db = ADOdb_connect($cfg);

if($_orgName==""){
	if($_State==""){
	   $query="SELECT * FROM organizations WHERE City = '$_City';";
	  }
	else if($_City==""){
	   $query="SELECT * FROM organizations WHERE State = '$_State';";
	}
	else
	   $query="SELECT * FROM organizations WHERE State = '$_State' AND City = '$_City';";
}
else if($_City=="") {
	if($_State==""){
 	   $query="SELECT * FROM organizations WHERE Name = '$_orgName';";
	}
	else if($_orgName==""){
	   $query="SELECT * FROM organizations WHERE State = '$_State';";
	}
	else
	   $query="SELECT * FROM organizations WHERE Name = '$_orgName' AND State = '$_State';";
}
else if($_State=="") {
	if($_City==""){
 	   $query="SELECT * FROM organizations WHERE Name = '$_orgName';";
	}
	else if($_orgName==""){
	   $query="SELECT * FROM organizations WHERE City = '$_City';";
	}
	else {
	   $query="SELECT * FROM organizations WHERE Name = '$_orgName' AND City = '$_City';";
	}
}
else{
   $query="SELECT * FROM organizations WHERE Name = '$_orgName' AND City = '$_City' AND State = '$_State;";
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
   $orgResults[] = array('OrgName'=>$rs->fields['Name'],'OrgId'=>$rs->fields['OrgId'],'City'=>$rs->fields['City'],'State'=>$rs->fields['State'],'Type'=>$rs->fields['Type']);
   $rs->MoveNext();
}

ADOdb_close($db);

$objView->assign('orgResults',$orgResults);
$objView->assign('queryResult',$message);

include 'std_links.inc.php';

?>
