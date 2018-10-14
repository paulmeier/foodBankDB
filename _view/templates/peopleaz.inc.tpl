<br /><a href="?searchPeople">Search People</a><br />
<br />
<p align="center">
<b>People A-Z</b>
</p>
   <table width="524" border="1" align="center">
	<tr><td><b><a href="?peopleAZ&order=LastName">Name</a></b></td>
	<td><b>Type</b></td>
	<td><b>Affiliation</b></td></tr>
{section name=idx loop=$peopleData}
   <tr>
   <td><a href="?modifyPerson&id={$peopleData[idx].PersonId}">{$peopleData[idx].FirstName}&nbsp;{$peopleData[idx].LastName}</a></td>
   <td>{$peopleData[idx].Type}</td>
   <td><a href="?modifyOrg&id={$peopleData[idx].OrgId}">{$peopleData[idx].Org}</a></td>
   </tr>
{/section}
</table>
<br />
<br />
<br />
People in database:{$count}
<br />
<br />
<br />