<?php
/* Smarty version 3.1.39, created on 2025-02-27 17:48:19
  from 'C:\laragon\www\youradress\modules\wkroomsearchblock\views\templates\hook\landingPageXsBtn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67c0a563b4cc94_06760642',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5650ab69163985db5f2400b944d52d06e9dd2c2' => 
    array (
      0 => 'C:\\laragon\\www\\youradress\\modules\\wkroomsearchblock\\views\\templates\\hook\\landingPageXsBtn.tpl',
      1 => 1740596616,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67c0a563b4cc94_06760642 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_213742088267c0a563b4c2a1_44330476', 'landing_page_search_button_mobile');
}
/* {block 'landing_page_search_button_mobile'} */
class Block_213742088267c0a563b4c2a1_44330476 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'landing_page_search_button_mobile' => 
  array (
    0 => 'Block_213742088267c0a563b4c2a1_44330476',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="row visible-xs">
		<div class="col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
						<div class="fancy_search_header_xs">
				<p>Rechercher des Appartements</p>
				<hr>
			</div>
			<div class="header-rmsearch-inner-wrapper">


				<form method="POST" id="search_hotel_block_form">


					<div class="grid" id="search_form_fields_wrapper" style="grid-template-columns: repeat(22, 1fr);">

						<div class="form-group grid-item area-4" style="grid-column: span 4;">
							<div class="dropdown">
								<input type="text" class="form-control header-rmsearch-input input-location"
									id="hotel_location" name="hotel_location" autocomplete="off"
									placeholder="Localisation de l'appartement">
								<input hidden="hidden" name="location_category_id" id="location_category_id">
								<ul class="location_search_results_ul dropdown-menu" style="display: none;"></ul>
							</div>
						</div>


						<div class="form-group grid-item area-5" style="grid-column: span 5;">
							<input type="hidden" id="hotel_cat_id" name="hotel_cat_id">
							<input type="hidden" id="id_hotel" name="id_hotel">
							<input type="hidden" id="max_order_date" name="max_order_date" value="2026-02-13">
							<input type="hidden" id="preparation_time" name="preparation_time" value="0">

							<div class="hotel-selector-wrap ">
								<select name="id_hotel" class="chosen header-rmsearch-input"
									data-placeholder="Sélectionnez un type" id="id_hotel_button">
									<option value="">Sélectionnez un type</option>
									<option class="search_result_li" value="1" data-id-hotel="1" data-hotel-cat-id="7"
										data-max_order_date="2026-02-13" data-preparation_time="0">The Hotel Prime</option>
									<option class="search_result_li" value="2" data-id-hotel="2" data-hotel-cat-id="16"
										data-max_order_date="2026-02-13" data-preparation_time="0">Studios</option>
								</select>
							</div>
						</div>



						<div class="form-group grid-item area-5" style="grid-column: span 5; position: relative;">
							<input type="hidden" id="check_in_time" name="check_in_time">
							<input type="hidden" id="check_out_time" name="check_out_time">
							<div class="form-control header-rmsearch-input input-date" id="daterange_value"
								autocomplete="off" placeholder="Arrivée - Départ" tabindex="-1"><span>Enregistrement
									&nbsp;<i class="icon icon-minus"></i>&nbsp; Vérifier</span></div>
							<div class="date-picker-wrapper no-shortcuts  no-topbar  inline-wrapper no-gap single-month"
								style="display: none; user-select: none;" unselectable="on">
								<div class="month-wrapper" style="width: 190px;">
									<table class="month1" cellspacing="0" border="0" cellpadding="0">
										<thead>
											<tr class="caption">
												<th> <span class="prev"><i class="icon icon-angle-left"></i> </span> </th>
												<th colspan="5" class="month-name">
													<div class="month-element">février</div>
													<div class="month-element">2025</div>
												</th>
												<th><span class="next"><i class="icon icon-angle-right"></i></span> </th>
											</tr>
											<tr class="week-name">
												<th>lu</th>
												<th>ma</th>
												<th>me</th>
												<th>je</th>
												<th>ve</th>
												<th>sa</th>
												<th>di</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<div time="1737972658059" data-tooltip=""
														class="day lastMonth  invalid ">27</div>
												</td>
												<td>
													<div time="1738059058059" data-tooltip=""
														class="day lastMonth  invalid ">28</div>
												</td>
												<td>
													<div time="1738145458059" data-tooltip=""
														class="day lastMonth  invalid ">29</div>
												</td>
												<td>
													<div time="1738231858059" data-tooltip=""
														class="day lastMonth  invalid ">30</div>
												</td>
												<td>
													<div time="1738318258059" data-tooltip=""
														class="day lastMonth  invalid ">31</div>
												</td>
												<td>
													<div time="1738404658059" data-tooltip="" class="day toMonth  invalid ">
														1</div>
												</td>
												<td>
													<div time="1738491058059" data-tooltip="" class="day toMonth  invalid ">
														2</div>
												</td>
											</tr>
											<tr>
												<td>
													<div time="1738577458059" data-tooltip="" class="day toMonth  invalid ">
														3</div>
												</td>
												<td>
													<div time="1738663858059" data-tooltip="" class="day toMonth  invalid ">
														4</div>
												</td>
												<td>
													<div time="1738750258059" data-tooltip="" class="day toMonth  invalid ">
														5</div>
												</td>
												<td>
													<div time="1738836658059" data-tooltip="" class="day toMonth  invalid ">
														6</div>
												</td>
												<td>
													<div time="1738923058059" data-tooltip="" class="day toMonth  invalid ">
														7</div>
												</td>
												<td>
													<div time="1739009458059" data-tooltip="" class="day toMonth  invalid ">
														8</div>
												</td>
												<td>
													<div time="1739095858059" data-tooltip="" class="day toMonth  invalid ">
														9</div>
												</td>
											</tr>
											<tr>
												<td>
													<div time="1739182258059" data-tooltip="" class="day toMonth  invalid ">
														10</div>
												</td>
												<td>
													<div time="1739268658059" data-tooltip="" class="day toMonth  invalid ">
														11</div>
												</td>
												<td>
													<div time="1739355058059" data-tooltip="" class="day toMonth  invalid ">
														12</div>
												</td>
												<td>
													<div time="1739441458059" data-tooltip="" class="day toMonth  invalid ">
														13</div>
												</td>
												<td>
													<div time="1739527858059" data-tooltip="" class="day toMonth  invalid ">
														14</div>
												</td>
												<td>
													<div time="1739614258059" data-tooltip="" class="day toMonth  invalid ">
														15</div>
												</td>
												<td>
													<div time="1739700658059" data-tooltip="" class="day toMonth  invalid ">
														16</div>
												</td>
											</tr>
											<tr>
												<td>
													<div time="1739787058059" data-tooltip="" class="day toMonth  invalid ">
														17</div>
												</td>
												<td>
													<div time="1739873458059" data-tooltip="" class="day toMonth  invalid ">
														18</div>
												</td>
												<td>
													<div time="1739959858059" data-tooltip="" class="day toMonth  invalid ">
														19</div>
												</td>
												<td>
													<div time="1740046258059" data-tooltip="" class="day toMonth  invalid ">
														20</div>
												</td>
												<td>
													<div time="1740132658059" data-tooltip="" class="day toMonth  invalid ">
														21</div>
												</td>
												<td>
													<div time="1740219058059" data-tooltip="" class="day toMonth  invalid ">
														22</div>
												</td>
												<td>
													<div time="1740309058059" data-tooltip="" class="day toMonth  invalid ">
														23</div>
												</td>
											</tr>
											<tr>
												<td>
													<div time="1740395458059" data-tooltip="" class="day toMonth  invalid ">
														24</div>
												</td>
												<td>
													<div time="1740481858059" data-tooltip="" class="day toMonth  invalid ">
														25</div>
												</td>
												<td>
													<div time="1740568258059" data-tooltip=""
														class="day toMonth  valid real-today">26</div>
												</td>
												<td>
													<div time="1740654658059" data-tooltip="" class="day toMonth  valid ">27
													</div>
												</td>
												<td>
													<div time="1740741058059" data-tooltip="" class="day toMonth  valid ">28
													</div>
												</td>
												<td>
													<div time="1740827458059" data-tooltip="" class="day nextMonth  valid ">
														1</div>
												</td>
												<td>
													<div time="1740913858059" data-tooltip="" class="day nextMonth  valid ">
														2</div>
												</td>
											</tr>
										</tbody>
									</table>
									<div class="dp-clearfix"></div>
									<div class="time">
										<div class="time1"></div>
										<div class="time2"></div>
									</div>
									<div class="dp-clearfix"></div>
								</div>
								<div class="footer"></div>
								<div class="date-range-length-tip"></div>
							</div>
						</div>



						<div class="form-group grid-item area-4" style="grid-column: span 4;">
							<div class="dropdown">
								<button class="form-control input-occupancy header-rmsearch-input " type="button"
									data-toggle="dropdown" id="guest_occupancy">
									<span class="pull-left">1 Adult</span>
								</button>
								<div id="search_occupancy_wrapper" class="dropdown-menu">
									<div id="occupancy_inner_wrapper">
										<div class="occupancy-room-block">
											<div class="occupancy_info_head"><span class="room_num_wrapper">Chambre -
													1</span></div>
											<div class="occupancy_info_block" occ_block_index="0">
												<div class="row">
													<div class="form-group occupancy_count_block col-sm-5 col-xs-6">
														<label>Adultes</label>
														<div>
															<input type="hidden"
																class="num_occupancy num_adults room_occupancies"
																name="occupancy[0][adults]" value="1">
															<div class="occupancy_count pull-left">
																<span>1</span>
															</div>
															<div class="qty_direction pull-left">
																<a href="#" data-field-qty="qty"
																	class="btn btn-default occupancy_quantity_up">
																	<span>
																		<i class="icon-plus"></i>
																	</span>
																</a>
																<a href="#" data-field-qty="qty"
																	class="btn btn-default occupancy_quantity_down">
																	<span>
																		<i class="icon-minus"></i>
																	</span>
																</a>
															</div>
														</div>
													</div>
													<div class="form-group occupancy_count_block col-sm-7 col-xs-6">
														<label>Enfants</label>
														<div class="clearfix">
															<input type="hidden"
																class="num_occupancy num_children room_occupancies"
																name="occupancy[0][children]" value="0">
															<div class="occupancy_count pull-left">
																<span>0</span>
															</div>
															<div class="qty_direction pull-left">
																<a href="#" data-field-qty="qty"
																	class="btn btn-default occupancy_quantity_up">
																	<span>
																		<i class="icon-plus"></i>
																	</span>
																</a>
																<a href="#" data-field-qty="qty"
																	class="btn btn-default occupancy_quantity_down">
																	<span>
																		<i class="icon-minus"></i>
																	</span>
																</a>
															</div>
														</div>
														<p class="label-desc-txt">(Ci-dessous 15 ans)</p>
													</div>
												</div>
												<p style="display:none;"><span
														class="text-danger occupancy-input-errors"></span></p>
												<div class="row">
													<div class="form-group children_age_info_block col-sm-12">
														<label>Tous les enfants</label>
														<div class="children_ages">
														</div>
													</div>
												</div>
											</div>
											<hr class="occupancy-info-separator">
										</div>
									</div>
									<div class="occupancy_block_actions">
										<span id="add_new_occupancy">
											<a class="add_new_occupancy_btn" href="#"><i class="icon-plus"></i>
												<span>Ajouter une chambre</span></a>
										</span>
										<span>
											<button class="submit_occupancy_btn btn btn-primary">Fait</button>
										</span>
									</div>
								</div>
							</div>
						</div>


						<div class="form-group grid-item search_room_submit_block area-4" style="grid-column: span 4;">
							<button type="submit" class="btn btn btn-primary" name="search_room_submit"
								id="search_room_submit">
								<span>Rechercher</span>
							</button>
						</div>

					</div>

				</form>
				<?php echo '<script'; ?>
>
					// Call the function to set the grid columns on load
					updateGridColumns();
				<?php echo '</script'; ?>
>

			</div>

		</div>
<?php
}
}
/* {/block 'landing_page_search_button_mobile'} */
}
