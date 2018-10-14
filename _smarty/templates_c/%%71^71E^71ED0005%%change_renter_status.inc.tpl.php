<?php /* Smarty version 2.6.18, created on 2007-11-03 22:18:41
         compiled from change_renter_status.inc.tpl */ ?>
<table align="center" width="70%">
<tr><td align="center">
<br />
<div align="center">
<?php if ($this->_tpl_vars['message'] != ''): ?>       
   <h4><font color="red"><?php echo $this->_tpl_vars['message']; ?>
<br /></font></h4> 
<?php elseif ($this->_tpl_vars['error_msg'] != ''): ?> 
   <h4><font color="red"><?php echo $this->_tpl_vars['error_msg']; ?>
<br /></font></h4> 
<?php else: ?>
  <br />
  <table border="1" align="center"><tr>
     <th>Lease</th>
     <th>Apartment</th>
     <th>Name</th>
     <th>Action</th></tr> 
          <?php unset($this->_sections['idx']);
$this->_sections['idx']['name'] = 'idx';
$this->_sections['idx']['loop'] = is_array($_loop=$this->_tpl_vars['Leases']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
        <td>&#160; <?php echo $this->_tpl_vars['Leases'][$this->_sections['idx']['index']]['k']; ?>
 &#160;</td> 
        <td>&#160; <?php echo $this->_tpl_vars['Leases'][$this->_sections['idx']['index']]['AptType']; ?>
 <?php echo $this->_tpl_vars['Leases'][$this->_sections['idx']['index']]['AptNum']; ?>
 &#160;</td>
        <td>&#160; <?php echo $this->_tpl_vars['Leases'][$this->_sections['idx']['index']]['first']; ?>
 <?php echo $this->_tpl_vars['Leases'][$this->_sections['idx']['index']]['last']; ?>
 &#160;</td>
        <td><form  method="post" action="" >
        <input type="hidden" name="LeaseId" value="<?php echo $this->_tpl_vars['Leases'][$this->_sections['idx']['index']]['LeaseId']; ?>
" /> 
        <input type="submit" name="submit" Value="Change Status" />
        </form></td>
        </tr>
     <?php endfor; endif; ?>
  </table>  
<?php endif; ?>
</div>
</td></tr>
</table>
<br />