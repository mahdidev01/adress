<?php
/* Smarty version 3.1.39, created on 2025-02-28 12:29:22
  from 'C:\laragon\www\youradress\modules\hotelreservationsystem\views\templates\hook\headerHotelDescBlock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67c1ac223d5807_23510657',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f3d1070dd0be85d165ff2f9e00d05755a3adc48' => 
    array (
      0 => 'C:\\laragon\\www\\youradress\\modules\\hotelreservationsystem\\views\\templates\\hook\\headerHotelDescBlock.tpl',
      1 => 1740138767,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67c1ac223d5807_23510657 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_94341331767c1ac223d2595_72192905', 'header_hotel_block');
?>

<?php }
/* {block 'header_hotel_chain_name'} */
class Block_111293620567c1ac223d2f38_76206065 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<h1 class="header-hotel-name"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['WK_HTL_CHAIN_NAME']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</h1>
								<?php
}
}
/* {/block 'header_hotel_chain_name'} */
/* {block 'header_hotel_description'} */
class Block_37349047667c1ac223d3f59_60786321 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<p class="header-hotel-desc"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['WK_HTL_TAG_LINE']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
								<?php
}
}
/* {/block 'header_hotel_description'} */
/* {block 'displayAfterHeaderHotelDesc'} */
class Block_34411222767c1ac223d4bf7_70007078 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayAfterHeaderHotelDesc"),$_smarty_tpl ) );?>

					<?php
}
}
/* {/block 'displayAfterHeaderHotelDesc'} */
/* {block 'header_hotel_block'} */
class Block_94341331767c1ac223d2595_72192905 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_hotel_block' => 
  array (
    0 => 'Block_94341331767c1ac223d2595_72192905',
  ),
  'header_hotel_chain_name' => 
  array (
    0 => 'Block_111293620567c1ac223d2f38_76206065',
  ),
  'header_hotel_description' => 
  array (
    0 => 'Block_37349047667c1ac223d3f59_60786321',
  ),
  'displayAfterHeaderHotelDesc' => 
  array (
    0 => 'Block_34411222767c1ac223d4bf7_70007078',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="header-desc-container">
		<div class="header-desc-wrapper">
			<div class="header-desc-primary">
				<div class="container">
					<div class="row">
						<div class="col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8 custom">
							<p class="header-desc-welcome"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Welcome To','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
</p>
							<hr class="heasder-desc-hr-first"/>
							<div class="header-desc-inner-wrapper">
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_111293620567c1ac223d2f38_76206065', 'header_hotel_chain_name', $this->tplIndex);
?>

								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_37349047667c1ac223d3f59_60786321', 'header_hotel_description', $this->tplIndex);
?>

								<hr class="heasder-desc-hr-second"/>
							</div>
						</div>
					</div>
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_34411222767c1ac223d4bf7_70007078', 'displayAfterHeaderHotelDesc', $this->tplIndex);
?>

				</div>
			</div>
		</div>
	</div>
<?php
}
}
/* {/block 'header_hotel_block'} */
}
