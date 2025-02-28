<?php
/* Smarty version 3.1.39, created on 2025-02-28 10:46:15
  from 'C:\laragon\www\youradress\modules\wkhotelroom\views\templates\hook\hotelRoomDisplayBlock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67c193f74d0af8_15159750',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60215ee48e319ee1c6be2c8cf98891a1b91f72de' => 
    array (
      0 => 'C:\\laragon\\www\\youradress\\modules\\wkhotelroom\\views\\templates\\hook\\hotelRoomDisplayBlock.tpl',
      1 => 1728567308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67c193f74d0af8_15159750 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_118362837167c193f74c00e9_29769559', 'hotel_room_block');
?>

<?php }
/* {block 'hotel_room_block_heading'} */
class Block_143036525767c193f74c1188_66090051 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <p class="home_block_heading"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['HOTEL_ROOM_DISPLAY_HEADING']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
                            <?php
}
}
/* {/block 'hotel_room_block_heading'} */
/* {block 'hotel_room_block_description'} */
class Block_187488862967c193f74c2103_92108677 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <p class="home_block_description"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['HOTEL_ROOM_DISPLAY_DESCRIPTION']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
                            <?php
}
}
/* {/block 'hotel_room_block_description'} */
/* {block 'hotel_room_block_room_type_image'} */
class Block_185654981467c193f74c45d1_69506702 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['roomDisplay']->value['id_product']), ENT_QUOTES, 'UTF-8', true);?>
">
                                                    <img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['roomDisplay']->value['image'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['roomDisplay']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="img-responsive width-100">
                                                </a>
                                            <?php
}
}
/* {/block 'hotel_room_block_room_type_image'} */
/* {block 'displayHotelRoomsBlockImageAfter'} */
class Block_152275996367c193f74c6ea3_63544776 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayHotelRoomsBlockImageAfter','room_type'=>$_smarty_tpl->tpl_vars['roomDisplay']->value),$_smarty_tpl ) );?>

                                            <?php
}
}
/* {/block 'displayHotelRoomsBlockImageAfter'} */
/* {block 'hotel_room_block_room_type_description'} */
class Block_125949528567c193f74c7874_65764574 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                    <div class="row margin-lr-0">
                                                        <p class="htlRoomTypeNameText pull-left"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['roomDisplay']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
                                                        <?php if ($_smarty_tpl->tpl_vars['roomDisplay']->value['show_price'] && !(isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) && !$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
                                                            <p class="htlRoomTypePriceText pull-right">
                                                                <?php if ($_smarty_tpl->tpl_vars['roomDisplay']->value['feature_price_diff'] >= 0) {?>
                                                                    <span class="wk_roomType_price <?php if ($_smarty_tpl->tpl_vars['roomDisplay']->value['feature_price_diff'] > 0) {?>room_type_old_price<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['roomDisplay']->value['price_without_reduction']),$_smarty_tpl ) );?>
</span>
                                                                <?php }?>
                                                                <?php if ($_smarty_tpl->tpl_vars['roomDisplay']->value['feature_price_diff']) {?>
                                                                    <span class="wk_roomType_price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['roomDisplay']->value['feature_price']),$_smarty_tpl ) );?>
</span>
                                                                <?php }?>
                                                                <span class="wk_roomType_price_type">
                                                                    /&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Per Night','mod'=>'wkhotelroom'),$_smarty_tpl ) );?>

                                                                </span>
                                                            </p>
                                                        <?php }?>
                                                    </div>
                                                    <div class="row margin-lr-0 htlRoomTypeDescText htlRoomTypeDescTextContainer"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['roomDisplay']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                                    <div class="row htlRoomTypeDescOriginal" hidden><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['roomDisplay']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                                    <div class="htlRoomTypeDescExtras"><span class='htlRoomTypeDescReadmore'>...<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read More.','mod'=>'wkhotelroom'),$_smarty_tpl ) );?>
</span><span class='htlRoomTypeDescReadless'>...<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read Less.','mod'=>'wkhotelroom'),$_smarty_tpl ) );?>
</span></div>
                                                <?php
}
}
/* {/block 'hotel_room_block_room_type_description'} */
/* {block 'hotel_room_block_action'} */
class Block_25392105267c193f74ccae4_13618694 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                    <div class="row margin-lr-0">
                                                        <a class="btn htlRoomTypeBookNow" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['roomDisplay']->value['id_product']), ENT_QUOTES, 'UTF-8', true);?>
"><span><?php if (!(isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) && !$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'book now','mod'=>'wkhotelroom'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View','mod'=>'wkhotelroom'),$_smarty_tpl ) );
}?></span></a>
                                                    </div>
                                                <?php
}
}
/* {/block 'hotel_room_block_action'} */
/* {block 'hotel_room_block_content'} */
class Block_194907846867c193f74c2f07_32218273 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="row home_block_content">
                        <div class="col-sm-12 col-xs-12">
                            <?php $_smarty_tpl->_assignInScope('htlRoomBlockIteration', 0);?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hotelRoomDisplay']->value, 'roomDisplay', false, NULL, 'htlRoom', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['roomDisplay']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['roomDisplay']->value) {
$_smarty_tpl->tpl_vars['roomDisplay']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_htlRoom']->value['iteration']++;
?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_htlRoom']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_htlRoom']->value['iteration'] : null)%2) {?>
                                    <div class="row">
                                <?php }?>
                                        <div class="col-sm-12 col-md-6 margin-btm-30">
                                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_185654981467c193f74c45d1_69506702', 'hotel_room_block_room_type_image', $this->tplIndex);
?>

                                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_152275996367c193f74c6ea3_63544776', 'displayHotelRoomsBlockImageAfter', $this->tplIndex);
?>

                                            <div class="hotelRoomDescContainer">
                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125949528567c193f74c7874_65764574', 'hotel_room_block_room_type_description', $this->tplIndex);
?>

                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_25392105267c193f74ccae4_13618694', 'hotel_room_block_action', $this->tplIndex);
?>

                                            </div>
                                        </div>
                                <?php if (!((isset($_smarty_tpl->tpl_vars['__smarty_foreach_htlRoom']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_htlRoom']->value['iteration'] : null)%2)) {?>
                                    </div>
                                <?php }?>
                                <?php $_smarty_tpl->_assignInScope('htlRoomBlockIteration', (isset($_smarty_tpl->tpl_vars['__smarty_foreach_htlRoom']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_htlRoom']->value['iteration'] : null));?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php if ($_smarty_tpl->tpl_vars['htlRoomBlockIteration']->value%2) {?>
                                </div>
                            <?php }?>
                        </div>
                    </div>
                <?php
}
}
/* {/block 'hotel_room_block_content'} */
/* {block 'hotel_room_block'} */
class Block_118362837167c193f74c00e9_29769559 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hotel_room_block' => 
  array (
    0 => 'Block_118362837167c193f74c00e9_29769559',
  ),
  'hotel_room_block_heading' => 
  array (
    0 => 'Block_143036525767c193f74c1188_66090051',
  ),
  'hotel_room_block_description' => 
  array (
    0 => 'Block_187488862967c193f74c2103_92108677',
  ),
  'hotel_room_block_content' => 
  array (
    0 => 'Block_194907846867c193f74c2f07_32218273',
  ),
  'hotel_room_block_room_type_image' => 
  array (
    0 => 'Block_185654981467c193f74c45d1_69506702',
  ),
  'displayHotelRoomsBlockImageAfter' => 
  array (
    0 => 'Block_152275996367c193f74c6ea3_63544776',
  ),
  'hotel_room_block_room_type_description' => 
  array (
    0 => 'Block_125949528567c193f74c7874_65764574',
  ),
  'hotel_room_block_action' => 
  array (
    0 => 'Block_25392105267c193f74ccae4_13618694',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ((isset($_smarty_tpl->tpl_vars['hotelRoomDisplay']->value)) && $_smarty_tpl->tpl_vars['hotelRoomDisplay']->value) {?>
        <div id="hotelRoomsBlock" class="row home_block_container">
            <div class="col-xs-12 col-sm-12">
                <?php if ($_smarty_tpl->tpl_vars['HOTEL_ROOM_DISPLAY_HEADING']->value && $_smarty_tpl->tpl_vars['HOTEL_ROOM_DISPLAY_DESCRIPTION']->value) {?>
                    <div class="row home_block_desc_wrapper">
                        <div class="col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_143036525767c193f74c1188_66090051', 'hotel_room_block_heading', $this->tplIndex);
?>

                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_187488862967c193f74c2103_92108677', 'hotel_room_block_description', $this->tplIndex);
?>

                            <hr class="home_block_desc_line"/>
                        </div>
                    </div>
                <?php }?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_194907846867c193f74c2f07_32218273', 'hotel_room_block_content', $this->tplIndex);
?>

            </div>
            <hr class="home_block_seperator"/>
        </div>
    <?php }
}
}
/* {/block 'hotel_room_block'} */
}
