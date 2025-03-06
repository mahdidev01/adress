<?php
/* Smarty version 3.1.39, created on 2025-03-06 12:52:52
  from 'C:\laragon\www\youradress\modules\wkhotelfilterblock\views\templates\hook\htlfilterblock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67c99aa406dee4_92610690',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b585b0d630c6e2932272854c50429b8349b6fefb' => 
    array (
      0 => 'C:\\laragon\\www\\youradress\\modules\\wkhotelfilterblock\\views\\templates\\hook\\htlfilterblock.tpl',
      1 => 1741265564,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67c99aa406dee4_92610690 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_213018960267c99aa4060bb1_22568668', 'room_types_filters_block');
}
/* {block 'room_types_amenities_filter'} */
class Block_53786891767c99aa4061334_50872308 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php if ((isset($_smarty_tpl->tpl_vars['config']->value)) && $_smarty_tpl->tpl_vars['config']->value['SHOW_AMENITIES_FILTER'] && $_smarty_tpl->tpl_vars['all_feat']->value) {?>
					<div class="row margin-lr-0 layered_filter_cont">
						<div class="col-sm-12 layered_filter_heading">
							<div class="row margin-lr-0">
								<div class="pull-left lf_headingmain_wrapper">
									<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Amenities','mod'=>'wkhotelfilterblock'),$_smarty_tpl ) );?>
</span>
									<hr class="theme-text-underline">
								</div>
								<span class="pull-right clear_filter"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Clear Filter','mod'=>'wkhotelfilterblock'),$_smarty_tpl ) );?>
</span>
							</div>
						</div>
						<div class="col-sm-12 lf_sub_cont">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_feat']->value, 'feat');
$_smarty_tpl->tpl_vars['feat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feat']->value) {
$_smarty_tpl->tpl_vars['feat']->do_else = false;
?>
								<div class="layered_filt">
									<input type="checkbox" class="filter" data-type="amenities" value="<?php echo $_smarty_tpl->tpl_vars['feat']->value['id_feature'];?>
">
									<span class="filters_name"><?php echo $_smarty_tpl->tpl_vars['feat']->value['name'];?>
</span>
								</div>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</div>
					</div>
				<?php }?>
			<?php
}
}
/* {/block 'room_types_amenities_filter'} */
/* {block 'room_types_price_filter'} */
class Block_71941266767c99aa4064310_93577196 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php if ((isset($_smarty_tpl->tpl_vars['config']->value)) && $_smarty_tpl->tpl_vars['config']->value['SHOW_PRICE_FILTER']) {?>
					<div class="row margin-lr-0 layered_filter_cont">
						<div class="col-sm-12 layered_filter_heading">
							<div class="row margin-lr-0">
								<div class="pull-left lf_headingmain_wrapper">
									<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price','mod'=>'wkhotelfilterblock'),$_smarty_tpl ) );?>
</span>
									<hr class="theme-text-underline">
								</div>
								<span class="pull-right clear_filter"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Clear Filter','mod'=>'wkhotelfilterblock'),$_smarty_tpl ) );?>
</span>
							</div>
						</div>
						<div class="col-sm-12 lf_sub_cont">
							<div class="row margin-lr-0 price_filter_subcont">
								<span class="pull-left"><span id="filter_price_from"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['min_price']->value),$_smarty_tpl ) );?>
</span></span>
								<span class="pull-right"><span id="filter_price_to"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['max_price']->value),$_smarty_tpl ) );?>
</span></span>
							</div>
							<div id="filter_price_silder"></div>
						</div>
					</div>
				<?php }?>
			<?php
}
}
/* {/block 'room_types_price_filter'} */
/* {block 'room_types_filters_js_vars'} */
class Block_159127953867c99aa40667b0_05928692 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('num_days'=>$_smarty_tpl->tpl_vars['num_days']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('date_from'=>$_smarty_tpl->tpl_vars['date_from']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('date_to'=>$_smarty_tpl->tpl_vars['date_to']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('cat_link'=>$_smarty_tpl->tpl_vars['cat_link']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('min_price'=>$_smarty_tpl->tpl_vars['min_price']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('max_price'=>$_smarty_tpl->tpl_vars['max_price']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('warning_num'=>$_smarty_tpl->tpl_vars['warning_num']->value),$_smarty_tpl ) );
$_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'viewMoreTxt'));
$_block_repeat=true;
echo $_block_plugin1->addJsDefL(array('name'=>'viewMoreTxt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View More','js'=>1,'mod'=>'wkhotelfilterblock'),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin1->addJsDefL(array('name'=>'viewMoreTxt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'bookNowTxt'));
$_block_repeat=true;
echo $_block_plugin2->addJsDefL(array('name'=>'bookNowTxt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Book Now','js'=>1,'mod'=>'wkhotelfilterblock'),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin2->addJsDefL(array('name'=>'bookNowTxt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php
}
}
/* {/block 'room_types_filters_js_vars'} */
/* {block 'room_types_filters_block'} */
class Block_213018960267c99aa4060bb1_22568668 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'room_types_filters_block' => 
  array (
    0 => 'Block_213018960267c99aa4060bb1_22568668',
  ),
  'room_types_amenities_filter' => 
  array (
    0 => 'Block_53786891767c99aa4061334_50872308',
  ),
  'room_types_price_filter' => 
  array (
    0 => 'Block_71941266767c99aa4064310_93577196',
  ),
  'room_types_filters_js_vars' => 
  array (
    0 => 'Block_159127953867c99aa40667b0_05928692',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<link href="https://api.mapbox.com/mapbox-gl-js/v2.15.0/mapbox-gl.css" rel="stylesheet" />
	<style>
		body {
			margin: 0;
			padding: 0;
		}

		div#left_column {
			height: 100vh;
			position: sticky;
			top: 0;
			overflow: hidden;
		}

		#map {
			width: 100%;
			height: 100vh;
			margin-top: 10px;
		}

		.header-rmsearch-wrapper {
			display: none;
		}
	</style>
	<div id="map"></div>
	<div id="filter_results" class="row block">
		<div class="col-sm-12">
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_53786891767c99aa4061334_50872308', 'room_types_amenities_filter', $this->tplIndex);
?>


			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_71941266767c99aa4064310_93577196', 'room_types_price_filter', $this->tplIndex);
?>

		</div>
	</div>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_159127953867c99aa40667b0_05928692', 'room_types_filters_js_vars', $this->tplIndex);
?>

	
		<?php echo '<script'; ?>
 src="https://api.mapbox.com/mapbox-gl-js/v2.15.0/mapbox-gl.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
>
			mapboxgl.accessToken =
				'pk.eyJ1IjoibWFoZGkxMDAiLCJhIjoiY203dnhrb2ZmMDExbjJscjFlaTd0ZHFzcCJ9.l3WMtWsKakiAT79ijtVLtQ'; // Remplace avec ta clé API Mapbox

			const map = new mapboxgl.Map({
				container: 'map', // ID de la div où afficher la carte
				style: 'mapbox://styles/mapbox/streets-v11', // Style de la carte
				center: [-7.62, 33.57], // Longitude, Latitude (exemple : Casablanca)
				zoom: 12
			});

			// Liste des appartements (remplace avec tes données)
			const apartments = [
				{ name: "Studio Confort", lng: -7.62, lat: 33.57, price: "500MAD/Nuit" },
				{ name: "Studio Lux", lng: -7.63, lat: 33.59, price: "750MAD/Nuit" },
				{ name: "Appartement - 3 Chambres", lng: -7.61, lat: 33.58, price: "600MAD/Nuit" }
			];

			// Ajouter des marqueurs et popups
			apartments.forEach(apartment => {
				const marker = new mapboxgl.Marker()
					.setLngLat([apartment.lng, apartment.lat])
					.setPopup(new mapboxgl.Popup().setHTML(`<h3>${apartment.name}</h3><p>Prix: ${apartment.price}</p>`))
					.addTo(map);
			});
		<?php echo '</script'; ?>
>
	
<?php
}
}
/* {/block 'room_types_filters_block'} */
}
