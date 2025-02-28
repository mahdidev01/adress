<?php
/* Smarty version 3.1.39, created on 2025-02-28 11:28:47
  from 'C:\laragon\www\youradress\modules\wkroomsearchblock\views\templates\hook\categoryPageSearch.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67c19defa32d36_75479674',
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
function content_67c19defa32d36_75479674 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_112207203967c19defa250a1_09981116', 'category_page_search_panel');
?>

<?php }
/* {block 'search_form'} */
class Block_126575442567c19defa2b324_23580793 extends Smarty_Internal_Block
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
class Block_112207203967c19defa250a1_09981116 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'category_page_search_panel' => 
  array (
    0 => 'Block_112207203967c19defa250a1_09981116',
  ),
  'search_form' => 
  array (
    0 => 'Block_126575442567c19defa2b324_23580793',
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_126575442567c19defa2b324_23580793', 'search_form', $this->tplIndex);
?>

        </div>
    <?php }
}
}
/* {/block 'category_page_search_panel'} */
}
