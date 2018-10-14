<?php /* Smarty version 2.6.18, created on 2007-11-03 21:40:50
         compiled from Employee_add-edit.inc.tpl */ ?>
<br />
<h3 align="center"><?php echo $this->_tpl_vars['page_heading']; ?>
</h3>
<form  name="register" method="post" action="">
<table align="center" width="70%">
<tr><td></td></tr>
<tr>
  <td><font color="#FF0000"><?php echo $this->_tpl_vars['Insert_Error']; ?>
</font></td>
  <td><font size="-3" color="#FF0000"><?php echo $this->_tpl_vars['Req']; ?>
</font></td>
 </tr>
 <!--
 <TR>
 <TD>UID: </TD>
 <TD><input type="text" name="uid" size="9" maxlength="9" value="<?php echo $this->_tpl_vars['uid']; ?>
" />
     <font color="#FF0000"><?php echo $this->_tpl_vars['uid_error']; ?>
</font></TD>
</TR>
-->
<TR>
 <TD>username: </TD>
 <TD><input type="text"  size="7" maxlength="7" name="username" onBlur="validate(this.value);" value="<?php echo $this->_tpl_vars['username']; ?>
" />
      <font color="#FF0000"><?php echo $this->_tpl_vars['username_error']; ?>
<?php echo $this->_tpl_vars['usernameFound']; ?>
</font>
      <font color="red"><div id="autocomplete"></div></font></TD>
</TR> 
<?php if ($this->_tpl_vars['script'] == 'Employee_add'): ?>
<TR>
<TD>Password: </TD><TD><input type="password" size="7" name="pass1" />
       <font color="#FF0000"><?php echo $this->_tpl_vars['Pass1']; ?>
</font></TD>
</TR>
<TR>
<TD>Confirm Password: </TD>
<TD><input type="password" size="7" name="pass2" />
    <font color="#FF0000"><?php echo $this->_tpl_vars['Pass2']; ?>
<?php echo $this->_tpl_vars['PassMatch']; ?>
</font></TD>
</TR>
<?php endif; ?>
<TR>
<TD>First Name: </TD>
<TD><input type="text" name="fName" size="15" value="<?php echo $this->_tpl_vars['first']; ?>
" /></TD>
</TR>
<TR>
<TD>Last Name: </TD>
<TD><input type="text" name="lName" size="15"  value="<?php echo $this->_tpl_vars['last']; ?>
" /></TD>
</TR>
<TR>
<TD>Age:</TD>
<TD><input type="text" name="age" size="2" value="<?php echo $this->_tpl_vars['age']; ?>
" /></TD>
</TR>

<TR>
<TD>Gender: </TD>
<TD>
    <input type="radio" name="gender" value="M" checked="<?php echo $this->_tpl_vars['male_check']; ?>
">Male
		<input type="radio" name="gender" value="F" checked="<?php echo $this->_tpl_vars['female_check']; ?>
">Female
		<font color="#FF0000"><?php echo $this->_tpl_vars['gender_error']; ?>
</font></TD>
</TR>
		
<?php if ($this->_tpl_vars['admin'] == 'A'): ?>
  <TR>
   <TD>Set Access Rights: </TD>
   <TD><input type="radio" name="access" value="A" checked="<?php echo $this->_tpl_vars['admin_access']; ?>
">Admin 
		   <input type="radio" name="access" value="E" checked="<?php echo $this->_tpl_vars['emp_access']; ?>
">Employee</TD>
  </TR>
<?php endif; ?>

<?php if ($this->_tpl_vars['admin'] == 'E'): ?>
 <TR>
   <TD>Access Rights: </TD>
   <TD><input type="radio" name="access" value="A" disabled="disabled"  />Admin 
		   <input type="radio" name="access" value="E" checked="checked" disabled="disabled" />Employee <font size="-3" color="#BF1800">(Only Admins have access to this)</font>
		</TD>
 </TR>
<?php endif; ?>
<TR><TD></TD></TR>
<TR>
 <TD colspan="2" align="center"><input type="submit" name="submit" value="<?php echo $this->_tpl_vars['submit_label']; ?>
" />
 </input></TD>
</TR>
</table>
</form>
