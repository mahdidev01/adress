<?php
/* Smarty version 3.1.39, created on 2025-03-06 12:52:48
  from 'C:\laragon\www\youradress\themes\hotel-reservation-theme\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67c99aa0e02c07_90486555',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '963fab998ef323124626ab054ac92c7f3cdd0619' => 
    array (
      0 => 'C:\\laragon\\www\\youradress\\themes\\hotel-reservation-theme\\footer.tpl',
      1 => 1728567308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67c99aa0e02c07_90486555 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (!(isset($_smarty_tpl->tpl_vars['content_only']->value)) || !$_smarty_tpl->tpl_vars['content_only']->value) {?>
					</div><!-- #center_column -->
					<?php if ((isset($_smarty_tpl->tpl_vars['right_column_size']->value)) && !empty($_smarty_tpl->tpl_vars['right_column_size']->value)) {?>
						<div id="right_column" class="col-xs-12 col-sm-<?php echo intval($_smarty_tpl->tpl_vars['right_column_size']->value);?>
 column"><?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>
</div>
					<?php }?>
					</div><!-- .row -->
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_39038983767c99aa0dff110_08526092', 'displayColumnsBottom');
?>

				</div><!-- #columns -->
			</div><!-- .columns-container -->
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_152718392267c99aa0dffda5_05617309', 'displayFooter');
?>

		</div><!-- #page -->
<?php }
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133024771567c99aa0e02096_22881102', 'global');
?>

	</body>
</html>
<?php }
/* {block 'displayColumnsBottom'} */
class Block_39038983767c99aa0dff110_08526092 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'displayColumnsBottom' => 
  array (
    0 => 'Block_39038983767c99aa0dff110_08526092',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayColumnsBottom'),$_smarty_tpl ) );?>

					<?php
}
}
/* {/block 'displayColumnsBottom'} */
/* {block 'displayFooterBefore'} */
class Block_138537050867c99aa0e005c0_05696368 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>

					<?php
}
}
/* {/block 'displayFooterBefore'} */
/* {block 'displayAfterDefautlFooterHook'} */
class Block_23248590467c99aa0e01004_35167028 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayAfterDefautlFooterHook"),$_smarty_tpl ) );?>

						<?php
}
}
/* {/block 'displayAfterDefautlFooterHook'} */
/* {block 'displayFooter'} */
class Block_152718392267c99aa0dffda5_05617309 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'displayFooter' => 
  array (
    0 => 'Block_152718392267c99aa0dffda5_05617309',
  ),
  'displayFooterBefore' => 
  array (
    0 => 'Block_138537050867c99aa0e005c0_05696368',
  ),
  'displayAfterDefautlFooterHook' => 
  array (
    0 => 'Block_23248590467c99aa0e01004_35167028',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php if ((isset($_smarty_tpl->tpl_vars['HOOK_FOOTER']->value))) {?>
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_138537050867c99aa0e005c0_05696368', 'displayFooterBefore', $this->tplIndex);
?>

					<!-- Footer -->
					<div class="footer-container">
						<footer id="footer"  class="container">
							<div class="row margin-btm-50"><?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>
</div>
						</footer>
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_23248590467c99aa0e01004_35167028', 'displayAfterDefautlFooterHook', $this->tplIndex);
?>

					</div><!-- #footer -->
				<?php }?>
			<?php
}
}
/* {/block 'displayFooter'} */
/* {block 'global'} */
class Block_133024771567c99aa0e02096_22881102 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'global' => 
  array (
    0 => 'Block_133024771567c99aa0e02096_22881102',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./global.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
/* {/block 'global'} */
}
