<?php
/* Smarty version 3.1.39, created on 2025-03-06 09:08:09
  from 'C:\laragon\www\youradress\modules\hotelreservationsystem\views\templates\hook\display-nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67c965f9d94798_30861488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2f2041277db178a4ba317a4dbc7556c43ebbfef' => 
    array (
      0 => 'C:\\laragon\\www\\youradress\\modules\\hotelreservationsystem\\views\\templates\\hook\\display-nav.tpl',
      1 => 1740149460,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67c965f9d94798_30861488 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['email']->value != '') {?>
    <div class="contact-item">
        <i class="icon-envelope-o"></i>
        <a href="mailto:contact@youradress.com">contact@youradress.com</a>
    </div>
<?php }
if ($_smarty_tpl->tpl_vars['phone']->value != '') {?>
    <div class="contact-item">
        <i class="icon-phone"></i>
        <a href="tel:+212 6 67 291 575">+212 6 67 291 575</a>
    </div>
<?php }
}
}
