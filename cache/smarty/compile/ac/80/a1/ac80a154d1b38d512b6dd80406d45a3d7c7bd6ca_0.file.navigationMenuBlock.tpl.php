<?php
/* Smarty version 3.1.39, created on 2025-03-07 10:35:19
  from 'C:\laragon\www\youradress\modules\blocknavigationmenu\views\templates\hook\navigationMenuBlock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67cacbe792e498_58679866',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac80a154d1b38d512b6dd80406d45a3d7c7bd6ca' => 
    array (
      0 => 'C:\\laragon\\www\\youradress\\modules\\blocknavigationmenu\\views\\templates\\hook\\navigationMenuBlock.tpl',
      1 => 1741254452,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67cacbe792e498_58679866 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_62946659267cacbe7928e89_30835173', 'navigation_menu');
?>

<?php }
/* {block 'displayExternalNavigationHook'} */
class Block_205596688767cacbe792a328_29353922 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayExternalNavigationHook"),$_smarty_tpl ) );?>

					<?php
}
}
/* {/block 'displayExternalNavigationHook'} */
/* {block 'navigation_menu'} */
class Block_62946659267cacbe7928e89_30835173 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navigation_menu' => 
  array (
    0 => 'Block_62946659267cacbe7928e89_30835173',
  ),
  'displayExternalNavigationHook' => 
  array (
    0 => 'Block_205596688767cacbe792a328_29353922',
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
							<a class="navigation-link" href="/fr/a-propos">À Propos</a>
						</li>
						<li>
							<a class="navigation-link" href="/fr/nous-contacter">Contact</a>
						</li>
											</ul>
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205596688767cacbe792a328_29353922', 'displayExternalNavigationHook', $this->tplIndex);
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
