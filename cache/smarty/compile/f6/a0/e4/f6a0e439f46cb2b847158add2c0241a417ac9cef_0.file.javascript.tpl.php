<?php
/* Smarty version 3.1.39, created on 2025-03-07 10:35:15
  from 'C:\laragon\www\youradress\themes\javascript.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67cacbe3368959_36137984',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6a0e439f46cb2b847158add2c0241a417ac9cef' => 
    array (
      0 => 'C:\\laragon\\www\\youradress\\themes\\javascript.tpl',
      1 => 1728567308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67cacbe3368959_36137984 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\youradress\\tools\\smarty\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
if ((isset($_smarty_tpl->tpl_vars['js_def']->value)) && is_array($_smarty_tpl->tpl_vars['js_def']->value) && count($_smarty_tpl->tpl_vars['js_def']->value)) {
echo '<script'; ?>
 type="text/javascript">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['js_def']->value, 'def', false, 'k');
$_smarty_tpl->tpl_vars['def']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['def']->value) {
$_smarty_tpl->tpl_vars['def']->do_else = false;
if (!empty($_smarty_tpl->tpl_vars['k']->value) && is_string($_smarty_tpl->tpl_vars['k']->value)) {
if (is_bool($_smarty_tpl->tpl_vars['def']->value)) {?>
var <?php echo $_smarty_tpl->tpl_vars['k']->value;?>
 = <?php echo var_export($_smarty_tpl->tpl_vars['def']->value,true);?>
;
<?php } elseif (is_int($_smarty_tpl->tpl_vars['def']->value)) {?>
var <?php echo $_smarty_tpl->tpl_vars['k']->value;?>
 = <?php echo intval($_smarty_tpl->tpl_vars['def']->value);?>
;
<?php } elseif (is_float($_smarty_tpl->tpl_vars['def']->value)) {?>
var <?php echo $_smarty_tpl->tpl_vars['k']->value;?>
 = <?php echo smarty_modifier_replace(floatval($_smarty_tpl->tpl_vars['def']->value),',','.');?>
;
<?php } elseif (is_string($_smarty_tpl->tpl_vars['def']->value)) {?>
var <?php echo $_smarty_tpl->tpl_vars['k']->value;?>
 = '<?php echo strval($_smarty_tpl->tpl_vars['def']->value);?>
';
<?php } elseif (is_array($_smarty_tpl->tpl_vars['def']->value) || is_object($_smarty_tpl->tpl_vars['def']->value)) {?>
var <?php echo $_smarty_tpl->tpl_vars['k']->value;?>
 = <?php echo json_encode($_smarty_tpl->tpl_vars['def']->value);?>
;
<?php } elseif (is_null($_smarty_tpl->tpl_vars['def']->value)) {?>
var <?php echo $_smarty_tpl->tpl_vars['k']->value;?>
 = null;
<?php } else { ?>
var <?php echo $_smarty_tpl->tpl_vars['k']->value;?>
 = '<?php echo addcslashes($_smarty_tpl->tpl_vars['def']->value,'\'');?>
';
<?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
echo '</script'; ?>
>
<?php }
if ((isset($_smarty_tpl->tpl_vars['js_files']->value)) && count($_smarty_tpl->tpl_vars['js_files']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['js_files']->value, 'js_uri', false, 'k');
$_smarty_tpl->tpl_vars['js_uri']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['js_uri']->value) {
$_smarty_tpl->tpl_vars['js_uri']->do_else = false;
echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js_uri']->value;?>
"><?php echo '</script'; ?>
>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
if ((isset($_smarty_tpl->tpl_vars['js_inline']->value)) && count($_smarty_tpl->tpl_vars['js_inline']->value)) {
echo '<script'; ?>
 type="text/javascript">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['js_inline']->value, 'inline', false, 'k');
$_smarty_tpl->tpl_vars['inline']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['inline']->value) {
$_smarty_tpl->tpl_vars['inline']->do_else = false;
echo $_smarty_tpl->tpl_vars['inline']->value;?>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
echo '</script'; ?>
>
<?php }
}
}
