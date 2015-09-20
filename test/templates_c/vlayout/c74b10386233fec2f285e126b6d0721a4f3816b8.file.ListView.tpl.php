<?php /* Smarty version Smarty-3.1.7, created on 2014-07-28 23:40:03
         compiled from "/home/juanmanu/public_html/Can2.0/includes/runtime/../../layouts/vlayout/modules/Settings/Vtiger/ListView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8897821753d6df535a3ad9-10212221%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c74b10386233fec2f285e126b6d0721a4f3816b8' => 
    array (
      0 => '/home/juanmanu/public_html/Can2.0/includes/runtime/../../layouts/vlayout/modules/Settings/Vtiger/ListView.tpl',
      1 => 1373802546,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8897821753d6df535a3ad9-10212221',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_53d6df5360adf',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d6df5360adf')) {function content_53d6df5360adf($_smarty_tpl) {?>
<div><div class="listViewTopMenuDiv"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ListViewHeader.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><div class="listViewContentDiv" id="listViewContents"><br><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ListViewContents.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div><?php }} ?>