<?php
//   model -  massEmail
//   This model uses an associative array in a Smarty object to pass data to the view
       
$_Type  =  $_POST['Type'];
$objView->assign('Type',$_Type);
$db = ADOdb_connect($cfg);
$query="SELECT Email FROM people WHERE Type = '$_Type';";
$rs = ADOdb_query($db,$query);

   if ($rs->EOF)                                  
      $message="It seems there is no result matching that criteria.";
   else
   	  $message="$_Type Results:";

  while (!$rs->EOF) {
	 $emailResults[] = array('EMAIL'=>$rs->fields['Email']);
	 $rs->MoveNext();
  }
  
ADOdb_close($db);

$objView->assign('emailResults',$emailResults);
$objView->assign('queryResult',$message);

include 'std_links.inc.php';

?>
