<?php
/* Smarty version 3.1.39, created on 2025-03-06 09:13:15
  from 'C:\laragon\www\youradress\modules\wkroomsearchblock\views\templates\front\hotel-options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67c9672b547ad3_89254510',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28e5ec65e63582fa68f581e4a36a44e38eabe22a' => 
    array (
      0 => 'C:\\laragon\\www\\youradress\\modules\\wkroomsearchblock\\views\\templates\\front\\hotel-options.tpl',
      1 => 1728567308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67c9672b547ad3_89254510 (Smarty_Internal_Template $_smarty_tpl) {
?>
<option value=""></option>
<?php if ((isset($_smarty_tpl->tpl_vars['hotels_info']->value)) && is_array($_smarty_tpl->tpl_vars['hotels_info']->value)) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hotels_info']->value, 'hotel_info');
$_smarty_tpl->tpl_vars['hotel_info']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hotel_info']->value) {
$_smarty_tpl->tpl_vars['hotel_info']->do_else = false;
?>
        <option class="search_result_li" data-id-hotel="<?php echo $_smarty_tpl->tpl_vars['hotel_info']->value['id_hotel'];?>
" data-hotel-cat-id="<?php echo $_smarty_tpl->tpl_vars['hotel_info']->value['id_category'];?>
" data-max_order_date="<?php echo $_smarty_tpl->tpl_vars['hotel_info']->value['max_order_date'];?>
" data-preparation_time="<?php echo $_smarty_tpl->tpl_vars['hotel_info']->value['preparation_time'];?>
" tabindex="-1">
            <?php echo $_smarty_tpl->tpl_vars['hotel_info']->value['hotel_name'];?>

        </option>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
