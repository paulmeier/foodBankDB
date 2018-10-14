<?php
//  model -

//   This model uses an associative array in a Smarty object to pass data to the view
	$db = ADOdb_connect($cfg);
   $query="SELECT Name,OrgId FROM organizations;";
   $rs = ADOdb_query($db,$query);

while (!$rs->EOF) {                                     
   $orgData[] = array("ORGID"=>$rs->fields['OrgId'], "Name"=>$rs->fields['Name']);
   $rs->MoveNext();
} 
ADOdb_close($db);
$objView->assign('orgData',$orgData);
require_once 'std_links.inc.php';   // put standard model values into Smarty View array

?>
