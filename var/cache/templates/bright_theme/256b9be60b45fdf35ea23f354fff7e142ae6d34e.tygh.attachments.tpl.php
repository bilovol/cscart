<?php /* Smarty version Smarty-3.1.21, created on 2019-01-09 18:14:10
         compiled from "/var/www/html/design/themes/responsive/templates/addons/attachments/blocks/product_tabs/attachments.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3015020555c360fc2c0fb40-65873254%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '256b9be60b45fdf35ea23f354fff7e142ae6d34e' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/addons/attachments/blocks/product_tabs/attachments.tpl',
      1 => 1547046475,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3015020555c360fc2c0fb40-65873254',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'attachments_data' => 0,
    'file' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c360fc2c20f24_05799499',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c360fc2c20f24_05799499')) {function content_5c360fc2c20f24_05799499($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_formatfilesize')) include '/var/www/html/app/functions/smarty_plugins/modifier.formatfilesize.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('download','download'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['attachments_data']->value) {?>
    <div class="attachments" id="content_attachments">
    <?php  $_smarty_tpl->tpl_vars["file"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["file"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['attachments_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["file"]->key => $_smarty_tpl->tpl_vars["file"]->value) {
$_smarty_tpl->tpl_vars["file"]->_loop = true;
?>
        <p class="attachment__item">
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['file']->value['description'], ENT_QUOTES, 'UTF-8');?>
 (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['file']->value['filename'], ENT_QUOTES, 'UTF-8');?>
, <?php echo smarty_modifier_formatfilesize($_smarty_tpl->tpl_vars['file']->value['filesize']);?>
) [<a class="attachment__a cm-no-ajax" href="<?php echo htmlspecialchars(fn_url("attachments.getfile?attachment_id=".((string)$_smarty_tpl->tpl_vars['file']->value['attachment_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("download");?>
</a>]
        </p>
    <?php } ?>
    </div>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/attachments/blocks/product_tabs/attachments.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/attachments/blocks/product_tabs/attachments.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php if ($_smarty_tpl->tpl_vars['attachments_data']->value) {?>
    <div class="attachments" id="content_attachments">
    <?php  $_smarty_tpl->tpl_vars["file"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["file"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['attachments_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["file"]->key => $_smarty_tpl->tpl_vars["file"]->value) {
$_smarty_tpl->tpl_vars["file"]->_loop = true;
?>
        <p class="attachment__item">
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['file']->value['description'], ENT_QUOTES, 'UTF-8');?>
 (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['file']->value['filename'], ENT_QUOTES, 'UTF-8');?>
, <?php echo smarty_modifier_formatfilesize($_smarty_tpl->tpl_vars['file']->value['filesize']);?>
) [<a class="attachment__a cm-no-ajax" href="<?php echo htmlspecialchars(fn_url("attachments.getfile?attachment_id=".((string)$_smarty_tpl->tpl_vars['file']->value['attachment_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("download");?>
</a>]
        </p>
    <?php } ?>
    </div>
<?php }
}?><?php }} ?>
