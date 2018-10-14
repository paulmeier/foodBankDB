<?php /* Smarty version 2.6.18, created on 2007-12-12 21:41:52
         compiled from orgsaz.inc.tpl */ ?>
<br /><a href="?searchOrganizations">Search Organizations</a><br />
<br />
<p align="center">
<b>Organizations A-Z</b>
<br />
<i>click heading to group by.</i>
</p>
   <table width="524" border="1" align="center">
	<tr><td><b><a href="?orgsAZ&order=Name">Organization Name</A></b></td>
	<td><b><a href="?orgsAZ&order=City">City</A></b></td>
	<td><b><a href="?orgsAZ&order=State">State</A></b></td>
	<td><b><a href="?orgsAZ&order=Type">Type</A></b></td></tr>
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
   <tr>
   <td><a href="<?php echo $this->_tpl_vars['link_orgModify']; ?>
&id=<?php echo $this->_tpl_vars['orgData'][$this->_sections['idx']['index']]['ORGID']; ?>
");>&nbsp;<?php echo $this->_tpl_vars['orgData'][$this->_sections['idx']['index']]['NAME']; ?>
</A></td>
   <td><?php echo $this->_tpl_vars['orgData'][$this->_sections['idx']['index']]['CITY']; ?>
</td>
   <td><?php echo $this->_tpl_vars['orgData'][$this->_sections['idx']['index']]['STATE']; ?>
</td>
   <td><?php echo $this->_tpl_vars['orgData'][$this->_sections['idx']['index']]['TYPE']; ?>
</td>
   </tr>
<?php endfor; endif; ?>
</table>
<br />
<br />
<br />
Organizations in database:<?php echo $this->_tpl_vars['count']; ?>

<br />
<br />
<br />