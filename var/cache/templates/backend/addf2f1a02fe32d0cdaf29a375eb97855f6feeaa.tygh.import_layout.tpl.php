<?php /* Smarty version Smarty-3.1.21, created on 2019-01-09 18:24:49
         compiled from "/var/www/html/design/backend/templates/views/block_manager/components/import_layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11315506775c361241d4a953-81643499%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'addf2f1a02fe32d0cdaf29a375eb97855f6feeaa' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/block_manager/components/import_layout.tpl',
      1 => 1545828838,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11315506775c361241d4a953-81643499',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'images_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c361241d59ca5_53245977',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c361241d59ca5_53245977')) {function content_5c361241d59ca5_53245977($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('create_new_layout','update_current_layout','clean_up_all_locations_on_import','override_by_dispatch','import'));
?>
<div class="install-addon">

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="form-horizontal form-edit" name="import_locations" enctype="multipart/form-data">

    <div class="install-addon-wrapper">
        <img class="install-addon-banner" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/addon_box.png" width="151" height="141" />

        <?php echo $_smarty_tpl->getSubTemplate ("common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('var_name'=>"filename[0]",'allowed_ext'=>"xml"), 0);?>


    </div>

    <div class="control-group">
        <div class="controls">
            <label class="radio" for="sw_import_style_options_suffix_create">
            <input type="radio" id="sw_import_style_options_suffix_create" name="import_style" value="create" checked="checked" class="cm-switch-availability cm-switch-visibility cm-switch-inverse" />
            <?php echo $_smarty_tpl->__("create_new_layout");?>
</label>

            <label class="radio" for="sw_import_style_options_suffix_update">
            <input type="radio" id="sw_import_style_options_suffix_update" name="import_style" value="update" class="cm-switch-availability cm-switch-visibility"/>
            <?php echo $_smarty_tpl->__("update_current_layout");?>
</label>

            <input type="hidden" name="clean_up" value="N" />
            <input type="hidden" name="override_by_dispatch" value="N" />

            <div class="hidden shift-left" id="import_style_options">
                <label class="checkbox" for="elm_clean_up_export">
                <input id="elm_clean_up_export" type="checkbox" name="clean_up" value="Y" disabled />
                <?php echo $_smarty_tpl->__("clean_up_all_locations_on_import");?>
</label>
                <label class="checkbox" for="elm_override_by_dispatch">
                <input id="elm_override_by_dispatch" type="checkbox" name="override_by_dispatch" value="Y" checked="checked" disabled />
                <?php echo $_smarty_tpl->__("override_by_dispatch");?>
</label>
            </div>
        </div>
    </div>

    <div class="buttons-container">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("import"),'but_name'=>"dispatch[block_manager.import_layout]",'cancel_action'=>"close"), 0);?>

    </div>
</form>

</div>
<?php }} ?>
