{*
* 2010-2019 Webkul.
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
*  @copyright 2010-2019 Webkul IN
*  @license   https://store.webkul.com/license.html
*}

{block name='navigation_menu'}
	<div class="header-top-item">
		<button type="button" class="nav_toggle">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>

	<div id="menu_cont" class="menu_cont_right">
		<div class="row margin-lr-0">
			<div class="col-xs-12 col-sm-12">
				<div class="row margin-lr-0">
					<span class="pull-right close_navbar"><i class="icon-close"></i></span>
				</div>
				<div class="row">
					<ul class="nav nav-pills nav-stacked wk-nav-style">
						<li>
							<a class="navigation-link" href="#">Hébergements</a>
						</li>
						<li>
							<a class="navigation-link" href="#">Conseils de Voyage</a>
						</li>
						<li>
							<a class="navigation-link" href="/fr/a-propos">À Propos</a>
						</li>
						<li>
							<a class="navigation-link" href="/fr/nous-contacter">Contact</a>
						</li>
						{* {block name='displayDefaultNavigationHook'}
							{hook h="displayDefaultNavigationHook"}
						{/block} *}
					</ul>
					{block name='displayExternalNavigationHook'}
						{hook h="displayExternalNavigationHook"}
					{/block}
				</div>
			</div>
		</div>
	</div>
{/block}
