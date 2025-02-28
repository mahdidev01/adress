<?php
/* Smarty version 3.1.39, created on 2025-02-27 17:18:39
  from 'C:\laragon\www\youradress\admin312yrca9v\themes\default\template\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67c09e6f2ec399_82182341',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9be380dd91c6bfa3246e72639c252cf38b264898' => 
    array (
      0 => 'C:\\laragon\\www\\youradress\\admin312yrca9v\\themes\\default\\template\\layout.tpl',
      1 => 1728567308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./alerts.tpl' => 1,
  ),
),false)) {
function content_67c09e6f2ec399_82182341 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['header']->value;?>

<?php $_smarty_tpl->_subTemplateRender('file:./alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo $_smarty_tpl->tpl_vars['page']->value;?>

<?php echo $_smarty_tpl->tpl_vars['footer']->value;?>

<?php }
}
