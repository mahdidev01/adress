<?php
/* Smarty version 3.1.39, created on 2025-02-28 10:46:15
  from 'C:\laragon\www\youradress\themes\hotel-reservation-theme\modules\blockcart\blockcart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67c193f73b7792_08910519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9def0873b48da42a803dfc095ca70032e8420fb' => 
    array (
      0 => 'C:\\laragon\\www\\youradress\\themes\\hotel-reservation-theme\\modules\\blockcart\\blockcart.tpl',
      1 => 1728567308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67c193f73b7792_08910519 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_120121913067c193f7319993_80502794', 'blockcart');
?>

<?php }
/* {block 'blockcart_shopping_cart_product_name'} */
class Block_66665430067c193f732f960_34656852 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

																	<div class="product-name">
																	<!-- quantity changed for number of rooms -->
																		<!-- <span class="quantity-formated"><span class="quantity"><?php echo $_smarty_tpl->tpl_vars['cart_booking_data']->value[$_smarty_tpl->tpl_vars['data_k']->value]['total_num_rooms'];?>
</span>&nbsp;x&nbsp;</span> -->
																		<a class="cart_block_product_name" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value,$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category'],null,null,$_smarty_tpl->tpl_vars['product']->value['id_shop'],$_smarty_tpl->tpl_vars['product']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...',true )), ENT_QUOTES, 'UTF-8', true);?>
</a>
																	</div>
																<?php
}
}
/* {/block 'blockcart_shopping_cart_product_name'} */
/* {block 'displayProductPriceBlock'} */
class Block_65754086867c193f7338eb8_03557649 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

																						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"price",'from'=>"blockcart"),$_smarty_tpl ) );?>

																					<?php
}
}
/* {/block 'displayProductPriceBlock'} */
/* {block 'blockcart_shopping_cart_product_total_price'} */
class Block_177898343367c193f7335860_57388595 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

																	<div class="cart-info-sec rm_product_info_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
">
																		<span class="product_info_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price','mod'=>'blockcart'),$_smarty_tpl ) );?>
:</span>
																		<span class="price product_info_data" ttl_prod_price="<?php echo $_smarty_tpl->tpl_vars['product']->value['bookingData']['total_room_type_amount'];?>
">
																			<?php if (!(isset($_smarty_tpl->tpl_vars['product']->value['is_gift'])) || !$_smarty_tpl->tpl_vars['product']->value['is_gift']) {?>
																				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0], array( array('p'=>((string)$_smarty_tpl->tpl_vars['product']->value['bookingData']['total_room_type_amount'])),$_smarty_tpl ) );?>

																				<div id="hookDisplayProductPriceBlock-price">
																					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_65754086867c193f7338eb8_03557649', 'displayProductPriceBlock', $this->tplIndex);
?>

																				</div>
																			<?php } else { ?>
																				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Free!','mod'=>'blockcart'),$_smarty_tpl ) );?>

																			<?php }?>
																		</span>
																	</div>
																<?php
}
}
/* {/block 'blockcart_shopping_cart_product_total_price'} */
/* {block 'blockcart_shopping_cart_product_quantity'} */
class Block_103705371167c193f733b194_10580893 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

																	<div class="cart-info-sec rm_product_info_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
">
																		<span class="product_info_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Qty.','mod'=>'blockcart'),$_smarty_tpl ) );?>
:</span>
																		<span class="quantity-formated">
																			<?php if ($_smarty_tpl->tpl_vars['product']->value['booking_product']) {?>
																				<span class="quantity product_info_data"><?php echo $_smarty_tpl->tpl_vars['product']->value['bookingData']['total_num_rooms'];?>
</span>
																			<?php } else { ?>
																				<span class="quantity product_info_data"><?php echo $_smarty_tpl->tpl_vars['product']->value['cart_quantity'];?>
</span>
																			<?php }?>
																		</span>
																	</div>
																<?php
}
}
/* {/block 'blockcart_shopping_cart_product_quantity'} */
/* {block 'blockcart_shopping_cart_dates'} */
class Block_17291192967c193f7343358_71660907 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\youradress\\tools\\smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

																	<div id="booking_dates_container_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" class="cart_prod_cont">
																		<div class="table-responsive">
																			<table class="table">
																				<tbody>
																					<tr>
																						<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duration','mod'=>'blockcart'),$_smarty_tpl ) );?>
</th>
																						<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Qty.','mod'=>'blockcart'),$_smarty_tpl ) );?>
</th>
																						<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price','mod'=>'blockcart'),$_smarty_tpl ) );?>
</th>
																						<th>&nbsp;<!-- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove','mod'=>'blockcart'),$_smarty_tpl ) );?>
 --></th>
																					</tr>
																					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['bookingData']['date_diff'], 'data_v', false, 'data_k1');
$_smarty_tpl->tpl_vars['data_v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data_k1']->value => $_smarty_tpl->tpl_vars['data_v']->value) {
$_smarty_tpl->tpl_vars['data_v']->do_else = false;
?>
																						<tr class="rooms_remove_container">
																							<?php $_smarty_tpl->_assignInScope('is_full_date', ($_smarty_tpl->tpl_vars['show_full_date']->value && (smarty_modifier_date_format($_smarty_tpl->tpl_vars['data_v']->value['data_form'],'%D') == smarty_modifier_date_format($_smarty_tpl->tpl_vars['data_v']->value['data_to'],'%D'))));?>
																							<td>
																								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['data_v']->value['data_form'],'full'=>$_smarty_tpl->tpl_vars['is_full_date']->value),$_smarty_tpl ) );?>
&nbsp;-&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['data_v']->value['data_to'],'full'=>$_smarty_tpl->tpl_vars['is_full_date']->value),$_smarty_tpl ) );?>

																							</td>
																							<td class="num_rooms_in_date"><?php echo $_smarty_tpl->tpl_vars['data_v']->value['num_rm'];?>
</td>
																							<td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>($_smarty_tpl->tpl_vars['data_v']->value['amount']+$_smarty_tpl->tpl_vars['data_v']->value['demand_price'])),$_smarty_tpl ) );?>
</td>
																							<td><a class="remove_rooms_from_cart_link" href="#" rm_price="<?php echo $_smarty_tpl->tpl_vars['data_v']->value['amount'];?>
" id_product="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" date_from="<?php echo $_smarty_tpl->tpl_vars['data_v']->value['data_form'];?>
" date_to="<?php echo $_smarty_tpl->tpl_vars['data_v']->value['data_to'];?>
" num_rooms="<?php echo $_smarty_tpl->tpl_vars['data_v']->value['num_rm'];?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'remove this room from my cart','mod'=>'blockcart'),$_smarty_tpl ) );?>
"></a></td>
																						</tr>
																					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
																				</tbody>
																			</table>
																		</div>
																	</div>
																<?php
}
}
/* {/block 'blockcart_shopping_cart_dates'} */
/* {block 'blockcart_shopping_cart_products'} */
class Block_160043498267c193f7325272_98065073 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\youradress\\tools\\smarty\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

										<?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
											<dl class="products">
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, 'data_k', 'myLoop', array (
  'first' => true,
  'last' => true,
  'index' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data_k']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['total'];
?>
																									<?php if ($_smarty_tpl->tpl_vars['product']->value['booking_product'] || ($_smarty_tpl->tpl_vars['product']->value['service_product_type'] == Product::SERVICE_PRODUCT_WITHOUT_ROOMTYPE)) {?>
														<?php $_smarty_tpl->_assignInScope('productId', $_smarty_tpl->tpl_vars['product']->value['id_product']);?>
														<?php $_smarty_tpl->_assignInScope('productAttributeId', $_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
														<dt data-id="cart_block_product_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
_<?php if ($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']) {
echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);
} else { ?>0<?php }?>_<?php if ($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']) {
echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);
} else { ?>0<?php }?>" class="<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first'] : null)) {?>first_item<?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last'] : null)) {?>last_item<?php } else { ?>item<?php }?>">
															<a class="cart-images" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'cart_default');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" /></a>
															<div class="cart-info">
																<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_66665430067c193f732f960_34656852', 'blockcart_shopping_cart_product_name', $this->tplIndex);
?>


																<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['attributes_small']))) {?>
																	<div class="product-atributes">
																		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value,$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category'],null,null,$_smarty_tpl->tpl_vars['product']->value['id_shop'],$_smarty_tpl->tpl_vars['product']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product detail','mod'=>'blockcart'),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['attributes_small'];?>
</a>
																	</div>
																<?php }?>
																<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177898343367c193f7335860_57388595', 'blockcart_shopping_cart_product_total_price', $this->tplIndex);
?>


																<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_103705371167c193f733b194_10580893', 'blockcart_shopping_cart_product_quantity', $this->tplIndex);
?>

															</div>
															<span class="remove_link">
																<?php if (!(isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])) && (!(isset($_smarty_tpl->tpl_vars['product']->value['is_gift'])) || !$_smarty_tpl->tpl_vars['product']->value['is_gift'])) {?>
																	<a class="ajax_cart_block_remove_link" href="<?php ob_start();
echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);
$_prefixVariable1=ob_get_clean();
ob_start();
echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);
$_prefixVariable2=ob_get_clean();
ob_start();
echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);
$_prefixVariable3=ob_get_clean();
echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',true,NULL,"delete=1&id_product=".$_prefixVariable1."&ipa=".$_prefixVariable2."&id_address_delivery=".$_prefixVariable3."&token=".((string)$_smarty_tpl->tpl_vars['static_token']->value)), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'remove this product from my cart','mod'=>'blockcart'),$_smarty_tpl ) );?>
">&nbsp;</a>
																<?php }?>
															</span>
															<div style="clear:both"></div>
															<?php if ($_smarty_tpl->tpl_vars['product']->value['booking_product']) {?>
																<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17291192967c193f7343358_71660907', 'blockcart_shopping_cart_dates', $this->tplIndex);
?>

															<?php }?>
														</dt>
														<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['attributes_small']))) {?>
															<dd data-id="cart_block_combination_of_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);
if ($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']) {?>_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);
}?>_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
" class="<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first'] : null)) {?>first_item<?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last'] : null)) {?>last_item<?php } else { ?>item<?php }?>">
														<?php }?>
														<!-- Customizable datas -->
														<?php if ((isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value][$_smarty_tpl->tpl_vars['product']->value['id_address_delivery']]))) {?>
															<?php if (!(isset($_smarty_tpl->tpl_vars['product']->value['attributes_small']))) {?>
																<dd data-id="cart_block_combination_of_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
_<?php if ($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']) {
echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);
} else { ?>0<?php }?>_<?php if ($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']) {
echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);
} else { ?>0<?php }?>" class="<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first'] : null)) {?>first_item<?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last'] : null)) {?>last_item<?php } else { ?>item<?php }?>">
															<?php }?>
															<ul class="cart_block_customizations" data-id="customization_<?php echo $_smarty_tpl->tpl_vars['productId']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['productAttributeId']->value;?>
">
																<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value][$_smarty_tpl->tpl_vars['product']->value['id_address_delivery']], 'customization', false, 'id_customization', 'customizations', array (
));
$_smarty_tpl->tpl_vars['customization']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_customization']->value => $_smarty_tpl->tpl_vars['customization']->value) {
$_smarty_tpl->tpl_vars['customization']->do_else = false;
?>
																	<li name="customization">
																		<div data-id="deleteCustomizableProduct_<?php echo intval($_smarty_tpl->tpl_vars['id_customization']->value);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
" class="deleteCustomizableProduct">
																			<a class="ajax_cart_block_remove_link" href="<?php ob_start();
echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);
$_prefixVariable4=ob_get_clean();
ob_start();
echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);
$_prefixVariable5=ob_get_clean();
ob_start();
echo intval($_smarty_tpl->tpl_vars['id_customization']->value);
$_prefixVariable6=ob_get_clean();
echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',true,NULL,"delete=1&id_product=".$_prefixVariable4."&ipa=".$_prefixVariable5."&id_customization=".$_prefixVariable6."&token=".((string)$_smarty_tpl->tpl_vars['static_token']->value)), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow">&nbsp;</a>
																		</div>
																		<?php if ((isset($_smarty_tpl->tpl_vars['customization']->value['datas'][$_smarty_tpl->tpl_vars['CUSTOMIZE_TEXTFIELD']->value][0]))) {?>
																			<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( smarty_modifier_replace($_smarty_tpl->tpl_vars['customization']->value['datas'][$_smarty_tpl->tpl_vars['CUSTOMIZE_TEXTFIELD']->value][0]['value'],"<br />"," "),28,'...' )), ENT_QUOTES, 'UTF-8', true);?>

																		<?php } else { ?>
																			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customization #%d:','sprintf'=>intval($_smarty_tpl->tpl_vars['id_customization']->value),'mod'=>'blockcart'),$_smarty_tpl ) );?>

																		<?php }?>
																	</li>
																<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
															</ul>
															<?php if (!(isset($_smarty_tpl->tpl_vars['product']->value['attributes_small']))) {?></dd><?php }?>
														<?php }?>
														<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['attributes_small']))) {?></dd><?php }?>
													<?php }?>
												<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
											</dl>
										<?php }?>
									<?php
}
}
/* {/block 'blockcart_shopping_cart_products'} */
/* {block 'blockcart_shopping_cart_discounts'} */
class Block_148832801567c193f735f430_76789925 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

										<?php if (count($_smarty_tpl->tpl_vars['discounts']->value) > 0) {?>
											<table class="vouchers<?php if (count($_smarty_tpl->tpl_vars['discounts']->value) == 0) {?> unvisible<?php }?>">
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['discounts']->value, 'discount');
$_smarty_tpl->tpl_vars['discount']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['discount']->value) {
$_smarty_tpl->tpl_vars['discount']->do_else = false;
?>
													<?php if ($_smarty_tpl->tpl_vars['discount']->value['value_real'] > 0) {?>
														<tr class="bloc_cart_voucher" data-id="bloc_cart_voucher_<?php echo intval($_smarty_tpl->tpl_vars['discount']->value['id_discount']);?>
">
															<td class="quantity">1x</td>
															<td class="name" title="<?php echo $_smarty_tpl->tpl_vars['discount']->value['description'];?>
">
																<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['discount']->value['name'],18,'...' )), ENT_QUOTES, 'UTF-8', true);?>

															</td>
															<td class="price">
																-<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['discount']->value['value_tax_exc']),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['discount']->value['value_real']),$_smarty_tpl ) );
}?>
															</td>
															<td class="delete">
																<?php if (strlen($_smarty_tpl->tpl_vars['discount']->value['code'])) {?>
																	<a class="delete_voucher" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink(((string)$_smarty_tpl->tpl_vars['order_process']->value),true);?>
?deleteDiscount=<?php echo intval($_smarty_tpl->tpl_vars['discount']->value['id_discount']);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'blockcart'),$_smarty_tpl ) );?>
" rel="nofollow">
																		<i class="icon-remove-sign"></i>
																	</a>
																<?php }?>
															</td>
														</tr>
													<?php }?>
												<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
											</table>
										<?php }?>
									<?php
}
}
/* {/block 'blockcart_shopping_cart_discounts'} */
/* {block 'blockcart_shopping_cart_total_tax'} */
class Block_208920323667c193f736cbc9_71499454 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

												<?php if ($_smarty_tpl->tpl_vars['show_tax']->value && $_smarty_tpl->tpl_vars['use_tax']->value) {?>
													<div class="cart-prices-line">
														<span class="price cart_block_tax_cost ajax_cart_tax_cost"><?php echo $_smarty_tpl->tpl_vars['tax_cost']->value;?>
</span>
														<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax','mod'=>'blockcart'),$_smarty_tpl ) );?>
</span>
													</div>
												<?php }?>
											<?php
}
}
/* {/block 'blockcart_shopping_cart_total_tax'} */
/* {block 'blockcart_shopping_cart_total_convenience_fee'} */
class Block_178472873067c193f736e366_01692933 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

												<?php if ((isset($_smarty_tpl->tpl_vars['total_convenience_fee']->value))) {?>
													<div class="cart-prices-line">
														<span class="price cart_block_convenience_fee ajax_cart_convenience_fee"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_convenience_fee']->value),$_smarty_tpl ) );?>
</span>
														<span class="price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Convenience Fees','mod'=>'blockcart'),$_smarty_tpl ) );?>
</strong>
													</div>
												<?php }?>
											<?php
}
}
/* {/block 'blockcart_shopping_cart_total_convenience_fee'} */
/* {block 'blockcart_shopping_cart_total'} */
class Block_87172132967c193f736ffb7_43364515 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

												<div class="cart-prices-line last-line">
													<span class="price cart_block_total ajax_block_cart_total" total_cart_price="<?php echo $_smarty_tpl->tpl_vars['totalToPay']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</span>
													<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total','mod'=>'blockcart'),$_smarty_tpl ) );?>
</span>
												</div>
												<?php if ($_smarty_tpl->tpl_vars['use_taxes']->value && $_smarty_tpl->tpl_vars['display_tax_label']->value == 1 && $_smarty_tpl->tpl_vars['show_tax']->value) {?>
													<p>
													<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value == 0) {?>
														<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Prices are tax included','mod'=>'blockcart'),$_smarty_tpl ) );?>

													<?php } elseif ($_smarty_tpl->tpl_vars['priceDisplay']->value == 1) {?>
														<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Prices are tax excluded','mod'=>'blockcart'),$_smarty_tpl ) );?>

													<?php }?>
													</p>
												<?php }?>
											<?php
}
}
/* {/block 'blockcart_shopping_cart_total'} */
/* {block 'blockcart_shopping_cart_prices'} */
class Block_1746667667c193f7365d07_36114476 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

										<div class="cart-prices">
											<!-- <div class="cart-prices-line first-line">
												<span class="price cart_block_shipping_cost ajax_cart_shipping_cost<?php if (!($_smarty_tpl->tpl_vars['page_name']->value == 'order-opc') && $_smarty_tpl->tpl_vars['shipping_cost_float']->value == 0 && (!(isset($_smarty_tpl->tpl_vars['cart']->value->id_address_delivery)) || !$_smarty_tpl->tpl_vars['cart']->value->id_address_delivery)) {?> unvisible<?php }?>">
													<?php if ($_smarty_tpl->tpl_vars['shipping_cost_float']->value == 0) {?>
														<?php if (!($_smarty_tpl->tpl_vars['page_name']->value == 'order-opc') && (!(isset($_smarty_tpl->tpl_vars['cart']->value->id_address_delivery)) || !$_smarty_tpl->tpl_vars['cart']->value->id_address_delivery)) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To be determined','mod'=>'blockcart'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Free shipping!','mod'=>'blockcart'),$_smarty_tpl ) );
}?>
													<?php } else { ?>
														<?php echo $_smarty_tpl->tpl_vars['shipping_cost']->value;?>

													<?php }?>
												</span>
												<span<?php if (!($_smarty_tpl->tpl_vars['page_name']->value == 'order-opc') && $_smarty_tpl->tpl_vars['shipping_cost_float']->value == 0 && (!(isset($_smarty_tpl->tpl_vars['cart']->value->id_address_delivery)) || !$_smarty_tpl->tpl_vars['cart']->value->id_address_delivery)) {?> class="unvisible"<?php }?>>
													<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping','mod'=>'blockcart'),$_smarty_tpl ) );?>

												</span>
											</div>
											<?php if ($_smarty_tpl->tpl_vars['show_wrapping']->value) {?>
												<div class="cart-prices-line">
													<?php $_smarty_tpl->_assignInScope('cart_flag', constant('Cart::ONLY_WRAPPING'));?>
													<span class="price cart_block_wrapping_cost">
														<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value == 1) {?>
															<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['cart']->value->getOrderTotal(false,$_smarty_tpl->tpl_vars['cart_flag']->value)),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['cart']->value->getOrderTotal(true,$_smarty_tpl->tpl_vars['cart_flag']->value)),$_smarty_tpl ) );?>

														<?php }?>
													</span>
													<span>
														<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wrapping','mod'=>'blockcart'),$_smarty_tpl ) );?>

													</span>
											</div>
											<?php }?> --><!-- commented by webkul unnecessary data -->
											<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_208920323667c193f736cbc9_71499454', 'blockcart_shopping_cart_total_tax', $this->tplIndex);
?>

											<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_178472873067c193f736e366_01692933', 'blockcart_shopping_cart_total_convenience_fee', $this->tplIndex);
?>

											<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_87172132967c193f736ffb7_43364515', 'blockcart_shopping_cart_total', $this->tplIndex);
?>

										</div>
									<?php
}
}
/* {/block 'blockcart_shopping_cart_prices'} */
/* {block 'blockcart_shopping_cart_checkout_action'} */
class Block_61379060767c193f7374a08_61475900 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

										<p class="cart-buttons">
											<a id="button_order_cart" class="btn btn-default button button-small" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink(((string)$_smarty_tpl->tpl_vars['order_process']->value),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check out','mod'=>'blockcart'),$_smarty_tpl ) );?>
" rel="nofollow">
												<span>
													<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check out','mod'=>'blockcart'),$_smarty_tpl ) );?>
<i class="icon-chevron-right right"></i>
												</span>
											</a>
										</p>
									<?php
}
}
/* {/block 'blockcart_shopping_cart_checkout_action'} */
/* {block 'blockcart_shopping_cart_content'} */
class Block_97610202867c193f7323675_29903403 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
						<div class="cart_block block exclusive">
							<div class="block_content">
								<!-- block list of products -->
								<div class="cart_block_list<?php if ((isset($_smarty_tpl->tpl_vars['blockcart_top']->value)) && !$_smarty_tpl->tpl_vars['blockcart_top']->value) {
if ((isset($_smarty_tpl->tpl_vars['colapseExpandStatus']->value)) && $_smarty_tpl->tpl_vars['colapseExpandStatus']->value == 'expanded' || !$_smarty_tpl->tpl_vars['ajax_allowed']->value || !(isset($_smarty_tpl->tpl_vars['colapseExpandStatus']->value))) {?> expanded<?php } else { ?> collapsed unvisible<?php }
}?>">
									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_160043498267c193f7325272_98065073', 'blockcart_shopping_cart_products', $this->tplIndex);
?>

									<p class="cart_block_no_products<?php if ($_smarty_tpl->tpl_vars['products']->value) {?> unvisible<?php }?>">
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No products','mod'=>'blockcart'),$_smarty_tpl ) );?>

									</p>
									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_148832801567c193f735f430_76789925', 'blockcart_shopping_cart_discounts', $this->tplIndex);
?>

									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1746667667c193f7365d07_36114476', 'blockcart_shopping_cart_prices', $this->tplIndex);
?>

									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_61379060767c193f7374a08_61475900', 'blockcart_shopping_cart_checkout_action', $this->tplIndex);
?>

								</div>
							</div>
						</div><!-- .cart_block -->
					<?php }?>
				<?php
}
}
/* {/block 'blockcart_shopping_cart_content'} */
/* {block 'blockcart_shopping_cart'} */
class Block_145062157267c193f731ab26_78101951 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<div class="shopping_cart">
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink($_smarty_tpl->tpl_vars['order_process']->value,true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View my booking cart','mod'=>'blockcart'),$_smarty_tpl ) );?>
" rel="nofollow">
					<!-- <b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cart','mod'=>'blockcart'),$_smarty_tpl ) );?>
</b> -->
					<span class="badge badge_style ajax_cart_quantity<?php if ($_smarty_tpl->tpl_vars['cart_qties']->value == 0) {?> unvisible<?php }?>"><?php echo $_smarty_tpl->tpl_vars['total_products_in_cart']->value;?>
</span>
					<!-- <span class="ajax_cart_product_txt<?php if ($_smarty_tpl->tpl_vars['cart_qties']->value != 1) {?> unvisible<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rooms','mod'=>'blockcart'),$_smarty_tpl ) );?>
</span> -->
					<!-- <span class="ajax_cart_product_txt_s<?php if ($_smarty_tpl->tpl_vars['cart_qties']->value < 2) {?> unvisible<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rooms','mod'=>'blockcart'),$_smarty_tpl ) );?>
</span> -->
					<span class="ajax_cart_total<?php if ($_smarty_tpl->tpl_vars['cart_qties']->value == 0) {?> unvisible<?php }?>">
						<?php if ($_smarty_tpl->tpl_vars['cart_qties']->value > 0) {?>
							<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value == 1) {?>
								<?php $_smarty_tpl->_assignInScope('blockcart_cart_flag', constant('Cart::BOTH_WITHOUT_SHIPPING'));?>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['cart']->value->getOrderTotal(false,$_smarty_tpl->tpl_vars['blockcart_cart_flag']->value)),$_smarty_tpl ) );?>

							<?php } else { ?>
								<?php $_smarty_tpl->_assignInScope('blockcart_cart_flag', constant('Cart::BOTH_WITHOUT_SHIPPING'));?>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['cart']->value->getOrderTotal(true,$_smarty_tpl->tpl_vars['blockcart_cart_flag']->value)),$_smarty_tpl ) );?>

							<?php }?>
						<?php }?>
					</span>
					<span class="badge badge_style ajax_cart_no_product<?php if ($_smarty_tpl->tpl_vars['cart_qties']->value > 0) {?> unvisible<?php }?>">0</span>
					<?php if ($_smarty_tpl->tpl_vars['ajax_allowed']->value && (isset($_smarty_tpl->tpl_vars['blockcart_top']->value)) && !$_smarty_tpl->tpl_vars['blockcart_top']->value) {?>
						<span class="block_cart_expand<?php if (!(isset($_smarty_tpl->tpl_vars['colapseExpandStatus']->value)) || ((isset($_smarty_tpl->tpl_vars['colapseExpandStatus']->value)) && $_smarty_tpl->tpl_vars['colapseExpandStatus']->value == 'expanded')) {?> unvisible<?php }?>">&nbsp;</span>
						<span class="block_cart_collapse<?php if ((isset($_smarty_tpl->tpl_vars['colapseExpandStatus']->value)) && $_smarty_tpl->tpl_vars['colapseExpandStatus']->value == 'collapsed') {?> unvisible<?php }?>">&nbsp;</span>
					<?php }?>
				</a>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_97610202867c193f7323675_29903403', 'blockcart_shopping_cart_content', $this->tplIndex);
?>

			</div>
		<?php
}
}
/* {/block 'blockcart_shopping_cart'} */
/* {block 'blockcart_layer_cart_left_heading'} */
class Block_205043309567c193f737d2e5_07072545 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<h2 class="layer_cart_room_txt">
									<i class="icon-check"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room successfully added to your cart','mod'=>'blockcart'),$_smarty_tpl ) );?>

								</h2>
								<h2 class="layer_cart_product_txt">
									<i class="icon-check"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Item successfully added to your cart','mod'=>'blockcart'),$_smarty_tpl ) );?>

								</h2>
							<?php
}
}
/* {/block 'blockcart_layer_cart_left_heading'} */
/* {block 'blockcart_layer_cart_product_image'} */
class Block_139974648267c193f737df84_26566634 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<div class="product-image-container layer_cart_img">
								</div>
							<?php
}
}
/* {/block 'blockcart_layer_cart_product_image'} */
/* {block 'blockcart_layer_cart_product_info'} */
class Block_17737388667c193f737e4a4_62097598 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<div class="layer_cart_product_info">
									<span id="layer_cart_product_title" class="product-name"></span>
									<span id="layer_cart_product_attributes"></span>
									<div class="layer_cart_room_txt">
										<strong class="dark"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Time Duration','mod'=>'blockcart'),$_smarty_tpl ) );?>
 &nbsp;-&nbsp;</strong>
										<span id="layer_cart_product_time_duration"></span>
									</div>
									<div>
										<strong class="dark layer_cart_room_txt"><?php if ((isset($_smarty_tpl->tpl_vars['occupancy_required_for_booking']->value)) && $_smarty_tpl->tpl_vars['occupancy_required_for_booking']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room occupancy','mod'=>'blockcart'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rooms quantity added','mod'=>'blockcart'),$_smarty_tpl ) );
}?> &nbsp;-&nbsp;</strong>
										<strong class="dark layer_cart_product_txt"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity','mod'=>'blockcart'),$_smarty_tpl ) );?>
 &nbsp;-&nbsp;</strong>
										<span id="layer_cart_product_quantity"></span>
									</div>
									<div>
										<strong class="dark layer_cart_room_txt"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room type cost','mod'=>'blockcart'),$_smarty_tpl ) );?>
 &nbsp;-&nbsp;</strong>
										<strong class="dark layer_cart_product_txt"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total','mod'=>'blockcart'),$_smarty_tpl ) );?>
 &nbsp;-&nbsp;</strong>
										<span id="layer_cart_product_price"></span>
									</div>
								</div>
							<?php
}
}
/* {/block 'blockcart_layer_cart_product_info'} */
/* {block 'blockcart_layer_cart_left'} */
class Block_57808794767c193f737cc15_66750043 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<div class="layer_cart_product col-xs-12 col-md-6">
							<span class="cross" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close window','mod'=>'blockcart'),$_smarty_tpl ) );?>
"></span>
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205043309567c193f737d2e5_07072545', 'blockcart_layer_cart_left_heading', $this->tplIndex);
?>

							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_139974648267c193f737df84_26566634', 'blockcart_layer_cart_product_image', $this->tplIndex);
?>

							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17737388667c193f737e4a4_62097598', 'blockcart_layer_cart_product_info', $this->tplIndex);
?>

						</div>
					<?php
}
}
/* {/block 'blockcart_layer_cart_left'} */
/* {block 'blockcart_layer_cart_right_heading'} */
class Block_23343014467c193f7380cf8_47359151 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<h2>
									<!-- Plural Case [both cases are needed because page may be updated in Javascript] -->
									<span class="ajax_cart_product_txt_s <?php if ($_smarty_tpl->tpl_vars['cart_qties']->value < 2) {?> unvisible<?php }?>">
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are [1]%d[/1] item(s) in your cart.','mod'=>'blockcart','sprintf'=>array($_smarty_tpl->tpl_vars['cart_qties']->value),'tags'=>array('<span class="ajax_cart_quantity">')),$_smarty_tpl ) );?>

									</span>

									<!-- Singular Case [both cases are needed because page may be updated in Javascript] -->
									<span class="ajax_cart_product_txt <?php if ($_smarty_tpl->tpl_vars['cart_qties']->value > 1) {?> unvisible<?php }?>">
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'1 item in your cart.','mod'=>'blockcart'),$_smarty_tpl ) );?>

									</span>
								</h2>
							<?php
}
}
/* {/block 'blockcart_layer_cart_right_heading'} */
/* {block 'blockcart_layer_cart_total_price'} */
class Block_174178626667c193f7382955_74900747 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<div class="layer_cart_row">
									<strong class="dark">
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Rooms Cost in cart','mod'=>'blockcart'),$_smarty_tpl ) );?>

										<?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {?>
											<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value == 1) {?>
												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax excl.)','mod'=>'blockcart'),$_smarty_tpl ) );?>

											<?php } else { ?>
												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax incl.)','mod'=>'blockcart'),$_smarty_tpl ) );?>

											<?php }?>
										<?php }?>
									</strong>
									<span class="ajax_block_room_total pull-right">
										<?php if ($_smarty_tpl->tpl_vars['cart_qties']->value > 0) {?>
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['cart']->value->getOrderTotal(false,Cart::ONLY_PRODUCTS)),$_smarty_tpl ) );?>

										<?php }?>
									</span>
								</div>
							<?php
}
}
/* {/block 'blockcart_layer_cart_total_price'} */
/* {block 'blockcart_layer_cart_total_convenience_fee'} */
class Block_186093431867c193f738ddf8_02066911 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<?php if ((isset($_smarty_tpl->tpl_vars['total_convenience_fee']->value))) {?>
									<div class="layer_cart_row">
										<strong class="dark">
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Convenience Fees','mod'=>'blockcart'),$_smarty_tpl ) );?>

											<?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {?>
												<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value == 1) {?>
													<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax excl.)','mod'=>'blockcart'),$_smarty_tpl ) );?>

												<?php } else { ?>
													<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax incl.)','mod'=>'blockcart'),$_smarty_tpl ) );?>

												<?php }?>
											<?php }?>
										</strong>
										<span class="price ajax_cart_convenience_fee pull-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_convenience_fee']->value),$_smarty_tpl ) );?>
</span>
									</div>
								<?php }?>
							<?php
}
}
/* {/block 'blockcart_layer_cart_total_convenience_fee'} */
/* {block 'blockcart_layer_cart_total_tax'} */
class Block_21272079167c193f73915d3_77644042 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<?php if ($_smarty_tpl->tpl_vars['show_tax']->value && $_smarty_tpl->tpl_vars['use_tax']->value) {?>
									<div class="layer_cart_row">
										<strong class="dark"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax','mod'=>'blockcart'),$_smarty_tpl ) );?>
</strong>
										<span class="price cart_block_tax_cost ajax_cart_tax_cost pull-right"><?php echo $_smarty_tpl->tpl_vars['tax_cost']->value;?>
</span>
									</div>
								<?php }?>
							<?php
}
}
/* {/block 'blockcart_layer_cart_total_tax'} */
/* {block 'blockcart_layer_cart_actions'} */
class Block_111595961067c193f73978e5_61417188 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<div class="button-container">
										<span class="continue btn btn-default button exclusive-medium" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue browsing','mod'=>'blockcart'),$_smarty_tpl ) );?>
">
											<span>
												<i class="icon-chevron-left left"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue browsing','mod'=>'blockcart'),$_smarty_tpl ) );?>

											</span>
										</span>
										<a class="btn btn-default button button-medium"	href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink(((string)$_smarty_tpl->tpl_vars['order_process']->value),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Proceed to checkout','mod'=>'blockcart'),$_smarty_tpl ) );?>
" rel="nofollow">
											<span>
												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Proceed to checkout','mod'=>'blockcart'),$_smarty_tpl ) );?>
<i class="icon-chevron-right right"></i>
											</span>
										</a>
									</div>
								<?php
}
}
/* {/block 'blockcart_layer_cart_actions'} */
/* {block 'blockcart_layer_cart_total_price'} */
class Block_150903753267c193f7392ed7_19704006 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<div class="layer_cart_row">
									<strong class="dark">
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total','mod'=>'blockcart'),$_smarty_tpl ) );?>

										<?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {?>
											<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value == 1) {?>
												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax excl.)','mod'=>'blockcart'),$_smarty_tpl ) );?>

											<?php } else { ?>
												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax incl.)','mod'=>'blockcart'),$_smarty_tpl ) );?>

											<?php }?>
										<?php }?>
									</strong>
									<span class="ajax_block_cart_total pull-right">
										<?php if ($_smarty_tpl->tpl_vars['cart_qties']->value > 0) {?>
											<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value == 1) {?>
												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['cart']->value->getOrderTotal(false)),$_smarty_tpl ) );?>

											<?php } else { ?>
												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['cart']->value->getOrderTotal(true)),$_smarty_tpl ) );?>

											<?php }?>
										<?php }?>
									</span>
								</div>
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_111595961067c193f73978e5_61417188', 'blockcart_layer_cart_actions', $this->tplIndex);
?>

							<?php
}
}
/* {/block 'blockcart_layer_cart_total_price'} */
/* {block 'blockcart_layer_cart_right'} */
class Block_2710198567c193f73809e3_95220099 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<div class="layer_cart_cart col-xs-12 col-md-6">
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_23343014467c193f7380cf8_47359151', 'blockcart_layer_cart_right_heading', $this->tplIndex);
?>


							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_174178626667c193f7382955_74900747', 'blockcart_layer_cart_total_price', $this->tplIndex);
?>


							<!-- <?php if ($_smarty_tpl->tpl_vars['show_wrapping']->value) {?>
								<div class="layer_cart_row">
									<strong class="dark">
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wrapping','mod'=>'blockcart'),$_smarty_tpl ) );?>

										<?php if ($_smarty_tpl->tpl_vars['use_taxes']->value && $_smarty_tpl->tpl_vars['display_tax_label']->value && $_smarty_tpl->tpl_vars['show_tax']->value) {?>
											<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value == 1) {?>
												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax excl.)','mod'=>'blockcart'),$_smarty_tpl ) );?>

											<?php } else { ?>
												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax incl.)','mod'=>'blockcart'),$_smarty_tpl ) );?>

											<?php }?>
										<?php }?>
									</strong>
									<span class="price cart_block_wrapping_cost">
										<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value == 1) {?>
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['cart']->value->getOrderTotal(false,Cart::ONLY_WRAPPING)),$_smarty_tpl ) );?>

										<?php } else { ?>
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['cart']->value->getOrderTotal(true,Cart::ONLY_WRAPPING)),$_smarty_tpl ) );?>

										<?php }?>
									</span>
								</div>
							<?php }?> -->
							<!-- <div class="layer_cart_row">
								<strong class="dark<?php if ($_smarty_tpl->tpl_vars['shipping_cost_float']->value == 0 && (!(isset($_smarty_tpl->tpl_vars['cart']->value->id_address_delivery)) || !$_smarty_tpl->tpl_vars['cart']->value->id_address_delivery)) {?> unvisible<?php }?>">
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total shipping','mod'=>'blockcart'),$_smarty_tpl ) );?>
&nbsp;<?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {
if ($_smarty_tpl->tpl_vars['priceDisplay']->value == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax excl.)','mod'=>'blockcart'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax incl.)','mod'=>'blockcart'),$_smarty_tpl ) );
}
}?>
								</strong>
								<span class="ajax_cart_shipping_cost<?php if ($_smarty_tpl->tpl_vars['shipping_cost_float']->value == 0 && (!(isset($_smarty_tpl->tpl_vars['cart']->value->id_address_delivery)) || !$_smarty_tpl->tpl_vars['cart']->value->id_address_delivery)) {?> unvisible<?php }?>">
									<?php if ($_smarty_tpl->tpl_vars['shipping_cost_float']->value == 0) {?>
										<?php if ((!(isset($_smarty_tpl->tpl_vars['cart']->value->id_address_delivery)) || !$_smarty_tpl->tpl_vars['cart']->value->id_address_delivery)) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To be determined','mod'=>'blockcart'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Free shipping!','mod'=>'blockcart'),$_smarty_tpl ) );
}?>
									<?php } else { ?>
										<?php echo $_smarty_tpl->tpl_vars['shipping_cost']->value;?>

									<?php }?>
								</span>
							</div> -->
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_186093431867c193f738ddf8_02066911', 'blockcart_layer_cart_total_convenience_fee', $this->tplIndex);
?>

							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21272079167c193f73915d3_77644042', 'blockcart_layer_cart_total_tax', $this->tplIndex);
?>

							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_150903753267c193f7392ed7_19704006', 'blockcart_layer_cart_total_price', $this->tplIndex);
?>

						</div>
					<?php
}
}
/* {/block 'blockcart_layer_cart_right'} */
/* {block 'blockcart_layer_cart'} */
class Block_74819649467c193f737c1a9_26817705 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value && $_smarty_tpl->tpl_vars['active_overlay']->value == 1) {?>
			<div id="layer_cart">
				<div class="clearfix">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_57808794767c193f737cc15_66750043', 'blockcart_layer_cart_left', $this->tplIndex);
?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2710198567c193f73809e3_95220099', 'blockcart_layer_cart_right', $this->tplIndex);
?>

				</div>
				<div class="crossseling"></div>
			</div> <!-- #layer_cart -->
			<div class="layer_cart_overlay"></div>
		<?php }?>
	<?php
}
}
/* {/block 'blockcart_layer_cart'} */
/* {block 'blockcart_js_vars'} */
class Block_49181024667c193f739c626_18672566 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'someErrorCondition'));
$_block_repeat=true;
echo $_block_plugin1->addJsDefL(array('name'=>'someErrorCondition'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Some Error occured.Please try again.','mod'=>'blockcart','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin1->addJsDefL(array('name'=>'someErrorCondition'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('CUSTOMIZE_TEXTFIELD'=>$_smarty_tpl->tpl_vars['CUSTOMIZE_TEXTFIELD']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('img_dir'=>preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['img_dir']->value)),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('generated_date'=>intval(time())),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('ajax_allowed'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'boolval' ][ 0 ], array( $_smarty_tpl->tpl_vars['ajax_allowed']->value ))),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('hasDeliveryAddress'=>((isset($_smarty_tpl->tpl_vars['cart']->value->id_address_delivery)) && $_smarty_tpl->tpl_vars['cart']->value->id_address_delivery)),$_smarty_tpl ) );
$_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'customizationIdMessage'));
$_block_repeat=true;
echo $_block_plugin2->addJsDefL(array('name'=>'customizationIdMessage'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customization #','mod'=>'blockcart','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin2->addJsDefL(array('name'=>'customizationIdMessage'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'removingLinkText'));
$_block_repeat=true;
echo $_block_plugin3->addJsDefL(array('name'=>'removingLinkText'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'remove this product from my cart','mod'=>'blockcart','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin3->addJsDefL(array('name'=>'removingLinkText'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'freeShippingTranslation'));
$_block_repeat=true;
echo $_block_plugin4->addJsDefL(array('name'=>'freeShippingTranslation'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Free shipping!','mod'=>'blockcart','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin4->addJsDefL(array('name'=>'freeShippingTranslation'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin5 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin5, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'freeProductTranslation'));
$_block_repeat=true;
echo $_block_plugin5->addJsDefL(array('name'=>'freeProductTranslation'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Free!','mod'=>'blockcart','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin5->addJsDefL(array('name'=>'freeProductTranslation'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin6 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin6, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'delete_txt'));
$_block_repeat=true;
echo $_block_plugin6->addJsDefL(array('name'=>'delete_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'blockcart','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin6->addJsDefL(array('name'=>'delete_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin7 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin7, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'toBeDetermined'));
$_block_repeat=true;
echo $_block_plugin7->addJsDefL(array('name'=>'toBeDetermined'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To be determined','mod'=>'blockcart','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin7->addJsDefL(array('name'=>'toBeDetermined'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('module_dir'=>$_smarty_tpl->tpl_vars['module_dir']->value),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('currency_sign'=>$_smarty_tpl->tpl_vars['currency']->value->sign),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('room_warning_num'=>$_smarty_tpl->tpl_vars['warning_num']->value),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('currency_format'=>$_smarty_tpl->tpl_vars['currency']->value->format),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('currency_blank'=>$_smarty_tpl->tpl_vars['currency']->value->blank),$_smarty_tpl ) );?>

		<?php $_block_plugin8 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin8, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'adults_txt'));
$_block_repeat=true;
echo $_block_plugin8->addJsDefL(array('name'=>'adults_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adults','mod'=>'blockcart','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin8->addJsDefL(array('name'=>'adults_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php $_block_plugin9 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin9, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'children_txt'));
$_block_repeat=true;
echo $_block_plugin9->addJsDefL(array('name'=>'children_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Children','mod'=>'blockcart','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin9->addJsDefL(array('name'=>'children_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php $_block_plugin10 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin10, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'price_txt'));
$_block_repeat=true;
echo $_block_plugin10->addJsDefL(array('name'=>'price_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price','mod'=>'blockcart','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin10->addJsDefL(array('name'=>'price_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php $_block_plugin11 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin11, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'total_qty_txt'));
$_block_repeat=true;
echo $_block_plugin11->addJsDefL(array('name'=>'total_qty_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Qty.','mod'=>'blockcart','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin11->addJsDefL(array('name'=>'total_qty_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php $_block_plugin12 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin12, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'qty_txt'));
$_block_repeat=true;
echo $_block_plugin12->addJsDefL(array('name'=>'qty_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Qty','mod'=>'blockcart','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin12->addJsDefL(array('name'=>'qty_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php $_block_plugin13 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin13, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'duration_txt'));
$_block_repeat=true;
echo $_block_plugin13->addJsDefL(array('name'=>'duration_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duration','mod'=>'blockcart','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin13->addJsDefL(array('name'=>'duration_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php $_block_plugin14 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin14, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'capacity_txt'));
$_block_repeat=true;
echo $_block_plugin14->addJsDefL(array('name'=>'capacity_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Capacity','mod'=>'blockcart','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin14->addJsDefL(array('name'=>'capacity_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php $_block_plugin15 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin15, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'remove_rm_title'));
$_block_repeat=true;
echo $_block_plugin15->addJsDefL(array('name'=>'remove_rm_title'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove this room from my cart','mod'=>'blockcart','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin15->addJsDefL(array('name'=>'remove_rm_title'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php $_block_plugin16 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin16, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'no_internet_txt'));
$_block_repeat=true;
echo $_block_plugin16->addJsDefL(array('name'=>'no_internet_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No internet. Please check your internet connection.','mod'=>'blockcart','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin16->addJsDefL(array('name'=>'no_internet_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('rm_avail_process_lnk'=>$_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockcart','checkroomavailabilityajaxprocess')),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('pagename'=>$_smarty_tpl->tpl_vars['current_page']->value),$_smarty_tpl ) );?>

		
	<?php
}
}
/* {/block 'blockcart_js_vars'} */
/* {block 'blockcart'} */
class Block_120121913067c193f7319993_80502794 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'blockcart' => 
  array (
    0 => 'Block_120121913067c193f7319993_80502794',
  ),
  'blockcart_shopping_cart' => 
  array (
    0 => 'Block_145062157267c193f731ab26_78101951',
  ),
  'blockcart_shopping_cart_content' => 
  array (
    0 => 'Block_97610202867c193f7323675_29903403',
  ),
  'blockcart_shopping_cart_products' => 
  array (
    0 => 'Block_160043498267c193f7325272_98065073',
  ),
  'blockcart_shopping_cart_product_name' => 
  array (
    0 => 'Block_66665430067c193f732f960_34656852',
  ),
  'blockcart_shopping_cart_product_total_price' => 
  array (
    0 => 'Block_177898343367c193f7335860_57388595',
  ),
  'displayProductPriceBlock' => 
  array (
    0 => 'Block_65754086867c193f7338eb8_03557649',
  ),
  'blockcart_shopping_cart_product_quantity' => 
  array (
    0 => 'Block_103705371167c193f733b194_10580893',
  ),
  'blockcart_shopping_cart_dates' => 
  array (
    0 => 'Block_17291192967c193f7343358_71660907',
  ),
  'blockcart_shopping_cart_discounts' => 
  array (
    0 => 'Block_148832801567c193f735f430_76789925',
  ),
  'blockcart_shopping_cart_prices' => 
  array (
    0 => 'Block_1746667667c193f7365d07_36114476',
  ),
  'blockcart_shopping_cart_total_tax' => 
  array (
    0 => 'Block_208920323667c193f736cbc9_71499454',
  ),
  'blockcart_shopping_cart_total_convenience_fee' => 
  array (
    0 => 'Block_178472873067c193f736e366_01692933',
  ),
  'blockcart_shopping_cart_total' => 
  array (
    0 => 'Block_87172132967c193f736ffb7_43364515',
  ),
  'blockcart_shopping_cart_checkout_action' => 
  array (
    0 => 'Block_61379060767c193f7374a08_61475900',
  ),
  'blockcart_layer_cart' => 
  array (
    0 => 'Block_74819649467c193f737c1a9_26817705',
  ),
  'blockcart_layer_cart_left' => 
  array (
    0 => 'Block_57808794767c193f737cc15_66750043',
  ),
  'blockcart_layer_cart_left_heading' => 
  array (
    0 => 'Block_205043309567c193f737d2e5_07072545',
  ),
  'blockcart_layer_cart_product_image' => 
  array (
    0 => 'Block_139974648267c193f737df84_26566634',
  ),
  'blockcart_layer_cart_product_info' => 
  array (
    0 => 'Block_17737388667c193f737e4a4_62097598',
  ),
  'blockcart_layer_cart_right' => 
  array (
    0 => 'Block_2710198567c193f73809e3_95220099',
  ),
  'blockcart_layer_cart_right_heading' => 
  array (
    0 => 'Block_23343014467c193f7380cf8_47359151',
  ),
  'blockcart_layer_cart_total_price' => 
  array (
    0 => 'Block_174178626667c193f7382955_74900747',
    1 => 'Block_150903753267c193f7392ed7_19704006',
  ),
  'blockcart_layer_cart_total_convenience_fee' => 
  array (
    0 => 'Block_186093431867c193f738ddf8_02066911',
  ),
  'blockcart_layer_cart_total_tax' => 
  array (
    0 => 'Block_21272079167c193f73915d3_77644042',
  ),
  'blockcart_layer_cart_actions' => 
  array (
    0 => 'Block_111595961067c193f73978e5_61417188',
  ),
  'blockcart_js_vars' => 
  array (
    0 => 'Block_49181024667c193f739c626_18672566',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\youradress\\tools\\smarty\\plugins\\function.counter.php','function'=>'smarty_function_counter',),));
?>

	<!-- MODULE Block cart -->
	<?php if ((isset($_smarty_tpl->tpl_vars['blockcart_top']->value)) && $_smarty_tpl->tpl_vars['blockcart_top']->value) {?>
	<div class="header-top-item <?php if ($_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>header_user_catalog<?php }?>">
	<?php }?>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_145062157267c193f731ab26_78101951', 'blockcart_shopping_cart', $this->tplIndex);
?>

	<?php if ((isset($_smarty_tpl->tpl_vars['blockcart_top']->value)) && $_smarty_tpl->tpl_vars['blockcart_top']->value) {?>
	</div>
	<?php }?>
	<?php echo smarty_function_counter(array('name'=>'active_overlay','assign'=>'active_overlay'),$_smarty_tpl);?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_74819649467c193f737c1a9_26817705', 'blockcart_layer_cart', $this->tplIndex);
?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_49181024667c193f739c626_18672566', 'blockcart_js_vars', $this->tplIndex);
?>

	<?php
}
}
/* {/block 'blockcart'} */
}
