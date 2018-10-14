<?php /* Smarty version 2.6.18, created on 2007-12-11 16:32:52
         compiled from massEmail.inc.tpl */ ?>
<br />
<div align="center" style="font-size: 18px; font-weight: bold;  color: #808080; font-face:Calibri"><?php echo $this->_tpl_vars['page_heading']; ?>
</div>
<br />
<br />
<i>**This will select every email from the selected category.
<br />
<form name="orgSearchForm" action="" method="post">
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
</td></tr>
</table>
<INPUT type="submit" name="submit" value="Submit"/>
</div>
</form>
<br />
<br />