<?php
/* Smarty version 3.1.39, created on 2025-02-27 17:25:14
  from 'C:\laragon\www\youradress\admin312yrca9v\themes\default\template\controllers\logs\employee_field.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67c09ffa826b57_23402650',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44af8dbd358468713604c08ff82f332adbb0a60b' => 
    array (
      0 => 'C:\\laragon\\www\\youradress\\admin312yrca9v\\themes\\default\\template\\controllers\\logs\\employee_field.tpl',
      1 => 1728567308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67c09ffa826b57_23402650 (Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['employee_name']->value, ENT_QUOTES, 'UTF-8', true);?>

<br />
(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['employee_email']->value, ENT_QUOTES, 'UTF-8', true);?>
)
<?php }
}
