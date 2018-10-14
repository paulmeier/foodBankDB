<br />
<div align="center" style="font-size: 18px; font-weight: bold;  color: #808080; font-face:Calibri">{$page_heading}</div>
<div align="center"><h3>Organizations</h3></div>
<br />
<div align="center"><a href="?orgsAZ&order=Name">Organizations A to Z (This may take long to load)</a></div>
<br />
<hr />
<br />
<h5>Search Organization:</h5>
<i>**Note on searching - Searches must be full correct values, this system does not do any guessing.
<br />
<form name="orgSearchForm" action="" method="POST">
<div align="center">
<table><br />
<tr><td>Organization Name:</td><td><input type="text" name="orgName" size="40" maxlength="50"/></td></tr>
<tr><td>City:</td><td><input type="text" name="City" size="40" maxlength="50"/></td></tr>
<tr><td>State:</td><td><input type="text" name="State" size="2" maxlength="2"/></td></tr>
</table>
<INPUT type="submit" name="submit" value="Submit"/>
</div>
</form>
<br />
<br />

<table border="1" align="center" width="567">
<tr><td height="45"><b>Name</b></td>
<td><b>City</b></td>
<td><b>State</b></td>
<td><b>Type</b></td>
</tr>
 <div class="style3" id="Bck">{$queryResult}</div>
 <br />
 <br />
{section name=idx loop=$orgResults}
	<tr>
   <td>&#160;<a href="?modifyOrg&id={$orgResults[idx].OrgId}">{$orgResults[idx].OrgName}</a>&#160;</td>
   <td>&#160;{$orgResults[idx].City}&#160;</td>
   <td>&#160;{$orgResults[idx].State}&#160;</td>
   <td>&#160;{$orgResults[idx].Type}&#160;</td>
    </tr>
{/section}
</table>
<br />
<br />
<br />
<br />