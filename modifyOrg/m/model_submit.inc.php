<?php
//   model -  - Submit for an organization

//   This model uses an associative array in a Smarty object to pass data to the view


                                                            
// Retrieve form input

$_Orgid = $_GET["id"];
//General Information
$_orgName 	    	= 	$_POST['orgName'];
$_distance 	    	= 	$_POST['distance'];
$_orgType			=   $_POST['orgType'];
$_OtherOrgType		=   $_POST['OtherOrgType'];
$_specificPop		= 	$_POST['specificPop'];
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
$_cFirstName 			=   $_POST['CFirstName'];
$_cLastName 			=   $_POST['CLastName'];
$_cEmail 				=   $_POST['CEmail'];
$_cPhone 				=   $_POST['CPhone'];
$_cGender 				=   $_POST['CGender'];
$_cType 				=   $_POST['CType'];
$_cStreet 				= 	$_POST['Street'];
$_cCity					= 	$_POST['City'];
$_cState 				= 	$_POST['State'];
$_cZip 					= 	$_POST['Zip'];
$_cPhone		 		=   $_POST['Phone'];


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
   $db = ADOdb_connect($cfg);                                      
   $query="SELECT * FROM organizations WHERE OrgId = '$_Orgid';";
   $rs = ADOdb_query($db,$query);
   
   $orgData[] = array("NAME"=>$_orgName, "ORGID"=>$_Orgid);
                               
   $OrgId = $rs->fields['OrgId'];
   $submitDate = $rs->fields['submitDate'];
   $ContactsId = $rs->fields['ContactsId'];
   $OrgDetailId = $rs->fields['OrgDetailId'];
   $IndivAgeId = $rs->fields['IndivAgeId'];
   $FoodSourcesId = $rs->fields['FoodSourcesId'];
   $RatingId = $rs->fields['RatingId'];
   $OrgClientPopId = $rs->fields['OrgClientPopId'];
   $SurveyQuestionId = $rs->fields['SurveyQuestionId'];
   $_missionStatement = $rs->fields['MissionStatement'];
   $_popDesc = $rs->fields['PopDesc'];

   
   //Submit happens in a number of different tables
    $query="UPDATE organizations SET OrgId = '$OrgId', Name = '$_orgName', Distance = '$_distance', MissionStatement = '$_missionStatement', Type = '$_orgType', 
   SpecificPop = '$_specificPop', PopDesc = '$_popDesc', Sponsor = '$_sponsor', OtherSponsorName ='$_otherSponsorName', PickupAmt = '$_pickupAmt', OtherPickupDesc = 
   '$_otherPickupDesc', SesonalDesc = '$_sesonalDesc',submitDate = '$submitDate', Street = '$_street', City = '$_city',State = '$_state', Zip = '$_zip', Phone = '$_phone',OrgDetailId ='$OrgDetailId', IndivAgeId ='$IndivAgeId',FoodSourcesId = '$FoodSourcesId',
   RatingId ='$RatingId', OrgClientPopId ='$OrgClientPopId', SurveyQuestionId ='$SurveyQuestionId' WHERE OrgId = '$_Orgid';";
    $rsa = ADOdb_query($db,$query);

	
	//Individual ages Id
	$query="UPDATE indivage SET
	IndivAgeId = '$IndivAgeId', OrgDetailId ='$OrgDetailId', childPercent = '$_childPercent', adultPercent = '$_adultPercent', eldersPercent ='$_eldersPercent' WHERE OrgDetailId = '$OrgDetailId';";
	$rsb = ADOdb_query($db,$query);

	
	//Organization detail
	$query="UPDATE orgdetail SET
	NumFamServed = '$_familiesServed', SingleParentPercent ='$_singleParent', NumIndivServed = '$_individServed', AvgHouseSize ='$_avgHouseSize',
	IndivAgeId = '$IndivAgeId',HomelessPercent ='$_homelessPercent',FoodDistIncomeDep = '$_incDep', ClientsPayForFood = '$_payForFood', OrgDetailId = '$OrgDetailId', OrgId='$OrgId' WHERE OrgId = '$OrgId';";
	$rsc = ADOdb_query($db,$query);

		
	//Insert into organizations client poplulation				
	$query="UPDATE orgclientpop SET Orgid = '$OrgId', OrgClientPopId ='$OrgClientPopId', amIndian = '$_amIndian',caucasian = '$_caucasian',
	 asian = '$_asian', hispanic = '$_hispanic',afAmerican = '$_afAmerican', middleEastern = '$_middleEastern', ethOther = '$_ethOther',
	  ethPercent = '$_ethPercent' WHERE Orgid = '$OrgId';";
	$rsd = ADOdb_query($db,$query);

	
	//Org Food Sources
	$query="UPDATE orgfoodsources SET Orgid = '$OrgId', FoodSourcesId = '$FoodSourcesId', mfb = '$_mfb', indivDonations = '$_indivDonations', gov = '$_gov',
	commServOrg = '$_commServOrg', financialDonations = '$_financialDonations', churches = '$_churches',
	otherSource = '$_otherSource', otherSourcePerc = '$_otherSourcePerc' WHERE Orgid = '$OrgId';";
	$rsz = ADOdb_query($db,$query);

	
	//Survey Ratings
	$query="UPDATE surveyratings SET OrgId = '$OrgId', RatingId = '$RatingId', distroProcess = '$_distroProcess', distroTime = '$_distroTime', qualityFood = '$_qualityFood', communication = '$_communication' WHERE OrgId = '$OrgId';";
	$rsf = ADOdb_query($db,$query);

	
	//Survey Questions
	$query="UPDATE surveyquestions SET OrgId = '$OrgId', surveyQuestionsId = '$SurveyQuestionId', ratingExpla = '$_ratingExpla', orgDifference = '$_orgDifference', commDifference = '$_commDifference', betterServe = '$_betterServe' WHERE OrgId = '$OrgId';";
	$rsg = ADOdb_query($db,$query);
   
   if ($rs) {
      $message="".$_orgName.", Has been updated";
   } else
      $message="Modification was not successful.";

ADOdb_close($db);


$objView->assign('OrgFound',$message);
$objView->assign('orgData',$orgData);
include 'std_links.inc.php';

?>
