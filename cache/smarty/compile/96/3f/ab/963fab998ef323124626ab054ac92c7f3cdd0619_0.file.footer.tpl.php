<?php
/* Smarty version 3.1.39, created on 2025-03-07 10:35:19
  from 'C:\laragon\www\youradress\themes\hotel-reservation-theme\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67cacbe7daed54_37643792',
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
function content_67cacbe7daed54_37643792 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_147456151267cacbe7dab422_55941789', 'displayColumnsBottom');
?>

				</div><!-- #columns -->
			</div><!-- .columns-container -->
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_211066187567cacbe7dabf04_23642386', 'displayFooter');
?>

		</div><!-- #page -->
<?php }
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_183059103267cacbe7dae169_49042310', 'global');
?>

	</body>
</html>
<?php }
/* {block 'displayColumnsBottom'} */
class Block_147456151267cacbe7dab422_55941789 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'displayColumnsBottom' => 
  array (
    0 => 'Block_147456151267cacbe7dab422_55941789',
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
class Block_7694390867cacbe7dac6c4_90642035 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>

					<?php
}
}
/* {/block 'displayFooterBefore'} */
/* {block 'displayAfterDefautlFooterHook'} */
class Block_12160345367cacbe7dad126_61638231 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayAfterDefautlFooterHook"),$_smarty_tpl ) );?>

						<?php
}
}
/* {/block 'displayAfterDefautlFooterHook'} */
/* {block 'displayFooter'} */
class Block_211066187567cacbe7dabf04_23642386 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'displayFooter' => 
  array (
    0 => 'Block_211066187567cacbe7dabf04_23642386',
  ),
  'displayFooterBefore' => 
  array (
    0 => 'Block_7694390867cacbe7dac6c4_90642035',
  ),
  'displayAfterDefautlFooterHook' => 
  array (
    0 => 'Block_12160345367cacbe7dad126_61638231',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php if ((isset($_smarty_tpl->tpl_vars['HOOK_FOOTER']->value))) {?>
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7694390867cacbe7dac6c4_90642035', 'displayFooterBefore', $this->tplIndex);
?>

					<!-- Footer -->
					<div class="footer-container">
						<footer id="footer"  class="container">
							<div class="row margin-btm-50"><?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>
</div>
						</footer>
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12160345367cacbe7dad126_61638231', 'displayAfterDefautlFooterHook', $this->tplIndex);
?>

					</div><!-- #footer -->
				<?php }?>
			<?php
}
}
/* {/block 'displayFooter'} */
/* {block 'global'} */
class Block_183059103267cacbe7dae169_49042310 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'global' => 
  array (
    0 => 'Block_183059103267cacbe7dae169_49042310',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./global.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
/* {/block 'global'} */
}
