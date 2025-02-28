<?php
/* Smarty version 3.1.39, created on 2025-02-28 12:30:40
  from 'C:\laragon\www\youradress\admin312yrca9v\themes\default\template\controllers\products\helpers\list\list_content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67c1ac70619668_81527157',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65cc26e4dd2e17dea25f14330000d2e166f605a5' => 
    array (
      0 => 'C:\\laragon\\www\\youradress\\admin312yrca9v\\themes\\default\\template\\controllers\\products\\helpers\\list\\list_content.tpl',
      1 => 1728567308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67c1ac70619668_81527157 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9730199167c1ac7060efd1_99461854', 'td_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'helpers/list/list_content.tpl');
}
/* {block 'td_content'} */
class Block_9730199167c1ac7060efd1_99461854 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'td_content' => 
  array (
    0 => 'Block_9730199167c1ac7060efd1_99461854',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ((isset($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value])) && (isset($_smarty_tpl->tpl_vars['params']->value['position']))) {?>
		<?php if ($_smarty_tpl->tpl_vars['order_by']->value == 'position' && $_smarty_tpl->tpl_vars['order_way']->value != 'DESC') {?>
			<?php $_smarty_tpl->_assignInScope('filters_has_value_no_location_hotel', false);?>

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields_display']->value, 'params', false, 'key');
$_smarty_tpl->tpl_vars['params']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['params']->value) {
$_smarty_tpl->tpl_vars['params']->do_else = false;
?>
				<?php if ($_smarty_tpl->tpl_vars['key']->value != 'id_category_default' && ((isset($_smarty_tpl->tpl_vars['params']->value['value'])) && $_smarty_tpl->tpl_vars['params']->value['value'] !== false && $_smarty_tpl->tpl_vars['params']->value['value'] !== '')) {?>
					<?php if (is_array($_smarty_tpl->tpl_vars['params']->value['value']) && trim(implode('',$_smarty_tpl->tpl_vars['params']->value['value'])) == '') {?>
						<?php continue 1;?>
					<?php }?>

					<?php $_smarty_tpl->_assignInScope('filters_has_value_no_location_hotel', true);?>
					<?php break 1;?>
				<?php }?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

			<?php if (!$_smarty_tpl->tpl_vars['filters_has_value_no_location_hotel']->value) {?>
				<div class="dragGroup">
					<div class="positions">
						<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]['position']+1;?>

					</div>
				</div>
			<?php } else { ?>
				<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]['position']+1;?>

			<?php }?>
		<?php } else { ?>
			<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]['position']+1;?>

		<?php }?>
	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }
}
}
/* {/block 'td_content'} */
}
