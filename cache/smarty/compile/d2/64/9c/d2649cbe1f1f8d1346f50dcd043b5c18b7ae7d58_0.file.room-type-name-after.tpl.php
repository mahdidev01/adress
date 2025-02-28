<?php
/* Smarty version 3.1.39, created on 2025-02-27 17:51:24
  from 'C:\laragon\www\youradress\modules\qlohotelreview\views\templates\hook\room-type-name-after.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67c0a61c5028b6_67583176',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2649cbe1f1f8d1346f50dcd043b5c18b7ae7d58' => 
    array (
      0 => 'C:\\laragon\\www\\youradress\\modules\\qlohotelreview\\views\\templates\\hook\\room-type-name-after.tpl',
      1 => 1728567308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67c0a61c5028b6_67583176 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div>
    <span class="raty readonly" data-score="<?php echo $_smarty_tpl->tpl_vars['avg_rating']->value;?>
"></span>
    <span class="num_reviews"><?php echo $_smarty_tpl->tpl_vars['num_reviews']->value;?>
 <?php if (intval($_smarty_tpl->tpl_vars['num_reviews']->value) > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Review(s)','mod'=>'qlohotelreview'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Review','mod'=>'qlohotelreview'),$_smarty_tpl ) );
}?></span>
</div>
<?php }
}
