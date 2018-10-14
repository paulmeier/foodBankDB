<br /><a href="?searchOrganizations">Search Organizations</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="?orgsAZ&order=Name">Organizations A-Z</a><br /><br />

<form name="orgForm" action="" method="POST" autocomplete="off">
<FIELDSET><LEGEND>Organization Form</LEGEND>
<br />
<br />
  <div class="style3" id="Bck">{$OrgFound}</div>
<FIELDSET><LEGEND>General Information</LEGEND>
<table><br />
{section name=idx loop=$orgData}
<tr><td>Organization Name:</td><td><input type="text" name="orgName" size="40" maxlength="50" value="{$orgData[idx].NAME}" /></td></tr>
<tr><td>Organization type:</td><td><input type="text" name="orgType" size="40" maxlength="50" value="{$orgData[idx].TYPE}"/></td></tr>
<tr><td>Distance Traveled to the Midwest Food Bank (miles):
</td><td><input type="text" name="distance" size="5" maxsize="5" value="{$orgData[idx].DISTANCE}"/></td></tr>
<tr><td><br />Organizations mission statement:</td></tr>
<tr><td><FIELDSET>{$orgData[idx].MISSIONSTATEMENT}</FIELDSET><br /></td></tr>
<tr><td>Specific population:</td></tr>
<tr><td><input type="text" name="specificPop" size="1" maxlength="1" value="{$orgData[idx].SPECIFICPOP}"/></td></tr>
<tr><td><br />Description of population:</td></tr>
<tr><td><FIELDSET>{$orgData[idx].POPDESC}</FIELDSET><br /></td></tr>
<tr><td>Primary sponsor/support for organization:</td><td><input type="text" name="sponsor" id="sponsor" value="{$orgData[idx].SPONSOR}"/></td></tr>
<tr><td>Other sponsor name:</td><td><input type="text" name="otherSponsorName" id="otherSponsorName" value="{$orgData[idx].OTHERSPONSORNAME}"/></td></tr>
<tr><td>Amount of food pickup:</td><td><INPUT type="text" name="pickupAmt" id="pickupAmt" value="{$orgData[idx].PICKUPAMT}"></td></tr>
<tr><td>Seasonal Description:</td><td><INPUT type="text" name="seasonalDesc" id="seasonalDesc" value="{$orgData[idx].SEASONALDESC}"></td></tr>
{/section}
</table>
</FIELDSET>

<br />
<FIELDSET><LEGEND>Location Information</LEGEND>
<table><br />
{section name=idx loop=$orgData}
<tr><td>Street:</td><td><input type="text" name="Street" size="34" maxlength="34" value="{$orgData[idx].STREET}"/></td></tr>
<tr><td>City:</td><td><input type="text" name="City" size="34" maxlength="34" value="{$orgData[idx].CITY}"/></td></tr>
<tr><td>State:</td><td><input type="text" name="State" size="34" maxlength="34" value="{$orgData[idx].STATE}"/></td></tr>
<tr><td>Zip:</td><td><input type="text" name="Zip" size="34" maxlength="34" value="{$orgData[idx].ZIP}"/></td></tr>
<tr><td>Phone:</td><td><input type="text" name="Phone" size="34" maxlength="34" value="{$orgData[idx].PHONE}"/></td></tr>
{/section}
</table>
</FIELDSET>
<br />

<FIELDSET><LEGEND>Contacts</LEGEND>
<table width="400"><br />
<tr><td>Name</td><td>Type</td><td>Email</td><td>Phone</td></tr>
{section name=idx loop=$contactsData}
<tr><td></td></tr>
<tr>
<td width="170"><a href="?modifyPerson&id={$contactsData[idx].PersonId}">{$contactsData[idx].FirstName} {$contactsData[idx].LastName}</a></td>
<td width="171">{$contactsData[idx].Type}</td>
<td width="169">{$contactsData[idx].Email}</td>
<td width="175">{$contactsData[idx].Phone}</td>
</tr>
{/section}
</table>
</FIELDSET>

<FIELDSET><LEGEND>Statistical Information</LEGEND>
<table><br />
{section name=idx loop=$detailData}
<tr><td>Families served:</td><td><input name="familiesServed" size="5" maxlength="5" value="{$detailData[idx].NUMFAMSERVED}"/></td></tr>
<tr><td>Single Parent Percent:</td><td><input name="singleParent" size="3" maxlength="3" value="{$detailData[idx].SINGLEPARENTPERCENT}"/>%</td></tr>
<tr><td>Individuals Served:</td><td><input name="individServed" size="5" maxlength="5" value="{$detailData[idx].NUMINDIVSERVED}"/></td></tr>
<tr><td>Average Household Size:</td><td><input name="avgHouseSize" size="2" maxlength="2" value="{$detailData[idx].AVGHOUSESIZE}"/></td></tr>
<tr><td>Homeless Percent:</td><td><input name="homelessPercent" size="3" maxlength="3" value="{$detailData[idx].HOMELESSPERCENT}"/>%</td></tr>
<tr><td>Food Distribution Income Dependent:</td><td><input name="incDep" size="1" maxlength="1" value="{$detailData[idx].FOODDISTINCOMEDEP}"/></td></tr>
<tr><td>Clients pay for food they recieve:</td><td><input name="payForFood" size="1" maxlength="1" value="{$detailData[idx].CLIENTSPAYFORFOOD}"/></td></tr>
{/section}
</table>
</FIELDSET>
<br />

<FIELDSET><LEGEND>Individuals Served</LEGEND>
<table><br />
{section name=idx loop=$indivAgeData}
</td><td>Children up to 18 years of age:</td><td><input name="childPercent" size="3" maxlength="3" value="{$indivAgeData[idx].CHILDPERCENT}"/>%</td></tr>
</td><td>Adults 19-59:</td><td><input name="adultPercent" size="3" maxlength="3" value="{$indivAgeData[idx].ADULTPERCENT}"/>%</td></tr>
</td><td>Elders 60+:</td><td><input name="eldersPercent" size="3" maxlength="3" value="{$indivAgeData[idx].ELDERSPERCENT}"/>%</td></tr>
{/section}
</table>
</FIELDSET>
<br />

<FIELDSET><LEGEND>Food Sources</LEGEND>
<table><br />
{section name=idx loop=$foodSourcesData}
</td><td>Midwest Food Bank:</td><td><input type="text" name="mfb" size="3" maxlength="3" value="{$foodSourcesData[idx].MFB}"/>%</td></tr>
</td><td>Individual food donations:</td><td><input type="text" name="indivDonations" size="3" maxlength="3" value="{$foodSourcesData[idx].INDIVDONATIONS}"/>%</td></tr>
</td><td>Government:</td><td><input type="text" name="gov" size="3" maxlength="3" value="{$foodSourcesData[idx].GOV}"/>%</td></tr>
</td><td>Community service organizations:</td><td><input type="text" name="commServOrg" size="3" maxlength="3" value="{$foodSourcesData[idx].COMMSERVORG}"/>%</td></tr>
</td><td>Financial donations:</td><td><input type="text" name="financialDonations" size="3" maxlength="3" value="{$foodSourcesData[idx].FINANCIALDONATIONS}"/>%</td></tr>
</td><td>Churches:</td><td><input type="text" name="churches" size="3" maxlength="3" value="{$foodSourcesData[idx].CHURCHES}"/>%</td></tr>
</td><td>Other source:</td><td><input type="text" name="otherSource" maxlength="25" value="{$foodSourcesData[idx].OTHERSOURCE}"/></td></tr>
</td><td>Other source percent:</td><td><input type="text" name="otherSourcePerc" size="3" maxlength="3" value="{$foodSourcesData[idx].OTHERSOURCEPERC}"/>%</td></tr>
{/section}
</table>
</FIELDSET>
<br />

<FIELDSET><LEGEND>Organization Population</LEGEND>
<table><br />
{section name=idx loop=$clientPopData}
</td><td>American Indian:</td><td><input type="text" name="amIndian" size="3" maxlength="3" value="{$clientPopData[idx].AMINDIAN}"/>%</td></tr>
</td><td>Caucasian:</td><td><input type="text" name="caucasian" size="3" maxlength="3" value="{$clientPopData[idx].CAUCASIAN}"/>%</td></tr>
</td><td>Asian:</td><td><input type="text" name="asian" size="3" maxlength="3" value="{$clientPopData[idx].ASIAN}"/>%</td></tr>
</td><td>Hispanic:</td><td><input type="text" name="hispanic" size="3" maxlength="3" value="{$clientPopData[idx].HISPANIC}"/>%</td></tr>
</td><td>African American:</td><td><input type="text" name="afAmerican" size="3" maxlength="3" value="{$clientPopData[idx].AFAMERICAN}"/>%</td></tr>
</td><td>Middle Eastern:</td><td><input type="text" name="middleEastern" size="3" maxlength="3" value="{$clientPopData[idx].MIDDLEEASTERN}"/>%</td></tr>
</td><td>Other:</td><td><input type="text" name="ethOther" maxlength="25" value="{$clientPopData[idx].ETHOTHER}"/></td></tr>
</td><td>Other percent:</td><td><input type="text" name="ethPercent" size="3" maxlength="3" value="{$clientPopData[idx].ETHPERCENT}"/>%</td></tr>
{/section}
</table>
</FIELDSET>
<br />

<FIELDSET><LEGEND>Survey</LEGEND>
<table><br />
{section name=idx loop=$ratingData}
</td><td>Distribution Process:</td><td><input type="text" name="distroProcess" size="1" maxlength="1" value="{$ratingData[idx].DISTROPROCESS}"/></td></tr>
</td><td>Timeliness of Distribution:</td><td><input type="text" name="distroTime" size="1" maxlength="1" value="{$ratingData[idx].DISTROTIME}"/></td></tr>
</td><td>Quality of Food:</td><td><input type="text" name="qualityFood" size="1" maxlength="1" value="{$ratingData[idx].QUALITYFOOD}"/></td></tr>
</td><td>Communicating with Midwest Food Bank:</td><td><input type="text" name="communication" size="1" maxlength="1" value="{$ratingData[idx].COMMUNICATION}"/></td></tr>
{/section}
<tr><td></td></tr>
{section name=idx loop=$surveyData}
<tr><td><br />If any of the above ratings were lower than a "4", please explain why:</td></tr>
<tr><td><FIELDSET>{$surveyData[idx].RATINGEXPLA}</FIELDSET><br /></td></tr>
<tr><td><br />How has Midwest food Bank made a difference in your organization?</td></tr>
<tr><td><FIELDSET>{$surveyData[idx].ORGDIFFERENCE}</FIELDSET><br /></td></tr>
<tr><td><br />How has Midwest Food Bank made a difference in your community?</td></tr>
<tr><td><FIELDSET>{$surveyData[idx].COMMDIFFERENCE}</FIELDSET><br /></td></tr>
<tr><td><br />How could Midwest Food Bank better serve your organization and community?</td></tr>
<tr><td><FIELDSET>{$surveyData[idx].BETTERSERVE}</FIELDSET><br /></td></tr>
</table>
{/section}
</FIELDSET>
<br />
<div align="center"><b><br /><FONT COLOR="RED">WARNING</FONT><br /> IF YOU SUBMIT OR DELETE, THE CHANGES ARE PERMANENT. THERE IS NO UNDO.</b><br /><br />
<INPUT type="submit" name="submit" value="submit" onclick="return checkOK();" />&nbsp;&nbsp;&nbsp;
<INPUT type="submit" name="delete" value="delete" onclick="return checkOK();" /></div>
</form>