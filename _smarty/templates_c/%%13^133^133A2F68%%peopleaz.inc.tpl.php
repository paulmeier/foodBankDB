<?php /* Smarty version 2.6.18, created on 2007-12-12 21:26:51
         compiled from peopleaz.inc.tpl */ ?>
<br /><a href="?searchPeople">Search People</a><br />
<br />
<p align="center">
<b>People A-Z</b>
</p>
   <table width="524" border="1" align="center">
	<tr><td><b><a href="?peopleAZ&order=LastName">Name</a></b></td>
	<td><b>Type</b></td>
	<td><b>Affiliation</b></td></tr>
<?php unset($this->_sections['idx']);
$this->_sections['idx']['name'] = 'idx';
$this->_sections['idx']['loop'] = is_array($_loop=$this->_tpl_vars['peopleData']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
   <td><a href="?modifyPerson&id=<?php echo $this->_tpl_vars['peopleData'][$this->_sections['idx']['index']]['PersonId']; ?>
"><?php echo $this->_tpl_vars['peopleData'][$this->_sections['idx']['index']]['FirstName']; ?>
&nbsp;<?php echo $this->_tpl_vars['peopleData'][$this->_sections['idx']['index']]['LastName']; ?>
</a></td>
   <td><?php echo $this->_tpl_vars['peopleData'][$this->_sections['idx']['index']]['Type']; ?>
</td>
   <td><a href="?modifyOrg&id=<?php echo $this->_tpl_vars['peopleData'][$this->_sections['idx']['index']]['OrgId']; ?>
"><?php echo $this->_tpl_vars['peopleData'][$this->_sections['idx']['index']]['Org']; ?>
</a></td>
   </tr>
<?php endfor; endif; ?>
</table>
<br />
<br />
<br />
People in database:<?php echo $this->_tpl_vars['count']; ?>

<br />
<br />
<br />