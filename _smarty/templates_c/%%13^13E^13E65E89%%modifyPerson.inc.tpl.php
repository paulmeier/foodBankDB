<?php /* Smarty version 2.6.18, created on 2007-12-12 21:18:40
         compiled from modifyPerson.inc.tpl */ ?>
<br /><a href="?searchPeople">Search for People</a><br /><br />

<form name="personForm" action="" method="POST" autocomplete="off">
<FIELDSET><LEGEND>Person Form</LEGEND>
<br />
<br />
  <div class="style3" id="Bck"><?php echo $this->_tpl_vars['PersonFound']; ?>
</div>
<FIELDSET><LEGEND>General</LEGEND>
<table><br />
<?php unset($this->_sections['idx']);
$this->_sections['idx']['name'] = 'idx';
$this->_sections['idx']['loop'] = is_array($_loop=$this->_tpl_vars['personData']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<tr><td>First Name:</td><td><INPUT name="FirstName" value="<?php echo $this->_tpl_vars['personData'][$this->_sections['idx']['index']]['FIRSTNAME']; ?>
" /></td></tr>
<tr><td>Last Name:</td><td><INPUT name="LastName" value="<?php echo $this->_tpl_vars['personData'][$this->_sections['idx']['index']]['LASTNAME']; ?>
"/></td></tr>
<tr><td>Email:</td><td><INPUT type="text" name="Email" value="<?php echo $this->_tpl_vars['personData'][$this->_sections['idx']['index']]['EMAIL']; ?>
"/></td></tr>
<tr><td>Gender:</td><td><INPUT type="text" name="Gender" value="<?php echo $this->_tpl_vars['personData'][$this->_sections['idx']['index']]['GENDER']; ?>
"/></td></tr>
<tr><td>Street:</td><td><INPUT type="text" name="Street" value="<?php echo $this->_tpl_vars['personData'][$this->_sections['idx']['index']]['STREET']; ?>
"/></td></tr>
<tr><td>City:</td><td><INPUT type="text" name="City" value="<?php echo $this->_tpl_vars['personData'][$this->_sections['idx']['index']]['CITY']; ?>
"/></td></tr>
<tr><td>State:</td><td><INPUT type="text" name="State" value="<?php echo $this->_tpl_vars['personData'][$this->_sections['idx']['index']]['STATE']; ?>
"/></td></tr>
<tr><td>Zip:</td><td><INPUT type="text" name="Zip" value="<?php echo $this->_tpl_vars['personData'][$this->_sections['idx']['index']]['ZIP']; ?>
"/></td></tr>
<tr><td>Phone:</td><td><INPUT type="text" name="Phone" value="<?php echo $this->_tpl_vars['personData'][$this->_sections['idx']['index']]['PHONE']; ?>
"/></td></tr>
<tr><td>Submit Date:</td><td><INPUT type="text" name="submitDate" value="<?php echo $this->_tpl_vars['personData'][$this->_sections['idx']['index']]['SUBMITDATE']; ?>
"/></td></tr>
<tr><td>They are a:</td><td>
<INPUT type="text" name="Type" value="<?php echo $this->_tpl_vars['personData'][$this->_sections['idx']['index']]['TYPE']; ?>
"></td><td>
			<fieldset><legend>Types are:</legend>
				OrgContact<br />
 				Volunteer<br />
				Donator<br />
				Employee<br />
				Receives Aid<br />
			</fieldset>
</td></tr>
<tr><td>Current Affiliation:</td><td><input type="text" name="a" id="a" value="<?php echo $this->_tpl_vars['currOrgName']; ?>
"/></td></tr>
<?php endfor; endif; ?>
<tr><td>NEW Organization Affiliation:</td><td>							
<select name="Org" id="Org">
	<option value="<?php echo $this->_tpl_vars['currOrgId']; ?>
"><?php echo $this->_tpl_vars['currOrgName']; ?>
</option>
	<?php unset($this->_sections['idx']);
$this->_sections['idx']['name'] = 'idx';
$this->_sections['idx']['loop'] = is_array($_loop=$this->_tpl_vars['allorgData']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
 	<option value="<?php echo $this->_tpl_vars['allorgData'][$this->_sections['idx']['index']]['ORGID']; ?>
" ><?php echo $this->_tpl_vars['allorgData'][$this->_sections['idx']['index']]['NAME']; ?>
</option>
	<?php endfor; endif; ?>
</select>
</td></tr>
</table>
</FIELDSET>

<div align="center"><b><br /><FONT COLOR="RED">WARNING</FONT><br /> IF YOU SUBMIT OR DELETE, THE CHANGES ARE PERMANENT. THERE IS NO UNDO.</b><br /><br />
<INPUT type="submit" name="submit" value="submit" onclick="return checkOK();" />&nbsp;&nbsp;&nbsp;
<INPUT type="submit" name="delete" value="delete" onclick="return checkOK();" /></div>
</form>