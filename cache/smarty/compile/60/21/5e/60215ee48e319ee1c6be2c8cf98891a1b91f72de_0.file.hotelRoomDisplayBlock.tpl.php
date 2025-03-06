<?php
/* Smarty version 3.1.39, created on 2025-03-06 12:52:57
  from 'C:\laragon\www\youradress\modules\wkhotelroom\views\templates\hook\hotelRoomDisplayBlock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67c99aa90e0479_87340031',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60215ee48e319ee1c6be2c8cf98891a1b91f72de' => 
    array (
      0 => 'C:\\laragon\\www\\youradress\\modules\\wkhotelroom\\views\\templates\\hook\\hotelRoomDisplayBlock.tpl',
      1 => 1741007995,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67c99aa90e0479_87340031 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_118439399367c99aa90cfc79_52891372', 'hotel_room_block');
?>

<?php }
/* {block 'hotel_room_block_heading'} */
class Block_90755120267c99aa90d0d46_14236899 extends Smarty_Internal_Block
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
class Block_188168327967c99aa90d1df0_22217982 extends Smarty_Internal_Block
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
class Block_148275864167c99aa90d4425_29705219 extends Smarty_Internal_Block
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
class Block_119446782167c99aa90d69f6_92867013 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayHotelRoomsBlockImageAfter','room_type'=>$_smarty_tpl->tpl_vars['roomDisplay']->value),$_smarty_tpl ) );?>

                                            <?php
}
}
/* {/block 'displayHotelRoomsBlockImageAfter'} */
/* {block 'hotel_room_block_room_type_description'} */
class Block_167739854567c99aa90d7408_74101636 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                    <div class="row margin-lr-0">
                                                        <p class="htlRoomTypeNameText pull-left"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['roomDisplay']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
                                                        <?php if ($_smarty_tpl->tpl_vars['roomDisplay']->value['show_price'] && !(isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) && !$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
                                                            <p class="htlRoomTypePriceText pull-right">
                                                                                                                                <?php if ($_smarty_tpl->tpl_vars['roomDisplay']->value['feature_price_diff']) {?>
                                                                    <span class="wk_roomType_price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['roomDisplay']->value['price_without_reduction']),$_smarty_tpl ) );?>
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
class Block_129209144167c99aa90dc225_11789468 extends Smarty_Internal_Block
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
class Block_173644024667c99aa90d2c02_56781587 extends Smarty_Internal_Block
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_148275864167c99aa90d4425_29705219', 'hotel_room_block_room_type_image', $this->tplIndex);
?>

                                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_119446782167c99aa90d69f6_92867013', 'displayHotelRoomsBlockImageAfter', $this->tplIndex);
?>

                                            <div class="hotelRoomDescContainer">
                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_167739854567c99aa90d7408_74101636', 'hotel_room_block_room_type_description', $this->tplIndex);
?>

                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_129209144167c99aa90dc225_11789468', 'hotel_room_block_action', $this->tplIndex);
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
class Block_118439399367c99aa90cfc79_52891372 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hotel_room_block' => 
  array (
    0 => 'Block_118439399367c99aa90cfc79_52891372',
  ),
  'hotel_room_block_heading' => 
  array (
    0 => 'Block_90755120267c99aa90d0d46_14236899',
  ),
  'hotel_room_block_description' => 
  array (
    0 => 'Block_188168327967c99aa90d1df0_22217982',
  ),
  'hotel_room_block_content' => 
  array (
    0 => 'Block_173644024667c99aa90d2c02_56781587',
  ),
  'hotel_room_block_room_type_image' => 
  array (
    0 => 'Block_148275864167c99aa90d4425_29705219',
  ),
  'displayHotelRoomsBlockImageAfter' => 
  array (
    0 => 'Block_119446782167c99aa90d69f6_92867013',
  ),
  'hotel_room_block_room_type_description' => 
  array (
    0 => 'Block_167739854567c99aa90d7408_74101636',
  ),
  'hotel_room_block_action' => 
  array (
    0 => 'Block_129209144167c99aa90dc225_11789468',
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_90755120267c99aa90d0d46_14236899', 'hotel_room_block_heading', $this->tplIndex);
?>

                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_188168327967c99aa90d1df0_22217982', 'hotel_room_block_description', $this->tplIndex);
?>

                            <hr class="home_block_desc_line"/>
                        </div>
                    </div>
                <?php }?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_173644024667c99aa90d2c02_56781587', 'hotel_room_block_content', $this->tplIndex);
?>

            </div>
            <hr class="home_block_seperator"/>
        </div>
    <?php }
}
}
/* {/block 'hotel_room_block'} */
}
