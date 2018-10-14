<br />
<br />
<br />
<table align="center">
<tr><td align="center"><h2>{$OrgFound}</h2></td></tr>
</table>
<br />
<br />
<br />
<div align="center">
<br /><a href="?searchOrganizations">Search organizations</a><br /><br />
<br /><a href="?orgsAZ&order=Name">Organizations a-z</a><br /><br />
<br />{section name=idx loop=$orgData}<a href="?modifyOrg&id={$orgData[idx].ORGID}">View {$orgData[idx].NAME}</a><br /><br />{/section}
</div>
<br />
<br />
