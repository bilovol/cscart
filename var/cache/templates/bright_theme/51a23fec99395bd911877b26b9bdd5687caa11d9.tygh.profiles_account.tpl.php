<?php /* Smarty version Smarty-3.1.21, created on 2019-01-09 18:14:28
         compiled from "/var/www/html/design/themes/responsive/templates/views/profiles/components/profiles_account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4396720325c360fd4cc6a46-60426883%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51a23fec99395bd911877b26b9bdd5687caa11d9' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/views/profiles/components/profiles_account.tpl',
      1 => 1547046472,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '4396720325c360fd4cc6a46-60426883',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'nothing_extra' => 0,
    'user_data' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c360fd4ce3d68_09152015',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c360fd4ce3d68_09152015')) {function content_5c360fd4ce3d68_09152015($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/html/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('user_account_info','email','password','confirm_password','user_account_info','email','password','confirm_password'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if (!$_smarty_tpl->tpl_vars['nothing_extra']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("user_account_info")), 0);?>

<?php }?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"profiles:account_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"profiles:account_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="ty-control-group">
        <label for="email" class="ty-control-group__title cm-required cm-email cm-trim"><?php echo $_smarty_tpl->__("email");?>
</label>
        <input type="text" id="email" name="user_data[email]" size="32" maxlength="128" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['email'], ENT_QUOTES, 'UTF-8');?>
" class="ty-input-text cm-focus" />
    </div>

    <div class="ty-control-group">
        <label for="password1" class="ty-control-group__title cm-required cm-password"><?php echo $_smarty_tpl->__("password");?>
</label>
        <input type="password" id="password1" name="user_data[password1]" size="32" maxlength="32" value="<?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode']=="update") {?>            <?php }?>" class="ty-input-text cm-autocomplete-off" />
    </div>

    <div class="ty-control-group">
        <label for="password2" class="ty-control-group__title cm-required cm-password"><?php echo $_smarty_tpl->__("confirm_password");?>
</label>
        <input type="password" id="password2" name="user_data[password2]" size="32" maxlength="32" value="<?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode']=="update") {?>            <?php }?>" class="ty-input-text cm-autocomplete-off" />
    </div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"profiles:account_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/profiles/components/profiles_account.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/profiles/components/profiles_account.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if (!$_smarty_tpl->tpl_vars['nothing_extra']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("user_account_info")), 0);?>

<?php }?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"profiles:account_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"profiles:account_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="ty-control-group">
        <label for="email" class="ty-control-group__title cm-required cm-email cm-trim"><?php echo $_smarty_tpl->__("email");?>
</label>
        <input type="text" id="email" name="user_data[email]" size="32" maxlength="128" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['email'], ENT_QUOTES, 'UTF-8');?>
" class="ty-input-text cm-focus" />
    </div>

    <div class="ty-control-group">
        <label for="password1" class="ty-control-group__title cm-required cm-password"><?php echo $_smarty_tpl->__("password");?>
</label>
        <input type="password" id="password1" name="user_data[password1]" size="32" maxlength="32" value="<?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode']=="update") {?>            <?php }?>" class="ty-input-text cm-autocomplete-off" />
    </div>

    <div class="ty-control-group">
        <label for="password2" class="ty-control-group__title cm-required cm-password"><?php echo $_smarty_tpl->__("confirm_password");?>
</label>
        <input type="password" id="password2" name="user_data[password2]" size="32" maxlength="32" value="<?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode']=="update") {?>            <?php }?>" class="ty-input-text cm-autocomplete-off" />
    </div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"profiles:account_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}?><?php }} ?>
