<?php
/* Smarty version 3.1.39, created on 2025-03-03 13:16:33
  from 'C:\laragon\www\youradress\modules\wkfooterpaymentblock\views\templates\hook\wkFooterPaymentBlock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67c5abb1437238_93080732',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5d662939b7eb86df58f4252a644afa1df98b536' => 
    array (
      0 => 'C:\\laragon\\www\\youradress\\modules\\wkfooterpaymentblock\\views\\templates\\hook\\wkFooterPaymentBlock.tpl',
      1 => 1728567308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67c5abb1437238_93080732 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
	<section class="col-xs-12 col-sm-12">
		<div class="row margin-lr-0 footer-section-heading">
			<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'payment accepted','mod'=>'wkfooterpaymentblock'),$_smarty_tpl ) );?>
</p>
			<hr/>
		</div>
		<div class="row margin-lr-0 footer-payment-block">
			<?php if ((isset($_smarty_tpl->tpl_vars['allPaymentBlocks']->value)) && $_smarty_tpl->tpl_vars['allPaymentBlocks']->value) {?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allPaymentBlocks']->value, 'paymentBlock');
$_smarty_tpl->tpl_vars['paymentBlock']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['paymentBlock']->value) {
$_smarty_tpl->tpl_vars['paymentBlock']->do_else = false;
?>
					<img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)$_smarty_tpl->tpl_vars['module_dir']->value)."views/img/payment_img/".((string)$_smarty_tpl->tpl_vars['paymentBlock']->value['id_payment_block']).".jpg");?>
">
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php }?>
		</div>
	</section>
</div><?php }
}
