<?php
/* Smarty version 3.1.39, created on 2025-03-07 10:35:19
  from 'C:\laragon\www\youradress\modules\wkroomsearchblock\views\templates\hook\categoryPageSearch.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67cacbe7aa0b03_79891970',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0f443d8b405af664b511fb8c157afb7fdf1796b' => 
    array (
      0 => 'C:\\laragon\\www\\youradress\\modules\\wkroomsearchblock\\views\\templates\\hook\\categoryPageSearch.tpl',
      1 => 1728567308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./searchForm.tpl' => 1,
  ),
),false)) {
function content_67cacbe7aa0b03_79891970 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_208333004467cacbe7a9b761_11220933', 'category_page_search_panel');
?>

<?php }
/* {block 'search_form'} */
class Block_49618740067cacbe7a9ca60_40988504 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		    <?php $_smarty_tpl->_subTemplateRender("file:./searchForm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'search_form'} */
/* {block 'category_page_search_panel'} */
class Block_208333004467cacbe7a9b761_11220933 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'category_page_search_panel' => 
  array (
    0 => 'Block_208333004467cacbe7a9b761_11220933',
  ),
  'search_form' => 
  array (
    0 => 'Block_49618740067cacbe7a9ca60_40988504',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ((isset($_smarty_tpl->tpl_vars['hotels_info']->value)) && count($_smarty_tpl->tpl_vars['hotels_info']->value)) {?>
        <div class="header-rmsearch-wrapper">
        <div class="filter_header clearfix">
        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search Rooms','mod'=>'wkroomsearchblock'),$_smarty_tpl ) );?>
</p>
        <hr class="header-bottom-hr">
        </div>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_49618740067cacbe7a9ca60_40988504', 'search_form', $this->tplIndex);
?>

        </div>
    <?php }
}
}
/* {/block 'category_page_search_panel'} */
}
