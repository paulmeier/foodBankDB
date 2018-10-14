<?php /* Smarty version 2.6.18, created on 2007-11-17 13:38:44
         compiled from login.inc.tpl */ ?>
<br />
<div align="center"><font size="-1" color="#BF1800"><?php echo $this->_tpl_vars['timeout_msg']; ?>
</font></div>
<br />
<div align="center">
</div>
<br />

<table align="center" width="50%" >
<tr><td>
<fieldset>
<legend style="font-size: 18px; font-weight: bold; font-style: italic; color: #808080">Login</legend><br/>
<div align="center">
<font style="font-family: Calibri; font-size: 12px; color:#BF1800"><?php echo $this->_tpl_vars['errorMsg']; ?>
</font>
</div>

<form action="<?php echo $this->_tpl_vars['link_login']; ?>
" name="loginform" method="post"> 
<table cellspacing="0" width="100%" border="0" align="center" >
<tr><td></td><td></td></tr>
<tr style="font-family: Calibri; font-size: 14px;">
  <td align="right" width="30%">Username:</td>
  <td align="left"><input type="text" name="username" maxlength="15" size="15" id="username" 
                     value="<?php echo $this->_tpl_vars['username']; ?>
" onBlur="trimEntry(this);checkitem(this)" />&#160;
                    <font color="#BF1800" size="-1"><span id="username_"></span></font>
  </td></tr>
<tr style="font-family: Calibri; font-size: 14px;">
      <td align="right">Password:</td>
      <td align="left" width="113">
           <input type="password"  name ="pass" size="15" maxlength="15" 
                  id="password" onBlur="trimEntry(this);checkitem(this)" />&#160;
                  <font color="#BF1800" size="-1"><span id="pass_"></span></font>
  </td></tr>
<tr style="font-family: Calibri; font-size: 14px;">
	<td height="23"></td>
      <td><input type="submit" name="submit" value="Login" onClick="checkform(this.form)" /></td>
    	</tr>
<tr><td></td><td></td></tr>
</table>
</form>

</fieldset>
</td></tr></table>
<br/>



