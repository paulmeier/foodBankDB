<?php
//   model -  - Student application for apartment submitted

//   This model uses an associative array in a Smarty object to pass data to the view
                                                                 
//Function to generate a random string, with this algorithm there are a total of: 1,677,721,600,000,000 unique values
function str_makerand ($minlength, $maxlength, $useupper, $usespecial, $usenumbers)
{
/*
Author: Peter Mugane Kionga-Kamau
http://www.pmkmedia.com

Description: string str_makerand(int $minlength, int $maxlength, bool $useupper, bool $usespecial, bool $usenumbers)
returns a randomly generated string of length between $minlength and $maxlength inclusively.

Notes:
- If $useupper is true uppercase characters will be used; if false they will be excluded.
- If $usespecial is true special characters will be used; if false they will be excluded.
- If $usenumbers is true numerical characters will be used; if false they will be excluded.
- If $minlength is equal to $maxlength a string of length $maxlength will be returned.
- Not all special characters are included since they could cause parse errors with queries.

Modify at will.
*/
$charset = "abcdefghijklmnopqrstuvwxyz";
if ($useupper) $charset .= "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
if ($usenumbers) $charset .= "0123456789";
//if ($usespecial) $charset .= "~@$%^*()_-{}|]["; // Note: using all special characters this reads: "~!@#$%^&*()_+`-={}|\\]?[\":;'><,./";
if ($minlength > $maxlength) $length = mt_rand ($maxlength, $minlength);
else $length = mt_rand ($minlength, $maxlength);
for ($i=0; $i<$length; $i++) $key .= $charset[(mt_rand(0,(strlen($charset)-1)))];
return $key;
}

//End of functions


$_Person_id = str_makerand(8,8,TRUE,TRUE,TRUE);
// Retrieve form input
$_FirstName 	= 	$_POST['FirstName'];
$_LastName 	    = 	$_POST['LastName'];
$_Email 	    = 	$_POST['Email'];
$_Gender     	= 	$_POST['Gender'];
$_Type			=   $_POST['Type'];
$_OrgID			=   $_POST['Org'];

$_Street	= 	$_POST['Street'];
$_City 		= 	$_POST['City'];
$_State 	= 	$_POST['State'];
$_Zip 		= 	$_POST['Zip'];
$_Phone 	= 	$_POST['Phone'];

//Access the database
if ($_Person_id != '') {
   $db = ADOdb_connect($cfg);                                             // connect to database
   $query="SELECT PersonId FROM people WHERE PersonId = '$_Person_id'";   // see if person already in the database
   $rs = ADOdb_query($db,$query);                                         // Perform SQL query

if(!$rs->EOF) {                       // if duplicate person
   $message="Sorry, It seems: ".$_FirstName.", ".$_LastName." already exists in our database. If you feel that this is incorrect please contact the administrator.";
} else {                        // not duplicate - write this person to database

   $_submitDate=date("Ymd");
   $query="INSERT INTO people
   	VALUES('$_Person_id','$_FirstName','$_LastName','$_Street',
   '$_Phone','$_Email','$_Gender','$_City','$_State','$_Zip','$_submitDate','$_Type');";
   $rs = ADOdb_query($db,$query);                                  // Perform SQL query
   
   $query="INSERT INTO contacts
   	VALUES('$_OrgID','$_Person_id');";
	$rs = ADOdb_query($db,$query);  

   if ($rs) {                                     // was row inserted?
      $message="You have been added ".$_FirstName.", ".$_LastName.".";
   } else                                         //    no, INSERT failed
     $message="Your submission has not been added due to an error in recording.
	 ".$_Person_id." Please try again or contact the MFB office. ";
	 
	
}
                                   
/*   $query="SELECT Name,OrgId FROM organizations;";
   $rs = ADOdb_query($db,$query);

while (!$rs->EOF) {                                     
   $orgData[] = array("ORGID"=>$rs->fields['OrgId'], "Name"=>$rs->fields['Name']);
   $rs->MoveNext();
}*/
  
ADOdb_close($db);
} else {$message="This person has not been added. Please enter data in all required fields.";}

$objView->assign('Personm',$message);
include 'std_links.inc.php';

?>