<form name="usersForm" action="" method="POST" autocomplete="off">
<br />
<br />
  <div class="style3" id="Bck">{$changed}</div>
  <br />
  <div class="style3" id="Bck">!!!Please take note if changing these values, especially if you are changing the administrator. Once
  the values are changed the logins WILL require these combinations!!!</div>
  <br />
<FIELDSET><LEGEND>General</LEGEND>
<table><br />
{section name=idx loop=$adminData}
===========Administrator=========
<tr><td>Username:</td><td><INPUT name="Adminusername" value="{$adminData[idx].USERNAME}"/></td></tr>
<tr><td>Password:</td><td><INPUT name="Adminpassword" value="{$adminData[idx].PASSWORD}"/></td></tr>
<tr><td></td></tr>
{/section}
</table>
<table><br />
{section name=idx loop=$orgData}
===========Organization===========
<tr><td>Username:</td><td><INPUT name="Orgusername" value="{$orgData[idx].USERNAME}"/></td></tr>
<tr><td>Password:</td><td><INPUT name="Orgpassword" value="{$orgData[idx].PASSWORD}"/></td></tr>
<tr><td></td></tr>
{/section}
</table>
<table><br />
{section name=idx loop=$personData}
==============Person==============
<tr><td>Username:</td><td><INPUT name="Personusername" value="{$personData[idx].USERNAME}"/></td></tr>
<tr><td>Password:</td><td><INPUT name="Personpassword" value="{$personData[idx].PASSWORD}"/></td></tr>
<tr><td></td></tr>
{/section}
</table>
<INPUT type="submit" name="submit" value="Submit" onclick="return checkOK();" />
</form>