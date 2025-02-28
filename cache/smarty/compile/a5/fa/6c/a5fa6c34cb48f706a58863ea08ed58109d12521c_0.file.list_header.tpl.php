<?php
/* Smarty version 3.1.39, created on 2025-02-27 17:25:14
  from 'C:\laragon\www\youradress\admin312yrca9v\themes\default\template\controllers\logs\helpers\list\list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67c09ffa7284d1_05203711',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5fa6c34cb48f706a58863ea08ed58109d12521c' => 
    array (
      0 => 'C:\\laragon\\www\\youradress\\admin312yrca9v\\themes\\default\\template\\controllers\\logs\\helpers\\list\\list_header.tpl',
      1 => 1728567308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67c09ffa7284d1_05203711 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_52475141867c09ffa725108_64856279', "override_header");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block "override_header"} */
class Block_52475141867c09ffa725108_64856279 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_header' => 
  array (
    0 => 'Block_52475141867c09ffa725108_64856279',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<div class="panel">
		<h3>
			<i class="icon-warning-sign"></i>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Severity levels'),$_smarty_tpl ) );?>

		</h3>
		<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Meaning of severity levels:'),$_smarty_tpl ) );?>
</p>
		<ol>
			<li><span class="badge badge-success"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Informative only'),$_smarty_tpl ) );?>
</span></li>
			<li><span class="badge badge-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Warning'),$_smarty_tpl ) );?>
</span></li>
			<li><span class="badge badge-danger"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Error'),$_smarty_tpl ) );?>
</span></li>
			<li><span class="badge badge-critical"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Major issue (crash)!'),$_smarty_tpl ) );?>
</span></li>
		</ol>
	</div>

<?php
}
}
/* {/block "override_header"} */
}
