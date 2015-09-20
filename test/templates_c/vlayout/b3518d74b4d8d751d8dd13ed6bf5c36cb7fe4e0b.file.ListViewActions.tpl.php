<?php /* Smarty version Smarty-3.1.7, created on 2014-07-28 23:40:03
         compiled from "/home/juanmanu/public_html/Can2.0/includes/runtime/../../layouts/vlayout/modules/Settings/MailConverter/ListViewActions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5175026853d6df53611480-70938085%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3518d74b4d8d751d8dd13ed6bf5c36cb7fe4e0b' => 
    array (
      0 => '/home/juanmanu/public_html/Can2.0/includes/runtime/../../layouts/vlayout/modules/Settings/MailConverter/ListViewActions.tpl',
      1 => 1373802546,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5175026853d6df53611480-70938085',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CRON_RECORD_MODEL' => 0,
    'QUALIFIED_MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_53d6df5366c30',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d6df5366c30')) {function content_53d6df5366c30($_smarty_tpl) {?>
<div class="pull-right">
<b>
<?php if ($_smarty_tpl->tpl_vars['CRON_RECORD_MODEL']->value->isDisabled()){?><?php echo vtranslate('LBL_DISABLED',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE_NAME']->value);?>
<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['CRON_RECORD_MODEL']->value->isRunning()){?><?php echo vtranslate('LBL_RUNNING',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE_NAME']->value);?>
<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['CRON_RECORD_MODEL']->value->isEnabled()){?>
        <?php if ($_smarty_tpl->tpl_vars['CRON_RECORD_MODEL']->value->hadTimedout){?>
            <?php echo vtranslate('LBL_LAST_SCAN_TIMED_OUT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE_NAME']->value);?>
.
        <?php }elseif($_smarty_tpl->tpl_vars['CRON_RECORD_MODEL']->value->getLastEndDateTime()!=''){?>
            <?php echo vtranslate('LBL_LAST_SCAN_AT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE_NAME']->value);?>

            <?php echo $_smarty_tpl->tpl_vars['CRON_RECORD_MODEL']->value->getLastEndDateTime();?>

            &
            <?php echo vtranslate('LBL_TIME_TAKEN',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE_NAME']->value);?>
:
            <?php echo $_smarty_tpl->tpl_vars['CRON_RECORD_MODEL']->value->getTimeDiff();?>

            <?php echo vtranslate('LBL_SHORT_SECONDS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE_NAME']->value);?>

        <?php }else{ ?>

        <?php }?>
<?php }?>
</b>
</div><?php }} ?>