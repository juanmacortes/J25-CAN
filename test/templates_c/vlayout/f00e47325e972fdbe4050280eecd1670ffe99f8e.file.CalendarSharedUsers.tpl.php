<?php /* Smarty version Smarty-3.1.7, created on 2014-08-02 16:23:43
         compiled from "/home/juanmanu/public_html/Can2.0/includes/runtime/../../layouts/vlayout/modules/Calendar/CalendarSharedUsers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:96056711753dd108fca1472-03156094%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f00e47325e972fdbe4050280eecd1670ffe99f8e' => 
    array (
      0 => '/home/juanmanu/public_html/Can2.0/includes/runtime/../../layouts/vlayout/modules/Calendar/CalendarSharedUsers.tpl',
      1 => 1380816378,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96056711753dd108fca1472-03156094',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CURRENTUSER_MODEL' => 0,
    'MODULE' => 0,
    'SHAREDUSERS' => 0,
    'ID' => 0,
    'USER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_53dd108fd1c43',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53dd108fd1c43')) {function content_53dd108fd1c43($_smarty_tpl) {?>
<div name='calendarViewTypes'><div id="calendarview-feeds" style="margin-left:10px;"><label class="checkbox" style="text-shadow: none"><input type="checkbox" data-calendar-sourcekey="Events33_<?php echo $_smarty_tpl->tpl_vars['CURRENTUSER_MODEL']->value->getId();?>
" data-calendar-feed="Events" data-calendar-userid="<?php echo $_smarty_tpl->tpl_vars['CURRENTUSER_MODEL']->value->getId();?>
" > <span class="label" style="text-shadow: none"><?php echo vtranslate('LBL_MINE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></label><?php  $_smarty_tpl->tpl_vars['USER'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['USER']->_loop = false;
 $_smarty_tpl->tpl_vars['ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SHAREDUSERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['USER']->key => $_smarty_tpl->tpl_vars['USER']->value){
$_smarty_tpl->tpl_vars['USER']->_loop = true;
 $_smarty_tpl->tpl_vars['ID']->value = $_smarty_tpl->tpl_vars['USER']->key;
?><label class="checkbox"><input type="checkbox" data-calendar-sourcekey="Events33_<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
" data-calendar-feed="Events" data-calendar-userid="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
" > <span class="label" style="text-shadow: none"><?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
</span></label><?php } ?></div></div>
<script type="text/javascript">
jQuery(document).ready(function() {
	SharedCalendar_SharedCalendarView_Js.initiateCalendarFeeds();
});
</script><?php }} ?>