<?php
/* Smarty version 3.1.39, created on 2025-02-27 17:51:24
  from 'C:\laragon\www\youradress\modules\wkroomsearchblock\views\templates\hook\roomTypePageSearch.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67c0a61c5b0212_69153905',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '816735a25e6bf12345fb3c44db1062b4eb876219' => 
    array (
      0 => 'C:\\laragon\\www\\youradress\\modules\\wkroomsearchblock\\views\\templates\\hook\\roomTypePageSearch.tpl',
      1 => 1740595956,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./searchForm.tpl' => 1,
  ),
),false)) {
function content_67c0a61c5b0212_69153905 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117893040567c0a61c5a6759_32971267', 'room_type_page_search');
?>

<?php }
/* {block 'room_type_page_search_info'} */
class Block_147768931867c0a61c5a7428_10282971 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\youradress\\tools\\smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

						<?php if ((isset($_smarty_tpl->tpl_vars['search_data']->value)) && $_smarty_tpl->tpl_vars['search_data']->value) {?>
				<div class="header-rmsearch-details-wrapper">
					<div class="container">
						<div class="row">
							<div class="col-sm-9 form-group">
								<div class="filter_header row">
									<div class="col-sm-12">
										<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Searched results for','mod'=>'wkroomsearchblock'),$_smarty_tpl ) );?>
:
										<button class="btn btn-default visible-xs modify_roomtype_search_btn pull-right"><i class="icon-pencil"></i></button>
										</p>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 search_result_info">
										<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['search_data']->value['htl_dtl']['hotel_name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
, <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['search_data']->value['htl_dtl']['city'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 <?php if (!$_smarty_tpl->tpl_vars['search_data']->value['order_date_restrict']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
views/img/icon-arrow-left.svg"> <?php echo smarty_modifier_date_format(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['search_data']->value['date_from'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'),"%d %b %Y");?>
 - <?php echo smarty_modifier_date_format(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['search_data']->value['date_to'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'),"%d %b %Y");?>
<span class="faded-txt"> (<?php echo 1+mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['search_data']->value['num_days'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Days','mod'=>'wkroomsearchblock'),$_smarty_tpl ) );?>
 <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['search_data']->value['num_days'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['search_data']->value['num_days'] > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Nights','mod'=>'wkroomsearchblock'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Night','mod'=>'wkroomsearchblock'),$_smarty_tpl ) );
}?>)</span> <?php }?>
									</div>
								</div>
							</div>
							<div class="col-sm-3 form-group hidden-xs">
								<button class="btn btn-default modify_roomtype_search_btn pull-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Modify Search','mod'=>'wkroomsearchblock'),$_smarty_tpl ) );?>
</button>
							</div>
						</div>
					</div>
				</div>
			<?php }?>
		<?php
}
}
/* {/block 'room_type_page_search_info'} */
/* {block 'search_form'} */
class Block_98884032167c0a61c5af166_46556015 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<?php $_smarty_tpl->_subTemplateRender("file:./searchForm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
					<?php
}
}
/* {/block 'search_form'} */
/* {block 'room_type_page_search_panel'} */
class Block_28365797367c0a61c5aea20_56968857 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<div class="header-rmsearch-wrapper">
				<div class="container">
					<div class="filter_header">
						<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Searched results for','mod'=>'wkroomsearchblock'),$_smarty_tpl ) );?>
</p>
					</div>
										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_98884032167c0a61c5af166_46556015', 'search_form', $this->tplIndex);
?>

					<a href="#" class="close_room_serach_wrapper"><img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
views/img/icon-close.svg"></a>
				</div>
			</div>
		<?php
}
}
/* {/block 'room_type_page_search_panel'} */
/* {block 'room_type_page_search'} */
class Block_117893040567c0a61c5a6759_32971267 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'room_type_page_search' => 
  array (
    0 => 'Block_117893040567c0a61c5a6759_32971267',
  ),
  'room_type_page_search_info' => 
  array (
    0 => 'Block_147768931867c0a61c5a7428_10282971',
  ),
  'room_type_page_search_panel' => 
  array (
    0 => 'Block_28365797367c0a61c5aea20_56968857',
  ),
  'search_form' => 
  array (
    0 => 'Block_98884032167c0a61c5af166_46556015',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ((isset($_smarty_tpl->tpl_vars['hotels_info']->value)) && count($_smarty_tpl->tpl_vars['hotels_info']->value)) {?>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_147768931867c0a61c5a7428_10282971', 'room_type_page_search_info', $this->tplIndex);
?>


				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_28365797367c0a61c5aea20_56968857', 'room_type_page_search_panel', $this->tplIndex);
?>

	<?php }
}
}
/* {/block 'room_type_page_search'} */
}
