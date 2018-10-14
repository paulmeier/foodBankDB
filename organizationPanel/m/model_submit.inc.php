<?php
//   model -  - Submit for an organization

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

//Assigning the unique key to the orgid variable
$_Orgid = str_makerand(8,8,TRUE,TRUE,TRUE);
$_OrgDetailId = str_makerand(8,8,TRUE,TRUE,TRUE);
$_IndivAgeId = str_makerand(8,8,TRUE,TRUE,TRUE);
$_PersonId = str_makerand(8,8,TRUE,TRUE,TRUE);
$_FoodSourcesId = str_makerand(8,8,TRUE,TRUE,TRUE);
$_RatingId = str_makerand(8,8,TRUE,TRUE,TRUE);
$_OrgClientPopId = str_makerand(8,8,TRUE,TRUE,TRUE);
$_SurveyQuestionId = str_makerand(8,8,TRUE,TRUE,TRUE);
// Retrieve form input

//General Information
$_orgName 	    	= 	$_POST['orgName'];
$_distance 	    	= 	$_POST['distance'];
$_missionStatement 	= 	$_POST['missionStatement'];
$_orgType			=   $_POST['orgType'];
$_OtherOrgType		=   $_POST['OtherOrgType'];
$_specificPop		= 	$_POST['specificPop'];
$_popDesc 			= 	$_POST['popDesc'];
$_sponsor 			= 	$_POST['sponsor'];
$_otherSponsorName 	= 	$_POST['otherSponsorName'];
$_pickupAmt 		= 	$_POST['pickupAmt'];
$_otherPickupDesc	= 	$_POST['otherPickupDesc'];
$_sesonalDesc 		= 	$_POST['sesonalDesc'];

//Location Information
$_street 			= 	$_POST['Street'];
$_city				= 	$_POST['City'];
$_state 			= 	$_POST['State'];
$_zip 				= 	$_POST['Zip'];
$_phone		 		=   $_POST['Phone'];

//Contact Information
$_cFirstName 			=   $_POST['cFirstName'];
$_cLastName 			=   $_POST['cLastName'];
$_cEmail 				=   $_POST['cEmail'];
$_cPhone 				=   $_POST['cPhone'];
$_cGender 				=   $_POST['cGender'];
$_cType 				=   $_POST['cType'];
$_cStreet 				= 	$_POST['cStreet'];
$_cCity					= 	$_POST['cCity'];
$_cState 				= 	$_POST['cState'];
$_cZip 					= 	$_POST['cZip'];
$_cPhone		 		=   $_POST['cPhone'];

//Statistical Information
$_familiesServed	=   $_POST['familiesServed'];
$_singleParent 		=   $_POST['singleParent'];
$_individServed 	=   $_POST['individServed'];
$_avgHouseSize 		=   $_POST['avgHouseSize'];
$_childPercent 		=   $_POST['childPercent'];
$_adultPercent 		=   $_POST['adultPercent'];
$_eldersPercent 	=   $_POST['eldersPercent'];
$_homelessPercent 	=   $_POST['homelessPercent'];
$_incDep 			=   $_POST['incDep'];
$_payForFood 		=   $_POST['payForFood'];

//Organization Population
$_amIndian 			=   $_POST['amIndian'];
$_caucasian			=   $_POST['caucasian'];
$_asian 			=   $_POST['asian'];
$_hispanic 			=   $_POST['hispanic'];
$_afAmerican 		=   $_POST['afAmerican'];
$_middleEastern 	=   $_POST['middleEastern'];
$_ethOther 			=   $_POST['ethOther'];
$_ethPercent 		=   $_POST['ethPercent'];

//Food Sources
$_mfb				=	$_POST['mfb'];
$_indivDonations	=	$_POST['indivDonations'];
$_gov				=	$_POST['gov'];
$_commServOrg		=	$_POST['commServOrg'];
$_financialDonations	=	$_POST['financialDonations'];
$_churches			=	$_POST['churches'];
$_otherSource		=	$_POST['otherSource'];
$_otherSourcePerc	=	$_POST['otherSourcePerc'];

//Survey Information
$_distroProcess 	= 	$_POST['distroProcess'];
$_distroTime		= 	$_POST['distroTime'];
$_qualityFood 		= 	$_POST['qualityFood'];
$_communication		=   $_POST['communication'];
$_ratingExpla 		= 	$_POST['ratingExpla'];
$_orgDifference		= 	$_POST['orgDifference'];
$_commDifference	= 	$_POST['commDifference'];
$_betterServe		= 	$_POST['betterServe'];

// Access the database, And check for any unique keys that exist.
if ($_Orgid != '') {
   $db = ADOdb_connect($cfg);                                      
   $query="SELECT OrgId FROM organization WHERE OrgId = '$_Orgid'
   OR Name = '$_orgName';";   										
   $rs = ADOdb_query($db,$query);                                  

if($rs) {                       // if duplicate person
   $objView->assign('OrgFound',"Sorry, It seems that this organization already exists in our database. If you feel
   that this is incorrect please contact the administrator.");
} else {                        // not duplicate - write this person to database
   
   //Submit happens in a number of different tables
    $_submitDate=date("Ymd");
    $query="INSERT INTO organizations
    VALUES ('$_Orgid','$_orgName', '$_distance', '$_missionStatement','$_orgType', 
   '$_specificPop','$_popDesc','$_sponsor', '$_otherSponsorName', '$_pickupAmt', 
   '$_otherPickupDesc','$_sesonalDesc','$_submitDate','$_street','$_city','$_state','$_zip',
   '$_phone','$_OrgDetailId','$_IndivAgeId','$_FoodSourcesId','$_RatingId','$_OrgClientPopId','$_SurveyQuestionId');";
    $rs = ADOdb_query($db,$query);
	
	//Insert the contact into the people table **** BDATE NOT IMPLEMENTED YET *****
	$query="INSERT INTO people
	VALUES ('$_PersonId','$_cFirstName','$_cLastName','$_cStreet','$_cPhone','$_cEmail','$_cGender','$_cCity','$_cState'
	,'$_cZip','$_submitDate','OrgContact');";
	$rs = ADOdb_query($db,$query);
	
	//Contact information for a organization
	$query="INSERT INTO contacts
	VALUES ('$_Orgid','$_PersonId');";
	$rs = ADOdb_query($db,$query);
	
	//Individual ages Id
	$query="INSERT INTO indivage
	VALUES ('$_IndivAgeId','$_OrgDetailId','$_childPercent','$_adultPercent','$_eldersPercent');";
	$rs = ADOdb_query($db,$query);
	
	//Organization detail
	$query="INSERT INTO orgdetail
	VALUES ('$_familiesServed','$_singleParent','$_individServed','$_avgHouseSize',
	'$_IndivAgeId','$_homelessPercent','$_incDep','$_payForFood','$_OrgDetailId','$_Orgid');";
	$rs = ADOdb_query($db,$query);
	
	//Insert into organizations client poplulation				
	$query="INSERT INTO orgclientpop
	VALUES ('$_Orgid','$_OrgClientPopId','$_amIndian','$_caucasian','$_asian','$_hispanic'
	,'$_afAmerican','$_middleEastern','$_ethOther','$_ethPercent');";
	$rs = ADOdb_query($db,$query);

	//Org Food Sources
	$query="INSERT INTO orgfoodsources
	VALUES ('$_Orgid','$_FoodSourcesId','$_mfb','$_indivDonations','$_gov','$_commServOrg','$_financialDonations','$_churches','$_otherSource','$_otherSourcePerc');";
	$rs = ADOdb_query($db,$query);
	
	//Survey Ratings
	$query="INSERT INTO surveyratings
	VALUES ('$_Orgid','$_RatingId','$_distroProcess','$_distroTime','$_qualityFood','$_communication');";
	$rs = ADOdb_query($db,$query);
	
	//Survey Questions
	$query="INSERT INTO surveyquestions
	VALUES ('$_Orgid','$_SurveyQuestionId','$_ratingExpla','$_orgDifference','$_commDifference','$_betterServe');";
	$rs = ADOdb_query($db,$query);
	
   if ($rs) {
      $message="You have been added ".$_orgName.", Thanks,\n Midwest Food Bank";
   } else
      $message="Your submission has not been added due to an error in recording. Please try again or contact the MFB office.";
}
ADOdb_close($db);
} else {$message="This organization has not been added. Please enter data in all required fields.";}


$objView->assign('OrgFound',$message);
include 'std_links.inc.php';

?>
