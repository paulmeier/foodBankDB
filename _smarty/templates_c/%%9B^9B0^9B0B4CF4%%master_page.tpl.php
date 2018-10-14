<?php /* Smarty version 2.6.18, created on 2007-12-11 23:08:49
         compiled from master_page.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'debug', 'master_page.tpl', 1, false),)), $this); ?>
<!--<?php echo smarty_function_debug(array(), $this);?>
     -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 1.0 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta http-equiv="REFRESH" content="<?php echo $this->_tpl_vars['redirect']; ?>
" />
<title><?php echo $this->_tpl_vars['page_title']; ?>
</title>
<style type="text/css">@import url(<?php echo $this->_tpl_vars['css_url_default']; ?>
);</style>
<?php $_from = $this->_tpl_vars['css_url']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['curr_url']):
?>
  <style type="text/css">@import url(<?php echo $this->_tpl_vars['curr_url']; ?>
);</style>
<?php endforeach; endif; unset($_from); ?>
<?php if ($this->_tpl_vars['js_url_default'] != ''): ?>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_url_default']; ?>
"></script>
<?php endif; ?>
<?php $_from = $this->_tpl_vars['js_url']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['curr_url']):
?>
  <script type="text/javascript" src="<?php echo $this->_tpl_vars['curr_url']; ?>
"></script>
<?php endforeach; endif; unset($_from); ?>
</head>
<body onLoad="<?php echo $this->_tpl_vars['onload']; ?>
" >
<!-- Begin container for page body -->
<div id="container">
<!--  Page Header  -->
<table align="center" width="60%">
<tr><td>
<!-- Box looks bad <fieldset> -->
<?php if ($this->_tpl_vars['page_head'] != ''): ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['page_head']), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>

<!--  Page Content  -->
<?php if ($this->_tpl_vars['view_content'] != ''): ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['view_content']), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>

<!--  Page Footer  -->
<?php if ($this->_tpl_vars['page_foot'] != ''): ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['page_foot']), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>
<!-- </fieldset> -->
</td></tr>
</table>
</div>   <!-- End of Container   -->
</body>
</html>
