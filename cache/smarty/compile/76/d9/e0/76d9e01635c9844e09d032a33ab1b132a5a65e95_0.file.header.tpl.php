<?php
/* Smarty version 3.1.39, created on 2025-03-06 09:08:09
  from 'C:\laragon\www\youradress\themes\hotel-reservation-theme\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67c965f9d804d9_21374733',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76d9e01635c9844e09d032a33ab1b132a5a65e95' => 
    array (
      0 => 'C:\\laragon\\www\\youradress\\themes\\hotel-reservation-theme\\header.tpl',
      1 => 1741007995,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67c965f9d804d9_21374733 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"<?php if ((isset($_smarty_tpl->tpl_vars['language_code']->value)) && $_smarty_tpl->tpl_vars['language_code']->value) {?> lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language_code']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8 ie7"<?php if ((isset($_smarty_tpl->tpl_vars['language_code']->value)) && $_smarty_tpl->tpl_vars['language_code']->value) {?> lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language_code']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9 ie8"<?php if ((isset($_smarty_tpl->tpl_vars['language_code']->value)) && $_smarty_tpl->tpl_vars['language_code']->value) {?> lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language_code']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>><![endif]-->
<!--[if gt IE 8]> <html class="no-js ie9"<?php if ((isset($_smarty_tpl->tpl_vars['language_code']->value)) && $_smarty_tpl->tpl_vars['language_code']->value) {?> lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language_code']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>><![endif]-->
<html<?php if ((isset($_smarty_tpl->tpl_vars['language_code']->value)) && $_smarty_tpl->tpl_vars['language_code']->value) {?> lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language_code']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['language_is_rtl']->value)) && $_smarty_tpl->tpl_vars['language_is_rtl']->value) {?>dir="rtl"<?php }?> style="<?php if ($_smarty_tpl->tpl_vars['page_name']->value == 'index') {?>height: 100%;<?php }?>">
	<head>
		<meta charset="utf-8" />
		<title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8', true);?>
</title>
		<?php if ((isset($_smarty_tpl->tpl_vars['meta_description']->value)) && $_smarty_tpl->tpl_vars['meta_description']->value) {?>
			<meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
		<?php }?>
		<?php if ((isset($_smarty_tpl->tpl_vars['meta_keywords']->value)) && $_smarty_tpl->tpl_vars['meta_keywords']->value) {?>
			<meta name="keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_keywords']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
		<?php }?>
		<meta name="generator" content="QloApps" />
		<meta name="robots" content="<?php if ((isset($_smarty_tpl->tpl_vars['nobots']->value))) {?>no<?php }?>index,<?php if ((isset($_smarty_tpl->tpl_vars['nofollow']->value)) && $_smarty_tpl->tpl_vars['nofollow']->value) {?>no<?php }?>follow" />
		<meta name="viewport" content="width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0" />
		<meta name="mobile-web-app-capable" content="yes" />
		<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon_url']->value;?>
?<?php echo $_smarty_tpl->tpl_vars['img_update_time']->value;?>
" />
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon_url']->value;?>
?<?php echo $_smarty_tpl->tpl_vars['img_update_time']->value;?>
" />
		<?php if ((isset($_smarty_tpl->tpl_vars['css_files']->value))) {?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['css_files']->value, 'media', false, 'css_uri');
$_smarty_tpl->tpl_vars['media']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['css_uri']->value => $_smarty_tpl->tpl_vars['media']->value) {
$_smarty_tpl->tpl_vars['media']->do_else = false;
?>
				<?php if ($_smarty_tpl->tpl_vars['css_uri']->value == 'lteIE9') {?>
					<!--[if lte IE 9]>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['css_files']->value[$_smarty_tpl->tpl_vars['css_uri']->value], 'mediaie9', false, 'css_uriie9');
$_smarty_tpl->tpl_vars['mediaie9']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['css_uriie9']->value => $_smarty_tpl->tpl_vars['mediaie9']->value) {
$_smarty_tpl->tpl_vars['mediaie9']->do_else = false;
?>
					<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['css_uriie9']->value, ENT_QUOTES, 'UTF-8', true);?>
" type="text/css" media="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mediaie9']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<![endif]-->
				<?php } else { ?>
					<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['css_uri']->value, ENT_QUOTES, 'UTF-8', true);?>
" type="text/css" media="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['media']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
				<?php }?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<link rel="stylesheet" href="/youradress/themes/hotel-reservation-theme/css/custom.css">
			<link rel="stylesheet" href="/youradress/themes/hotel-reservation-theme/css/about.css">
		<?php }?>
		<?php if ((isset($_smarty_tpl->tpl_vars['js_defer']->value)) && !$_smarty_tpl->tpl_vars['js_defer']->value && (isset($_smarty_tpl->tpl_vars['js_files']->value)) && (isset($_smarty_tpl->tpl_vars['js_def']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['js_def']->value;?>

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['js_files']->value, 'js_uri');
$_smarty_tpl->tpl_vars['js_uri']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['js_uri']->value) {
$_smarty_tpl->tpl_vars['js_uri']->do_else = false;
?>
			<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js_uri']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo '</script'; ?>
>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php }?>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10412385267c965f9d6d010_38307672', 'displayHeader');
?>

		<!-- <link rel="stylesheet" href="http<?php if (Tools::usingSecureMode()) {?>s<?php }?>://fonts.googleapis.com/css?family=Open+Sans:300,600&amp;subset=latin,latin-ext" type="text/css" media="all" /> -->

		<!--[if IE 8]>
		<?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"><?php echo '</script'; ?>
>
		<![endif]-->

		<!-- by webkul -->
		<!-- <link href='https://fonts.googleapis.com/css?family=Parisienne' rel='stylesheet' type='text/css'> -->
		<!-- <link href='https://fonts.googleapis.com/css?family=PT+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'> -->
		<link href='//fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
	</head>
	<body<?php if ((isset($_smarty_tpl->tpl_vars['page_name']->value))) {?> id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page_name']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> class="<?php if ((isset($_smarty_tpl->tpl_vars['page_name']->value))) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page_name']->value, ENT_QUOTES, 'UTF-8', true);
}
if ((isset($_smarty_tpl->tpl_vars['body_classes']->value)) && count($_smarty_tpl->tpl_vars['body_classes']->value)) {?> <?php echo implode(' ',$_smarty_tpl->tpl_vars['body_classes']->value);
}
if ($_smarty_tpl->tpl_vars['hide_left_column']->value) {?> hide-left-column<?php } else { ?> show-left-column<?php }
if ($_smarty_tpl->tpl_vars['hide_right_column']->value) {?> hide-right-column<?php } else { ?> hide-right-column<?php }
if ((isset($_smarty_tpl->tpl_vars['content_only']->value)) && $_smarty_tpl->tpl_vars['content_only']->value) {?> content_only<?php }?> lang_<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
" style="<?php if ($_smarty_tpl->tpl_vars['page_name']->value == 'index') {?>height: 100%;<?php }?>">
	<?php if (!(isset($_smarty_tpl->tpl_vars['content_only']->value)) || !$_smarty_tpl->tpl_vars['content_only']->value) {?>
		<?php if ((isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) && $_smarty_tpl->tpl_vars['restricted_country_mode']->value) {?>
			<div id="restricted-country">
				<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You cannot place a new order from your country.'),$_smarty_tpl ) );
if ((isset($_smarty_tpl->tpl_vars['geolocation_country']->value)) && $_smarty_tpl->tpl_vars['geolocation_country']->value) {?> <span class="bold"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['geolocation_country']->value, ENT_QUOTES, 'UTF-8', true);?>
</span><?php }?></p>
			</div>
		<?php }?>
		<div id="page" style="<?php if ($_smarty_tpl->tpl_vars['page_name']->value == 'index') {?>height: 100%;<?php }?>">
			<div class="header-container" style="<?php if ($_smarty_tpl->tpl_vars['page_name']->value == 'index') {?>height: 100%;<?php }?>">
				<header id="header" style='<?php if ($_smarty_tpl->tpl_vars['page_name']->value == "index") {?>background-image:url("<?php ob_start();
echo Configuration::get('WK_HOTEL_HEADER_IMAGE');
$_prefixVariable7=ob_get_clean();
echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)(defined('_PS_IMG_') ? constant('_PS_IMG_') : null)).$_prefixVariable7);?>
"); height: 100%;<?php } else { ?>background-color:#252525;<?php }?>' >
					<div class="banner">
						<div class="container">
							<div class="row">
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_145219644567c965f9d766a4_75842533', 'displayBanner');
?>

							</div>
						</div>
					</div>
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_138058236167c965f9d77123_09674497', 'header_nav');
?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_158764687467c965f9d78002_11370532', 'header_top');
?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_195717278167c965f9d7b5e6_63858311', 'displayAfterHookTop');
?>

				</header>
			</div>
			<div class="columns-container">
				<div id="columns" class="container">
					<?php if ($_smarty_tpl->tpl_vars['show_breadcrump']->value) {?>
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_60885726167c965f9d7c111_47664288', 'breadcrumb');
?>

					<?php }?>
					<div id="slider_row" class="row">
						<div id="top_column" class="center_column col-xs-12 col-sm-12"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayTopColumn"),$_smarty_tpl ) );?>
</div>
					</div>
					<div class="row">
						<?php if ((isset($_smarty_tpl->tpl_vars['left_column_size']->value)) && !empty($_smarty_tpl->tpl_vars['left_column_size']->value)) {?>
						<div id="left_column" class="column col-xs-12 col-sm-<?php echo intval($_smarty_tpl->tpl_vars['left_column_size']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value;?>
</div>
						<?php }?>
						<?php if ((isset($_smarty_tpl->tpl_vars['left_column_size']->value)) && (isset($_smarty_tpl->tpl_vars['right_column_size']->value))) {
$_smarty_tpl->_assignInScope('cols', (12-$_smarty_tpl->tpl_vars['left_column_size']->value-$_smarty_tpl->tpl_vars['right_column_size']->value));
} else {
$_smarty_tpl->_assignInScope('cols', 12);
}?>
						<div id="center_column" class="center_column col-xs-12 col-sm-<?php echo intval($_smarty_tpl->tpl_vars['cols']->value);?>
">
	<?php }
}
/* {block 'displayHeader'} */
class Block_10412385267c965f9d6d010_38307672 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'displayHeader' => 
  array (
    0 => 'Block_10412385267c965f9d6d010_38307672',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>

		<?php
}
}
/* {/block 'displayHeader'} */
/* {block 'displayBanner'} */
class Block_145219644567c965f9d766a4_75842533 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'displayBanner' => 
  array (
    0 => 'Block_145219644567c965f9d766a4_75842533',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayBanner"),$_smarty_tpl ) );?>

								<?php
}
}
/* {/block 'displayBanner'} */
/* {block 'displayNav'} */
class Block_167917973067c965f9d77441_70909156 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

										<nav><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayNav"),$_smarty_tpl ) );?>
</nav>
									<?php
}
}
/* {/block 'displayNav'} */
/* {block 'header_nav'} */
class Block_138058236167c965f9d77123_09674497 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_138058236167c965f9d77123_09674497',
  ),
  'displayNav' => 
  array (
    0 => 'Block_167917973067c965f9d77441_70909156',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<div id="nav-main">
							<div class="container">
								<div class="row">
									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_167917973067c965f9d77441_70909156', 'displayNav', $this->tplIndex);
?>

								</div>
							</div>
						</div>
					<?php
}
}
/* {/block 'header_nav'} */
/* {block 'displayTop'} */
class Block_5180122567c965f9d79ce3_60286511 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

												<?php if ((isset($_smarty_tpl->tpl_vars['HOOK_TOP']->value))) {
echo $_smarty_tpl->tpl_vars['HOOK_TOP']->value;
}?>
											<?php
}
}
/* {/block 'displayTop'} */
/* {block 'displaySearchHotelPanel'} */
class Block_203949703067c965f9d7a904_39409078 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySearchHotelPanel'),$_smarty_tpl ) );?>

								<?php
}
}
/* {/block 'displaySearchHotelPanel'} */
/* {block 'header_top'} */
class Block_158764687467c965f9d78002_11370532 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_158764687467c965f9d78002_11370532',
  ),
  'displayTop' => 
  array (
    0 => 'Block_5180122567c965f9d79ce3_60286511',
  ),
  'displaySearchHotelPanel' => 
  array (
    0 => 'Block_203949703067c965f9d7a904_39409078',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<div class="header-top">
							<div class="container custom">
								<div class="row">
									<div class="col-xs-12">
									<div id="header_logo" class="header-flex">
										<a href="<?php if ((isset($_smarty_tpl->tpl_vars['force_ssl']->value)) && $_smarty_tpl->tpl_vars['force_ssl']->value) {
echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;
} else {
echo $_smarty_tpl->tpl_vars['base_dir']->value;
}?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>
">
											<img class="logo img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['logo_url']->value;?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
										</a>
										<div class="custom-nav">
											<ul>
												<li><a class="navigation-link" href="#">Hébergements</a></li>
																								<li><a class="navigation-link" href="#">Conseils de Voyage</a></li>
												<li><a class="navigation-link" href="/youradress/fr/a-propos">À propos</a></li>
												<li><a class="navigation-link" href="/youradress/fr/nous-contacter">Contact</a></li>
											</ul>
										</div>
									</div>
							
										<div class="header-top-menu">
											<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5180122567c965f9d79ce3_60286511', 'displayTop', $this->tplIndex);
?>

										</div>
									</div>
								</div>
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_203949703067c965f9d7a904_39409078', 'displaySearchHotelPanel', $this->tplIndex);
?>

							</div>
						</div>
					<?php
}
}
/* {/block 'header_top'} */
/* {block 'displayAfterHookTop'} */
class Block_195717278167c965f9d7b5e6_63858311 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'displayAfterHookTop' => 
  array (
    0 => 'Block_195717278167c965f9d7b5e6_63858311',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterHookTop'),$_smarty_tpl ) );?>

					<?php
}
}
/* {/block 'displayAfterHookTop'} */
/* {block 'breadcrumb'} */
class Block_60885726167c965f9d7c111_47664288 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_60885726167c965f9d7c111_47664288',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
						<?php
}
}
/* {/block 'breadcrumb'} */
}
