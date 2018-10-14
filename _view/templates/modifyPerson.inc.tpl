<br /><a href="?searchPeople">Search for People</a><br /><br />

<form name="personForm" action="" method="POST" autocomplete="off">
<FIELDSET><LEGEND>Person Form</LEGEND>
<br />
<br />
  <div class="style3" id="Bck">{$PersonFound}</div>
<FIELDSET><LEGEND>General</LEGEND>
<table><br />
{section name=idx loop=$personData}
<tr><td>First Name:</td><td><INPUT name="FirstName" value="{$personData[idx].FIRSTNAME}" /></td></tr>
<tr><td>Last Name:</td><td><INPUT name="LastName" value="{$personData[idx].LASTNAME}"/></td></tr>
<tr><td>Email:</td><td><INPUT type="text" name="Email" value="{$personData[idx].EMAIL}"/></td></tr>
<tr><td>Gender:</td><td><INPUT type="text" name="Gender" value="{$personData[idx].GENDER}"/></td></tr>
<tr><td>Street:</td><td><INPUT type="text" name="Street" value="{$personData[idx].STREET}"/></td></tr>
<tr><td>City:</td><td><INPUT type="text" name="City" value="{$personData[idx].CITY}"/></td></tr>
<tr><td>State:</td><td><INPUT type="text" name="State" value="{$personData[idx].STATE}"/></td></tr>
<tr><td>Zip:</td><td><INPUT type="text" name="Zip" value="{$personData[idx].ZIP}"/></td></tr>
<tr><td>Phone:</td><td><INPUT type="text" name="Phone" value="{$personData[idx].PHONE}"/></td></tr>
<tr><td>Submit Date:</td><td><INPUT type="text" name="submitDate" value="{$personData[idx].SUBMITDATE}"/></td></tr>
<tr><td>They are a:</td><td>
<INPUT type="text" name="Type" value="{$personData[idx].TYPE}"></td><td>
			<fieldset><legend>Types are:</legend>
				OrgContact<br />
 				Volunteer<br />
				Donator<br />
				Employee<br />
				Receives Aid<br />
			</fieldset>
</td></tr>
<tr><td>Current Affiliation:</td><td><input type="text" name="a" id="a" value="{$currOrgName}"/></td></tr>
{/section}
<tr><td>NEW Organization Affiliation:</td><td>							
<select name="Org" id="Org">
	<option value="{$currOrgId}">{$currOrgName}</option>
	{section name=idx loop=$allorgData}
 	<option value="{$allorgData[idx].ORGID}" >{$allorgData[idx].NAME}</option>
	{/section}
</select>
</td></tr>
</table>
</FIELDSET>

<div align="center"><b><br /><FONT COLOR="RED">WARNING</FONT><br /> IF YOU SUBMIT OR DELETE, THE CHANGES ARE PERMANENT. THERE IS NO UNDO.</b><br /><br />
<INPUT type="submit" name="submit" value="submit" onclick="return checkOK();" />&nbsp;&nbsp;&nbsp;
<INPUT type="submit" name="delete" value="delete" onclick="return checkOK();" /></div>
</form>