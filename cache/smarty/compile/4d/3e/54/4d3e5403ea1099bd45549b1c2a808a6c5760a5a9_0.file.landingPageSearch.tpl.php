<?php
/* Smarty version 3.1.39, created on 2025-02-28 10:46:15
  from 'C:\laragon\www\youradress\modules\wkroomsearchblock\views\templates\hook\landingPageSearch.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67c193f778c1f6_31414394',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d3e5403ea1099bd45549b1c2a808a6c5760a5a9' => 
    array (
      0 => 'C:\\laragon\\www\\youradress\\modules\\wkroomsearchblock\\views\\templates\\hook\\landingPageSearch.tpl',
      1 => 1740738690,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./searchForm.tpl' => 1,
  ),
),false)) {
function content_67c193f778c1f6_31414394 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_42968684167c193f7789966_50648478', 'landing_page_search_panel');
?>

<?php }
/* {block 'search_form'} */
class Block_144740135567c193f778b136_09927949 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php $_smarty_tpl->_subTemplateRender("file:./searchForm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            <?php
}
}
/* {/block 'search_form'} */
/* {block 'landing_page_search_panel'} */
class Block_42968684167c193f7789966_50648478 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'landing_page_search_panel' => 
  array (
    0 => 'Block_42968684167c193f7789966_50648478',
  ),
  'search_form' => 
  array (
    0 => 'Block_144740135567c193f778b136_09927949',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ((isset($_smarty_tpl->tpl_vars['is_index_page']->value)) && $_smarty_tpl->tpl_vars['is_index_page']->value) {?>
        <div class="header-rmsearch-container header-rmsearch">
            <?php if ((isset($_smarty_tpl->tpl_vars['hotels_info']->value)) && count($_smarty_tpl->tpl_vars['hotels_info']->value)) {?>
                <div class="header-rmsearch-wrapper" id="xs_room_search_form">
                    <div class="header-rmsearch-primary">
                        <div class="fancy_search_header_xs">
                            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search Rooms','mod'=>'wkroomsearchblock'),$_smarty_tpl ) );?>
</p>
                            <hr>
                        </div>
                        <div class="container">
                            <div class="header-rmsearch-inner-wrapper">
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_144740135567c193f778b136_09927949', 'search_form', $this->tplIndex);
?>

                            </div>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
    <?php }
}
}
/* {/block 'landing_page_search_panel'} */
}
