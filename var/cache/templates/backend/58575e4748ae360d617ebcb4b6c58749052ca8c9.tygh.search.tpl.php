<?php /* Smarty version Smarty-3.1.21, created on 2019-02-04 13:39:46
         compiled from "/home/bitabi00/bitabit.com.ua/cscart/design/backend/templates/buttons/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8453677245c581672b87497-24629502%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58575e4748ae360d617ebcb4b6c58749052ca8c9' => 
    array (
      0 => '/home/bitabi00/bitabit.com.ua/cscart/design/backend/templates/buttons/search.tpl',
      1 => 1549269838,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8453677245c581672b87497-24629502',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'but_onclick' => 0,
    'but_href' => 0,
    'but_role' => 0,
    'but_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c581672b91812_55682073',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c581672b91812_55682073')) {function content_5c581672b91812_55682073($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('search'));
?>

<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("search"),'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value,'but_name'=>$_smarty_tpl->tpl_vars['but_name']->value), 0);?>
<?php }} ?>
