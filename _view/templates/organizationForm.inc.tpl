<br /><br />
<FIELDSET><LEGEND>Organization Form</LEGEND>
<br />
<br />
<table align="center">
<tr><td></td>
<td>
<FORM name="Organization Form" method="post" action="">
  <div class="style3" id="Bck">{$OrgFound}
  </div>
<FIELDSET><LEGEND>General Information</LEGEND>
<form name="orgForm" action="validateFormOnSubmit(this.form)" method="POST">
<table><br />
<tr><td>Organization Name:</td><td><input type="text" name="orgName" size="40" maxlength="50"/></td></tr>
</table>
<br><br>
Organization type:<br><br />
<INPUT type="radio" name="orgType" value="Soup Kitchen" id="orgType">Soup Kitchen <br>
<INPUT type="radio" name="orgType" value="Summer Camp" id="orgType">Summer Camp <br>
<INPUT type="radio" name="orgType" value="Pantry" id="orgType">Pantry <br>
<INPUT type="radio" name="orgType" value="School Program" id="orgType">School Program <br>
<INPUT type="radio" name="orgType" value="Nursing Home" id="orgType">Nursing Home <br>
<INPUT type="radio" name="orgType" value="Disaster Response" id="orgType">Disaster Response <br>
<INPUT type="radio" name="orgType" value="Scouts/4-H/Boy-Girls Club" id="orgType">Scouts/4-H/Boy-Girls Club <br>
<INPUT type="radio" name="orgType" value="Foster Home" id="orgType">Foster Home <br>
<INPUT type="radio" name="orgType" value="Homeless Shelter" id="orgType">Homeless Shelter <br>
<INPUT type="radio" name="orgType" value="other" id="orgType">Other:&nbsp;<INPUT type="text" name="OtherOrgType" value="" size="30" maxlength="30">
<br><br>
 Distance Traveling to the Midwest Food Bank (miles): <input type="text" name="distance" size="5" maxsize="5"/><br><br><br>
 What is your organizations mission statement?<br>
 <textarea name="missionStatement" cols="60" rows="6" maxlength="500"></textarea>
 <br>
 <br>
 Does your program target a specific population (such as homeless, teen mothers, children, etc):
 <br />
 <input type="radio" name="specificPop" value="Y" id="specificPop"/>Yes
 &nbsp; <input type="radio" name="specificPop" value="N" id="specificPop"/>No
 <br><br>
 If yes, please provide a description of your population<br>
 <textarea name="popDesc" cols="60" rows="6" maxlength="500"></textarea>
 <br><br>
 Who is the primary sponsor/support for your organization?<br />
 <input type="radio" value="Church" name="sponsor" id="sponsor"/>Church<br />
 <input type="radio" value="Service Organization" name="sponsor" id="sponsor"/>Service Organization<br />
 <input type="radio" value="School" name="sponsor" id="sponsor"/>School <br />
 <input type="radio" value="County" name="sponsor" id="sponsor"/>County <br />
 <input type="radio" value="Other" name="sponsor" id="sponsor"/>Other: &nbsp;&nbsp;<input type="text" name="otherSponsorName" size="30" maxlength="30"/><br />
 <br />
 How often do you intend to pick up food from the Midwest Food Bank?<br />
 <INPUT type="radio" name="pickupAmt" value="Monthly" id="pickupAmt">Monthly <br>
 <INPUT type="radio" name="pickupAmt" value="Seasonal" id="pickupAmt">Seasonal (please specify):&nbsp;<input type="text" name="sesonalDesc" size="30" maxlength="30"/>	 <br>
 <INPUT type="radio" name="pickupAmt" value="SchoolYear" id="pickupAmt">School year only <br>
 <INPUT type="radio" name="pickupAmt" value="Other" id="pickupAmt">Other (please specify):&nbsp;<input type="text" name="otherPickupDesc" size="30" maxlength="30"/> 
 <br>
</FIELDSET>
<br />
<br />
<FIELDSET><LEGEND>Location Information</LEGEND>
<table>
  <tbody>
    <tr>
      <td></td></tr>
	 <TR></TR>
     <tr>
	  <td></td><td>Street</td>
      <td><input type="text" name="Street" size="34" maxlength="34"/></td>
    </tr>
    <tr>
      <td></td>
      <td>City</td>
      <td><input type="text" name="City" size="25" maxlength="25"/></td>
    </tr>
    <tr>
      <td></td>
      <td>State</td>
      <td><select id="State" name="State">
        <option value="al">AL</option>
        <option value="ak">AK</option>
        <option value="az">AZ</option>
        <option value="ar">AR</option>
        <option value="ca">CA</option>
        <option value="co">CO</option>
        <option value="ct">CT</option>
        <option value="de">DE</option>
        <option value="dc">DC</option>
        <option value="fl">FL</option>
        <option value="ga">GA</option>
        <option value="hi">HI</option>
        <option value="id">ID</option>
        <option selected value="il">IL</option>
        <option value="in">IN</option>
        <option value="ia">IA</option>
        <option value="ks">KS</option>
        <option value="ky">KY</option>
        <option value="la">LA</option>
        <option value="me">ME</option>
        <option value="md">MD</option>
        <option value="ma">MA</option>
        <option value="mi">MI</option>
        <option value="mn">MN</option>
        <option value="ms">MS</option>
        <option value="mo">MO</option>
        <option value="mt">MT</option>
        <option value="ne">NE</option>
        <option value="nv">NV</option>
        <option value="nh">NH</option>
        <option value="nj">NJ</option>
        <option value="nm">NM</option>
        <option value="ny">NY</option>
        <option value="nc">NC</option>
        <option value="nd">ND</option>
        <option value="oh">OH</option>
        <option value="ok">OK</option>
        <option value="or">OR</option>
        <option value="pa">PA</option>
        <option value="ri">RI</option>
        <option value="sc">SC</option>
        <option value="sd">SD</option>
        <option value="tn">TN</option>
        <option value="tx">TX</option>
        <option value="ut">UT</option>
        <option value="vt">VT</option>
        <option value="va">VA</option>
        <option value="wa">WA</option>
        <option value="wv">WV</option>
        <option value="wi">WI</option>
        <option value="wy">WY</option>
      </select></td>
    </tr>
    <tr>
      <td></td>
      <td>Zip (5-8 Digits)</td>
      <td><input size="8" name="Zip" maxlength="9"/></td>
    </tr>
    <tr>
      <td></td>
      <td>Telephone</td>
      <td><input name="Phone" size="10" maxlength="10"/></td>
      <td>(include area code &amp; omit dashes)</td>
    </tr>
    <tr>
      <td></td>
    </tr>
    <tr>
</tr>
</tbody>
</table>
</FIELDSET>
<br />

<FIELDSET><LEGEND>Contact Information</LEGEND>
<br />
Please provide a contact for your organization.
<TABLE>
  <TBODY>
  	<TR>
    	<TD width="150">First Name</TD>
		<TD><INPUT name="cFirstName" /></TD>
	</TR>
  	<TR>
    	<TD width="150">Last Name</TD>
		<TD><INPUT name="cLastName" /></TD>
	</TR>
  	<TR>
    	<TD width="150">E-mail Address</TD>
		<TD><INPUT type="text" name="cEmail" /></TD>
	</TR>
	  <TD width="150">Telephone</td>
      <td><input name="cPhone" size="10" maxlength="10"/>(include area code &amp; omit dashes)</td>
  	<TR>
    	<TD width="150">Gender</TD>
		<TD>
			<INPUT type="radio" value="M" name="cGender" id="cGender"/>Male 
			<INPUT type="radio" value="F" name="cGender" id="cGender"/>Female</TD>
	</TR>
	</TBODY>
</TABLE>
<FIELDSET><LEGEND>

<br />

Contact Residency Information</LEGEND>
<table>
  <tbody>
    <tr>
      <td></td></tr>
	 <TR></TR>
     <tr>
	  <td></td><td>Address</td>
      <td><input name="cStreet" /></td>
    </tr>
    <tr>
      <td></td>
      <td>City</td>
      <td><input name="cCity" /></td>
    </tr>
    <tr>
      <td></td>
      <td>State</td>
      <td><select id="cState" name="cState">
        <option value="al">AL</option>
        <option value="ak">AK</option>
        <option value="az">AZ</option>
        <option value="ar">AR</option>
        <option value="ca">CA</option>
        <option value="co">CO</option>
        <option value="ct">CT</option>
        <option value="de">DE</option>
        <option value="dc">DC</option>
        <option value="fl">FL</option>
        <option value="ga">GA</option>
        <option value="hi">HI</option>
        <option value="id">ID</option>
        <option selected value="il">IL</option>
        <option value="in">IN</option>
        <option value="ia">IA</option>
        <option value="ks">KS</option>
        <option value="ky">KY</option>
        <option value="la">LA</option>
        <option value="me">ME</option>
        <option value="md">MD</option>
        <option value="ma">MA</option>
        <option value="mi">MI</option>
        <option value="mn">MN</option>
        <option value="ms">MS</option>
        <option value="mo">MO</option>
        <option value="mt">MT</option>
        <option value="ne">NE</option>
        <option value="nv">NV</option>
        <option value="nh">NH</option>
        <option value="nj">NJ</option>
        <option value="nm">NM</option>
        <option value="ny">NY</option>
        <option value="nc">NC</option>
        <option value="nd">ND</option>
        <option value="oh">OH</option>
        <option value="ok">OK</option>
        <option value="or">OR</option>
        <option value="pa">PA</option>
        <option value="ri">RI</option>
        <option value="sc">SC</option>
        <option value="sd">SD</option>
        <option value="tn">TN</option>
        <option value="tx">TX</option>
        <option value="ut">UT</option>
        <option value="vt">VT</option>
        <option value="va">VA</option>
        <option value="wa">WA</option>
        <option value="wv">WV</option>
        <option value="wi">WI</option>
        <option value="wy">WY</option>
      </select></td>
    </tr>
    <tr>
      <td></td>
      <td>Zip (5-8 Digits omit dashes)</td>
      <td><input size="8" name="cZip" maxlength="8"/></td>
    </tr>
    <tr>
      <td></td>
    </tr>
  </tbody>
</table>
</FIELDSET>
</FIELDSET>
<br />

<FIELDSET><LEGEND>Statistical Information</LEGEND>
<table>
  <tbody>
    <tr>
      <td></td></tr>
	 <TR></TR>
     <tr>
	  <td></td><td>How Many Families do you serve?</td>
      <td><input name="familiesServed" size="5" maxlength="5"/></td>
    </tr>
    <tr>
      <td></td>
      <td>What percent are single parent families?</td>
      <td><input name="singleParent" size="3" maxlength="3"/></td>
    </tr>
	<tr>
      <td></td>
      <td>How many individuals do you serve?</td>
      <td><input name="individServed" size="5" maxlength="5"/></td>
    </tr>
	 <tr>
      <td></td>
      <td>What is the average household size of your clients?</td>
      <td><input name="avgHouseSize" size="2" maxlength="2"/></td>
    </tr>
	<tr>
      <td></td>
      <td><br /><br />What percent of the individuals you serve are: (total should equal 100)</td>
	</tr>
      <tr><td></td><td>Children up to 18 years of age:</td><td><input name="childPercent" size="3" maxlength="3"/>%</td></tr>
	  <tr><td></td><td>Adults 19-59:</td><td><input name="adultPercent" size="3" maxlength="3"/>%</td></tr>
	  <tr><td></td><td>Elders 60+:</td><td><input name="eldersPercent" size="3" maxlength="3"/>%</td></tr>
	 <tr>
      <td></td>
      <td><br /><br />What percent (if any) are homeless?</td>
      <td><br /><br /><input name="homelessPercent" size="3" maxlength="3"/>%</td>
    </tr>
	<tr>
      <td></td>
      <td>Is food distribution dependent upon client's income?</td>
      <td>
 		<input type="radio" name="incDep" value="Y"/>Yes
		&nbsp; <input type="radio" name="incDep" value="N" />No
		</td>
    </tr>
	<tr>
      <td></td>
      <td>Do clients pay for food they recieve?</td>
      <td>
 		<input type="radio" name="payForFood" value="Y"/>Yes
		&nbsp; <input type="radio" name="payForFood" value="N"/>No
 	  </td>
    </tr>
</tbody>
</table>
</FIELDSET>
<br />

<FIELDSET><LEGEND>Organization Population</LEGEND>
<table>
  <tbody>
    <tr>
      <td></td></tr>
	 <TR></TR>
     <tr>
	  <td></td><td>Please estimate the ethnicity of your clients by percent of your total client population.
	  Please indicate a % of your resource allocation to: (total should equal 100)</td>
      <td></td>
    </tr>
	<TR><td></td><td></td></TR>
    <tr>
      <td></td>
      <td>American Indian</td>
      <td><input type="text" name="amIndian" size="3" maxlength="3"/>%</td>
    </tr>
	<tr>
      <td></td>
      <td>Caucasian</td>
      <td><input type="text" name="caucasian" size="3" maxlength="3"/>%</td>
    </tr>
		<tr>
      <td></td>
      <td>Asian</td>
      <td><input type="text" name="asian" size="3" maxlength="3"/>%</td>
    </tr>
		<tr>
      <td></td>
      <td>Mexican/Hispanic/Latino</td>
      <td><input type="text" name="hispanic" size="3" maxlength="3"/>%</td>
    </tr>
		<tr>
      <td></td>
      <td>African American</td>
      <td><input type="text" name="afAmerican" size="3" maxlength="3"/>%</td>
    </tr>
		<tr>
      <td></td>
      <td>Middle Eastern</td>
      <td><input type="text" name="middleEastern" size="3" maxlength="3"/>%</td>
    </tr>
		<tr>
      <td></td>
      <td>Other &nbsp;(Please indicate):&nbsp;<input type="text" name="ethOther" maxlength="25"/></td>
      <td><input type="text" name="ethPercent" size="3" maxlength="3"/>%</td>
    </tr>
</tbody>
</table>
</FIELDSET>
<br />

<FIELDSET><LEGEND>Food sources</LEGEND>
<table>
  <tbody>
    <tr>
      <td></td></tr>
	 <TR></TR>
     <tr>
	  <td></td><td>Please indicate what percent of your food resources come from the following sources.
	  <br />(Total should eqal 100)</td>
      <td></td>
    </tr>
	<TR><td></td><td></td></TR>
    <tr>
      <td></td>
      <td><b>Midwest Food Bank</b></td>
      <td><input type="text" name="mfb" size="3" maxlength="3"/>%</td>
    </tr>
	<tr>
      <td></td>
      <td>Individual Donations</td>
      <td><input type="text" name="indivDonations" size="3" maxlength="3"/>%</td>
    </tr>
		<tr>
      <td></td>
      <td>Governemnt</td>
      <td><input type="text" name="gov" size="3" maxlength="3"/>%</td>
    </tr>
		<tr>
      <td></td>
      <td>Community Service Organizations</td>
      <td><input type="text" name="commServOrg" size="3" maxlength="3"/>%</td>
    </tr>
		<tr>
      <td></td>
      <td>Perchases made with financial donations</td>
      <td><input type="text" name="financialDonations" size="3" maxlength="3"/>%</td>
    </tr>
		<tr>
      <td></td>
      <td>Churches</td>
      <td><input type="text" name="churches" size="3" maxlength="3"/>%</td>
    </tr>
		<tr>
      <td></td>
      <td>Other &nbsp;(Please indicate):&nbsp;<input type="text" name="otherSource" maxlength="25"/></td>
      <td><input type="text" name="otherSourcePerc" size="3" maxlength="3"/>%</td>
    </tr>
</tbody>
</table>
</FIELDSET>
<br />

<FIELDSET><LEGEND>Survey</LEGEND>
<table>
  <tbody>
    <tr>
      <td></td></tr>
	 <TR></TR>
     <tr>
	  <td></td><td>Please rate Midwest Food Bank in the following areas using the following scale:<br />
	  <b>5</b>-extreamly satisfied<br />
	  <b>4</b>-very satisfied<br />
	  <b>3</b>-satisfied<br />
	  <b>2</b>-not satisfied<br />
	  <b>1</b>-extreamly unsatisfied<br />
	  <b>0</b>-not sure<br /></td>
      <td></td>
    </tr>
	<TR><td></td><td></td></TR>
    <tr>
      <td></td>
      <td>Distribution Process:</td>
      <td><input type="text" name="distroProcess" size="1" maxlength="1"/></td>
    </tr>
	<tr>
      <td></td>
      <td>Timeliness of Distribution:</td>
      <td><input type="text" name="distroTime" size="1" maxlength="1"/></td>
    </tr>
		<tr>
      <td></td>
      <td>Quality of Food:</td>
      <td><input type="text" name="qualityFood" size="1" maxlength="1"/></td>
    </tr>
		<tr>
      <td></td>
      <td>Communicating with Midwest Food Bank:</td>
      <td><input type="text" name="communication" size="1" maxlength="1"/></td>
    </tr>
</tbody>
</table>
<br /><br />
If any of the above ratings were lower than a "4", please explain why.<br />
<textarea name="ratingExpla" cols="60" rows="6"></textarea><br /><br />
How has Midwest food Bank made a difference in your organization?<br />
<textarea name="orgDifference" cols="60" rows="6"></textarea><br /><br />
How has Midwest Food Bank made a difference in your community?<br />
<textarea name="commDifference" cols="60" rows="6"></textarea><br /><br />
How could Midwest Food Bank better serve your organization and community?<br />
<textarea name="betterServe" cols="60" rows="6"></textarea><br /><br />
</FIELDSET>

  <br />
  <br />
  <div align="center">
  <B>THANK YOU FOR YOUR RESPONSES!
  <br />Any change in the above information should be reported to Midwest Food Bank.</B>
  <br /><br />
  <B>If you have any questions, please call (309)-111-1111</B>
  <br /><br />
<INPUT type="submit" name="submit" value="Submit" onclick="return checkOK();" /> &#160; &#160; <INPUT type="reset" name="reset" value="Reset" /> 
</div>
</FORM></td></tr></table>
</FIELDSET>

