<?php
/* Smarty version 3.1.39, created on 2025-02-28 12:29:21
  from 'C:\laragon\www\youradress\modules\hotelreservationsystem\views\templates\hook\external-navigation-hook.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67c1ac21d21cb4_82899079',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43abebe5a4d402d0f0445c2538a1cb00177d1f0c' => 
    array (
      0 => 'C:\\laragon\\www\\youradress\\modules\\hotelreservationsystem\\views\\templates\\hook\\external-navigation-hook.tpl',
      1 => 1740411666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67c1ac21d21cb4_82899079 (Smarty_Internal_Template $_smarty_tpl) {
if (($_smarty_tpl->tpl_vars['email']->value != '') || ($_smarty_tpl->tpl_vars['phone']->value != '')) {?>
    <ul class="nav nav-pills nav-stacked visible-xs wk-nav-style">
        <?php if ($_smarty_tpl->tpl_vars['email']->value != '') {?>
            <li>
                <a href="mailto:contact@youradress.com">
                    <i class="icon-envelope-o"></i>
                    contact@youradress.com
                </a>
            </li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['phone']->value != '') {?>
            <li>
                <a href="tel:+212 6 67 291 575">
                    <i class="icon-phone"></i>
                    +212 6 67 291 575
                </a>
            </li>
        <?php }?>
    </ul>
<?php }
}
}
