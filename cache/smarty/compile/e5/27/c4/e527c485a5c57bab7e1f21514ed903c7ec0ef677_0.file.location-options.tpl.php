<?php
/* Smarty version 3.1.39, created on 2025-02-28 11:28:29
  from 'C:\laragon\www\youradress\modules\wkroomsearchblock\views\templates\front\location-options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67c19dddc4a011_94671947',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e527c485a5c57bab7e1f21514ed903c7ec0ef677' => 
    array (
      0 => 'C:\\laragon\\www\\youradress\\modules\\wkroomsearchblock\\views\\templates\\front\\location-options.tpl',
      1 => 1728567308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67c19dddc4a011_94671947 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['location_categories']->value)) && is_array($_smarty_tpl->tpl_vars['location_categories']->value)) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['location_categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
        <li class="search_result_li" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id_category'];?>
" tabindex="-1"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
