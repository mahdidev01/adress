<?php
/* Smarty version 3.1.39, created on 2025-03-07 10:56:42
  from 'C:\laragon\www\youradress\modules\qlohotelreview\views\templates\hook\product-tab-content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67cad0eab004d7_09192075',
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
function content_67cad0eab004d7_09192075 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_167035306867cad0eaaf53f9_72248063', 'hotel_reviews');
?>

<?php }
/* {block 'review_summary'} */
class Block_175452511067cad0eaafa2f7_39854387 extends Smarty_Internal_Block
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
class Block_153851422867cad0eaafdf74_26953329 extends Smarty_Internal_Block
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
class Block_4187244567cad0eaafe918_50903878 extends Smarty_Internal_Block
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
class Block_80495298867cad0eaaff169_02523274 extends Smarty_Internal_Block
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
class Block_167035306867cad0eaaf53f9_72248063 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hotel_reviews' => 
  array (
    0 => 'Block_167035306867cad0eaaf53f9_72248063',
  ),
  'review_summary' => 
  array (
    0 => 'Block_175452511067cad0eaafa2f7_39854387',
  ),
  'media_list' => 
  array (
    0 => 'Block_153851422867cad0eaafdf74_26953329',
  ),
  'list_actions' => 
  array (
    0 => 'Block_4187244567cad0eaafe918_50903878',
  ),
  'review_list' => 
  array (
    0 => 'Block_80495298867cad0eaaff169_02523274',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="hotel-reviews" class="tab-pane card <?php if ((isset($_smarty_tpl->tpl_vars['language_is_rtl']->value)) && $_smarty_tpl->tpl_vars['language_is_rtl']->value) {?> rtl <?php }?>">
        <?php if (is_array($_smarty_tpl->tpl_vars['reviews']->value) && count($_smarty_tpl->tpl_vars['reviews']->value)) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_175452511067cad0eaafa2f7_39854387', 'review_summary', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_153851422867cad0eaafdf74_26953329', 'media_list', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4187244567cad0eaafe918_50903878', 'list_actions', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_80495298867cad0eaaff169_02523274', 'review_list', $this->tplIndex);
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
