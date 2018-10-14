<?php /* Smarty version 2.6.18, created on 2007-11-04 14:15:06
         compiled from showApplications.inc.tpl */ ?>
<script type="text/javascript">document.filterform.show.checked=true;</script>

<form name="filterform" action="?showApplications" method="post">
<table  cellspacing="5" width="74%" align="center">
<tr>
<td width="25%"><strong>Filter by Status:</strong></td>
<td width="8%"><input name="show" type="radio"  onclick="javascript:Go();" value="full" checked="checked" />All</td>
<td width="26%"><input type="radio" name="show" value="pending" onclick="javascript:Go();" 
  <?php if ($this->_tpl_vars['ShowPending'] == 'checked'): ?><script>document.filterform.show[1].checked=true;</script><?php endif; ?> />Pending Approval</td>
<td width="15%"><input type="radio" name="show" value="rejected" onclick="javascript:Go();"
  <?php if ($this->_tpl_vars['ShowRejected'] == 'checked'): ?><script>document.filterform.show[2].checked=true;</script><?php endif; ?> />Rejected</td>
<td width="26%"><input type="radio" name="show" value="approved" onclick="javascript:Go();"
  <?php if ($this->_tpl_vars['ShowApproved'] == 'checked'): ?><script>document.filterform.show[3].checked=true;</script><?php endif; ?> />Approved</td></tr>
<tr>
<td><strong>Sort By: </strong></td>
<td colspan="4"><input type="radio" name="sortSemYear" value="none" onclick="javascript:Go();" checked="checked"
  <?php if ($this->_tpl_vars['SortNone'] == 'checked'): ?><script>document.filterform.sortSemYear[0].checked=true;</script><?php endif; ?> />None 
<input type="radio" name="sortSemYear" value="sortSemYear" onclick="javascript:Go();" 
  <?php if ($this->_tpl_vars['SortSemYear'] == 'checked'): ?><script>document.filterform.sortSemYear[1].checked=true;</script><?php endif; ?> />Planned Sem/Year</td>
<td></td><td></td>
</tr>
</table>
</form>

<form action="?processApp" name="appform" method="post" onsubmit="return validate();">
<table width="765" >
  <tr><td width="113" height="26"></td>
  <td width="198" bgcolor="#FFFF9B"><span class="style4">Quick Application Lookup</span></td>
  <td width="189"><strong>Find By:</strong> 
  <select name="choose" onchange="Choose()">
  <option name="Select" value="Select">Select</option>
  <option name="AppId" value="AppId">Application Id</option>
  <option name="LastName" value="LastName">Last Name</option></select>
  <strong>:</strong></td>
<td width="245"><input type="text" name="choice" size="2"/><input type="submit" name="submit" value="Open"  /></td>
</tr></table>
</form>

<br />
<table border="1" cellspacing="2" width="60%" align="center">
<tr>
<th><span class="style4">Id</span></th>
<th><span class="style4">First Name</span></th>
<th><span class="style4">Last Name</span></th>
<th><span class="style4">UID</span></th>
<th><span class="style4">username</span></th>
<th><span class="style4">Planned Sem/Year</span></th>
<th><span class="style4">Referral</span></th>
<th><span class="style4">Status</span></th>
<th><span class="style4">Next Step</span></th>
</tr>
<?php unset($this->_sections['idx']);
$this->_sections['idx']['name'] = 'idx';
$this->_sections['idx']['loop'] = is_array($_loop=$this->_tpl_vars['apps']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<tr>
<td align="center">&#160;<?php echo $this->_tpl_vars['apps'][$this->_sections['idx']['index']]['Application_id']; ?>
&#160;</td>
<td>&#160;<?php echo $this->_tpl_vars['apps'][$this->_sections['idx']['index']]['First_name']; ?>
&#160;</td>
<td>&#160;<?php echo $this->_tpl_vars['apps'][$this->_sections['idx']['index']]['Last_name']; ?>
&#160;</td>
<td>&#160;<?php echo $this->_tpl_vars['apps'][$this->_sections['idx']['index']]['UID']; ?>
&#160;</td>
<td>&#160;<?php echo $this->_tpl_vars['apps'][$this->_sections['idx']['index']]['username']; ?>
&#160;</td>
<td>&#160;<?php echo $this->_tpl_vars['apps'][$this->_sections['idx']['index']]['Planned_semester']; ?>
&#160;<?php echo $this->_tpl_vars['apps'][$this->_sections['idx']['index']]['Planned_Year']; ?>
&#160;</td>
<td>&#160;<?php echo $this->_tpl_vars['apps'][$this->_sections['idx']['index']]['Referral']; ?>
&#160;</td>
<td><b>&#160;<?php echo $this->_tpl_vars['apps'][$this->_sections['idx']['index']]['Status']; ?>
&#160;</b></td>
<td align="center">
<form method="post" action="FormAction">
<input type="hidden" name="App_Id" value='Application_id' />
<input type="submit" name="submit" value='NextStep' />
</form></td>
</tr>
<?php endfor; endif; ?>
<tr><td></td></tr>
</table>
<br />