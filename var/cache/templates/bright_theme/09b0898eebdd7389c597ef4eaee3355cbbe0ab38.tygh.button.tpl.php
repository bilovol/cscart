<?php /* Smarty version Smarty-3.1.21, created on 2019-02-04 12:26:06
         compiled from "/home/bitabi00/bitabit.com.ua/cscart/design/themes/responsive/templates/buttons/button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1429693615c58052e2ae341-38388809%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09b0898eebdd7389c597ef4eaee3355cbbe0ab38' => 
    array (
      0 => '/home/bitabi00/bitabit.com.ua/cscart/design/themes/responsive/templates/buttons/button.tpl',
      1 => 1549269839,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1429693615c58052e2ae341-38388809',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'but_role' => 0,
    'but_name' => 0,
    'but_id' => 0,
    'but_meta' => 0,
    'but_onclick' => 0,
    'but_title' => 0,
    'but_text' => 0,
    'but_extra' => 0,
    'suffix' => 0,
    'but_scroll' => 0,
    'but_href' => 0,
    'but_target' => 0,
    'but_rel' => 0,
    'but_external_click_id' => 0,
    'but_target_form' => 0,
    'but_target_id' => 0,
    'but_icon' => 0,
    'allow_href' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c58052e4f9449_15613963',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c58052e4f9449_15613963')) {function content_5c58052e4f9449_15613963($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/home/bitabi00/bitabit.com.ua/cscart/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('remove','remove'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['but_role']->value=="action") {?>
    <?php $_smarty_tpl->tpl_vars["suffix"] = new Smarty_variable("-action", null, 0);?>
    <?php $_smarty_tpl->tpl_vars["file_prefix"] = new Smarty_variable("action_", null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['but_role']->value=="act") {?>
    <?php $_smarty_tpl->tpl_vars["suffix"] = new Smarty_variable("-act", null, 0);?>
    <?php $_smarty_tpl->tpl_vars["file_prefix"] = new Smarty_variable("action_", null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['but_role']->value=="disabled_big") {?>
    <?php $_smarty_tpl->tpl_vars["suffix"] = new Smarty_variable("-disabled-big", null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['but_role']->value=="big") {?>
    <?php $_smarty_tpl->tpl_vars["suffix"] = new Smarty_variable("-big", null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['but_role']->value=="delete") {?>
    <?php $_smarty_tpl->tpl_vars["suffix"] = new Smarty_variable("-delete", null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['but_role']->value=="tool") {?>
    <?php $_smarty_tpl->tpl_vars["suffix"] = new Smarty_variable("-tool", null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["suffix"] = new Smarty_variable('', null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['but_name']->value&&$_smarty_tpl->tpl_vars['but_role']->value!="text"&&$_smarty_tpl->tpl_vars['but_role']->value!="act"&&$_smarty_tpl->tpl_vars['but_role']->value!="delete") {?> 
    <button <?php if ($_smarty_tpl->tpl_vars['but_id']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_meta']->value, ENT_QUOTES, 'UTF-8');?>
 ty-btn" type="submit" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_name']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['but_onclick']->value) {?>onclick="<?php echo $_smarty_tpl->tpl_vars['but_onclick']->value;?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_title']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_text']->value, ENT_QUOTES, 'UTF-8');?>
</button>

<?php } elseif ($_smarty_tpl->tpl_vars['but_role']->value=="text"||$_smarty_tpl->tpl_vars['but_role']->value=="act"||$_smarty_tpl->tpl_vars['but_role']->value=="edit") {?> 
    <a <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_extra']->value, ENT_QUOTES, 'UTF-8');?>
 class="ty-btn <?php if ($_smarty_tpl->tpl_vars['but_meta']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['but_meta']->value, ENT_QUOTES, 'UTF-8');?>
 <?php }
if ($_smarty_tpl->tpl_vars['but_name']->value) {?>cm-submit <?php }?>text-button<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['but_scroll']->value) {?>cm-scroll <?php }?>"<?php if ($_smarty_tpl->tpl_vars['but_id']->value) {?> id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_name']->value) {?> data-ca-dispatch="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_name']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_href']->value) {?> href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['but_href']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_scroll']->value) {?> data-ca-scroll="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_scroll']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_onclick']->value) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['but_onclick']->value;?>
 return false;"<?php }
if ($_smarty_tpl->tpl_vars['but_target']->value) {?> target="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_target']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_rel']->value) {?> rel="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_rel']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_external_click_id']->value) {?> data-ca-external-click-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_external_click_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_form']->value) {?> data-ca-target-form="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_target_form']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_id']->value) {?> data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_target_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_title']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php if ($_smarty_tpl->tpl_vars['but_icon']->value) {?><i class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_icon']->value, ENT_QUOTES, 'UTF-8');?>
"></i><?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['but_text']->value, ENT_QUOTES, 'UTF-8');?>
</a>

<?php } elseif ($_smarty_tpl->tpl_vars['but_role']->value=="delete") {?>

    <a <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_extra']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['but_id']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_name']->value) {?> data-ca-dispatch="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_name']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_href']->value) {?>href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['but_href']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_onclick']->value) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['but_onclick']->value;?>
 return false;"<?php }
if ($_smarty_tpl->tpl_vars['but_meta']->value) {?> class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_meta']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target']->value) {?> target="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_target']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_rel']->value) {?> rel="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_rel']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_external_click_id']->value) {?> data-ca-external-click-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_external_click_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_form']->value) {?> data-ca-target-form="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_target_form']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_id']->value) {?> data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_target_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_title']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><i title="<?php echo $_smarty_tpl->__("remove");?>
" class="ty-icon-cancel-circle"></i></a>

<?php } elseif ($_smarty_tpl->tpl_vars['but_role']->value=="icon") {?> 
    <a <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_extra']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['but_id']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_href']->value) {?> href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['but_href']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_onclick']->value) {?>onclick="<?php echo $_smarty_tpl->tpl_vars['but_onclick']->value;?>
;<?php if (!$_smarty_tpl->tpl_vars['allow_href']->value) {?> return false;<?php }?>"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_target']->value) {?>target="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_target']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_rel']->value) {?> rel="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_rel']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_external_click_id']->value) {?> data-ca-external-click-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_external_click_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_form']->value) {?> data-ca-target-form="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_target_form']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_id']->value) {?> data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_target_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="ty-btn <?php if ($_smarty_tpl->tpl_vars['but_meta']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['but_meta']->value, ENT_QUOTES, 'UTF-8');
}?>"<?php if ($_smarty_tpl->tpl_vars['but_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_title']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_text']->value, ENT_QUOTES, 'UTF-8');?>
</a>

<?php } else { ?> 

    <a <?php if ($_smarty_tpl->tpl_vars['but_href']->value) {?>href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['but_href']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_onclick']->value) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['but_onclick']->value;?>
 return false;"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_target']->value) {?>target="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_target']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="ty-btn <?php if ($_smarty_tpl->tpl_vars['but_meta']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['but_meta']->value, ENT_QUOTES, 'UTF-8');?>
 <?php }?>" <?php if ($_smarty_tpl->tpl_vars['but_rel']->value) {?> rel="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_rel']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_external_click_id']->value) {?> data-ca-external-click-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_external_click_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_form']->value) {?> data-ca-target-form="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_target_form']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_id']->value) {?> data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_target_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_title']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php if ($_smarty_tpl->tpl_vars['but_icon']->value) {?><i class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_icon']->value, ENT_QUOTES, 'UTF-8');?>
"></i><?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['but_text']->value, ENT_QUOTES, 'UTF-8');?>
</a>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="buttons/button.tpl" id="<?php echo smarty_function_set_id(array('name'=>"buttons/button.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['but_role']->value=="action") {?>
    <?php $_smarty_tpl->tpl_vars["suffix"] = new Smarty_variable("-action", null, 0);?>
    <?php $_smarty_tpl->tpl_vars["file_prefix"] = new Smarty_variable("action_", null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['but_role']->value=="act") {?>
    <?php $_smarty_tpl->tpl_vars["suffix"] = new Smarty_variable("-act", null, 0);?>
    <?php $_smarty_tpl->tpl_vars["file_prefix"] = new Smarty_variable("action_", null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['but_role']->value=="disabled_big") {?>
    <?php $_smarty_tpl->tpl_vars["suffix"] = new Smarty_variable("-disabled-big", null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['but_role']->value=="big") {?>
    <?php $_smarty_tpl->tpl_vars["suffix"] = new Smarty_variable("-big", null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['but_role']->value=="delete") {?>
    <?php $_smarty_tpl->tpl_vars["suffix"] = new Smarty_variable("-delete", null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['but_role']->value=="tool") {?>
    <?php $_smarty_tpl->tpl_vars["suffix"] = new Smarty_variable("-tool", null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["suffix"] = new Smarty_variable('', null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['but_name']->value&&$_smarty_tpl->tpl_vars['but_role']->value!="text"&&$_smarty_tpl->tpl_vars['but_role']->value!="act"&&$_smarty_tpl->tpl_vars['but_role']->value!="delete") {?> 
    <button <?php if ($_smarty_tpl->tpl_vars['but_id']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_meta']->value, ENT_QUOTES, 'UTF-8');?>
 ty-btn" type="submit" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_name']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['but_onclick']->value) {?>onclick="<?php echo $_smarty_tpl->tpl_vars['but_onclick']->value;?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_title']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_text']->value, ENT_QUOTES, 'UTF-8');?>
</button>

<?php } elseif ($_smarty_tpl->tpl_vars['but_role']->value=="text"||$_smarty_tpl->tpl_vars['but_role']->value=="act"||$_smarty_tpl->tpl_vars['but_role']->value=="edit") {?> 
    <a <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_extra']->value, ENT_QUOTES, 'UTF-8');?>
 class="ty-btn <?php if ($_smarty_tpl->tpl_vars['but_meta']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['but_meta']->value, ENT_QUOTES, 'UTF-8');?>
 <?php }
if ($_smarty_tpl->tpl_vars['but_name']->value) {?>cm-submit <?php }?>text-button<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['but_scroll']->value) {?>cm-scroll <?php }?>"<?php if ($_smarty_tpl->tpl_vars['but_id']->value) {?> id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_name']->value) {?> data-ca-dispatch="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_name']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_href']->value) {?> href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['but_href']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_scroll']->value) {?> data-ca-scroll="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_scroll']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_onclick']->value) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['but_onclick']->value;?>
 return false;"<?php }
if ($_smarty_tpl->tpl_vars['but_target']->value) {?> target="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_target']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_rel']->value) {?> rel="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_rel']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_external_click_id']->value) {?> data-ca-external-click-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_external_click_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_form']->value) {?> data-ca-target-form="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_target_form']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_id']->value) {?> data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_target_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_title']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php if ($_smarty_tpl->tpl_vars['but_icon']->value) {?><i class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_icon']->value, ENT_QUOTES, 'UTF-8');?>
"></i><?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['but_text']->value, ENT_QUOTES, 'UTF-8');?>
</a>

<?php } elseif ($_smarty_tpl->tpl_vars['but_role']->value=="delete") {?>

    <a <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_extra']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['but_id']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_name']->value) {?> data-ca-dispatch="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_name']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_href']->value) {?>href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['but_href']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_onclick']->value) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['but_onclick']->value;?>
 return false;"<?php }
if ($_smarty_tpl->tpl_vars['but_meta']->value) {?> class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_meta']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target']->value) {?> target="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_target']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_rel']->value) {?> rel="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_rel']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_external_click_id']->value) {?> data-ca-external-click-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_external_click_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_form']->value) {?> data-ca-target-form="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_target_form']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_id']->value) {?> data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_target_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_title']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><i title="<?php echo $_smarty_tpl->__("remove");?>
" class="ty-icon-cancel-circle"></i></a>

<?php } elseif ($_smarty_tpl->tpl_vars['but_role']->value=="icon") {?> 
    <a <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_extra']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['but_id']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_href']->value) {?> href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['but_href']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_onclick']->value) {?>onclick="<?php echo $_smarty_tpl->tpl_vars['but_onclick']->value;?>
;<?php if (!$_smarty_tpl->tpl_vars['allow_href']->value) {?> return false;<?php }?>"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_target']->value) {?>target="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_target']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_rel']->value) {?> rel="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_rel']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_external_click_id']->value) {?> data-ca-external-click-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_external_click_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_form']->value) {?> data-ca-target-form="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_target_form']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_id']->value) {?> data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_target_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="ty-btn <?php if ($_smarty_tpl->tpl_vars['but_meta']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['but_meta']->value, ENT_QUOTES, 'UTF-8');
}?>"<?php if ($_smarty_tpl->tpl_vars['but_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_title']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_text']->value, ENT_QUOTES, 'UTF-8');?>
</a>

<?php } else { ?> 

    <a <?php if ($_smarty_tpl->tpl_vars['but_href']->value) {?>href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['but_href']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_onclick']->value) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['but_onclick']->value;?>
 return false;"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_target']->value) {?>target="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_target']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="ty-btn <?php if ($_smarty_tpl->tpl_vars['but_meta']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['but_meta']->value, ENT_QUOTES, 'UTF-8');?>
 <?php }?>" <?php if ($_smarty_tpl->tpl_vars['but_rel']->value) {?> rel="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_rel']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_external_click_id']->value) {?> data-ca-external-click-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_external_click_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_form']->value) {?> data-ca-target-form="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_target_form']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_id']->value) {?> data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_target_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_title']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php if ($_smarty_tpl->tpl_vars['but_icon']->value) {?><i class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_icon']->value, ENT_QUOTES, 'UTF-8');?>
"></i><?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['but_text']->value, ENT_QUOTES, 'UTF-8');?>
</a>
<?php }?>
<?php }?><?php }} ?>
