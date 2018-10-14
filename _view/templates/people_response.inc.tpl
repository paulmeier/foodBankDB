<br />
<div align="center" style="font-size: 18px; font-weight: bold;  color: #808080; font-face:Calibri">{$page_heading}</div>
<div align="center"><h3>People</h3></div>
<br />
<div align="center"><a href="?peopleAZ&order=Name">People A to Z (This may take long to load)</a></div>
<br />
<hr />
<br />
<h5>Search People:</h5>
<i>**Note on searching - Searches must be full correct values, this system does not do any guessing.
<br />
<form name="personSearchForm" action="" method="POST">
<div align="center">
<table><br />
<tr><td>First Name:</td><td><input type="text" name="firstName" size="40" maxlength="50"/></td></tr>
<tr><td>Last Name:</td><td><input type="text" name="lastName" size="40" maxlength="50"/></td></tr>
<tr><td>Type:</td><td><input type="text" name="Type" size="40" maxlength="50"/></td></tr>
</table>
<INPUT type="submit" name="submit" value="Submit"/>
</div>
</form>
<br />
<br />

<table border="1" align="center" width="567">
<tr><td height="45"><b>Name</b></td>
<td><b>Type</b></td>
</tr>
 <div class="style3" id="Bck">{$queryResult}</div>
 <br />
 <br />
{section name=idx loop=$personResults}
	<tr>
   <td>&#160;<a href="?modifyPerson&id={$personResults[idx].PersonId}">{$personResults[idx].FirstName}&nbsp;{$personResults[idx].LastName}</a>&#160;</td>
   <td>&#160;{$personResults[idx].Type}&#160;</td>
    </tr>
{/section}
</table>
<br />
<br />
<br />
<br />