{*
* 2010-2018 Webkul.
*
* NOTICE OF LICENSE
*
* All right is reserved,
* Please go through this link for complete license : https://store.webkul.com/license.html
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade this module to newer
* versions in the future. If you wish to customize this module for your
* needs please refer to https://store.webkul.com/customisation-guidelines/ for more information.
*
*  @author    Webkul IN <support@webkul.com>
*  @copyright 2010-2018 Webkul IN
*  @license   https://store.webkul.com/license.html
*}

{block name='room_types_filters_block'}
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
			{block name='room_types_amenities_filter'}
				{if isset($config) && $config['SHOW_AMENITIES_FILTER'] && $all_feat}
					<div class="row margin-lr-0 layered_filter_cont">
						<div class="col-sm-12 layered_filter_heading">
							<div class="row margin-lr-0">
								<div class="pull-left lf_headingmain_wrapper">
									<span>{l s='Amenities' mod='wkhotelfilterblock'}</span>
									<hr class="theme-text-underline">
								</div>
								<span class="pull-right clear_filter">{l s='Clear Filter' mod='wkhotelfilterblock'}</span>
							</div>
						</div>
						<div class="col-sm-12 lf_sub_cont">
							{foreach $all_feat as $feat}
								<div class="layered_filt">
									<input type="checkbox" class="filter" data-type="amenities" value="{$feat.id_feature}">
									<span class="filters_name">{$feat.name}</span>
								</div>
							{/foreach}
						</div>
					</div>
				{/if}
			{/block}

			{block name='room_types_price_filter'}
				{if isset($config) && $config['SHOW_PRICE_FILTER']}
					<div class="row margin-lr-0 layered_filter_cont">
						<div class="col-sm-12 layered_filter_heading">
							<div class="row margin-lr-0">
								<div class="pull-left lf_headingmain_wrapper">
									<span>{l s='Price' mod='wkhotelfilterblock'}</span>
									<hr class="theme-text-underline">
								</div>
								<span class="pull-right clear_filter">{l s='Clear Filter' mod='wkhotelfilterblock'}</span>
							</div>
						</div>
						<div class="col-sm-12 lf_sub_cont">
							<div class="row margin-lr-0 price_filter_subcont">
								<span class="pull-left"><span id="filter_price_from">{displayPrice price=$min_price}</span></span>
								<span class="pull-right"><span id="filter_price_to">{displayPrice price=$max_price}</span></span>
							</div>
							<div id="filter_price_silder"></div>
						</div>
					</div>
				{/if}
			{/block}
		</div>
	</div>
	{block name='room_types_filters_js_vars'}
		{strip}
			{addJsDef num_days = $num_days}
			{addJsDef date_from = $date_from}
			{addJsDef date_to = $date_to}

			{addJsDef cat_link = $cat_link}
			{addJsDef min_price = $min_price}
			{addJsDef max_price = $max_price}
			{addJsDef warning_num = $warning_num}

			{addJsDefL name=viewMoreTxt}{l s='View More' js=1 mod='wkhotelfilterblock'}{/addJsDefL}
			{addJsDefL name=bookNowTxt}{l s='Book Now' js=1 mod='wkhotelfilterblock'}{/addJsDefL}
		{/strip}
	{/block}
	{literal}
		<script src="https://api.mapbox.com/mapbox-gl-js/v2.15.0/mapbox-gl.js"></script>
		<script>
			mapboxgl.accessToken =
				'pk.eyJ1IjoibWFoZGkxMDAiLCJhIjoiY203dnhrb2ZmMDExbjJscjFlaTd0ZHFzcCJ9.l3WMtWsKakiAT79ijtVLtQ'; // Remplace avec ta clé API Mapbox

			const map = new mapboxgl.Map({
				container: 'map', // ID de la div où afficher la carte
				style: 'mapbox://styles/mapbox/streets-v11', // Style de la carte
				center: [-7.62, 33.57], // Longitude, Latitude (exemple : Casablanca)
				zoom: 12
			});

			// Désactiver le zoom avec un seul doigt
			map.scrollZoom.disable();
			map.touchZoomRotate.enable({ cooperative: true });

			// Liste des appartements (remplace avec tes données)
			const apartments = [{
					name: "Studio Confort",
					lng: -7.62,
					lat: 33.57,
					price: "500MAD/Nuit",
					image: "http://localhost/youradress/28-home_default/studio-confort.jpg",
					link: "http://localhost/youradress/fr/studios/12-studio-lux.html"
				},
				{
					name: "Studio Lux",
					lng: -7.63,
					lat: 33.59,
					price: "750MAD/Nuit",
					image: "http://localhost/youradress/28-home_default/studio-confort.jpg",
					link: "http://localhost/youradress/fr/studios/12-studio-lux.html"
				},
				{
					name: "Appartement - 3 Chambres",
					lng: -7.61,
					lat: 33.58,
					price: "600MAD/Nuit",
					image: "http://localhost/youradress/28-home_default/studio-confort.jpg",
					link: "http://localhost/youradress/fr/studios/12-studio-lux.html"
				}, {
					name: "Appartement - 2 Chambres",
					lng: -7.60,
					lat: 33.58,
					price: "400MAD/Nuit",
					image: "http://localhost/youradress/28-home_default/studio-confort.jpg",
					link: "http://localhost/youradress/fr/studios/12-studio-lux.html"
				}
			];

			// Ajouter des marqueurs et popups
			apartments.forEach(apartment => {
				const marker = new mapboxgl.Marker()
					.setLngLat([apartment.lng, apartment.lat])
					// .setPopup(new mapboxgl.Popup().setHTML(`<h3>${apartment.name}</h3><p>Prix: ${apartment.price}</p>`))
					.setPopup(new mapboxgl.Popup().setHTML(`<div style="width: 100%; font-family: Arial, sans-serif;">
<img src="${apartment.image}" style="width: 100%; border-radius: 8px; margin-bottom: 10px;" alt="Appartement">
<h3 style="margin: 0; font-size: 18px;">${apartment.name}</h3>
<p style="margin: 5px 0; font-size: 16px; font-weight: bold; color: #333;">${apartment.price}</p>
<a href="${apartment.link}" target="_blank" 
           style="display: block; text-align: center; background-color: #379AEF; color: white; padding: 10px; text-decoration: none; border-radius: 5px;">
           Réserver maintenant
        </a>
    </div>`))
					.addTo(map);
			});
		</script>
	{/literal}
{/block}