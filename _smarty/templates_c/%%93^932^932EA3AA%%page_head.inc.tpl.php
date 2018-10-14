<?php /* Smarty version 2.6.18, created on 2007-11-19 13:10:45
         compiled from page_head.inc.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_href', 'page_head.inc.tpl', 7, false),)), $this); ?>
<table align="center">
<tr><td colspan="2">
  <img src="<?php echo $this->_tpl_vars['banner_url']; ?>
" alt="Midwest Food Bank" width="759" height="118" />
</td></tr>
<tr>
    <td style="font-family: Calibri; font-size: 14px;" align="left">
   <!-- <?php echo smarty_function_html_href(array('href' => ($this->_tpl_vars['link_people']),'text' => 'People Home','status' => 'People Menu'), $this);?>
 -->
   	  <?php if ($this->_tpl_vars['link_person'] != ''): ?>
         - <?php echo smarty_function_html_href(array('href' => ($this->_tpl_vars['link_person']),'text' => 'People Home','status' => 'People Menu'), $this);?>
 
      <?php endif; ?>
      <?php if ($this->_tpl_vars['link_org'] != ''): ?>
         - <?php echo smarty_function_html_href(array('href' => ($this->_tpl_vars['link_org']),'text' => 'Organization Home','status' => 'Organization Menu'), $this);?>
 
      <?php endif; ?>
      <?php if ($this->_tpl_vars['link_admin'] != ''): ?>
         - <?php echo smarty_function_html_href(array('href' => ($this->_tpl_vars['link_admin']),'text' => 'Administrator Home','status' => 'Administrator Menu','title' => 'Administrator Menu'), $this);?>
 
      <?php endif; ?>
</td>
<td align="right" style="font-family: Calibri; font-size: 14px;">
<div align='right'>
<?php if ($this->_tpl_vars['cur_user'] != ''): ?>
       <font size='1' ><br />(Logged In As: 
       <strong><?php echo $this->_tpl_vars['cur_user']; ?>
)</strong></font>&#160;
       <?php echo smarty_function_html_href(array('href' => ($this->_tpl_vars['link_logout']),'text' => 'Logout','status' => 'Logout'), $this);?>

<?php else: ?>
       <?php echo smarty_function_html_href(array('href' => ($this->_tpl_vars['link_login']),'text' => 'Login','status' => 'Login'), $this);?>

<?php endif; ?>
</div>
</td></tr>
</table>