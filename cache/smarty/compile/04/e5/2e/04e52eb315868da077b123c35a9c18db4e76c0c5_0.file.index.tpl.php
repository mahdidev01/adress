<?php
/* Smarty version 3.1.39, created on 2025-03-06 09:08:09
  from 'C:\laragon\www\youradress\themes\hotel-reservation-theme\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67c965f9d2a545_83164052',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04e52eb315868da077b123c35a9c18db4e76c0c5' => 
    array (
      0 => 'C:\\laragon\\www\\youradress\\themes\\hotel-reservation-theme\\index.tpl',
      1 => 1741007995,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67c965f9d2a545_83164052 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_112192595267c965f9d1e908_57157329', 'displayHomeTabContent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_95391517467c965f9d21a56_90396964', 'displayHome');
?>

<div id="hotelEquipmentBlock" class="row home_block_container">
	<div class="col-xs-12 col-sm-12 home_amenities_wrapper">
					<div class="home_block_desc_wrapper text-center">
				<p class="home_block_heading">Des lieux de vie équipés pour votre bien-être.</p>
				<p class="home_block_description">Luxe, flexibilité et innovation. Louez en toute sérénité avec des services haut de gamme.</p>
				<hr class="home_block_desc_line"/>
			</div>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_66185746167c965f9d22c64_30567187', 'hotel_features_images');
?>

	</div>
</div>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_74637268967c965f9d28c18_16693813', 'displayBlogBlock');
?>




<?php }
/* {block 'displayHomeTab'} */
class Block_59343510367c965f9d201d9_42527567 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php if ((isset($_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value)) && trim($_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value)) {?>
				<ul id="home-page-tabs" class="nav nav-tabs clearfix">
					<?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value;?>

				</ul>
			<?php }?>
		<?php
}
}
/* {/block 'displayHomeTab'} */
/* {block 'displayHomeTabContent'} */
class Block_112192595267c965f9d1e908_57157329 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'displayHomeTabContent' => 
  array (
    0 => 'Block_112192595267c965f9d1e908_57157329',
  ),
  'displayHomeTab' => 
  array (
    0 => 'Block_59343510367c965f9d201d9_42527567',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ((isset($_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value)) && trim($_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value)) {?>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59343510367c965f9d201d9_42527567', 'displayHomeTab', $this->tplIndex);
?>

		<div class="tab-content"><?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value;?>
</div>
	<?php }
}
}
/* {/block 'displayHomeTabContent'} */
/* {block 'displayHome'} */
class Block_95391517467c965f9d21a56_90396964 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'displayHome' => 
  array (
    0 => 'Block_95391517467c965f9d21a56_90396964',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ((isset($_smarty_tpl->tpl_vars['HOOK_HOME']->value)) && trim($_smarty_tpl->tpl_vars['HOOK_HOME']->value)) {?>
		<div class="clearfix"><?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>
</div>
	<?php }
}
}
/* {/block 'displayHome'} */
/* {block 'hotel_features_images'} */
class Block_66185746167c965f9d22c64_30567187 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hotel_features_images' => 
  array (
    0 => 'Block_66185746167c965f9d22c64_30567187',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<div class="homeAmenitiesBlock home_block_content">
				<div class="row">
						<div class="col-md-4 col-sm-6 col-xs-12 text-center amenity-item">
							<div class="amenity_img_primary">
								<img src="/youradress/modules/wkhotelfeaturesblock/views/img/hotels_features_img/equipe1.jpg" 
									alt="Nettoyage Professionnel"
									class="img-responsive amenity-image"/>
							</div>
							<div class="amenity_desc_primary">
								<p class="amenity_heading">Nettoyage Professionnel</p>
								<p class="amenity_description"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['amenity']->value['feature_description'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 text-center amenity-item">
							<div class="amenity_img_primary">
								<img src="/youradress/modules/wkhotelfeaturesblock/views/img/hotels_features_img/equipe2.jpg" 
									alt="WiFi à Fibre Optique"
									class="img-responsive amenity-image"/>
							</div>
							<div class="amenity_desc_primary">
								<p class="amenity_heading">WiFi à Fibre Optique</p>
								<p class="amenity_description"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['amenity']->value['feature_description'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 text-center amenity-item">
							<div class="amenity_img_primary">
								<img src="/youradress/modules/wkhotelfeaturesblock/views/img/hotels_features_img/equipe3.jpg" 
									alt="Cuisine équipée"
									class="img-responsive amenity-image"/>
							</div>
							<div class="amenity_desc_primary">
								<p class="amenity_heading">Cuisine équipée</p>
								<p class="amenity_description"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['amenity']->value['feature_description'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 text-center amenity-item">
							<div class="amenity_img_primary">
								<img src="/youradress/modules/wkhotelfeaturesblock/views/img/hotels_features_img/equipe4.png" 
									alt="Produits de douche"
									class="img-responsive amenity-image"/>
							</div>
							<div class="amenity_desc_primary">
								<p class="amenity_heading">Produits de douche</p>
								<p class="amenity_description"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['amenity']->value['feature_description'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 text-center amenity-item">
							<div class="amenity_img_primary">
								<img src="/youradress/modules/wkhotelfeaturesblock/views/img/hotels_features_img/equipe5.webp" 
									alt="This is a title"
									class="img-responsive amenity-image"/>
							</div>
							<div class="amenity_desc_primary">
								<p class="amenity_heading">Accès sans clef</p>
								<p class="amenity_description"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['amenity']->value['feature_description'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
							</div>
						</div>
				</div>
				<div class="row">
						<div class="col-md-4 col-sm-6 col-xs-12 text-center amenity-item">
							<div class="amenity_img_primary">
								<img src="/youradress/modules/wkhotelfeaturesblock/views/img/hotels_features_img/equipe6.jpg" 
									alt="This is a title"
									class="img-responsive amenity-image"/>
							</div>
							<div class="amenity_desc_primary">
								<p class="amenity_heading">Literie confortable</p>
								<p class="amenity_description"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['amenity']->value['feature_description'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 text-center amenity-item">
							<div class="amenity_img_primary">
								<img src="/youradress/modules/wkhotelfeaturesblock/views/img/hotels_features_img/equipe7.jpg" 
									alt="Machine à laver"
									class="img-responsive amenity-image"/>
							</div>
							<div class="amenity_desc_primary">
								<p class="amenity_heading">Machine à laver</p>
								<p class="amenity_description"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['amenity']->value['feature_description'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 text-center amenity-item">
							<div class="amenity_img_primary">
								<img src="/youradress/modules/wkhotelfeaturesblock/views/img/hotels_features_img/equipe8.jpg" 
									alt="Machine à café"
									class="img-responsive amenity-image"/>
							</div>
							<div class="amenity_desc_primary">
								<p class="amenity_heading">Machine à café</p>
								<p class="amenity_description"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['amenity']->value['feature_description'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 text-center amenity-item">
							<div class="amenity_img_primary">
								<img src="/youradress/modules/wkhotelfeaturesblock/views/img/hotels_features_img/equipe9.jpg" 
									alt="Serviettes de bain"
									class="img-responsive amenity-image"/>
							</div>
							<div class="amenity_desc_primary">
								<p class="amenity_heading">Serviettes de bain</p>
								<p class="amenity_description"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['amenity']->value['feature_description'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 text-center amenity-item">
							<div class="amenity_img_primary">
								<img src="/youradress/modules/wkhotelfeaturesblock/views/img/hotels_features_img/equipe10.jpg" 
									alt="Conceirgeirie disponible 24/7"
									class="img-responsive amenity-image"/>
							</div>
							<div class="amenity_desc_primary">
								<p class="amenity_heading">Conceirgeirie disponible 24/7</p>
								<p class="amenity_description"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['amenity']->value['feature_description'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
							</div>
						</div>
				</div>
			</div>
		<?php
}
}
/* {/block 'hotel_features_images'} */
/* {block 'displayBlogBlock'} */
class Block_74637268967c965f9d28c18_16693813 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'displayBlogBlock' => 
  array (
    0 => 'Block_74637268967c965f9d28c18_16693813',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="blogBlock" class="row home_block_container">
        <div class="col-xs-12 col-sm-12 home_blog_wrapper">
            <div class="row home_block_desc_wrapper">
                <div class="col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                    <p class="home_block_heading">Conseils de voyage</p>
                    <p class="home_block_description">Découvrez les dernières actualités et conseils pour votre séjour.</p>
                    <hr class="home_block_desc_line"/>
                </div>
            </div>

            <div class="homeBlogsBlock home_block_content">
                <?php $_smarty_tpl->_assignInScope('blogPages', CMS::getCMSPages($_smarty_tpl->tpl_vars['cookie']->value->id_lang,2));?>                 
                <?php if ($_smarty_tpl->tpl_vars['blogPages']->value) {?>
                    <div class="row">

                            <div class="col-md-4">
                                <div class="blog-card">
									<img src="http://youradress.com/img/cms/pexels-denon-studio-480815530-20734776.jpg" alt="Default Image" class="blog-thumbnail" style="height: 240px;">
                                    <h3><a class="blog-title" href="http://youradress.com/fr/content/7-meilleurs-spots-randonnee-quad-buggy-maroc">Aventure en quad et buggy : explorez le Maroc sauvage</a></h3>
                                    <p>Découvrez les plus beaux paysages du Maroc en quad et buggy ! Des dunes aux montagnes...</p>
                                    <a href="http://youradress.com/fr/content/7-meilleurs-spots-randonnee-quad-buggy-maroc" class="btn btn-warning">Lire Plus</a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="blog-card">
									<img src="http://youradress.com/img/cms/pexels-mographe-11294565.jpg" alt="Default Image" class="blog-thumbnail" style="height: 240px;">
                                    <h3><a class="blog-title" href="http://youradress.com/fr/content/8-escapade-en-montagne"> Escapade en montagne									</a></h3>
                                    <p>Le Maroc est un véritable paradis pour les amateurs de sensations fortes et d’aventure en plein air...</p>
                                    <a href="http://youradress.com/fr/content/8-escapade-en-montagne" class="btn btn-warning">Lire Plus</a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="blog-card">
									<img src="http://youradress.com/img/cms/pexels-messalaciulla-989255.jpg" alt="Default Image" class="blog-thumbnail" style="height: 240px;">
                                    <h3><a class="blog-title" href="http://youradress.com/fr/content/9-randonnee-dans-le-desert"> Aventure en quad et buggy : explorez le Maroc sauvage</a></h3>
                                    <p>Le Maroc est un véritable paradis pour les amateurs de sensations fortes et d’aventure en plein air. Avec ses déserts...</p>
                                    <a href="http://youradress.com/fr/content/9-randonnee-dans-le-desert" class="btn btn-warning">Lire Plus</a>
                                </div>
                            </div>

                    </div>
                <?php } else { ?>
                    <p>Aucun article disponible.</p>
                <?php }?>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'displayBlogBlock'} */
}
