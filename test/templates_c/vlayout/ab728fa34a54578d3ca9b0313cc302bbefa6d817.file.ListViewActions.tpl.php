<?php /* Smarty version Smarty-3.1.7, created on 2014-08-02 03:28:14
         compiled from "/home/juanmanu/public_html/Can2.0/includes/runtime/../../layouts/vlayout/modules/Settings/PickListDependency/ListViewActions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:128745584453dc5ace280585-45767071%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab728fa34a54578d3ca9b0313cc302bbefa6d817' => 
    array (
      0 => '/home/juanmanu/public_html/Can2.0/includes/runtime/../../layouts/vlayout/modules/Settings/PickListDependency/ListViewActions.tpl',
      1 => 1373802546,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '128745584453dc5ace280585-45767071',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'PICKLIST_MODULES_LIST' => 0,
    'MODULE_MODEL' => 0,
    'MODULE_NAME' => 0,
    'FOR_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_53dc5ace305e3',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53dc5ace305e3')) {function content_53dc5ace305e3($_smarty_tpl) {?>
<span class="pull-right listViewActions"><select class="chzn-select span3 pickListSupportedModules"><option value=""><?php echo vtranslate('LBL_ALL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php  $_smarty_tpl->tpl_vars['MODULE_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MODULE_MODEL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PICKLIST_MODULES_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_MODEL']->key => $_smarty_tpl->tpl_vars['MODULE_MODEL']->value){
$_smarty_tpl->tpl_vars['MODULE_MODEL']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['MODULE_NAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name'), null, 0);?><option value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['MODULE_NAME']->value==$_smarty_tpl->tpl_vars['FOR_MODULE']->value){?> selected <?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('label'));?>
</option><?php } ?></select></span><?php }} ?>