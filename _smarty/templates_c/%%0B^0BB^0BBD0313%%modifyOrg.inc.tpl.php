<?php /* Smarty version 2.6.18, created on 2007-12-12 09:50:07
         compiled from modifyOrg.inc.tpl */ ?>
<br /><a href="?searchOrganizations">Search Organizations</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="?orgsAZ&order=Name">Organizations A-Z</a><br /><br />

<form name="orgForm" action="" method="POST" autocomplete="off">
<FIELDSET><LEGEND>Organization Form</LEGEND>
<br />
<br />
  <div class="style3" id="Bck"><?php echo $this->_tpl_vars['OrgFound']; ?>
</div>
<FIELDSET><LEGEND>General Information</LEGEND>
<table><br />
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
<tr><td>Organization Name:</td><td><input type="text" name="orgName" size="40" maxlength="50" value="<?php echo $this->_tpl_vars['orgData'][$this->_sections['idx']['index']]['NAME']; ?>
" /></td></tr>
<tr><td>Organization type:</td><td><input type="text" name="orgType" size="40" maxlength="50" value="<?php echo $this->_tpl_vars['orgData'][$this->_sections['idx']['index']]['TYPE']; ?>
"/></td></tr>
<tr><td>Distance Traveled to the Midwest Food Bank (miles):
</td><td><input type="text" name="distance" size="5" maxsize="5" value="<?php echo $this->_tpl_vars['orgData'][$this->_sections['idx']['index']]['DISTANCE']; ?>
"/></td></tr>
<tr><td><br />Organizations mission statement:</td></tr>
<tr><td><FIELDSET><?php echo $this->_tpl_vars['orgData'][$this->_sections['idx']['index']]['MISSIONSTATEMENT']; ?>
</FIELDSET><br /></td></tr>
<tr><td>Specific population:</td></tr>
<tr><td><input type="text" name="specificPop" size="1" maxlength="1" value="<?php echo $this->_tpl_vars['orgData'][$this->_sections['idx']['index']]['SPECIFICPOP']; ?>
"/></td></tr>
<tr><td><br />Description of population:</td></tr>
<tr><td><FIELDSET><?php echo $this->_tpl_vars['orgData'][$this->_sections['idx']['index']]['POPDESC']; ?>
</FIELDSET><br /></td></tr>
<tr><td>Primary sponsor/support for organization:</td><td><input type="text" name="sponsor" id="sponsor" value="<?php echo $this->_tpl_vars['orgData'][$this->_sections['idx']['index']]['SPONSOR']; ?>
"/></td></tr>
<tr><td>Other sponsor name:</td><td><input type="text" name="otherSponsorName" id="otherSponsorName" value="<?php echo $this->_tpl_vars['orgData'][$this->_sections['idx']['index']]['OTHERSPONSORNAME']; ?>
"/></td></tr>
<tr><td>Amount of food pickup:</td><td><INPUT type="text" name="pickupAmt" id="pickupAmt" value="<?php echo $this->_tpl_vars['orgData'][$this->_sections['idx']['index']]['PICKUPAMT']; ?>
"></td></tr>
<tr><td>Seasonal Description:</td><td><INPUT type="text" name="seasonalDesc" id="seasonalDesc" value="<?php echo $this->_tpl_vars['orgData'][$this->_sections['idx']['index']]['SEASONALDESC']; ?>
"></td></tr>
<?php endfor; endif; ?>
</table>
</FIELDSET>

<br />
<FIELDSET><LEGEND>Location Information</LEGEND>
<table><br />
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
<tr><td>Street:</td><td><input type="text" name="Street" size="34" maxlength="34" value="<?php echo $this->_tpl_vars['orgData'][$this->_sections['idx']['index']]['STREET']; ?>
"/></td></tr>
<tr><td>City:</td><td><input type="text" name="City" size="34" maxlength="34" value="<?php echo $this->_tpl_vars['orgData'][$this->_sections['idx']['index']]['CITY']; ?>
"/></td></tr>
<tr><td>State:</td><td><input type="text" name="State" size="34" maxlength="34" value="<?php echo $this->_tpl_vars['orgData'][$this->_sections['idx']['index']]['STATE']; ?>
"/></td></tr>
<tr><td>Zip:</td><td><input type="text" name="Zip" size="34" maxlength="34" value="<?php echo $this->_tpl_vars['orgData'][$this->_sections['idx']['index']]['ZIP']; ?>
"/></td></tr>
<tr><td>Phone:</td><td><input type="text" name="Phone" size="34" maxlength="34" value="<?php echo $this->_tpl_vars['orgData'][$this->_sections['idx']['index']]['PHONE']; ?>
"/></td></tr>
<?php endfor; endif; ?>
</table>
</FIELDSET>
<br />

<FIELDSET><LEGEND>Contacts</LEGEND>
<table width="400"><br />
<tr><td>Name</td><td>Type</td><td>Email</td><td>Phone</td></tr>
<?php unset($this->_sections['idx']);
$this->_sections['idx']['name'] = 'idx';
$this->_sections['idx']['loop'] = is_array($_loop=$this->_tpl_vars['contactsData']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<tr><td></td></tr>
<tr>
<td width="170"><a href="?modifyPerson&id=<?php echo $this->_tpl_vars['contactsData'][$this->_sections['idx']['index']]['PersonId']; ?>
"><?php echo $this->_tpl_vars['contactsData'][$this->_sections['idx']['index']]['FirstName']; ?>
 <?php echo $this->_tpl_vars['contactsData'][$this->_sections['idx']['index']]['LastName']; ?>
</a></td>
<td width="171"><?php echo $this->_tpl_vars['contactsData'][$this->_sections['idx']['index']]['Type']; ?>
</td>
<td width="169"><?php echo $this->_tpl_vars['contactsData'][$this->_sections['idx']['index']]['Email']; ?>
</td>
<td width="175"><?php echo $this->_tpl_vars['contactsData'][$this->_sections['idx']['index']]['Phone']; ?>
</td>
</tr>
<?php endfor; endif; ?>
</table>
</FIELDSET>

<FIELDSET><LEGEND>Statistical Information</LEGEND>
<table><br />
<?php unset($this->_sections['idx']);
$this->_sections['idx']['name'] = 'idx';
$this->_sections['idx']['loop'] = is_array($_loop=$this->_tpl_vars['detailData']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<tr><td>Families served:</td><td><input name="familiesServed" size="5" maxlength="5" value="<?php echo $this->_tpl_vars['detailData'][$this->_sections['idx']['index']]['NUMFAMSERVED']; ?>
"/></td></tr>
<tr><td>Single Parent Percent:</td><td><input name="singleParent" size="3" maxlength="3" value="<?php echo $this->_tpl_vars['detailData'][$this->_sections['idx']['index']]['SINGLEPARENTPERCENT']; ?>
"/>%</td></tr>
<tr><td>Individuals Served:</td><td><input name="individServed" size="5" maxlength="5" value="<?php echo $this->_tpl_vars['detailData'][$this->_sections['idx']['index']]['NUMINDIVSERVED']; ?>
"/></td></tr>
<tr><td>Average Household Size:</td><td><input name="avgHouseSize" size="2" maxlength="2" value="<?php echo $this->_tpl_vars['detailData'][$this->_sections['idx']['index']]['AVGHOUSESIZE']; ?>
"/></td></tr>
<tr><td>Homeless Percent:</td><td><input name="homelessPercent" size="3" maxlength="3" value="<?php echo $this->_tpl_vars['detailData'][$this->_sections['idx']['index']]['HOMELESSPERCENT']; ?>
"/>%</td></tr>
<tr><td>Food Distribution Income Dependent:</td><td><input name="incDep" size="1" maxlength="1" value="<?php echo $this->_tpl_vars['detailData'][$this->_sections['idx']['index']]['FOODDISTINCOMEDEP']; ?>
"/></td></tr>
<tr><td>Clients pay for food they recieve:</td><td><input name="payForFood" size="1" maxlength="1" value="<?php echo $this->_tpl_vars['detailData'][$this->_sections['idx']['index']]['CLIENTSPAYFORFOOD']; ?>
"/></td></tr>
<?php endfor; endif; ?>
</table>
</FIELDSET>
<br />

<FIELDSET><LEGEND>Individuals Served</LEGEND>
<table><br />
<?php unset($this->_sections['idx']);
$this->_sections['idx']['name'] = 'idx';
$this->_sections['idx']['loop'] = is_array($_loop=$this->_tpl_vars['indivAgeData']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
</td><td>Children up to 18 years of age:</td><td><input name="childPercent" size="3" maxlength="3" value="<?php echo $this->_tpl_vars['indivAgeData'][$this->_sections['idx']['index']]['CHILDPERCENT']; ?>
"/>%</td></tr>
</td><td>Adults 19-59:</td><td><input name="adultPercent" size="3" maxlength="3" value="<?php echo $this->_tpl_vars['indivAgeData'][$this->_sections['idx']['index']]['ADULTPERCENT']; ?>
"/>%</td></tr>
</td><td>Elders 60+:</td><td><input name="eldersPercent" size="3" maxlength="3" value="<?php echo $this->_tpl_vars['indivAgeData'][$this->_sections['idx']['index']]['ELDERSPERCENT']; ?>
"/>%</td></tr>
<?php endfor; endif; ?>
</table>
</FIELDSET>
<br />

<FIELDSET><LEGEND>Food Sources</LEGEND>
<table><br />
<?php unset($this->_sections['idx']);
$this->_sections['idx']['name'] = 'idx';
$this->_sections['idx']['loop'] = is_array($_loop=$this->_tpl_vars['foodSourcesData']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
</td><td>Midwest Food Bank:</td><td><input type="text" name="mfb" size="3" maxlength="3" value="<?php echo $this->_tpl_vars['foodSourcesData'][$this->_sections['idx']['index']]['MFB']; ?>
"/>%</td></tr>
</td><td>Individual food donations:</td><td><input type="text" name="indivDonations" size="3" maxlength="3" value="<?php echo $this->_tpl_vars['foodSourcesData'][$this->_sections['idx']['index']]['INDIVDONATIONS']; ?>
"/>%</td></tr>
</td><td>Government:</td><td><input type="text" name="gov" size="3" maxlength="3" value="<?php echo $this->_tpl_vars['foodSourcesData'][$this->_sections['idx']['index']]['GOV']; ?>
"/>%</td></tr>
</td><td>Community service organizations:</td><td><input type="text" name="commServOrg" size="3" maxlength="3" value="<?php echo $this->_tpl_vars['foodSourcesData'][$this->_sections['idx']['index']]['COMMSERVORG']; ?>
"/>%</td></tr>
</td><td>Financial donations:</td><td><input type="text" name="financialDonations" size="3" maxlength="3" value="<?php echo $this->_tpl_vars['foodSourcesData'][$this->_sections['idx']['index']]['FINANCIALDONATIONS']; ?>
"/>%</td></tr>
</td><td>Churches:</td><td><input type="text" name="churches" size="3" maxlength="3" value="<?php echo $this->_tpl_vars['foodSourcesData'][$this->_sections['idx']['index']]['CHURCHES']; ?>
"/>%</td></tr>
</td><td>Other source:</td><td><input type="text" name="otherSource" maxlength="25" value="<?php echo $this->_tpl_vars['foodSourcesData'][$this->_sections['idx']['index']]['OTHERSOURCE']; ?>
"/></td></tr>
</td><td>Other source percent:</td><td><input type="text" name="otherSourcePerc" size="3" maxlength="3" value="<?php echo $this->_tpl_vars['foodSourcesData'][$this->_sections['idx']['index']]['OTHERSOURCEPERC']; ?>
"/>%</td></tr>
<?php endfor; endif; ?>
</table>
</FIELDSET>
<br />

<FIELDSET><LEGEND>Organization Population</LEGEND>
<table><br />
<?php unset($this->_sections['idx']);
$this->_sections['idx']['name'] = 'idx';
$this->_sections['idx']['loop'] = is_array($_loop=$this->_tpl_vars['clientPopData']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
</td><td>American Indian:</td><td><input type="text" name="amIndian" size="3" maxlength="3" value="<?php echo $this->_tpl_vars['clientPopData'][$this->_sections['idx']['index']]['AMINDIAN']; ?>
"/>%</td></tr>
</td><td>Caucasian:</td><td><input type="text" name="caucasian" size="3" maxlength="3" value="<?php echo $this->_tpl_vars['clientPopData'][$this->_sections['idx']['index']]['CAUCASIAN']; ?>
"/>%</td></tr>
</td><td>Asian:</td><td><input type="text" name="asian" size="3" maxlength="3" value="<?php echo $this->_tpl_vars['clientPopData'][$this->_sections['idx']['index']]['ASIAN']; ?>
"/>%</td></tr>
</td><td>Hispanic:</td><td><input type="text" name="hispanic" size="3" maxlength="3" value="<?php echo $this->_tpl_vars['clientPopData'][$this->_sections['idx']['index']]['HISPANIC']; ?>
"/>%</td></tr>
</td><td>African American:</td><td><input type="text" name="afAmerican" size="3" maxlength="3" value="<?php echo $this->_tpl_vars['clientPopData'][$this->_sections['idx']['index']]['AFAMERICAN']; ?>
"/>%</td></tr>
</td><td>Middle Eastern:</td><td><input type="text" name="middleEastern" size="3" maxlength="3" value="<?php echo $this->_tpl_vars['clientPopData'][$this->_sections['idx']['index']]['MIDDLEEASTERN']; ?>
"/>%</td></tr>
</td><td>Other:</td><td><input type="text" name="ethOther" maxlength="25" value="<?php echo $this->_tpl_vars['clientPopData'][$this->_sections['idx']['index']]['ETHOTHER']; ?>
"/></td></tr>
</td><td>Other percent:</td><td><input type="text" name="ethPercent" size="3" maxlength="3" value="<?php echo $this->_tpl_vars['clientPopData'][$this->_sections['idx']['index']]['ETHPERCENT']; ?>
"/>%</td></tr>
<?php endfor; endif; ?>
</table>
</FIELDSET>
<br />

<FIELDSET><LEGEND>Survey</LEGEND>
<table><br />
<?php unset($this->_sections['idx']);
$this->_sections['idx']['name'] = 'idx';
$this->_sections['idx']['loop'] = is_array($_loop=$this->_tpl_vars['ratingData']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
</td><td>Distribution Process:</td><td><input type="text" name="distroProcess" size="1" maxlength="1" value="<?php echo $this->_tpl_vars['ratingData'][$this->_sections['idx']['index']]['DISTROPROCESS']; ?>
"/></td></tr>
</td><td>Timeliness of Distribution:</td><td><input type="text" name="distroTime" size="1" maxlength="1" value="<?php echo $this->_tpl_vars['ratingData'][$this->_sections['idx']['index']]['DISTROTIME']; ?>
"/></td></tr>
</td><td>Quality of Food:</td><td><input type="text" name="qualityFood" size="1" maxlength="1" value="<?php echo $this->_tpl_vars['ratingData'][$this->_sections['idx']['index']]['QUALITYFOOD']; ?>
"/></td></tr>
</td><td>Communicating with Midwest Food Bank:</td><td><input type="text" name="communication" size="1" maxlength="1" value="<?php echo $this->_tpl_vars['ratingData'][$this->_sections['idx']['index']]['COMMUNICATION']; ?>
"/></td></tr>
<?php endfor; endif; ?>
<tr><td></td></tr>
<?php unset($this->_sections['idx']);
$this->_sections['idx']['name'] = 'idx';
$this->_sections['idx']['loop'] = is_array($_loop=$this->_tpl_vars['surveyData']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<tr><td><br />If any of the above ratings were lower than a "4", please explain why:</td></tr>
<tr><td><FIELDSET><?php echo $this->_tpl_vars['surveyData'][$this->_sections['idx']['index']]['RATINGEXPLA']; ?>
</FIELDSET><br /></td></tr>
<tr><td><br />How has Midwest food Bank made a difference in your organization?</td></tr>
<tr><td><FIELDSET><?php echo $this->_tpl_vars['surveyData'][$this->_sections['idx']['index']]['ORGDIFFERENCE']; ?>
</FIELDSET><br /></td></tr>
<tr><td><br />How has Midwest Food Bank made a difference in your community?</td></tr>
<tr><td><FIELDSET><?php echo $this->_tpl_vars['surveyData'][$this->_sections['idx']['index']]['COMMDIFFERENCE']; ?>
</FIELDSET><br /></td></tr>
<tr><td><br />How could Midwest Food Bank better serve your organization and community?</td></tr>
<tr><td><FIELDSET><?php echo $this->_tpl_vars['surveyData'][$this->_sections['idx']['index']]['BETTERSERVE']; ?>
</FIELDSET><br /></td></tr>
</table>
<?php endfor; endif; ?>
</FIELDSET>
<br />
<div align="center"><b><br /><FONT COLOR="RED">WARNING</FONT><br /> IF YOU SUBMIT OR DELETE, THE CHANGES ARE PERMANENT. THERE IS NO UNDO.</b><br /><br />
<INPUT type="submit" name="submit" value="submit" onclick="return checkOK();" />&nbsp;&nbsp;&nbsp;
<INPUT type="submit" name="delete" value="delete" onclick="return checkOK();" /></div>
</form>