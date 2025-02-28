<?php
/* Smarty version 3.1.39, created on 2025-02-28 11:31:44
  from 'C:\laragon\www\youradress\modules\qlohotelreview\views\templates\hook\product-tab-content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67c19ea09a6c85_71625151',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e54643a9a25477c1f729f38d5270774835d3b9f4' => 
    array (
      0 => 'C:\\laragon\\www\\youradress\\modules\\qlohotelreview\\views\\templates\\hook\\product-tab-content.tpl',
      1 => 1728567308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./_partials/review-summary.tpl' => 1,
    'file:./_partials/media-list.tpl' => 1,
    'file:./_partials/list-actions.tpl' => 1,
    'file:./_partials/review-list.tpl' => 1,
  ),
),false)) {
function content_67c19ea09a6c85_71625151 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_33535170267c19ea099d7b0_03209028', 'hotel_reviews');
?>

<?php }
/* {block 'review_summary'} */
class Block_17513476867c19ea09a1955_37763283 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:./_partials/review-summary.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php
}
}
/* {/block 'review_summary'} */
/* {block 'media_list'} */
class Block_211034380867c19ea09a4915_21160994 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:./_partials/media-list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php
}
}
/* {/block 'media_list'} */
/* {block 'list_actions'} */
class Block_164329178367c19ea09a51f5_04010659 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:./_partials/list-actions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php
}
}
/* {/block 'list_actions'} */
/* {block 'review_list'} */
class Block_204617135167c19ea09a5a34_95647527 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:./_partials/review-list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php
}
}
/* {/block 'review_list'} */
/* {block 'hotel_reviews'} */
class Block_33535170267c19ea099d7b0_03209028 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hotel_reviews' => 
  array (
    0 => 'Block_33535170267c19ea099d7b0_03209028',
  ),
  'review_summary' => 
  array (
    0 => 'Block_17513476867c19ea09a1955_37763283',
  ),
  'media_list' => 
  array (
    0 => 'Block_211034380867c19ea09a4915_21160994',
  ),
  'list_actions' => 
  array (
    0 => 'Block_164329178367c19ea09a51f5_04010659',
  ),
  'review_list' => 
  array (
    0 => 'Block_204617135167c19ea09a5a34_95647527',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="hotel-reviews" class="tab-pane card <?php if ((isset($_smarty_tpl->tpl_vars['language_is_rtl']->value)) && $_smarty_tpl->tpl_vars['language_is_rtl']->value) {?> rtl <?php }?>">
        <?php if (is_array($_smarty_tpl->tpl_vars['reviews']->value) && count($_smarty_tpl->tpl_vars['reviews']->value)) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17513476867c19ea09a1955_37763283', 'review_summary', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_211034380867c19ea09a4915_21160994', 'media_list', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164329178367c19ea09a51f5_04010659', 'list_actions', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_204617135167c19ea09a5a34_95647527', 'review_list', $this->tplIndex);
?>

        <?php } else { ?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No reviews.','mod'=>'qlohotelreview'),$_smarty_tpl ) );?>

        <?php }?>
    </div>
<?php
}
}
/* {/block 'hotel_reviews'} */
}
