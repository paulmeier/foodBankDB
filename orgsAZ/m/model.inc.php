<?php
//   model -  Organizations A-Z
//   This model uses an associative array in a Smarty object to pass data to the view


$order = $_GET["order"];
// Access the database
$db = ADOdb_connect($cfg);                               	        
$query="select NAME,ORGID,TYPE,CITY,STATE from organizations ORDER BY '$order';";   	
   $rs = ADOdb_query($db,$query);                                	 		 

while (!$rs->EOF) { 
   $orgData[] = array("NAME"=>$NAME=$rs->fields['NAME'], "ORGID"=>$ORGID=$rs->fields['ORGID'], "CITY"=>$NAME=$rs->fields['CITY'], "STATE"=>$NAME=$rs->fields['STATE']
   						,"TYPE"=>$NAME=$rs->fields['TYPE']);
   $rs->MoveNext();
   $k++;
}
ADOdb_close($db);

// move Model values into Smarty View array



$objView->assign('orgData',$orgData);
$objView->assign('count',$k);


include 'std_links.inc.php';

?>
