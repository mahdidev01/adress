<?php
/* Smarty version 3.1.39, created on 2025-03-07 10:35:19
  from 'C:\laragon\www\youradress\modules\blockuserinfo\nav-xs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67cacbe79864a9_27540280',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcd7fbaa38013eb92d5d5a43c6c1cf417356e71b' => 
    array (
      0 => 'C:\\laragon\\www\\youradress\\modules\\blockuserinfo\\nav-xs.tpl',
      1 => 1728567308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67cacbe79864a9_27540280 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ul class="nav nav-pills nav-stacked visible-xs wk-nav-style">
	<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
		<li>
			<a class="navigation-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('history',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View my orders','mod'=>'blockuserinfo'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Booking History','mod'=>'blockuserinfo'),$_smarty_tpl ) );?>
</a>
		</li>
		<li>
			<a class="navigation-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View my customer account','mod'=>'blockuserinfo'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Accounts Settings','mod'=>'blockuserinfo'),$_smarty_tpl ) );?>
</a>
		</li>
		<li>
			<a class="navigation-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true,NULL,"mylogout"), ENT_QUOTES, 'UTF-8', true);?>
"  title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log me out','mod'=>'blockuserinfo'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign Out','mod'=>'blockuserinfo'),$_smarty_tpl ) );?>
</a>
		</li>
	<?php } else { ?>
		<li>
			<a class="navigation-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in to your customer account','mod'=>'blockuserinfo'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','mod'=>'blockuserinfo'),$_smarty_tpl ) );?>
</a>
		</li>
	<?php }?>
</ul><?php }
}
