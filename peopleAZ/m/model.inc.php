<?php
//   model -  People A-Z
//   This model uses an associative array in a Smarty object to pass data to the view

$order = $_GET["order"];
// Access the database
$db = ADOdb_connect($cfg);                               	        
$query="select FirstName,LastName,Type,PersonId from people ORDER BY '$order';";   	
   $rs = ADOdb_query($db,$query);                                	 		 

while (!$rs->EOF) { 

   $person = $rs->fields['PersonId'];
   $query="SELECT OrgId from contacts WHERE PersonId = '$person';";   	
   $rs2 = ADOdb_query($db,$query);
   $org = $rs2->fields['OrgId'];
   
   $query="SELECT Name from organizations WHERE OrgId = '$org';";   	
   $rs3 = ADOdb_query($db,$query);
        
   $peopleData[] = array("FirstName"=>$rs->fields['FirstName'], "LastName"=>$rs->fields['LastName'], "Type"=>$rs->fields['Type'],
   "PersonId"=>$rs->fields['PersonId'], "Org"=>$rs3->fields['Name'], "OrgId"=>$rs2->fields['OrgId']);
   $rs->MoveNext();
   $k++;
}
ADOdb_close($db);

// move Model values into Smarty View array



$objView->assign('peopleData',$peopleData);
$objView->assign('count',$k);


include 'std_links.inc.php';

?>
