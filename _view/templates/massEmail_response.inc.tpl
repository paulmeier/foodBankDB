<br />
<div align="center" style="font-size: 18px; font-weight: bold;  color: #808080; font-face:Calibri">{$page_heading}</div>
<br />
<br />
<i>**This will select every email from the selected category.
<br />
<form name="orgSearchForm" action="" method="POST">
<div align="center">
<table><br />
<tr><td>Email:</td><td>			
<select name="Type" id="Type">
			    <option value="OrgContact">Organizations</option>
 				<option value="Volunteer">Volunteers</option>
				<option value="Donator">Donators</option>
				<option value="Employee">Employees</option>
				<option value="Aid">Receives Aid</option>
</select>
</td></tr></table>
<INPUT type="submit" name="submit" value="Submit"/>
</div>
</form>
<br />
<br />
 <div class="style3" id="Bck">{$queryResult}</div>
 <br />
 <br />
<Fieldset>
<a href="mailto:
{section name=idx loop=$emailResults}
{$emailResults[idx].EMAIL},
{/section}">{section name=idx loop=$emailResults}
{$emailResults[idx].EMAIL},
{/section}</a>
</Fieldset>
<br />
<br />