<?php 
/*
* Template name: Entrée EDC Setup 1
*/
get_header(); ?>

<div class="mur gauche sorti">
	<img alt="" class="titre-porte" src="<?php echo get_template_directory_uri(); ?>/images/archives_flechecorriige.png">
	<a title="<?php echo get_the_title(11); ?>" href="<?php echo get_permalink(11); ?>"></a>
</div>

<div class="tous edcSetup">
	<a target="_blank" href="http://lesenfantsdechienne.com/" title="O.P." class="objet opEntree">
		<img src="<?php echo get_template_directory_uri(); ?>/edc/medias/entree/setup1-entree-op.png" alt="">
	</a>
	<a target="_blank" href="http://lesenfantsdechienne.com/" title="????" class="objet hangaround2Entree">
		<img src="<?php echo get_template_directory_uri(); ?>/edc/medias/entree/setup1-entree-hangaround01.png" alt="">
	</a>
	<a target="_blank" href="http://lesenfantsdechienne.com/" title="Ti-Bras" class="objet tibrasEntree">
		<img src="<?php echo get_template_directory_uri(); ?>/edc/medias/entree/setup1-entree-tibras.png" alt="">
	</a>
	<a target="_blank" href="http://lesenfantsdechienne.com/" title="Le Baquet" class="objet lebaquetEntree">
		<img src="<?php echo get_template_directory_uri(); ?>/edc/medias/entree/setup1-entree-lebaquet.png" alt="">
	</a>
	<a target="_blank" href="http://lesenfantsdechienne.com/" title="????" class="objet hangaround1Entree">
		<img src="<?php echo get_template_directory_uri(); ?>/edc/medias/entree/setup1-entree-hangaround02.png" alt="">
	</a>

</div>

<div class="tous">
	<div class="objet fontaine">
		<img src="<?php echo get_template_directory_uri(); ?>/images/fontaine-deco.gif" alt="">
	</div>

</div>

<div id="mur-fond">

	<div class="tous">

		<h1 class="titre-expo">
			<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/clavie_titre.png">
			<span class="visuallyhidden">C LA VIE ¯\_(ツ)_/¯</span>
		</h1>

		<div class="objet enseigne">
			<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/enseigne.png">
		</div>

		<a href="<?php echo site_url(); ?>/anna-eye" id="porte1" class="objet porte click">
			<h2 class="anna">Anna Eyler</h2>
			<img src="<?php echo get_template_directory_uri(); ?>/images/porte1.jpg" alt="">
		</a>

		<a href="<?php echo site_url(); ?>/roby-provost-blanchard" id="porte2" class="objet porte click">
			<h2 class="roby">Roby Provost-Blanchard</h2>
			<img src="<?php echo get_template_directory_uri(); ?>/images/porte2.jpg" alt="">
		</a>

		<a href="<?php echo site_url(); ?>/conan-lai" id="porte3" class="objet porte click">
			<h2 class="conan">Conan Lai</h2>
			<img src="<?php echo get_template_directory_uri(); ?>/images/porte3.jpg" alt="">
		</a>

	</div>

</div><!-- #mur-fond -->

<div class="mur droit sorti">
	<img alt="" class="archive titre-porte" src="<?php echo get_template_directory_uri(); ?>/images/archives_fleche.png">
	<a title="<?php echo get_the_title(9); ?>" href="<?php echo get_permalink(9); ?>"></a>
</div>

<div id="sol" class="coin-gauche coin-droit">

	<div class="tous">

		<div class="objet plante">
			<img src="<?php echo get_template_directory_uri(); ?>/images/plante.png" alt="">
		</div>

		<div class="objet chaise">
			<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/chaise.png">
		</div>

		<a href="http://www.galeriegalerieweb.com/clavie.pdf" target="_blank" title="Visionner le pamphlet" class="objet pamphlet click">
			<img src="<?php echo get_template_directory_uri(); ?>/images/expo_encours_02.gif" alt="">
			<img alt="" class="titre-pdf" src="<?php echo get_template_directory_uri(); ?>/images/flece_solo.png">
		</a>

		<a href="#" title="Fermer la radio" class="objet radio click">
			<img src="<?php echo get_template_directory_uri(); ?>/images/radio.gif" alt="">
		</a>

		<div class="objet table">
			<img src="<?php echo get_template_directory_uri(); ?>/images/table.png" alt="">
		</div>

		<a target="_blank" href="http://lesenfantsdechienne.com/" title="Chichi" class="objet chichiEntree">
			<img src="<?php echo get_template_directory_uri(); ?>/edc/medias/entree/setup1-entree-chichi.png" alt="">
		</a>

		<div class="objet baraeau">
			<img src="<?php echo get_template_directory_uri(); ?>/images/baraeau.png" alt="">
		</div>

	</div>

</div><!-- #sol -->

<?php get_footer(); ?>
