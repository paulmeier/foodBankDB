<?php /* Smarty version 2.6.18, created on 2007-11-02 12:04:36
         compiled from create_report_submit.inc.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'create_report_submit.inc.tpl', 3, false),)), $this); ?>
<p>&nbsp;</p>
<p align='center'><?php echo $this->_tpl_vars['err_message']; ?>
</p>
<p align='center'><?php echo smarty_function_url(array('src' => ($this->_tpl_vars['graph']),'alt' => 'Graph','height' => '400','width' => '500'), $this);?>
</p>

