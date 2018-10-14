<br /><a href="?searchOrganizations">Search Organizations</a><br />
<br />
<p align="center">
<b>Organizations A-Z</b>
<br />
<i>click heading to group by.</i>
</p>
   <table width="524" border="1" align="center">
	<tr><td><b><a href="?orgsAZ&order=Name">Organization Name</A></b></td>
	<td><b><a href="?orgsAZ&order=City">City</A></b></td>
	<td><b><a href="?orgsAZ&order=State">State</A></b></td>
	<td><b><a href="?orgsAZ&order=Type">Type</A></b></td></tr>
{section name=idx loop=$orgData}
   <tr>
   <td><a href="{$link_orgModify}&id={$orgData[idx].ORGID}");>&nbsp;{$orgData[idx].NAME}</A></td>
   <td>{$orgData[idx].CITY}</td>
   <td>{$orgData[idx].STATE}</td>
   <td>{$orgData[idx].TYPE}</td>
   </tr>
{/section}
</table>
<br />
<br />
<br />
Organizations in database:{$count}
<br />
<br />
<br />