<?php /* Smarty version 2.6.18, created on 2007-11-04 18:24:42
         compiled from applyAccomodation.inc.tpl */ ?>
<br /><br />
<FIELDSET><LEGEND>Apartment Accomodation Application</LEGEND>
<table align="center">
<tr><td></td>
<td>
<FORM name="ApartmentLivingApplication" method="post" action="">
  <div class="style3" id="Bck"><?php echo $this->_tpl_vars['AppFound']; ?>

  </div>
<FIELDSET><LEGEND>General Applicant Information</LEGEND>
<TABLE>
  <TBODY>
  <TR>
    <TD width="150">First Name</TD><TD><INPUT name="Fname" /></TD></TR>
  <TR>
    <TD width="150">Middle Initial</TD><TD><INPUT name="MI" /></TD></TR>
  <TR>
    <TD width="150">Last Name</TD><TD><INPUT name="Lname" /></TD></TR>
  <TR>
    <TD width="150">UID(xxxxxxxxx)</TD>
    <TD><INPUT maxLength="9" name="UID"  value="0"  onclick="this.value='';" /></TD><TD>If you do not have a UID, please enter 0</TD></TR>
  <TR>
    <TD width="150">ISU Email Address</TD><TD><INPUT type="text" name="username" size="7" maxlength="7" />@ilstu.edu</TD><TD>Leave blank if you dont have one</TD></TR>
  <TR>
    <TD width="150">Alternate E-mail Address</TD><TD><INPUT type="text" name="Email" /></TD><TD>Required If you do not have a username above</TD></TR>
  <TR>
    <TD width="150">Gender</TD><TD><INPUT type="radio" value="Male" name="Gender" />Male <INPUT type="radio" 
      value="Female" name="Gender" />Female</TD>
	</TR>
<TR>
    <TD width="150">Nationality</TD><TD><INPUT type="radio" value="Domestic" name="Nationality" />Domestic <INPUT type="radio" 
      value="International" name="Nationality" />International</TD>
	</TR>

	</TBODY>
</TABLE>
</FIELDSET>
<br />
<FIELDSET><LEGEND>Date of Birth</LEGEND>
<TABLE>
  <TBODY>
  <TR>
    <TD width="50">Month</TD>
    <TD><SELECT id="Month_Born" name="BMonth"> <OPTION value="January">January</OPTION> <OPTION value="February">February</OPTION> 
        <OPTION value="March">March</OPTION> <OPTION value="April">April</OPTION> 
        <OPTION value="May">May</OPTION> <OPTION value="June">June</OPTION> <OPTION 
        value="July">July</OPTION> <OPTION value="August">August</OPTION> <OPTION 
        value="September">September</OPTION> <OPTION 
        value="October">October</OPTION> <OPTION value="November">November</OPTION> 
        <OPTION value="December">December</OPTION></SELECT></TD>
    <TD width="50">Day</TD><TD><select name="BDay" >
		<OPTION value="1">1</OPTION>
		<OPTION value="2">2</OPTION>
		<OPTION value="3">3</OPTION> 
        <OPTION value="4">4</OPTION>
		<OPTION value="5">5</OPTION> 
        <OPTION value="6">6</OPTION>
		<OPTION value="7">7</OPTION> 
        <OPTION value="8">8</OPTION>
		<OPTION value="9">9</OPTION>
		<OPTION value="10">10</OPTION>
        <OPTION value="11">11</OPTION>
		<OPTION value="12">12</OPTION>
		<OPTION value="13">13</OPTION> 
        <OPTION value="14">14</OPTION>
		<OPTION value="15">15</OPTION> 
        <OPTION value="16">16</OPTION>
		<OPTION value="17">17</OPTION> 
        <OPTION value="18">18</OPTION>
		<OPTION value="19">19</OPTION>
		<OPTION value="20">20</OPTION>
        <OPTION value="21">21</OPTION>
		<OPTION value="22">22</OPTION>
		<OPTION value="23">23</OPTION> 
        <OPTION value="24">24</OPTION>
		<OPTION value="25">25</OPTION>
        <OPTION value="26">26</OPTION>
		<OPTION value="27">27</OPTION> 
        <OPTION value="28">28</OPTION>
		<OPTION value="29">29</OPTION>
		<OPTION value="30">30</OPTION>
		<OPTION value="31">31</OPTION>
		</select>
	
	
	</TD>
    <TD width="50">Year</TD><TD><SELECT id="BYear" name="BYear"> 
		<OPTION value="1992">1992</OPTION>
		<OPTION value="1991">1991</OPTION>
		<OPTION value="1990">1990</OPTION> 
        <OPTION value="1989">1989</OPTION>
        <OPTION value="1988">1988</OPTION>
		<OPTION value="1987">1987</OPTION>
		<OPTION value="1986">1986</OPTION> 
        <OPTION value="1985">1985</OPTION>
        <OPTION value="1984">1984</OPTION>
		<OPTION value="1983">1983</OPTION>
		<OPTION value="1982">1982</OPTION> 
        <OPTION value="1981">1981</OPTION>
        <OPTION value="1980">1980</OPTION>
		<OPTION value="1979">1979</OPTION>
		<OPTION value="1978">1978</OPTION> 
        <OPTION value="1977">1977</OPTION>
        <OPTION value="1976">1976</OPTION>
		<OPTION value="1975">1975</OPTION>
		<OPTION value="1974">1974</OPTION> 
        <OPTION value="1973">1973</OPTION>
		<OPTION value="1972">1972</OPTION>
		<OPTION value="1971">1971</OPTION>
		<OPTION value="1970">1970</OPTION> 
        <OPTION value="1969">1969</OPTION>
        <OPTION value="1968">1968</OPTION>
		<OPTION value="1967">1967</OPTION>
		<OPTION value="1966">1966</OPTION> 
        <OPTION value="1965">1965</OPTION>
        <OPTION value="1964">1964</OPTION>
		<OPTION value="1963">1963</OPTION>
		<OPTION value="1962">1962</OPTION> 
        <OPTION value="1961">1961</OPTION>
        <OPTION value="1960">1960</OPTION>
		<OPTION value="1959">1959</OPTION>
		<OPTION value="1958">1958</OPTION> 
        <OPTION value="1957">1957</OPTION>
        <OPTION value="1956">1956</OPTION>
		<OPTION value="1955">1955</OPTION>
		<OPTION value="1954">1954</OPTION> 
        <OPTION value="1953">1953</OPTION>
		<OPTION value="1952">1952</OPTION>
		<OPTION value="1951">1951</OPTION> 
        <OPTION value="1950">1950</OPTION>

		</SELECT></TD>
	</TR>
	</TBODY>
</TABLE>
</FIELDSET>
<br />
<FIELDSET><LEGEND>Marital Status</LEGEND>
<TABLE>
  <TBODY>
  <TR>
    <TD width="150">Marital Status</TD>
    <TD><INPUT type="radio" value="Single" name="MStatus" />Single
	<INPUT type="radio" value="Married" name="MStatus" /> Married
	<INPUT type="radio" value="Domestic_Partnership" name="MStatus" />Domestic Partnership<br />	 </TD>
 </TR>
 </TBODY>
 </TABLE>
 <br />
<TABLE>
  <TBODY>
  <TR>
    <TD width="150">Spouse/Fiance(e)</TD>
    <TD width="150">First Name</TD>
    <TD><INPUT name="SFName" /></TD></TR>
  <TR>
    <TD width="150"></TD>
    <TD width="150">Middle Initial</TD>
    <TD><INPUT name="SMI" maxlength="1"/></TD></TR>
  <TR>
    <TD width="150"></TD>
    <TD width="150">Last Name</TD>
    <TD><INPUT name="SLName" /></TD></TR></TBODY></TABLE></FIELDSET><br />
<FIELDSET><LEGEND>Roommate Preference</LEGEND>
<TABLE>
  <TBODY>
  <TR>
    <TD width="150">First Name</TD>
    <TD><INPUT name="RMPrefFName" /></TD></TR>
  <TR>
    <TD width="150">Middle Initial</TD>
    <TD><INPUT name="RMPrefMI" maxlength="1" /></TD></TR>
  <TR>
    <TD width="150">Last Name</TD>
    <TD><INPUT name="RMPrefLName" /></TD></TR>
  <TR>
    <TD width="150">UID</TD>
    <TD><INPUT name="RMPrefUID" maxlength="12" value="0" /></TD>
    <TD>If he/she does not have a UID, please enter 
0</TD></TR></TBODY></TABLE></FIELDSET>
<br />
<FIELDSET><LEGEND>Dependents</LEGEND>
<TABLE>
  <TBODY>
  <TR>
    <TD width="150"># of Dependents</TD>
    <TD><INPUT name="NumDependents" /></TD>
    <TD>(other than spouse or domestic partner)</TD></TR>
</TBODY></TABLE></FIELDSET><br />

<FIELDSET><LEGEND>University Information</LEGEND>
<TABLE>
  <TBODY>
  <TR>
    <TD width="200">Are you currently attending classes?</TD>
    <TD width="150"><INPUT type="radio" value="Y" 
      name="Curr_Enrolled" /> Yes <INPUT type="radio" value="N" 
      name="Curr_Enrolled" /> No</TD></TR>
  <TR>
    <TD width="200">Have you and/or your spouse or domestic partner lived in an ISU apartment previously? </TD>
    <TD><INPUT type="radio" value="Y" name="LivedInUHS" /> 
      Yes <INPUT type="radio" value="N" name="LivedInUHS" /> 
    No</TD>
    <TD align="right" width="120"><div align="left">If yes, when last ?</div></TD>
    <TD><INPUT name="LivedWhen" size="10" maxlength="10" /></TD>
    <TD><div align="left">Where ?</div></TD>
    <TD><INPUT name="LivedWhere" size="15" maxlength="15" /></TD></TR></TBODY></TABLE><br />
<TABLE>
  <TBODY>
  <TR>
    <TD width="200">Current University Status</TD>
    <TD>
	<INPUT type="radio" value="UG" name="EnrolledStatus" onclick="javascript:document.ApartmentLivingApplication.UGPA.focus();" />Undergraduate --- GPA: <INPUT size="5" name="UGPA" /> / 4.00<br />
	<INPUT type="radio" value="GR"      name="EnrolledStatus" />Graduate<br />
	<INPUT type="radio" value="Other" name="EnrolledStatus" onclick="javascript:document.ApartmentLivingApplication.OtherStatus.focus();" />Other 
	<INPUT type="text" name="OtherStatus" value="Specify" onfocus="javascript:this.value='';"/></TD></TR></TBODY></TABLE></FIELDSET><br />
<FIELDSET><LEGEND>Occupancy</LEGEND>
<TABLE>
  <TBODY>
  <TR>
    <TD>Approximate Semester You Prefer Occupancy: </TD>
    <TD>
	<INPUT type="radio" value="Fall"   name="PlanSem" />Fall
	<INPUT type="radio" value="Spring" name="PlanSem" />Spring
	<INPUT type="radio" value="Summer" name="PlanSem" />Summer</TD></TR>
  <TR>
    <TD>Approximate Year You Prefer To Begin Occupancy : </TD>
    <td><select id="PlanYear" name="PlanYear">
      <option value="2007">2007</option>
      <option value="2008">2008</option>
      <option value="2009">2009</option>
      <option value="2010">2010</option>
    </select></td>
  </TR></TBODY></TABLE>
</FIELDSET><br />

<FIELDSET><LEGEND>Location Preference</LEGEND>
Indicate 1st, 2nd &amp; 3rd choices  ( 1, 2, 3) 
of the location preferred. Applicants with children are assigned to and have 
priority for assignment to two bedroom units<br />
<TABLE>
  <TBODY>
  <TR>
    <TD width="150">Cardinal Court A-N</TD>
    <TD><INPUT type="text" maxLength="1" size="1" name="CC_A_N" /></TD></TR>
  <TR>
    <TD width="150">Cardinal Court O-Q</TD>
    <TD><INPUT type="text" maxLength="1" size="1" name="CC_O_Q" /></TD></TR>
  <TR>
    <TD width="150">Shelbourne</TD>
    <TD><INPUT type="text" maxLength="1" size="1" name="SB" /></TD></TR></TBODY></TABLE><br /></FIELDSET><br />
<FIELDSET><LEGEND>Health</LEGEND>Do you or any member of your immediate family 
have any physical or health concerns to be considered when making your apartment 
assignment? If yes, please describe.<br /><TEXTAREA id="HealthPref" name="HealthPref" rows="5" cols="80"></TEXTAREA> 
</FIELDSET><br />
<FIELDSET><LEGEND>Other</LEGEND>
<TABLE>
  <TBODY>
  <TR>
    <TD colspan="2">In the event an apartment is not available in the preferences you have 
      indicated, would you accept an alternative location? 
      <input type="radio" value="Y" name="AcceptAlternate" />
Yes
<input type="radio" value="N" name="AcceptAlternate" />
No</TD></TR></TBODY></TABLE>Comments<br />
<TEXTAREA id="comments" name="Comments" rows="5" cols="80" onfocus="javascript:this.value=''">
Enter Any Other Comments here
</TEXTAREA> 
</FIELDSET><br />Note: Occupancy dates, unit preferences, and smoking preferences 
are considered when assignments are made.<br /><br /><I>During the period of 
occupancy, the husband or wife, the single student, or the single parent, must 
be enrolled in a degree program for seven (7) hours in each of the first and 
second semesters and four (4) hours during the summer semester session, unless 
fewer hours are needed to complete degree requirements.</I><br />Please refer to 
the ISU Apartment Living brochure and the Conditions of Occupancy for specific 
residency requirements<br /><br />
<FIELDSET><LEGEND>Contact Information</LEGEND><B>Important:</B> Each person who 
submits this application authorizes the Student Dispute Resolution Services 
Office to release disciplinary record information to University Hoursing 
Services. 
<table>
  <tbody>
    <tr>
      <td>Current Address</td>
      <td>Street</td>
      <td><input name="CStreet" /></td>
    </tr>
    <tr>
      <td></td>
      <td>City</td>
      <td><input name="CCity" /></td>
    </tr>
    <tr>
      <td></td>
      <td>State</td>
      <td><select id="CState" name="CState">
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
        <option value="il">IL</option>
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
      <td>Zip (5 Digits)</td>
      <td><input size="5" name="CZip" maxlength="5"/></td>
    </tr>
    <tr>
      <td></td>
      <td>Telephone</td>
      <td><input name="CPhone" size="10" maxlength="10"/></td>
      <td>(include area code &amp; omit dashes)</td>
    </tr>
    <tr>
      <td></td>
    </tr>
    <tr>
      <td>Permanent Address</td>
      <td>Street</td>
      <td><input name="PStreet" /></td>
    </tr>
    <tr>
      <td></td>
      <td>City</td>
      <td><input name="PCity" /></td>
    </tr>
    <tr>
      <td></td>
      <td>State</td>
      <td><select id="PState" name="PState">
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
        <option value="il">IL</option>
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
      <td>Zip (5 Digit)</td>
      <td><input size="5" name="PZip" maxlength="5" /></td>
    </tr>
    <tr>
      <td></td>
      <td>Phone</td>
      <td><input name="PPhone" size="10" maxlength="10" /></td>
      <td>(include area code &amp; omit dashes)</td>
    </tr>
  </tbody>
</table>
</FIELDSET><br />
<TABLE>
  <TBODY>
  <TR>
    <TD colSpan="3">How did you learn about the University Apartments?</TD></TR>
  <TR>
    <TD colspan="4"><INPUT type="radio" name="Referral" value="Friend" />Friend
		<INPUT type="radio" name="Referral" value="Family" /> Family
    	<INPUT type="radio" name="Referral" value="Daily Vidette"/>Daily Vidette
  		<INPUT type="radio" name="Referral" value="Office_of_International_Studies" />Office of International Studies
		</TD></TR>
	<TR>	
    <TD colspan="4"><INPUT type="radio" name="Referral" value="Previous_Resident" />Previous Resident
    	<INPUT type="radio" name="Referral" value="Campus_Visit" />Campus Visit
 		<INPUT type="radio" name="Referral" value="Faculty" />Faculty
   		<INPUT type="radio" name="Referral" value="Mailing" />Mailing
		<INPUT type="radio" name="Referral" value="UHS_Website" />UHS Website
    	</TD></TR>
  <TR>
    <TD><INPUT type="radio" name="Referral" onclick="javascript:document.ApartmentLivingApplication.Referral_Detail.focus();document.ApartmentLivingApplication.Referral_Detail.value='';"  />
      Other 
        <input name="Referral_Detail" value="Specify Source"/></TD>
  </TR>
  <TR>
   	<TD><INPUT type="checkbox" id="agree" name="agree" />By checking this box, I agree that I have entered all the information to the best of my knowledge<br /></TD>
  </TR>
  </TBODY>
  </TABLE><br />
  <B>Any change in the above information should be reported to University Housing Services immediately.</B>
  <br /><br />
  <B>If you have any questions, please call (309)-438-8611</B>
  <br /><br />

<INPUT type="submit" name="submit" value="Submit" onclick="return checkOK();" /> &#160; &#160; <INPUT type="reset" name="reset" value="Reset" />
</FORM></td></tr></table>
</FIELDSET>
