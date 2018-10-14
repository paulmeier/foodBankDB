<?php
//   model - 
//   This model uses an associative array in a Smarty object to pass data to the view

$id = $_GET["id"];

// Access the database
$db = ADOdb_connect($cfg);          
$query="select * from organizations where OrgId = '$id';"; 
$rs = ADOdb_query($db,$query);                                	 		

//RETRIVE ORGDATA
   $ORGID=$rs->fields['OrgId'];
   $NAME=$rs->fields['Name'];
   $DISTANCE=$rs->fields['Distance'];
   $SPONSOR=$rs->fields['Sponsor'];
   $MISSIONSTATEMENT=$rs->fields['MissionStatement'];
   $TYPE=$rs->fields['Type'];
   $SPECIFICPOP=$rs->fields['SpecificPop'];
   $POPDESC=$rs->fields['PopDesc'];
   $OTHERSPONSORNAME=$rs->fields['OtherSponsorName'];
   $PICKUPAMT=$rs->fields['PickupAmt'];
   $OTHERPICKUPDESC=$rs->fields['OtherPickupDesc'];
   $SEASONALDESC=$rs->fields['SesonalDesc'];
   $SUBMITDATE=$rs->fields['submitDate'];
   $STREET=$rs->fields['Street'];
   $CITY=$rs->fields['City'];
   $STATE=$rs->fields['State'];
   $ZIP=$rs->fields['Zip'];
   $PHONE=$rs->fields['Phone'];
   $ORGDETAILID=$rs->fields['OrgDetailId'];
   $CONTACTSID=$rs->fields['ContactsId'];
   $INDIVAGEID=$rs->fields['IndivAgeId'];
   $FOODSOURCESID=$rs->fields['FoodSourcesId'];
   $RATINGID=$rs->fields['RatingId'];
   $ORGCLIENTPOPID=$rs->fields['OrgClientPopId'];
   $SURVEYQUESTIONID=$rs->fields['SurveyQuestionId'];

   $orgData[] = array( "ORGID"=>$ORGID, "NAME"=>$NAME, "DISTANCE"=>$DISTANCE, "SPONSOR"=>$SPONSOR
   ,"MISSIONSTATEMENT"=>$MISSIONSTATEMENT,"TYPE"=>$TYPE,"POPDESC"=>$POPDESC,"SPECIFICPOP"=>$SPECIFICPOP
   ,"OTHERSPONSORNAME"=>$OTHERSPONSORNAME,"PICKUPAMT"=>$PICKUPAMT,"OTHERPICKUPDESC"=>$OTHERPICKUPDESC
   ,"SUBMITDATE"=>$SUBMITDATE,"STREET"=>$STREET,"CITY"=>$CITY
   ,"STATE"=>$STATE,"ZIP"=>$ZIP,"PHONE"=>$PHONE,"ORGDETAILID"=>$ORGDETAILID,"CONTACTSID"=>$CONTACTSID,
    "INDIVAGEID"=>$INDIVAGEID,"FOODSOURCESID"=>$FOODSOURCESID,"RATINGID"=>$RATINGID,
    "ORGCLIENTPOPID"=>$ORGCLIENTPOPID,"SURVEYQUESTIONID"=>$SURVEYQUESTIONID,"SEASONALDESC"=>$SEASONALDESC);

//RETRIVE ORGDETAIL
$query="select * from orgdetail where OrgDetailId = '$ORGDETAILID';";
$rs = ADOdb_query($db,$query);

   $NUMFAMSERVED=$rs->fields['NumFamServed'];
   $SINGLEPARENTPERCENT=$rs->fields['SingleParentPercent'];
   $NUMINDIVSERVED=$rs->fields['NumIndivServed'];
   $AVGHOUSESIZE=$rs->fields['AvgHouseSize'];
   $INDIVAGEID=$rs->fields['IndivAgeId'];
   $HOMELESSPERCENT=$rs->fields['HomelessPercent'];
   $FOODDISTINCOMEDEP=$rs->fields['FoodDistIncomeDep'];
   $CLIENTSPAYFORFOOD=$rs->fields['ClientsPayForFood'];

$detailData[] = array( "NUMFAMSERVED"=>$NUMFAMSERVED, "SINGLEPARENTPERCENT"=>$SINGLEPARENTPERCENT, "NUMINDIVSERVED"=>$NUMINDIVSERVED, "AVGHOUSESIZE"=>$AVGHOUSESIZE
   ,"INDIVAGEID"=>$INDIVAGEID,"HOMELESSPERCENT"=>$HOMELESSPERCENT,"FOODDISTINCOMEDEP"=>$FOODDISTINCOMEDEP
   ,"CLIENTSPAYFORFOOD"=>$CLIENTSPAYFORFOOD);


//Retrive contacts
$query="select * from people p join contacts c on c.PersonId = p.PersonId where OrgId = '$id';";
$rs = ADOdb_query($db,$query);
   
while(!$rs->EOF){
$contactsData[] = array("PersonId"=>$rs->fields['PersonId'],"FirstName"=>$rs->fields['FirstName'] ,"LastName"=>$rs->fields['LastName'],"Type"=>$rs->fields['Type'],"Email"=>$rs->fields['Email'],"Phone"=>$rs->fields['Phone']);
$rs->MoveNext();
}


//Retrive indivage info
$query="select * from indivage where IndivAgeId = '$INDIVAGEID';";
$rs = ADOdb_query($db,$query);

$CHILDPERCENT=$rs->fields['childPercent'];
$ADULTPERCENT=$rs->fields['adultPercent'];
$ELDERSPERCENT=$rs->fields['eldersPercent'];

$indivAgeData[] = array( "CHILDPERCENT"=>$CHILDPERCENT, "ADULTPERCENT"=>$ADULTPERCENT, 
					   "ELDERSPERCENT"=>$ELDERSPERCENT);

//Retrive food sources info
$query="select * from orgfoodsources where FoodSourcesId = '$FOODSOURCESID';";
$rs = ADOdb_query($db,$query);

$MFB=$rs->fields['mfb'];
$INDIVDONATIONS=$rs->fields['indivDonations'];
$GOV=$rs->fields['gov'];
$COMMSERVORG=$rs->fields['commServOrg'];
$FINANCIALDONATIONS=$rs->fields['financialDonations'];
$CHURCHES=$rs->fields['churches'];
$OTHERSOURCE=$rs->fields['otherSource'];
$OTHERSOURCEPERC=$rs->fields['otherSourcePerc'];

$foodSourcesData[] = array( "MFB"=>$MFB, "INDIVDONATIONS"=>$INDIVDONATIONS, 
					   "ELDERSPERCENT"=>$ELDERSPERCENT, "COMMSERVORG"=>$COMMSERVORG
					   , "GOV"=>$GOV, "FINANCIALDONATIONS"=>$FINANCIALDONATIONS
					   , "CHURCHES"=>$CHURCHES, "OTHERSOURCE"=>$OTHERSOURCE, "OTHERSOURCEPERC"=>$OTHERSOURCEPERC);

//Retrive Rating info
$query="select * from surveyratings where RatingId = '$RATINGID';";
$rs = ADOdb_query($db,$query);

$DISTROPROCESS=$rs->fields['distroProcess'];
$DISTROTIME=$rs->fields['distroTime'];
$QUALITYFOOD=$rs->fields['qualityFood'];
$COMMUNICATION=$rs->fields['communication'];

$ratingData[] = array( "DISTROPROCESS"=>$DISTROPROCESS, "DISTROTIME"=>$DISTROTIME, 
					   "QUALITYFOOD"=>$QUALITYFOOD, "COMMUNICATION"=>$COMMUNICATION);


//Retrive Survey info
$query="select * from surveyquestions where surveyQuestionsId = '$SURVEYQUESTIONID';";
$rs = ADOdb_query($db,$query);

$RATINGEXPLA=$rs->fields['ratingExpla'];
$ORGDIFFERENCE=$rs->fields['orgDifference'];
$COMMDIFFERENCE=$rs->fields['commDifference'];
$BETTERSERVE=$rs->fields['betterServe'];

$surveyData[] = array( "RATINGEXPLA"=>$RATINGEXPLA, "ORGDIFFERENCE"=>$ORGDIFFERENCE, 
					   "COMMDIFFERENCE"=>$COMMDIFFERENCE, "BETTERSERVE"=>$BETTERSERVE);

//Retrive org client population
$query="select * from orgclientpop where OrgClientPopId = '$ORGCLIENTPOPID';";
$rs = ADOdb_query($db,$query);

$AMINDIAN=$rs->fields['amIndian'];
$CAUCASIAN=$rs->fields['caucasian'];
$ASIAN=$rs->fields['asian'];
$HISPANIC=$rs->fields['hispanic'];
$AFAMERICAN=$rs->fields['afAmerican'];
$MIDDLEEASTERN=$rs->fields['middleEastern'];
$ETHOTHER=$rs->fields['ethOther'];
$ETHPERCENT=$rs->fields['ethPercent'];

$clientPopData[] = array( "AMINDIAN"=>$AMINDIAN, "CAUCASIAN"=>$CAUCASIAN, 
					   "ASIAN"=>$ASIAN, "HISPANIC"=>$HISPANIC,
					   "AFAMERICAN"=>$AFAMERICAN, "MIDDLEEASTERN"=>$MIDDLEEASTERN, 
					   "ETHOTHER"=>$ETHOTHER, "ETHPERCENT"=>$ETHPERCENT);

ADOdb_close($db);

// move Model values into Smarty View array
$objView->assign('orgData',$orgData);
$objView->assign('detailData',$detailData);
$objView->assign('contactsData',$contactsData);
$objView->assign('indivAgeData',$indivAgeData);
$objView->assign('foodSourcesData',$foodSourcesData);
$objView->assign('ratingData',$ratingData);
$objView->assign('surveyData',$surveyData);
$objView->assign('clientPopData',$clientPopData);




include 'std_links.inc.php';

?>
