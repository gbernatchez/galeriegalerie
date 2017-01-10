<?php 
/*
* Template name: Entrée EDC Setup 3
*/
get_header(); ?>

<div class="mur gauche sorti">
	<img alt="" class="titre-porte" src="<?php echo get_template_directory_uri(); ?>/images/archives_flechecorriige.png">
	<a title="<?php echo get_the_title(11); ?>" href="<?php echo get_permalink(11); ?>"></a>
</div>

<div class="tous edcSetup">

	<a target="_blank" href="http://lesenfantsdechienne.com/" title="" class="objet drapeau1">
		<img src="<?php echo get_template_directory_uri(); ?>/edc/medias/entree/setup2-entree-drapeau-droit.png" alt="">
	</a>

	<a target="_blank" href="http://lesenfantsdechienne.com/" title="" class="objet drapeau2">
		<img src="<?php echo get_template_directory_uri(); ?>/edc/medias/entree/setup2-entree-drapeau-gauche.png" alt="">
	</a>

	<div class="objet tag">
		<img src="<?php echo get_template_directory_uri(); ?>/edc/medias/entree/setup2-entree-tag.png" alt="">
	</div>

	<div class="objet lebaquetEntree3">
		<a href="#" data-name="lebaquet" class="bt-popup edc bt-popup-lebaquet click"></a>
		<img src="<?php echo get_template_directory_uri(); ?>/edc/medias/entree/setup3-entree-baquet.png" alt="">
	</div>

	<div class="objet groupe">
		<img src="<?php echo get_template_directory_uri(); ?>/edc/medias/entree/setup3-entree-groupe.png" alt="">
	</div>

</div>

<div class="tous">
	<div class="objet caisseBiere">
		<img src="<?php echo get_template_directory_uri(); ?>/edc/medias/entree/setup2-entree-caissebieres.png" alt="">
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

		<div class="objet baraeau">
			<img src="<?php echo get_template_directory_uri(); ?>/images/baraeau.png" alt="">
		</div>

	</div>

</div><!-- #sol -->

<div class="popup">
	<div class="entry-content">
		<a href="#" class="close" title="Fermer"><span>x</span></a>
		<div data-name="lebaquet" class="texte texte-lebaquet">
			<p>
				<img class="alignleft size-full wp-image-265" src="<?php echo get_template_directory_uri(); ?>/edc/medias/entree/visage-lebaquet.png" alt="" width="58" height="60" />
				<strong>Le Baquet:</strong>
			</p>
			<p>Le monde de l’art s’t’un gros party, pis tous les bums sont invités!</p>
		</div>
	</div>
	<div class="overlay"></div>
</div><!-- .popup -->

<?php get_footer(); ?>
