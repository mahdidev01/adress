<?php
/* Smarty version 3.1.39, created on 2025-03-06 09:08:09
  from 'C:\laragon\www\youradress\modules\wktestimonialblock\views\templates\hook\wktestimonialblock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67c965f9bdb946_44094114',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad478ab206116de8b73430a368fafe505cf75398' => 
    array (
      0 => 'C:\\laragon\\www\\youradress\\modules\\wktestimonialblock\\views\\templates\\hook\\wktestimonialblock.tpl',
      1 => 1728567308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67c965f9bdb946_44094114 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_84066222167c965f9bd51b7_72229066', 'testimonial_block');
?>

<?php }
/* {block 'testimonial_block_heading'} */
class Block_28876848167c965f9bd62f1_96499801 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <p class="home_block_heading"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['HOTEL_TESIMONIAL_BLOCK_HEADING']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
                            <?php
}
}
/* {/block 'testimonial_block_heading'} */
/* {block 'testimonial_block_description'} */
class Block_1379831167c965f9bd73e3_58238855 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <p class="home_block_description"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['HOTEL_TESIMONIAL_BLOCK_CONTENT']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
                            <?php
}
}
/* {/block 'testimonial_block_description'} */
/* {block 'testimonial_block_content'} */
class Block_28857329967c965f9bd8263_32865333 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="row home_block_content htlTestemonial-owlCarousel">
                        <div class="col-sm-12 col-xs-12">
                            <div class="owl-carousel">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['testimonials_data']->value, 'tesimonial');
$_smarty_tpl->tpl_vars['tesimonial']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tesimonial']->value) {
$_smarty_tpl->tpl_vars['tesimonial']->do_else = false;
?>
                                    <div class="row">
                                        <div class='col-xs-4 col-sm-offset-1 col-sm-2'>
                                            <img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
views/img/icon-double-codes.png" class="img-responsive">
                                        </div>
                                        <div class='col-xs-12 col-sm-7'>
                                            <div class="row">
                                                <div class="col-sm-12 testimonialContentContainer">
                                                    <p class="testimonialContentText"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['tesimonial']->value['testimonial_content'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12 testimonialPersonDetail">
                                                    <img width="60px" src="<?php echo $_smarty_tpl->tpl_vars['tesimonial']->value['img_url'];?>
" class="testimonialPersonImg">
                                                    <p class="testimonialPersonName"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['tesimonial']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
                                                    <p class="testimonialPersonDesig"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['tesimonial']->value['designation'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                        </div>
                    </div>
                <?php
}
}
/* {/block 'testimonial_block_content'} */
/* {block 'testimonial_block'} */
class Block_84066222167c965f9bd51b7_72229066 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'testimonial_block' => 
  array (
    0 => 'Block_84066222167c965f9bd51b7_72229066',
  ),
  'testimonial_block_heading' => 
  array (
    0 => 'Block_28876848167c965f9bd62f1_96499801',
  ),
  'testimonial_block_description' => 
  array (
    0 => 'Block_1379831167c965f9bd73e3_58238855',
  ),
  'testimonial_block_content' => 
  array (
    0 => 'Block_28857329967c965f9bd8263_32865333',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ((isset($_smarty_tpl->tpl_vars['testimonials_data']->value)) && $_smarty_tpl->tpl_vars['testimonials_data']->value) {?>
        <div id="hotelTestimonialBlock" class="row home_block_container">
            <div class="col-xs-12 col-sm-12">
                <?php if ($_smarty_tpl->tpl_vars['HOTEL_TESIMONIAL_BLOCK_HEADING']->value && $_smarty_tpl->tpl_vars['HOTEL_TESIMONIAL_BLOCK_CONTENT']->value) {?>
                    <div class="row home_block_desc_wrapper">
                        <div class="col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_28876848167c965f9bd62f1_96499801', 'testimonial_block_heading', $this->tplIndex);
?>

                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1379831167c965f9bd73e3_58238855', 'testimonial_block_description', $this->tplIndex);
?>

                            <hr class="home_block_desc_line"/>
                        </div>
                    </div>
                <?php }?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_28857329967c965f9bd8263_32865333', 'testimonial_block_content', $this->tplIndex);
?>

            </div>
        </div>
    <?php }
}
}
/* {/block 'testimonial_block'} */
}
