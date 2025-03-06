<?php
/* Smarty version 3.1.39, created on 2025-03-06 12:52:52
  from 'C:\laragon\www\youradress\themes\hotel-reservation-theme\_partials\room_type_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67c99aa41aef31_54096821',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '787b6826e380c57b19fea8b0e2d77261a44a51b2' => 
    array (
      0 => 'C:\\laragon\\www\\youradress\\themes\\hotel-reservation-theme\\_partials\\room_type_list.tpl',
      1 => 1741254452,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./occupancy_field.tpl' => 1,
    'file:./quantity_field.tpl' => 1,
  ),
),false)) {
function content_67c99aa41aef31_54096821 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19389528767c99aa4185322_03280476', 'displayRoomTypeListBefore');
?>

<?php if ((isset($_smarty_tpl->tpl_vars['booking_data']->value['stats'])) && $_smarty_tpl->tpl_vars['booking_data']->value['stats']['num_avail']) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['booking_data']->value['rm_data'], 'room_v', false, 'room_k');
$_smarty_tpl->tpl_vars['room_v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['room_k']->value => $_smarty_tpl->tpl_vars['room_v']->value) {
$_smarty_tpl->tpl_vars['room_v']->do_else = false;
?>
		<?php if (count($_smarty_tpl->tpl_vars['room_v']->value['data']['available'])) {?>
			<div class="col-sm-12 room_cont" data-id-product="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['room_v']->value['id_product'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
				<div class="row">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_211114049367c99aa418b224_51950872', 'room_type_list_room_image');
?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_173221897467c99aa418eb82_84243444', 'room_type_list_room_detail');
?>

				</div>
			</div>
		<?php }?>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?>
	<div class="noRoomsAvailAlert">
		<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No room available for this hotel!'),$_smarty_tpl ) );?>
</span>
	</div>
<?php }
}
/* {block 'displayRoomTypeListBefore'} */
class Block_19389528767c99aa4185322_03280476 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'displayRoomTypeListBefore' => 
  array (
    0 => 'Block_19389528767c99aa4185322_03280476',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRoomTypeListBefore'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'displayRoomTypeListBefore'} */
/* {block 'displayRoomTypeListImageAfter'} */
class Block_10999707867c99aa418d557_21611740 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRoomTypeListImageAfter','product'=>$_smarty_tpl->tpl_vars['room_v']->value),$_smarty_tpl ) );?>

								<?php
}
}
/* {/block 'displayRoomTypeListImageAfter'} */
/* {block 'room_type_list_room_image'} */
class Block_211114049367c99aa418b224_51950872 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'room_type_list_room_image' => 
  array (
    0 => 'Block_211114049367c99aa418b224_51950872',
  ),
  'displayRoomTypeListImageAfter' => 
  array (
    0 => 'Block_10999707867c99aa418d557_21611740',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<div class="col-sm-4">
								<a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['room_v']->value['product_link'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
								<img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['room_v']->value['image'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="img-responsive room-type-image">
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10999707867c99aa418d557_21611740', 'displayRoomTypeListImageAfter', $this->tplIndex);
?>

							</a>
						</div>
					<?php
}
}
/* {/block 'room_type_list_room_image'} */
/* {block 'room_type_list_room_quantity'} */
class Block_180864253167c99aa418f0b0_63781035 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<div class="row">
									<p class="rm_heading col-sm-12 col-md-7"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['room_v']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
									<?php if (!(isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) && !$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value && !$_smarty_tpl->tpl_vars['order_date_restrict']->value) {?>
										<p class="rm_left col-sm-12 col-md-5" <?php if ($_smarty_tpl->tpl_vars['room_v']->value['room_left'] > $_smarty_tpl->tpl_vars['warning_num']->value) {?>  style="display:none"<?php }?>>
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hurry!'),$_smarty_tpl ) );?>
 <span class="remain_rm_qty"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['room_v']->value['room_left'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'rooms left'),$_smarty_tpl ) );?>

										</p>
									<?php }?>
								</div>
							<?php
}
}
/* {/block 'room_type_list_room_quantity'} */
/* {block 'room_type_list_room_description'} */
class Block_191466269967c99aa41943b3_79818135 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<div class="rm_desc"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['room_v']->value['description_short'],190,'',true ));?>
&nbsp;<a class="view_more" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['room_v']->value['product_link'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View More'),$_smarty_tpl ) );?>
....</a></div>
							<?php
}
}
/* {/block 'room_type_list_room_description'} */
/* {block 'room_type_list_room_features'} */
class Block_209057448267c99aa4197360_21124494 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

										<div class="col-sm-12 col-md-5 col-lg-6">
											<?php if (!empty($_smarty_tpl->tpl_vars['room_v']->value['feature'])) {?>
												<p class="rm_amenities_cont">
													<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['room_v']->value['feature'], 'feat_v', false, 'feat_k');
$_smarty_tpl->tpl_vars['feat_v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feat_k']->value => $_smarty_tpl->tpl_vars['feat_v']->value) {
$_smarty_tpl->tpl_vars['feat_v']->do_else = false;
?>
														<img title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['feat_v']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)$_smarty_tpl->tpl_vars['feat_img_dir']->value).((string)$_smarty_tpl->tpl_vars['feat_v']->value['value'])), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="rm_amen">
													<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
												</p>
											<?php }?>
										</div>
									<?php
}
}
/* {/block 'room_type_list_room_features'} */
/* {block 'room_type_list_room_max_guests_mobile'} */
class Block_36883085767c99aa419c965_62474451 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

										<div class="col-sm-12 hidden-md hidden-lg">
											<p class="capa_txt"><span><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['room_v']->value['max_guests'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Max guests:'),$_smarty_tpl ) );?>
</span><span class="capa_data"> <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['room_v']->value['max_adults'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adults'),$_smarty_tpl ) );?>
, <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['room_v']->value['max_children'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['room_v']->value['children'] > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Children'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Child'),$_smarty_tpl ) );
}?></span></p>
										</div>
									<?php
}
}
/* {/block 'room_type_list_room_max_guests_mobile'} */
/* {block 'room_type_list_room_price'} */
class Block_184506539267c99aa419fcb2_59668951 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

										<div class="col-sm-12 col-md-7 col-lg-6">
											<?php if (!(isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) && !$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value && !$_smarty_tpl->tpl_vars['order_date_restrict']->value) {?>

												<p class="rm_price_cont">
																									<?php if ($_smarty_tpl->tpl_vars['room_v']->value['price'] >= 0) {?>
														<span class="rm_price_val <?php if ($_smarty_tpl->tpl_vars['room_v']->value['feature_price_diff'] > 0) {?>room_type_old_price<?php }?>">
															<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>floatVal(round($_smarty_tpl->tpl_vars['room_v']->value['price'],2))),$_smarty_tpl ) );?>

														</span>
													<?php }?>
																										<?php if ($_smarty_tpl->tpl_vars['room_v']->value['feature_price_diff']) {?>
														<span class="rm_price_val">
															<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>floatVal(round($_smarty_tpl->tpl_vars['room_v']->value['feature_price'],2))),$_smarty_tpl ) );?>

														</span>
													<?php }?>
													<span class="rm_price_txt">/<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Per Night'),$_smarty_tpl ) );?>
</span>
												</p>
											<?php }?>
										</div>
									<?php
}
}
/* {/block 'room_type_list_room_price'} */
/* {block 'room_type_list_room_max_guests'} */
class Block_77084047267c99aa41a49f7_72521309 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

										<div class="col-sm-12 col-md-6 col-lg-4 visible-md visible-lg">
											<div class="capa_txt"><span><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['room_v']->value['max_guests'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Max guests:'),$_smarty_tpl ) );?>
</span><br><span class="capa_data"> <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['room_v']->value['max_adults'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adults'),$_smarty_tpl ) );?>
, <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['room_v']->value['max_children'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['room_v']->value['children'] > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Children'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Child'),$_smarty_tpl ) );
}?></span></div>
										</div>
									<?php
}
}
/* {/block 'room_type_list_room_max_guests'} */
/* {block 'occupancy_field'} */
class Block_66044021167c99aa41a8ee4_30067940 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

																<?php $_smarty_tpl->_subTemplateRender("file:./occupancy_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('room_type_info'=>$_smarty_tpl->tpl_vars['room_v']->value,'total_available_rooms'=>$_smarty_tpl->tpl_vars['room_v']->value['room_left']), 0, true);
?>
															<?php
}
}
/* {/block 'occupancy_field'} */
/* {block 'quantity_field'} */
class Block_153473194967c99aa41aa1c0_87731507 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

																<?php $_smarty_tpl->_subTemplateRender("file:./quantity_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('total_available_rooms'=>$_smarty_tpl->tpl_vars['room_v']->value['room_left']), 0, true);
?>
															<?php
}
}
/* {/block 'quantity_field'} */
/* {block 'room_type_list_room_book_now_button'} */
class Block_169150424067c99aa41aaf61_92805923 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

														<div>
															<a cat_rm_check_in="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['booking_date_from']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" cat_rm_check_out="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['booking_date_to']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" href="" rm_product_id="<?php echo $_smarty_tpl->tpl_vars['room_v']->value['id_product'];?>
" cat_rm_book_nm_days="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['num_days']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" data-id-product-attribute="0" data-id-product="<?php echo intval($_smarty_tpl->tpl_vars['room_v']->value['id_product']);?>
" class="btn btn-default button button-medium ajax_add_to_cart_button"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Book Now'),$_smarty_tpl ) );?>
</span></a>
														</div>
													<?php
}
}
/* {/block 'room_type_list_room_book_now_button'} */
/* {block 'room_type_list_room_booking_fields'} */
class Block_79559851967c99aa41a7cd2_89531724 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

											<div class="booking_room_fields">
												<?php if (!(isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) && !$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value && !$_smarty_tpl->tpl_vars['order_date_restrict']->value) {?>
													<?php if ((isset($_smarty_tpl->tpl_vars['occupancy_required_for_booking']->value)) && $_smarty_tpl->tpl_vars['occupancy_required_for_booking']->value) {?>
														<div class="booking_guest_occupancy_conatiner">
															<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_66044021167c99aa41a8ee4_30067940', 'occupancy_field', $this->tplIndex);
?>

														</div>
													<?php } else { ?>
														<div>
															<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Qty:'),$_smarty_tpl ) );?>
</label>
															<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_153473194967c99aa41aa1c0_87731507', 'quantity_field', $this->tplIndex);
?>

														</div>
													<?php }?>
													<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169150424067c99aa41aaf61_92805923', 'room_type_list_room_book_now_button', $this->tplIndex);
?>

												<?php }?>
											</div>
										<?php
}
}
/* {/block 'room_type_list_room_booking_fields'} */
/* {block 'room_type_list_room_detail'} */
class Block_173221897467c99aa418eb82_84243444 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'room_type_list_room_detail' => 
  array (
    0 => 'Block_173221897467c99aa418eb82_84243444',
  ),
  'room_type_list_room_quantity' => 
  array (
    0 => 'Block_180864253167c99aa418f0b0_63781035',
  ),
  'room_type_list_room_description' => 
  array (
    0 => 'Block_191466269967c99aa41943b3_79818135',
  ),
  'room_type_list_room_features' => 
  array (
    0 => 'Block_209057448267c99aa4197360_21124494',
  ),
  'room_type_list_room_max_guests_mobile' => 
  array (
    0 => 'Block_36883085767c99aa419c965_62474451',
  ),
  'room_type_list_room_price' => 
  array (
    0 => 'Block_184506539267c99aa419fcb2_59668951',
  ),
  'room_type_list_room_max_guests' => 
  array (
    0 => 'Block_77084047267c99aa41a49f7_72521309',
  ),
  'room_type_list_room_booking_fields' => 
  array (
    0 => 'Block_79559851967c99aa41a7cd2_89531724',
  ),
  'occupancy_field' => 
  array (
    0 => 'Block_66044021167c99aa41a8ee4_30067940',
  ),
  'quantity_field' => 
  array (
    0 => 'Block_153473194967c99aa41aa1c0_87731507',
  ),
  'room_type_list_room_book_now_button' => 
  array (
    0 => 'Block_169150424067c99aa41aaf61_92805923',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<div class="col-sm-8 room_info_cont">
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_180864253167c99aa418f0b0_63781035', 'room_type_list_room_quantity', $this->tplIndex);
?>

							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191466269967c99aa41943b3_79818135', 'room_type_list_room_description', $this->tplIndex);
?>

							<div class="room_features_cont">
								<div class="row">
									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_209057448267c99aa4197360_21124494', 'room_type_list_room_features', $this->tplIndex);
?>

									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36883085767c99aa419c965_62474451', 'room_type_list_room_max_guests_mobile', $this->tplIndex);
?>

									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_184506539267c99aa419fcb2_59668951', 'room_type_list_room_price', $this->tplIndex);
?>

								</div>
								<div class="row">
									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_77084047267c99aa41a49f7_72521309', 'room_type_list_room_max_guests', $this->tplIndex);
?>

									<div class="col-sm-12 col-md-6 col-lg-8">
										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_79559851967c99aa41a7cd2_89531724', 'room_type_list_room_booking_fields', $this->tplIndex);
?>

									</div>
								</div>
							</div>
						</div>
					<?php
}
}
/* {/block 'room_type_list_room_detail'} */
}
