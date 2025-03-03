<?php
/* Smarty version 3.1.39, created on 2025-03-03 13:22:11
  from 'C:\laragon\www\youradress\modules\blocknavigationmenu\views\templates\hook\navigationMenuBlock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67c5ad03dcac67_45726812',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac80a154d1b38d512b6dd80406d45a3d7c7bd6ca' => 
    array (
      0 => 'C:\\laragon\\www\\youradress\\modules\\blocknavigationmenu\\views\\templates\\hook\\navigationMenuBlock.tpl',
      1 => 1740584151,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67c5ad03dcac67_45726812 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169938076967c5ad03dc53d2_00563698', 'navigation_menu');
?>

<?php }
/* {block 'displayExternalNavigationHook'} */
class Block_129951546267c5ad03dc6930_60113723 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayExternalNavigationHook"),$_smarty_tpl ) );?>

					<?php
}
}
/* {/block 'displayExternalNavigationHook'} */
/* {block 'navigation_menu'} */
class Block_169938076967c5ad03dc53d2_00563698 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navigation_menu' => 
  array (
    0 => 'Block_169938076967c5ad03dc53d2_00563698',
  ),
  'displayExternalNavigationHook' => 
  array (
    0 => 'Block_129951546267c5ad03dc6930_60113723',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="header-top-item">
		<button type="button" class="nav_toggle">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>

	<div id="menu_cont" class="menu_cont_right">
		<div class="row margin-lr-0">
			<div class="col-xs-12 col-sm-12">
				<div class="row margin-lr-0">
					<span class="pull-right close_navbar"><i class="icon-close"></i></span>
				</div>
				<div class="row">
					<ul class="nav nav-pills nav-stacked wk-nav-style">
						<li>
							<a class="navigation-link" href="#">Hébergements</a>
						</li>
						<li>
							<a class="navigation-link" href="#">Conseils de Voyage</a>
						</li>
						<li>
							<a class="navigation-link" href="/content/4-propos-de-nous">À Propos</a>
						</li>
						<li>
							<a class="navigation-link" href="#">Contact</a>
						</li>
											</ul>
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_129951546267c5ad03dc6930_60113723', 'displayExternalNavigationHook', $this->tplIndex);
?>

				</div>
			</div>
		</div>
	</div>
<?php
}
}
/* {/block 'navigation_menu'} */
}
