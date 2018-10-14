<?php /* Smarty version 2.6.18, created on 2007-12-09 01:00:07
         compiled from personForm.inc.tpl */ ?>
<br />
<br />

<!-- The start of the person form with general person information -->
<FIELDSET><LEGEND>Person Form</LEGEND>
<br />
<table align="center">
<tr>
	<td></td>
	<td>
<FORM name="PersonForm" method="post" action="">
  <div class="style3" id="Bck"><?php echo $this->_tpl_vars['PersonFound']; ?>

  </div>
<FIELDSET><LEGEND>General</LEGEND>
<TABLE>
  <TBODY>
  	<TR>
    	<TD width="150">First Name</TD>
		<TD><INPUT name="FirstName" /></TD>
	</TR>
  	<TR>
    	<TD width="150">Last Name</TD>
		<TD><INPUT name="LastName" /></TD>
	</TR>
  	<TR>
    	<TD width="150">E-mail Address</TD>
		<TD><INPUT type="text" name="Email" /></TD>
	</TR>
  	<TR>
    	<TD width="150">Gender</TD>
		<TD>
			<INPUT type="radio" value="M" name="Gender" id="Gender"/>Male 
			<INPUT type="radio" value="F" name="Gender" id="Gender"/>Female</TD>
	</TR>
	<TR>
    	<TD width="150">What are you?</TD>
		<TD>
			<select name="Type" id="Type">
				<OPTION value="Volunteer">Volunteer</OPTION>
				<OPTION value="OrgContact">Organization Contact</OPTION>
				<OPTION value="Donator">Donator</OPTION>
				<OPTION value="Employee">Employee</OPTION>
				<OPTION value="Aid">Recieves Aid</OPTION>
			</select>
		</TD>
	</TR>
	<TR>
    	<TD width="150">What organization are you affiliated with?</TD>
		<TD>
			<select name="Org" id="Org">
			    <option value="None">No Organization</option>
				<?php unset($this->_sections['idx']);
$this->_sections['idx']['name'] = 'idx';
$this->_sections['idx']['loop'] = is_array($_loop=$this->_tpl_vars['orgData']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['idx']['show'] = true;
$this->_sections['idx']['max'] = $this->_sections['idx']['loop'];
$this->_sections['idx']['step'] = 1;
$this->_sections['idx']['start'] = $this->_sections['idx']['step'] > 0 ? 0 : $this->_sections['idx']['loop']-1;
if ($this->_sections['idx']['show']) {
    $this->_sections['idx']['total'] = $this->_sections['idx']['loop'];
    if ($this->_sections['idx']['total'] == 0)
        $this->_sections['idx']['show'] = false;
} else
    $this->_sections['idx']['total'] = 0;
if ($this->_sections['idx']['show']):

            for ($this->_sections['idx']['index'] = $this->_sections['idx']['start'], $this->_sections['idx']['iteration'] = 1;
                 $this->_sections['idx']['iteration'] <= $this->_sections['idx']['total'];
                 $this->_sections['idx']['index'] += $this->_sections['idx']['step'], $this->_sections['idx']['iteration']++):
$this->_sections['idx']['rownum'] = $this->_sections['idx']['iteration'];
$this->_sections['idx']['index_prev'] = $this->_sections['idx']['index'] - $this->_sections['idx']['step'];
$this->_sections['idx']['index_next'] = $this->_sections['idx']['index'] + $this->_sections['idx']['step'];
$this->_sections['idx']['first']      = ($this->_sections['idx']['iteration'] == 1);
$this->_sections['idx']['last']       = ($this->_sections['idx']['iteration'] == $this->_sections['idx']['total']);
?>
 				<option value="<?php echo $this->_tpl_vars['orgData'][$this->_sections['idx']['index']]['ORGID']; ?>
"><?php echo $this->_tpl_vars['orgData'][$this->_sections['idx']['index']]['Name']; ?>
</option>
				<?php endfor; endif; ?>
			</select>
		</TD>
	</TR>
	
	</TBODY>
</TABLE>

<br />

<FIELDSET><LEGEND>Residency Information </LEGEND>
<table>
  <tbody>
    <tr>
      <td></td></tr>
	 <TR></TR>
     <tr>
	  <td></td><td>Address</td>
      <td><input name="Street" /></td>
    </tr>
    <tr>
      <td></td>
      <td>City</td>
      <td><input name="City" /></td>
    </tr>
    <tr>
      <td></td>
      <td>State</td>
      <td><select id="State" name="State">
        <option value="al">AL</option>
        <option value="ak">AK</option>
        <option value="az">AZ</option>
        <option value="ar">AR</option>
        <option value="ca">CA</option>
        <option value="co">CO</option>
        <option value="ct">CT</option>
        <option value="de">DE</option>
        <option value="dc">DC</option>
        <option value="fl">FL</option>
        <option value="ga">GA</option>
        <option value="hi">HI</option>
        <option value="id">ID</option>
        <option selected value="il">IL</option>
        <option value="in">IN</option>
        <option value="ia">IA</option>
        <option value="ks">KS</option>
        <option value="ky">KY</option>
        <option value="la">LA</option>
        <option value="me">ME</option>
        <option value="md">MD</option>
        <option value="ma">MA</option>
        <option value="mi">MI</option>
        <option value="mn">MN</option>
        <option value="ms">MS</option>
        <option value="mo">MO</option>
        <option value="mt">MT</option>
        <option value="ne">NE</option>
        <option value="nv">NV</option>
        <option value="nh">NH</option>
        <option value="nj">NJ</option>
        <option value="nm">NM</option>
        <option value="ny">NY</option>
        <option value="nc">NC</option>
        <option value="nd">ND</option>
        <option value="oh">OH</option>
        <option value="ok">OK</option>
        <option value="or">OR</option>
        <option value="pa">PA</option>
        <option value="ri">RI</option>
        <option value="sc">SC</option>
        <option value="sd">SD</option>
        <option value="tn">TN</option>
        <option value="tx">TX</option>
        <option value="ut">UT</option>
        <option value="vt">VT</option>
        <option value="va">VA</option>
        <option value="wa">WA</option>
        <option value="wv">WV</option>
        <option value="wi">WI</option>
        <option value="wy">WY</option>
      </select></td>
    </tr>
    <tr>
      <td></td>
      <td>Zip (5-8 Digits omit dashes)</td>
      <td><input size="8" name="Zip" maxlength="8"/></td>
    </tr>
    <tr>
      <td></td>
      <td>Telephone</td>
      <td><input name="Phone" size="10" maxlength="10"/></td>
      <td>(include area code &amp; omit dashes)</td>
    </tr>
    <tr>
      <td></td>
    </tr>
  </tbody>
</table>
</FIELDSET><br />
<div align="center">
  <br />
  <B>Any change in the above information should be reported to Midwest Food Bank.</B>
  <br /><br />
  <B>If you have any questions, please call (309)-111-1111</B>
  <br /><br />

<INPUT type="submit" name="submit" value="Submit" onclick="return checkOK();" /> &#160;</div>
</FORM></td></tr></table>
</FIELDSET>
