<?php /* Smarty version Smarty-3.1.21, created on 2019-01-09 18:14:48
         compiled from "/var/www/html/design/themes/responsive/templates/addons/gift_certificates/hooks/checkout/product_info.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8978992855c360fe86ec0f4-51520885%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a0f4162b3f57cb117efeb47daebdb0f386f8953' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/addons/gift_certificates/hooks/checkout/product_info.post.tpl',
      1 => 1547046475,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8978992855c360fe86ec0f4-51520885',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c360fe86f95f8_69537259',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c360fe86f95f8_69537259')) {function content_5c360fe86f95f8_69537259($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
echo $_smarty_tpl->getSubTemplate ("addons/gift_certificates/views/checkout/components/checkout_body.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/gift_certificates/hooks/checkout/product_info.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/gift_certificates/hooks/checkout/product_info.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
echo $_smarty_tpl->getSubTemplate ("addons/gift_certificates/views/checkout/components/checkout_body.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
}?><?php }} ?>
