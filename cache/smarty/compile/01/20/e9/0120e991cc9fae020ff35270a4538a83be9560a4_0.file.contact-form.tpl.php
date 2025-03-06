<?php
/* Smarty version 3.1.39, created on 2025-03-06 15:53:21
  from 'C:\laragon\www\youradress\themes\hotel-reservation-theme\contact-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67c9c4f1a8e3d7_85270406',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0120e991cc9fae020ff35270a4538a83be9560a4' => 
    array (
      0 => 'C:\\laragon\\www\\youradress\\themes\\hotel-reservation-theme\\contact-form.tpl',
      1 => 1741007995,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67c9c4f1a8e3d7_85270406 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36032798067c9c4f1a86b53_92341953', 'contact_form');
}
/* {block 'errors'} */
class Block_109779882467c9c4f1a87e70_59677045 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
	<?php
}
}
/* {/block 'errors'} */
/* {block 'contact_form'} */
class Block_36032798067c9c4f1a86b53_92341953 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contact_form' => 
  array (
    0 => 'Block_36032798067c9c4f1a86b53_92341953',
  ),
  'errors' => 
  array (
    0 => 'Block_109779882467c9c4f1a87e70_59677045',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ((isset($_GET['confirm']))) {?>
		<p class="alert alert-success"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your message has been successfully sent to our team.'),$_smarty_tpl ) );?>
</p>
	<?php }?>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_109779882467c9c4f1a87e70_59677045', 'errors', $this->tplIndex);
?>

	<link rel="stylesheet"
		href="http://localhost/youradress/themes/hotel-reservation-theme/css/contactPage/css/nicepage.css" media="screen">
	<link rel="stylesheet"
		href="http://localhost/youradress/themes/hotel-reservation-theme/css/contactPage/css/contact-us.css" media="screen">
	<?php echo '<script'; ?>
 class="u-script" type="text/javascript"
		src="http://localhost/youradress/themes/hotel-reservation-theme/js/contactPage/js/jquery-1.9.1.min.js" defer="">
	<?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 class="u-script" type="text/javascript"
		src="http://localhost/youradress/themes/hotel-reservation-theme/js/contactPage/js/nicepage.js" defer="">
	<?php echo '</script'; ?>
>
	<div class="margin-top-50 htl-contact-page">
		<div class="container">
			<section class="u-clearfix u-gradient u-section-1" id="sec-5dd4">
				<div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-sheet-1">
					<div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
						<div class="u-layout">
							<div class="u-layout-row">
								<div
									class="u-container-align-left-md u-container-style u-layout-cell u-size-30 u-layout-cell-1">
									<div class="u-container-layout u-container-layout-1">
										<h1
											class="u-align-left-md u-align-left-sm u-align-left-xs u-text u-text-default-lg u-text-default-md u-text-default-xl u-text-1">
											Contactez-nous - YourAdress à Votre Écoute</h1>
										<p
											class="u-align-left-md u-align-left-sm u-align-left-xs u-text u-text-default u-text-2">
											Une question ? Un besoin spécifique ? Nous sommes disponibles 24/7 pour vous
											répondre. </p>
										<a href=""
											class="u-border-none u-btn u-button-style u-custom-color-1 u-hover-white u-radius u-text-hover-custom-color-1 u-text-white u-btn-1">
											Envoyez-nous un message</a>
									</div>
								</div>
								<div class="u-container-style u-layout-cell u-size-30 u-layout-cell-2">
									<div class="u-container-layout u-container-layout-2">
										<img class="u-expanded-width u-image u-image-round u-radius u-image-1" alt=""
											data-image-width="6000" data-image-height="4000"
											src="http://localhost/youradress/themes/hotel-reservation-theme/img/contactimg/pexels-yankrukov-8867434.jpg"
											data-animation-name="customAnimationIn" data-animation-duration="2000">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="u-clearfix u-section-2" id="sec-a4c5">
				<div
					class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-sheet-1">
					<div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
						<div class="u-layout">
							<div class="u-layout-row">
								<div class="u-container-style u-layout-cell u-size-30 u-layout-cell-1">
									<div class="u-container-layout u-container-layout-1">
										<h3 class="u-text u-text-default u-text-1">Addresse</h3>
										<div class="u-border-2 u-border-grey-75 u-container-style u-expanded-width u-group u-radius u-shape-round u-group-1"
											data-animation-name="customAnimationIn" data-animation-duration="2000">
											<div class="u-container-layout u-container-layout-2">
												<span class="u-icon u-icon-1"><svg class="u-svg-link"
														preserveAspectRatio="xMidYMin slice" viewBox="0 0 54.757 54.757"
														style="">
														<use xlink:href="#svg-e83a"></use>
													</svg><svg class="u-svg-content" viewBox="0 0 54.757 54.757" x="0px"
														y="0px" id="svg-e83a"
														style="enable-background:new 0 0 54.757 54.757;">
														<g>
															<path d="M27.557,12c-3.859,0-7,3.141-7,7s3.141,7,7,7s7-3.141,7-7S31.416,12,27.557,12z M27.557,24c-2.757,0-5-2.243-5-5
s2.243-5,5-5s5,2.243,5,5S30.314,24,27.557,24z"></path>
															<path d="M40.94,5.617C37.318,1.995,32.502,0,27.38,0c-5.123,0-9.938,1.995-13.56,5.617c-6.703,6.702-7.536,19.312-1.804,26.952
L27.38,54.757L42.721,32.6C48.476,24.929,47.643,12.319,40.94,5.617z M41.099,31.431L27.38,51.243L13.639,31.4
C8.44,24.468,9.185,13.08,15.235,7.031C18.479,3.787,22.792,2,27.38,2s8.901,1.787,12.146,5.031
C45.576,13.08,46.321,24.468,41.099,31.431z"></path>
														</g>
													</svg></span>
												<h5 class="u-text u-text-2"> 72 Boulevard Massira Al Khadra, Casablanca</h5>
											</div>
										</div>
										<h3 class="u-text u-text-default u-text-3">Online</h3>
										<div class="u-border-2 u-border-grey-75 u-container-style u-expanded-width u-group u-radius u-shape-round u-group-2"
											data-animation-name="customAnimationIn" data-animation-duration="1000">
											<div
												class="u-container-layout u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-container-layout-3">
												<span class="u-align-left u-icon u-icon-2"><svg class="u-svg-link"
														preserveAspectRatio="xMidYMin slice" viewBox="0 0 60 60" style="">
														<use xlink:href="#svg-3da3"></use>
													</svg><svg class="u-svg-content" viewBox="0 0 60 60" x="0px" y="0px"
														id="svg-3da3" style="enable-background:new 0 0 60 60;">
														<g>
															<path
																d="M42.595,0H17.405C14.977,0,13,1.977,13,4.405v51.189C13,58.023,14.977,60,17.405,60h25.189C45.023,60,47,58.023,47,55.595
V4.405C47,1.977,45.023,0,42.595,0z M15,8h30v38H15V8z M17.405,2h25.189C43.921,2,45,3.079,45,4.405V6H15V4.405
C15,3.079,16.079,2,17.405,2z M42.595,58H17.405C16.079,58,15,56.921,15,55.595V48h30v7.595C45,56.921,43.921,58,42.595,58z">
															</path>
															<path d="M30,49c-2.206,0-4,1.794-4,4s1.794,4,4,4s4-1.794,4-4S32.206,49,30,49z M30,55c-1.103,0-2-0.897-2-2s0.897-2,2-2
s2,0.897,2,2S31.103,55,30,55z"></path>
															<path
																d="M26,5h4c0.553,0,1-0.447,1-1s-0.447-1-1-1h-4c-0.553,0-1,0.447-1,1S25.447,5,26,5z">
															</path>
															<path
																d="M33,5h1c0.553,0,1-0.447,1-1s-0.447-1-1-1h-1c-0.553,0-1,0.447-1,1S32.447,5,33,5z">
															</path>
															<path d="M56.612,4.569c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414c3.736,3.736,3.736,9.815,0,13.552
c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293
C61.128,16.434,61.128,9.085,56.612,4.569z"></path>
															<path d="M52.401,6.845c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414c1.237,1.237,1.918,2.885,1.918,4.639
s-0.681,3.401-1.918,4.638c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293
c1.615-1.614,2.504-3.764,2.504-6.052S54.017,8.459,52.401,6.845z"></path>
															<path d="M4.802,5.983c0.391-0.391,0.391-1.023,0-1.414s-1.023-0.391-1.414,0c-4.516,4.516-4.516,11.864,0,16.38
c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414
C1.065,15.799,1.065,9.72,4.802,5.983z"></path>
															<path d="M9.013,6.569c-0.391-0.391-1.023-0.391-1.414,0c-1.615,1.614-2.504,3.764-2.504,6.052s0.889,4.438,2.504,6.053
c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414
c-1.237-1.237-1.918-2.885-1.918-4.639S7.775,9.22,9.013,7.983C9.403,7.593,9.403,6.96,9.013,6.569z"></path>
														</g>
													</svg></span>
												<h5 class="u-align-left u-text u-text-4">+212 660 698 754</h5>
												<span class="u-icon u-icon-3"><svg class="u-svg-link"
														preserveAspectRatio="xMidYMin slice" viewBox="0 0 60 60" style="">
														<use xlink:href="#svg-9fcb"></use>
													</svg><svg class="u-svg-content" viewBox="0 0 60 60" x="0px" y="0px"
														id="svg-9fcb" style="enable-background:new 0 0 60 60;">
														<g>
															<path
																d="M38.914,0H6.5v60h47V14.586L38.914,0z M39.5,3.414L50.086,14H39.5V3.414z M8.5,58V2h29v14h14v42H8.5z">
															</path>
															<path
																d="M42.5,21h-16c-0.552,0-1,0.447-1,1s0.448,1,1,1h16c0.552,0,1-0.447,1-1S43.052,21,42.5,21z">
															</path>
															<path d="M22.875,18.219l-4.301,3.441l-1.367-1.367c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414l2,2
C17.987,23.901,18.243,24,18.5,24c0.22,0,0.441-0.072,0.624-0.219l5-4c0.432-0.346,0.501-0.975,0.156-1.406
C23.936,17.943,23.306,17.874,22.875,18.219z"></path>
															<path
																d="M42.5,32h-16c-0.552,0-1,0.447-1,1s0.448,1,1,1h16c0.552,0,1-0.447,1-1S43.052,32,42.5,32z">
															</path>
															<path d="M22.875,29.219l-4.301,3.441l-1.367-1.367c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414l2,2
C17.987,34.901,18.243,35,18.5,35c0.22,0,0.441-0.072,0.624-0.219l5-4c0.432-0.346,0.501-0.975,0.156-1.406
C23.936,28.943,23.306,28.874,22.875,29.219z"></path>
															<path
																d="M42.5,43h-16c-0.552,0-1,0.447-1,1s0.448,1,1,1h16c0.552,0,1-0.447,1-1S43.052,43,42.5,43z">
															</path>
															<path d="M22.875,40.219l-4.301,3.441l-1.367-1.367c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414l2,2
C17.987,45.901,18.243,46,18.5,46c0.22,0,0.441-0.072,0.624-0.219l5-4c0.432-0.346,0.501-0.975,0.156-1.406
C23.936,39.943,23.306,39.874,22.875,40.219z"></path>
														</g>
													</svg></span>
												<h5 class="u-text u-text-5">contact@youradress.com</h5>
											</div>
										</div>
									</div>
								</div>
								<div class="u-container-style u-layout-cell u-size-30 u-layout-cell-2">
									<div class="u-container-layout u-container-layout-4">
										<h3 class="u-text u-text-default u-text-6">Localisation</h3>
										<div class="u-expanded-width u-grey-light-2 u-map u-map-1">
											<div class="embed-responsive">
												<iframe class="embed-responsive-item"
													src="https://maps.google.com/maps?output=embed&amp;q=%E2%80%8B72%20Boulevard%20Massira%20Al%20Khadra%2C%20Casablanca&amp;z=10&amp;t=m"
													data-map="JTdCJTIycG9zaXRpb25UeXBlJTIyJTNBJTIybWFwLWFkZHJlc3MlMjIlMkMlMjJhZGRyZXNzJTIyJTNBJTIyJUUyJTgwJThCNzIlMjBCb3VsZXZhcmQlMjBNYXNzaXJhJTIwQWwlMjBLaGFkcmElMkMlMjBDYXNhYmxhbmNhJTIyJTJDJTIyem9vbSUyMiUzQTEwJTJDJTIydHlwZUlkJTIyJTNBJTIycm9hZCUyMiUyQyUyMmxhbmclMjIlM0FudWxsJTJDJTIyYXBpS2V5JTIyJTNBbnVsbCUyQyUyMm1hcmtlcnMlMjIlM0ElNUIlNUQlN0Q="></iframe>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="u-clearfix u-gradient u-section-3" id="sec-fe0b">
				<div class="u-clearfix u-sheet u-sheet-1">
					<h2 class="u-align-center u-text u-text-default u-text-1"> Formulaire de Contact</h2>
					<div class="u-align-left-lg u-align-left-xl u-hidden-xs u-palette-2-base u-preserve-proportions u-shape u-shape-circle u-shape-1"
						data-animation-name="customAnimationIn" data-animation-duration="2000"></div>
					<div class="u-expanded-width-sm u-expanded-width-xs u-form u-form-1">
						<form action="https://forms.nicepagesrv.com/v2/form/process"
							class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="email" name="form"
							style="padding: 10px;">
							<div class="u-form-group u-form-name">
								<label for="name-e893" class="u-label">Nom et Prénom </label>
								<input type="text" placeholder="(Champ obligatoire)" id="name-e893" name="name"
									class="u-border-none u-input u-input-rectangle u-radius u-input-1" required="">
							</div>
							<div class="u-form-email u-form-group">
								<label for="email-e893" class="u-label">Adresse e-mail</label>
								<input type="email" placeholder="(Champ obligatoire)" id="email-e893" name="email"
									class="u-border-none u-input u-input-rectangle u-radius u-input-2" required="">
							</div>
							<div class="u-form-group u-form-group-3">
								<label for="text-4fc7" class="u-label">Numéro de téléphone</label>
								<input type="text" placeholder="(Champ obligatoire)" id="text-4fc7" name="text"
									class="u-border-none u-input u-input-rectangle u-radius u-input-3" required="required">
							</div>
							<div class="u-form-group u-form-select u-form-group-4">
								<label for="select-a5ce" class="u-label">Sujet</label>
								<div class="u-form-select-wrapper">
									<select id="select-a5ce" name="select-1"
										class="u-border-none u-input u-input-rectangle u-radius u-input-4">
										<option value="Réservation" data-calc="">Réservation</option>
										<option value="Assistance" data-calc="">Assistance</option>
										<option value="Partenariat" data-calc="">Partenariat</option>
										<option value="Autre">Autre</option>
									</select>
									<svg class="u-caret u-caret-svg" version="1.1" id="Layer_1"
										xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
										x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16"
										style="fill:currentColor;" xml:space="preserve">
										<polygon class="st0" points="8,12 2,4 14,4 "></polygon>
									</svg>
								</div>
							</div>
							<div class="u-form-group u-form-message">
								<label for="message-e893" class="u-label">Message</label>
								<textarea placeholder="​" rows="4" cols="50" id="message-e893" name="message"
									class="u-border-none u-input u-input-rectangle u-radius u-input-5"
									required=""></textarea>
							</div>
							<div class="u-form-agree u-form-group u-form-group-6">
								<label class="u-block-e2b2-15 u-field-label" style=""></label>
								<input type="checkbox" id="agree-0e08" name="agree" class="u-agree-checkbox u-field-input"
									required="">
								<label for="agree-0e08" class="u-agree-label u-field-label">I accept the <a
										class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-grey-75 u-btn-1"
										href="#">Terms of Service</a>
								</label>
							</div>
							<div class="u-align-left u-form-group u-form-submit">
								<a href="#"
									class="u-border-none u-btn u-btn-submit u-button-style u-grey-70 u-radius u-btn-2">
									Envoyer le message</a>
								<input type="submit" value="submit" class="u-form-control-hidden">
							</div>
							<div class="u-form-send-message u-form-send-success">Thank you! Your message has been sent.
							</div>
							<div class="u-form-send-error u-form-send-message">Unable to send your message. Please fix
								errors
								then try again.</div>
							<input type="hidden" value="" name="recaptchaResponse">
							<input type="hidden" name="formServices" value="7681b6de-770f-1ac6-f2c4-5dad5c7c951d">
						</form>
					</div>
				</div>
			</section>
			<section class="u-align-center u-clearfix u-container-align-center u-gradient u-section-4" id="block-1">
				<div class="u-clearfix u-sheet u-sheet-1">
					<h2 class="u-text u-text-default u-text-1"> Foire Aux Questions (FAQ)</h2>
					<div class="u-accordion u-expanded-width u-faq u-spacing-10 u-accordion-1">
						<div class="u-accordion-item">
							<a class="active u-accordion-link u-active-white u-button-style u-hover-white u-white u-accordion-link-1"
								id="link-accordion-f600" aria-controls="accordion-f600" aria-selected="true">
								<span class="u-accordion-link-text"> 🛏️ Réservations &amp; Modifications</span>
								<span class="u-accordion-link-icon u-icon u-text-grey-50 u-icon-5"><svg class="u-svg-link"
										preserveAspectRatio="xMidYMin slice" viewBox="0 0 448 448" style="">
										<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-0883"></use>
									</svg><svg class="u-svg-content" viewBox="0 0 448 448" id="svg-0883" style="">
										<path
											d="m272 184c-4.417969 0-8-3.582031-8-8v-176h-80v176c0 4.417969-3.582031 8-8 8h-176v80h176c4.417969 0 8 3.582031 8 8v176h80v-176c0-4.417969 3.582031-8 8-8h176v-80zm0 0">
										</path>
									</svg></span>
							</a>
							<div class="u-accordion-active u-accordion-pane u-container-style u-white u-accordion-pane-1"
								id="accordion-f600" aria-labelledby="link-accordion-f600" aria-expanded="true">
								<div class="u-container-layout u-container-layout-1">
									<div class="fr-view u-clearfix u-rich-text u-text">
										<p style="line-height: 1.2;">
											<span style="font-weight: 700;">Comment réserver un appartement sur YourAdress
												?</span>
										</p>
										<p style="line-height: 1.2;">✅ Vous pouvez réserver directement sur notre site en
											sélectionnant votre destination, vos dates et le type d’appartement souhaité.
											Une confirmation immédiate vous sera envoyée par e-mail.</p>
										<p style="line-height: 1.2;">
											<br>
										</p>
										<p style="line-height: 1.2;">
											<span style="font-weight: 700;">&nbsp;Puis-je modifier ou annuler ma réservation
												?</span>
										</p>
										<p style="line-height: 1.2;">✅ Oui, selon les conditions de votre réservation.
											Certaines offres permettent l’annulation gratuite jusqu’à 24h avant l’arrivée.
											Vous pouvez gérer votre réservation via votre compte ou nous contacter.</p>
										<p style="line-height: 1.2;">
											<br>
										</p>
										<p style="line-height: 1.2;">
											<span style="font-weight: 700;">Dois-je payer la totalité lors de la réservation
												?</span>
										</p>
										<p style="line-height: 1.2;">✅ Non, nous proposons plusieurs options : paiement
											total à la réservation, acompte avec solde à l’arrivée ou paiement à l’arrivée
											selon l’offre choisie.&nbsp;</p>
										<p style="line-height: 1.2;">
											<span style="font-weight: 700;">Comment obtenir une facture après mon séjour
												?</span>
										</p>
										<p style="line-height: 1.2;">✅ Une facture électronique est envoyée par e-mail après
											votre départ. Vous pouvez aussi la télécharger depuis votre compte client.</p>
										<p style="line-height: 1.2;">
											<br>
										</p>
										<p>
											<br>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="u-accordion-item">
							<a class="u-accordion-link u-active-white u-button-style u-hover-white u-white u-accordion-link-2"
								id="link-accordion-72f4" aria-controls="accordion-72f4" aria-selected="false">
								<span class="u-accordion-link-text"> 💳 Paiement &amp; Dépôt de Garantie</span>
								<span class="u-accordion-link-icon u-icon u-text-grey-50 u-icon-5"><svg class="u-svg-link"
										preserveAspectRatio="xMidYMin slice" viewBox="0 0 448 448" style="">
										<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-0883"></use>
									</svg><svg class="u-svg-content" viewBox="0 0 448 448" id="svg-0883" style="">
										<path
											d="m272 184c-4.417969 0-8-3.582031-8-8v-176h-80v176c0 4.417969-3.582031 8-8 8h-176v80h176c4.417969 0 8 3.582031 8 8v176h80v-176c0-4.417969 3.582031-8 8-8h176v-80zm0 0">
										</path>
									</svg></span>
							</a>
							<div class="u-accordion-pane u-container-style u-white u-accordion-pane-2" id="accordion-72f4"
								aria-labelledby="link-accordion-72f4" aria-expanded="true">
								<div class="u-container-layout u-container-layout-2">
									<div class="fr-view u-clearfix u-rich-text u-text">
										<p>
											<span style="font-weight: 700;"> Quels sont les modes de paiement acceptés
												?</span>
										</p>
										<p>✅ Nous acceptons les cartes bancaires (Visa, Mastercard, AMEX), PayPal et les
											virements bancaires.</p>
										<p>
											<span style="font-weight: 700;">Dois-je verser un dépôt de garantie ?</span>
										</p>
										<p>✅ Oui, un dépôt peut être requis selon l’appartement réservé. Il est restitué
											dans un délai de 24 à 48h après votre départ si aucun dommage n’est constaté.
										</p>
										<p>
											<span style="font-weight: 700;">Y a-t-il des frais cachés ?</span>
										</p>
										<p>✅ Non, tous les frais sont affichés lors de la réservation. Les taxes locales
											peuvent s’appliquer selon la ville.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="u-accordion-item u-accordion-item-3">
							<a class="u-accordion-link u-active-white u-button-style u-hover-white u-white u-accordion-link-3"
								id="link-accordion-854e" aria-controls="accordion-854e" aria-selected="false">
								<span class="u-accordion-link-text"> 🏡 Hébergement &amp; Services</span>
								<span class="u-accordion-link-icon u-icon u-text-grey-50 u-icon-5"><svg class="u-svg-link"
										preserveAspectRatio="xMidYMin slice" viewBox="0 0 448 448" style="">
										<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-0883"></use>
									</svg><svg class="u-svg-content" viewBox="0 0 448 448" id="svg-0883" style="">
										<path
											d="m272 184c-4.417969 0-8-3.582031-8-8v-176h-80v176c0 4.417969-3.582031 8-8 8h-176v80h176c4.417969 0 8 3.582031 8 8v176h80v-176c0-4.417969 3.582031-8 8-8h176v-80zm0 0">
										</path>
									</svg></span>
							</a>
							<div class="u-accordion-pane u-container-style u-white u-accordion-pane-3" id="accordion-854e"
								aria-labelledby="link-accordion-854e" aria-expanded="true">
								<div class="u-container-layout u-container-layout-3">
									<div class="fr-view u-clearfix u-rich-text u-text">
										<p>
											<span style="font-weight: 700;">Les appartements sont-ils entièrement équipés
												?</span>
										</p>
										<p>✅ Oui, chaque appartement dispose d’une cuisine équipée, d’une connexion Wi-Fi
											gratuite, d’un espace de travail et d’un linge de lit propre.</p>
										<p>
											<span style="font-weight: 700;">Proposez-vous un service de ménage pendant le
												séjour ?</span>
										</p>
										<p>✅ Un ménage de fin de séjour est inclus. Pour un ménage quotidien ou
											supplémentaire, contactez-nous pour les options disponibles.</p>
										<p>
											<span style="font-weight: 700;">Les animaux sont-ils acceptés ?</span>
										</p>
										<p>✅ Certains appartements acceptent les animaux domestiques. Vérifiez les
											conditions sur la page de réservation ou contactez-nous avant de réserver.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="u-accordion-item u-accordion-item-4">
							<a class="u-accordion-link u-active-white u-button-style u-hover-white u-white u-accordion-link-4"
								id="link-03a4" aria-controls="03a4" aria-selected="false">
								<span class="u-accordion-link-text"> 🚖 Transports &amp; Accès</span>
								<span class="u-accordion-link-icon u-icon u-text-grey-50 u-icon-5"><svg class="u-svg-link"
										preserveAspectRatio="xMidYMin slice" viewBox="0 0 448 448" style="">
										<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-0883"></use>
									</svg><svg class="u-svg-content" viewBox="0 0 448 448" id="svg-0883" style="">
										<path
											d="m272 184c-4.417969 0-8-3.582031-8-8v-176h-80v176c0 4.417969-3.582031 8-8 8h-176v80h176c4.417969 0 8 3.582031 8 8v176h80v-176c0-4.417969 3.582031-8 8-8h176v-80zm0 0">
										</path>
									</svg></span>
							</a>
							<div class="u-accordion-pane u-container-style u-white u-accordion-pane-4" id="03a4"
								aria-labelledby="link-03a4">
								<div class="u-container-layout u-container-layout-4">
									<div class="fr-view u-clearfix u-rich-text u-text">
										<p style="line-height: 1.2;">
											<span style="font-weight: 700;">Proposez-vous un service de transfert depuis
												l’aéroport ou la gare ?</span>
										</p>
										<p style="line-height: 1.2;">✅ Oui, nous pouvons organiser votre transfert en taxi
											ou en voiture privée vers l’appartement. Indiquez-le lors de votre réservation
											ou contactez-nous à l’avance.</p>
										<p style="line-height: 1.2;">
											<span style="font-weight: 700;">Où puis-je récupérer les clés de l’appartement
												?</span>
										</p>
										<p style="line-height: 1.2;">✅ Nous proposons un check-in autonome (boîte à clés
											sécurisée) ou un check-in avec accueil personnalisé, selon l’appartement
											réservé. Toutes les informations sont envoyées avant votre arrivée.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="u-accordion-item u-accordion-item-5">
							<a class="u-accordion-link u-active-white u-button-style u-hover-white u-white u-accordion-link-5"
								id="link-4634" aria-controls="4634" aria-selected="false">
								<span class="u-accordion-link-text"> 📞 Assistance &amp; Support</span>
								<span class="u-accordion-link-icon u-icon u-text-grey-50 u-icon-5"><svg class="u-svg-link"
										preserveAspectRatio="xMidYMin slice" viewBox="0 0 448 448" style="">
										<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-0883"></use>
									</svg><svg class="u-svg-content" viewBox="0 0 448 448" id="svg-0883" style="">
										<path
											d="m272 184c-4.417969 0-8-3.582031-8-8v-176h-80v176c0 4.417969-3.582031 8-8 8h-176v80h176c4.417969 0 8 3.582031 8 8v176h80v-176c0-4.417969 3.582031-8 8-8h176v-80zm0 0">
										</path>
									</svg></span>
							</a>
							<div class="u-accordion-pane u-container-style u-white u-accordion-pane-5" id="4634"
								aria-labelledby="link-4634" aria-expanded="true">
								<div class="u-container-layout u-container-layout-5">
									<div class="fr-view u-clearfix u-rich-text u-text">
										<p style="line-height: 1.2;">
											<span style="font-weight: 700;">&nbsp;Que faire en cas de problème pendant mon
												séjour ?</span>
										</p>
										<p style="line-height: 1.2;">✅ Notre équipe est disponible 24/7 par téléphone,
											WhatsApp ou e-mail pour vous assister en cas de besoin.</p>
										<p style="line-height: 1.2;">Comment puis-je contacter le service client ?</p>
										<p style="line-height: 1.2;">✅ 📞 Téléphone : +212 660 698 754📧 E-mail :
											contact@youradress.com💬 WhatsApp :<a
												class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
												href="wa.ordre" target="">
												<span class="u-text-custom-color-1">Cliquez ici pour discuter avec
													nous</span>
											</a>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section
				class="u-clearfix u-container-align-center-lg u-container-align-center-md u-container-align-center-sm u-container-align-center-xl u-section-5"
				id="sec-980b">
				<div class="u-clearfix u-sheet u-sheet-1">
					<div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
						<div class="u-gutter-0 u-layout">
							<div class="u-layout-row">
								<div class="u-container-align-center u-container-style u-image u-layout-cell u-left-cell u-size-30-lg u-size-30-xl u-size-30-xxl u-size-60-md u-size-60-sm u-size-60-xs u-image-1"
									data-image-width="1380" data-image-height="920">
									<div class="u-container-layout u-container-layout-1"></div>
								</div>
								<div
									class="u-container-align-center u-container-style u-layout-cell u-right-cell u-size-30-lg u-size-30-xl u-size-30-xxl u-size-60-md u-size-60-sm u-size-60-xs u-layout-cell-2">
									<div class="u-container-layout u-container-layout-2">
										<h2 class="u-align-center u-text u-text-1"> Rejoignez-nous sur les Réseaux Sociaux
										</h2>
										<div class="u-social-icons u-spacing-21 u-social-icons-1">
											<a class="u-social-url" target="_blank" href="">
												<span
													class="u-icon u-icon-circle u-social-facebook u-social-icon u-icon-1"><svg
														class="u-svg-link" preserveAspectRatio="xMidYMin slice"
														viewBox="0 0 112 112" style="">
														<use xlink:href="#svg-2fe9"></use>
													</svg><svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-2fe9"
														class="u-svg-content">
														<circle fill="#3B5998" cx="56.1" cy="56.1" r="55"></circle>
														<path fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
  c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"></path>
													</svg></span>
											</a>
											<a class="u-social-url" target="_blank" href="">
												<span
													class="u-icon u-icon-circle u-social-icon u-social-twitter u-icon-2"><svg
														class="u-svg-link" preserveAspectRatio="xMidYMin slice"
														viewBox="0 0 112 112" style="">
														<use xlink:href="#svg-0979"></use>
													</svg><svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-0979"
														class="u-svg-content">
														<circle fill="#55ACEE" class="st0" cx="56.1" cy="56.1" r="55">
														</circle>
														<path fill="#FFFFFF" d="M83.8,47.3c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2C38,87.2,31,85,25,81.2c1,0.1,2.1,0.2,3.2,0.2
  c6.3,0,12.1-2.1,16.7-5.7c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1
  c0-0.1,0-0.1,0-0.2c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14
  c-0.2-1-0.3-2-0.3-3.1c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4
  c2.7-0.3,5.3-1,7.7-2.1C88.7,43,86.4,45.4,83.8,47.3z"></path>
													</svg></span>
											</a>
											<a class="u-social-url" target="_blank" href="">
												<span
													class="u-icon u-icon-circle u-social-icon u-social-instagram u-icon-3"><svg
														class="u-svg-link" preserveAspectRatio="xMidYMin slice"
														viewBox="0 0 112 112" style="">
														<use xlink:href="#svg-46f7"></use>
													</svg><svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-46f7"
														class="u-svg-content">
														<circle fill="#C536A4" cx="56.1" cy="56.1" r="55"></circle>
														<path fill="#FFFFFF"
															d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
  z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z"></path>
														<path fill="#FFFFFF"
															d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z">
														</path>
														<path fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
  C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
  c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path>
													</svg></span>
											</a>
											<a class="u-social-url" target="_blank" href="">
												<span
													class="u-icon u-icon-circle u-social-icon u-social-linkedin u-icon-4"><svg
														class="u-svg-link" preserveAspectRatio="xMidYMin slice"
														viewBox="0 0 112 112" style="">
														<use xlink:href="#svg-270d"></use>
													</svg><svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-270d"
														class="u-svg-content">
														<circle fill="#007AB9" cx="56.1" cy="56.1" r="55"></circle>
														<path fill="#FFFFFF" d="M41.3,83.7H27.9V43.4h13.4V83.7z M34.6,37.9L34.6,37.9c-4.6,0-7.5-3.1-7.5-7c0-4,3-7,7.6-7s7.4,3,7.5,7
  C42.2,34.8,39.2,37.9,34.6,37.9z M89.6,83.7H76.2V62.2c0-5.4-1.9-9.1-6.8-9.1c-3.7,0-5.9,2.5-6.9,4.9c-0.4,0.9-0.4,2.1-0.4,3.3v22.5
  H48.7c0,0,0.2-36.5,0-40.3h13.4v5.7c1.8-2.7,5-6.7,12.1-6.7c8.8,0,15.4,5.8,15.4,18.1V83.7z"></path>
													</svg></span>
											</a>
											<a class="u-social-url" target="_blank" href="">
												<span
													class="u-icon u-icon-circle u-social-google u-social-icon u-icon-5"><svg
														class="u-svg-link" preserveAspectRatio="xMidYMin slice"
														viewBox="0 0 112 112" style="">
														<use xlink:href="#svg-ede4"></use>
													</svg><svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-ede4"
														class="u-svg-content">
														<circle fill="#DC4E41" cx="56.1" cy="56.1" r="55"></circle>
														<path fill="#FFFFFF" d="M60.8,76.3c-6.6,8.6-19,11.1-29,7.7c-10.6-3.5-18.4-14.2-18.2-25.5C13,44.6,25.3,31.8,39.1,31.6
  c7.1-0.6,14,2.1,19.3,6.6c-2.2,2.4-4.4,4.8-6.9,7.1c-4.8-2.9-10.4-5-15.9-3.1c-8.8,2.6-14.3,13-10.9,21.8
  c2.7,9.1,13.7,14.1,22.5,10.2c4.5-1.6,7.5-5.7,8.7-10.2c-5.1-0.1-10.2,0-15.5-0.2c0-3,0-6.1,0-9.2c8.6,0,17.1,0,25.7,0
  C66.7,62.3,65.5,70.4,60.8,76.3z M98.3,62.5c-2.6,0-5.1,0-7.7,0c0,2.6,0,5.1,0,7.7c-2.6,0-5.1,0-7.7,0c0-2.6,0-5.1,0-7.7
  c-2.6,0-5.1,0-7.7,0c0-2.6,0-5.1,0-7.7c2.6,0,5.1,0,7.7,0c0-2.6,0-5.1,0.1-7.7c2.6,0,5.1,0,7.7,0c0,2.6,0,5.1,0,7.7
  c2.6,0,5.1,0,7.7,0C98.3,57.3,98.3,59.9,98.3,62.5z"></path>
													</svg></span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<a href="Contact.html#sec-fe0b" data-page-id="87867673"
						class="u-btn u-button-style u-custom-color-1 u-text-white u-btn-1"> Contactez-nous maintenant</a>
				</div>
				<style data-mode="XXL" data-visited="true">
					@media (max-width: 0px) {
						.u-section-5 {
							background-image: none;
						}

						.u-section-5 .u-sheet-1 {
							min-height: 519px;
						}

						.u-section-5 .u-layout-wrap-1 {
							margin-top: 60px;
							margin-bottom: 60px;
						}

						.u-section-5 .u-image-1 {
							min-height: 389px;
							background-image: url("http://localhost/youradress/themes/hotel-reservation-theme/img/contactimg/7a1efc23-1b7a-7322-b1dc-bc6485a69227.jpg");
							background-position: 50% 50%;
						}

						.u-section-5 .u-container-layout-1 {
							padding-top: 30px;
							padding-bottom: 30px;
							padding-left: 60px;
							padding-right: 60px;
						}

						.u-section-5 .u-layout-cell-2 {
							min-height: 389px;
						}

						.u-section-5 .u-container-layout-2 {
							padding-top: 23px;
							padding-bottom: 23px;
							padding-left: 30px;
							padding-right: 30px;
						}

						.u-section-5 .u-text-1 {
							margin-top: 0;
							margin-left: 0;
							margin-right: 0;
							margin-bottom: 0;
						}

						.u-section-5 .u-btn-1 {
							font-size: 1.5rem;
							margin-top: 30px;
							margin-left: 0;
							margin-right: 0;
							margin-bottom: 0;
						}

						.u-section-5 .u-social-icons-1 {
							height: 52px;
							min-height: 16px;
							width: 344px;
							min-width: 164px;
							white-space: nowrap;
							margin-top: 34px;
							margin-left: auto;
							margin-right: auto;
							margin-bottom: 0;
						}

						.u-section-5 .u-icon-1 {
							height: 100%;
						}

						.u-section-5 .u-icon-2 {
							height: 100%;
						}

						.u-section-5 .u-icon-3 {
							height: 100%;
						}

						.u-section-5 .u-icon-4 {
							height: 100%;
						}

						.u-section-5 .u-icon-5 {
							height: 100%;
						}

						.u-block-3ee8-17 {
							width: 146px;
							margin-top: 34px;
							margin-left: auto;
							margin-right: auto;
							margin-bottom: 0;
						}

						.u-block-3ee8-18 {
							background-image: none;
							border-style: solid;
							padding-top: 0;
							padding-bottom: 0;
							padding-left: 0;
							padding-right: 0;
						}
					}
				</style>
			</section>
		</div>
	</div>
<?php
}
}
/* {/block 'contact_form'} */
}
