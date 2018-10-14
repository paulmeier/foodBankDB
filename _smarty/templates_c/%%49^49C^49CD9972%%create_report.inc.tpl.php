<?php /* Smarty version 2.6.18, created on 2007-11-02 12:01:20
         compiled from create_report.inc.tpl */ ?>
<p>&nbsp;</p>
<table align="center">
<tr>
<td>
<form name="report" method="post" action="">
 Select an apartment complex: <select name="Apt">
	<option value="none">Select</option>
	<option value="CC">Cardinal Court</option>
	<option value="SB">Shelbourne</option>
	<option value="both">Both</option>
	</select><br /><br />
  	<div>Select type of report:</div><br/>
    <input name="rtype" value="Nationality" type="radio" checked />&nbsp;&nbsp;Nationality
    <input name="rtype" value="Gender" type="radio" />&nbsp;&nbsp;Gender
    <input name="rtype" value="MStatus" type="radio" />&nbsp;&nbsp;Marital Status
    <input name="rtype" value="Year" type="radio" />&nbsp;&nbsp;Academic Year
    <input name="rtype" value="Dependent" type="radio" />&nbsp;&nbsp;Dependent Status 
    <p align='center'><input type="submit" name="submit" value="Create Report" /></p>
</form>
</td></tr></table>
