<?php /* Smarty version 2.6.18, created on 2007-12-09 02:11:53
         compiled from people_response.inc.tpl */ ?>
<br />
<div align="center" style="font-size: 18px; font-weight: bold;  color: #808080; font-face:Calibri"><?php echo $this->_tpl_vars['page_heading']; ?>
</div>
<div align="center"><h3>People</h3></div>
<br />
<div align="center"><a href="?peopleAZ&order=Name">People A to Z (This may take long to load)</a></div>
<br />
<hr />
<br />
<h5>Search People:</h5>
<i>**Note on searching - Searches must be full correct values, this system does not do any guessing.
<br />
<form name="personSearchForm" action="" method="POST">
<div align="center">
<table><br />
<tr><td>First Name:</td><td><input type="text" name="firstName" size="40" maxlength="50"/></td></tr>
<tr><td>Last Name:</td><td><input type="text" name="lastName" size="40" maxlength="50"/></td></tr>
<tr><td>Type:</td><td><input type="text" name="Type" size="40" maxlength="50"/></td></tr>
</table>
<INPUT type="submit" name="submit" value="Submit"/>
</div>
</form>
<br />
<br />

<table border="1" align="center" width="567">
<tr><td height="45"><b>Name</b></td>
<td><b>Type</b></td>
</tr>
 <div class="style3" id="Bck"><?php echo $this->_tpl_vars['queryResult']; ?>
</div>
 <br />
 <br />
<?php unset($this->_sections['idx']);
$this->_sections['idx']['name'] = 'idx';
$this->_sections['idx']['loop'] = is_array($_loop=$this->_tpl_vars['personResults']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
   <td>&#160;<a href="?modifyPerson&id=<?php echo $this->_tpl_vars['personResults'][$this->_sections['idx']['index']]['PersonId']; ?>
"><?php echo $this->_tpl_vars['personResults'][$this->_sections['idx']['index']]['FirstName']; ?>
&nbsp;<?php echo $this->_tpl_vars['personResults'][$this->_sections['idx']['index']]['LastName']; ?>
</a>&#160;</td>
   <td>&#160;<?php echo $this->_tpl_vars['personResults'][$this->_sections['idx']['index']]['Type']; ?>
&#160;</td>
    </tr>
<?php endfor; endif; ?>
</table>
<br />
<br />
<br />
<br />