<?php
/* Smarty version 3.1.39, created on 2025-02-28 11:33:57
  from 'C:\laragon\www\youradress\admin312yrca9v\themes\default\template\helpers\tree\tree_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67c19f25afc3f6_24069479',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '335eed2cf1d276f339683dcd5ebe0e3085bfac9d' => 
    array (
      0 => 'C:\\laragon\\www\\youradress\\admin312yrca9v\\themes\\default\\template\\helpers\\tree\\tree_header.tpl',
      1 => 1728567308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67c19f25afc3f6_24069479 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-panel-heading-controls clearfix">
	<?php if ((isset($_smarty_tpl->tpl_vars['title']->value))) {?><i class="icon-tag"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl ) );
}?>
	<?php if ((isset($_smarty_tpl->tpl_vars['toolbar']->value))) {
echo $_smarty_tpl->tpl_vars['toolbar']->value;
}?>
</div><?php }
}
