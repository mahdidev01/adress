<?php
/* Smarty version 3.1.39, created on 2025-03-06 09:08:09
  from 'C:\laragon\www\youradress\modules\blocknavigationmenu\views\templates\hook\wkFooterNavigationBlock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67c965f9ccb6f6_11179933',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c93db2a320dc6233a11de7ea91f76736786f22d4' => 
    array (
      0 => 'C:\\laragon\\www\\youradress\\modules\\blocknavigationmenu\\views\\templates\\hook\\wkFooterNavigationBlock.tpl',
      1 => 1728567308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67c965f9ccb6f6_11179933 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_193474785467c965f9cc2f55_40537983', 'footer_navigation');
?>

<?php }
/* {block 'displayFooterExploreSectionHook'} */
class Block_101390187767c965f9cca695_92904695 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayFooterExploreSectionHook"),$_smarty_tpl ) );?>

						<?php
}
}
/* {/block 'displayFooterExploreSectionHook'} */
/* {block 'footer_navigation'} */
class Block_193474785467c965f9cc2f55_40537983 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer_navigation' => 
  array (
    0 => 'Block_193474785467c965f9cc2f55_40537983',
  ),
  'displayFooterExploreSectionHook' => 
  array (
    0 => 'Block_101390187767c965f9cca695_92904695',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ((isset($_smarty_tpl->tpl_vars['navigation_links']->value)) && $_smarty_tpl->tpl_vars['navigation_links']->value) {?>
		<div class="col-sm-3">
			<div class="row">
				<section class="col-xs-12 col-sm-12">
					<div class="row margin-lr-0 footer-section-heading">
						<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Explore','mod'=>'blocknavigationmenu'),$_smarty_tpl ) );?>
</p>
						<hr/>
					</div>
					<div class="row margin-lr-0">
						<ul class="footer-navigation-section">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['navigation_links']->value, 'navigationLink');
$_smarty_tpl->tpl_vars['navigationLink']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['navigationLink']->value) {
$_smarty_tpl->tpl_vars['navigationLink']->do_else = false;
?>
							<li class="item">
								<a title="<?php echo $_smarty_tpl->tpl_vars['navigationLink']->value['name'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['navigationLink']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['navigationLink']->value['name'];?>
</a>
							</li>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_101390187767c965f9cca695_92904695', 'displayFooterExploreSectionHook', $this->tplIndex);
?>

						</ul>
					</div>
				</section>
			</div>
		</div>
	<?php }
}
}
/* {/block 'footer_navigation'} */
}
