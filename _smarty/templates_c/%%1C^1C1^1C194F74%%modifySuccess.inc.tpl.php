<?php /* Smarty version 2.6.18, created on 2007-12-08 23:55:20
         compiled from modifySuccess.inc.tpl */ ?>
<br />
<br />
<br />
<table align="center">
<tr><td align="center"><h2><?php echo $this->_tpl_vars['OrgFound']; ?>
</h2></td></tr>
</table>
<br />
<br />
<br />
<div align="center">
<br /><a href="?searchOrganizations">Search organizations</a><br /><br />
<br /><a href="?orgsAZ&order=Name">Organizations a-z</a><br /><br />
<br /><?php unset($this->_sections['idx']);
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
?><a href="?modifyOrg&id=<?php echo $this->_tpl_vars['orgData'][$this->_sections['idx']['index']]['ORGID']; ?>
">View <?php echo $this->_tpl_vars['orgData'][$this->_sections['idx']['index']]['NAME']; ?>
</a><br /><br /><?php endfor; endif; ?>
</div>
<br />
<br />