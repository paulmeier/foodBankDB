<?php /* Smarty version 2.6.18, created on 2007-12-03 15:00:25
         compiled from menu_panel.inc.tpl */ ?>
<br />
<br />
<div align="center" style="font-size: 18px; font-weight: bold;  color: #808080; font-face:Calibri"><?php echo $this->_tpl_vars['page_heading']; ?>
</div><br />
<table border="0" align="center">

<?php unset($this->_sections['idx_1']);
$this->_sections['idx_1']['name'] = 'idx_1';
$this->_sections['idx_1']['loop'] = is_array($_loop=$this->_tpl_vars['adminLinks']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['idx_1']['show'] = true;
$this->_sections['idx_1']['max'] = $this->_sections['idx_1']['loop'];
$this->_sections['idx_1']['step'] = 1;
$this->_sections['idx_1']['start'] = $this->_sections['idx_1']['step'] > 0 ? 0 : $this->_sections['idx_1']['loop']-1;
if ($this->_sections['idx_1']['show']) {
    $this->_sections['idx_1']['total'] = $this->_sections['idx_1']['loop'];
    if ($this->_sections['idx_1']['total'] == 0)
        $this->_sections['idx_1']['show'] = false;
} else
    $this->_sections['idx_1']['total'] = 0;
if ($this->_sections['idx_1']['show']):

            for ($this->_sections['idx_1']['index'] = $this->_sections['idx_1']['start'], $this->_sections['idx_1']['iteration'] = 1;
                 $this->_sections['idx_1']['iteration'] <= $this->_sections['idx_1']['total'];
                 $this->_sections['idx_1']['index'] += $this->_sections['idx_1']['step'], $this->_sections['idx_1']['iteration']++):
$this->_sections['idx_1']['rownum'] = $this->_sections['idx_1']['iteration'];
$this->_sections['idx_1']['index_prev'] = $this->_sections['idx_1']['index'] - $this->_sections['idx_1']['step'];
$this->_sections['idx_1']['index_next'] = $this->_sections['idx_1']['index'] + $this->_sections['idx_1']['step'];
$this->_sections['idx_1']['first']      = ($this->_sections['idx_1']['iteration'] == 1);
$this->_sections['idx_1']['last']       = ($this->_sections['idx_1']['iteration'] == $this->_sections['idx_1']['total']);
?>
<?php if ($this->_tpl_vars['adminLinks'][$this->_sections['idx_1']['index']]['tr'] != ''): ?><tr valign="top"><?php endif; ?>
<td>
 <fieldset>
    <legend style="font-size: 13px;font-weight: bold; font-style: italic; color: #808080">
	   <?php echo $this->_tpl_vars['adminLinks'][$this->_sections['idx_1']['index']]['legend']; ?>
 </legend>
	<table border="0">

	<?php unset($this->_sections['idx_2']);
$this->_sections['idx_2']['name'] = 'idx_2';
$this->_sections['idx_2']['loop'] = is_array($_loop=$this->_tpl_vars['adminLinks'][$this->_sections['idx_1']['index']]['links']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['idx_2']['show'] = true;
$this->_sections['idx_2']['max'] = $this->_sections['idx_2']['loop'];
$this->_sections['idx_2']['step'] = 1;
$this->_sections['idx_2']['start'] = $this->_sections['idx_2']['step'] > 0 ? 0 : $this->_sections['idx_2']['loop']-1;
if ($this->_sections['idx_2']['show']) {
    $this->_sections['idx_2']['total'] = $this->_sections['idx_2']['loop'];
    if ($this->_sections['idx_2']['total'] == 0)
        $this->_sections['idx_2']['show'] = false;
} else
    $this->_sections['idx_2']['total'] = 0;
if ($this->_sections['idx_2']['show']):

            for ($this->_sections['idx_2']['index'] = $this->_sections['idx_2']['start'], $this->_sections['idx_2']['iteration'] = 1;
                 $this->_sections['idx_2']['iteration'] <= $this->_sections['idx_2']['total'];
                 $this->_sections['idx_2']['index'] += $this->_sections['idx_2']['step'], $this->_sections['idx_2']['iteration']++):
$this->_sections['idx_2']['rownum'] = $this->_sections['idx_2']['iteration'];
$this->_sections['idx_2']['index_prev'] = $this->_sections['idx_2']['index'] - $this->_sections['idx_2']['step'];
$this->_sections['idx_2']['index_next'] = $this->_sections['idx_2']['index'] + $this->_sections['idx_2']['step'];
$this->_sections['idx_2']['first']      = ($this->_sections['idx_2']['iteration'] == 1);
$this->_sections['idx_2']['last']       = ($this->_sections['idx_2']['iteration'] == $this->_sections['idx_2']['total']);
?>
  	 <tr><td style="font-size: 13px">
	<a href="<?php echo $this->_tpl_vars['adminLinks'][$this->_sections['idx_1']['index']]['links'][$this->_sections['idx_2']['index']]['url']; ?>
"><?php echo $this->_tpl_vars['adminLinks'][$this->_sections['idx_1']['index']]['links'][$this->_sections['idx_2']['index']]['text']; ?>
</a>
	</td></tr>
	<?php endfor; endif; ?>

	</table>
</fieldset>
</td>
<?php if ($this->_tpl_vars['adminLinks'][$this->_sections['idx_1']['index']]['tr'] == ''): ?></tr><?php endif; ?>


<?php endfor; endif; ?>
</table>
<br />
<br />
<br />