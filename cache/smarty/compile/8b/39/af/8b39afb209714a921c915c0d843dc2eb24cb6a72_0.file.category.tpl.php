<?php
/* Smarty version 3.1.39, created on 2025-03-07 10:35:19
  from 'C:\laragon\www\youradress\themes\hotel-reservation-theme\category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67cacbe7cd7ad4_82254928',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b39afb209714a921c915c0d843dc2eb24cb6a72' => 
    array (
      0 => 'C:\\laragon\\www\\youradress\\themes\\hotel-reservation-theme\\category.tpl',
      1 => 1728567308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./_partials/room_type_list.tpl' => 1,
  ),
),false)) {
function content_67cacbe7cd7ad4_82254928 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_71652655667cacbe7cd25d6_75500443', 'category');
?>

<?php }
/* {block 'category_top_left'} */
class Block_59527723867cacbe7cd2a58_60777328 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div class="row margin-lr-0 catSortBlock">
                    <div class="col-sm-2 sortBlockHeading">
                        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sort By:'),$_smarty_tpl ) );?>
</p>
                    </div>
                    <div class="col-sm-3">
                        <div class="filter_dw_cont">
                            <button class="btn btn-default dropdown-toggle" type="button" id="price_ftr" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="pull-left sort_btn_span" data-sort-by="0" data-sort-value="0" data-sort-for="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Recommended'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Recommended'),$_smarty_tpl ) );?>
</span>
                                <span class="caret pull-right margin-top-7"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="price_ftr">
                                <li><a href="#" class="sort_result" data-sort-by="0" data-value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Recommended'),$_smarty_tpl ) );?>
</a></li>
                                <li><a href="#" class="sort_result" data-sort-by="2" data-value="1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price : Lowest First'),$_smarty_tpl ) );?>
</a></li>
                                <li><a href="#" class="sort_result" data-sort-by="2" data-value="2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price : Highest first '),$_smarty_tpl ) );?>
</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php
}
}
/* {/block 'category_top_left'} */
/* {block 'room_type_list'} */
class Block_67017396767cacbe7cd45c0_48339570 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender("file:./_partials/room_type_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php
}
}
/* {/block 'room_type_list'} */
/* {block 'category_js_vars'} */
class Block_59496515567cacbe7cd5146_98008622 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('product_controller_url'=>$_smarty_tpl->tpl_vars['link']->value->getPageLink('product')),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('currency_prefix'=>$_smarty_tpl->tpl_vars['currency']->value->prefix),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('currency_suffix'=>$_smarty_tpl->tpl_vars['currency']->value->suffix),$_smarty_tpl ) );
if ((isset($_smarty_tpl->tpl_vars['max_order_date']->value))) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('max_order_date'=>$_smarty_tpl->tpl_vars['max_order_date']->value),$_smarty_tpl ) );
}?>
    <?php
}
}
/* {/block 'category_js_vars'} */
/* {block 'category'} */
class Block_71652655667cacbe7cd25d6_75500443 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'category' => 
  array (
    0 => 'Block_71652655667cacbe7cd25d6_75500443',
  ),
  'category_top_left' => 
  array (
    0 => 'Block_59527723867cacbe7cd2a58_60777328',
  ),
  'room_type_list' => 
  array (
    0 => 'Block_67017396767cacbe7cd45c0_48339570',
  ),
  'category_js_vars' => 
  array (
    0 => 'Block_59496515567cacbe7cd5146_98008622',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row cat_cont">
        <div class="col-sm-12">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59527723867cacbe7cd2a58_60777328', 'category_top_left', $this->tplIndex);
?>

            <input type="hidden" id="max_order_date" name="max_order_date" value="<?php echo $_smarty_tpl->tpl_vars['max_order_date']->value;?>
">
            <div class="row margin-lr-0" id="category_data_cont">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_67017396767cacbe7cd45c0_48339570', 'room_type_list', $this->tplIndex);
?>

            </div>
        </div>
    </div>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59496515567cacbe7cd5146_98008622', 'category_js_vars', $this->tplIndex);
?>

<?php
}
}
/* {/block 'category'} */
}
