<?php 
/*
* Template name: Entrée EDC Setup 2
*/
get_header(); ?>

<div class="mur gauche sorti">
	<img alt="" class="titre-porte" src="<?php echo get_template_directory_uri(); ?>/images/archives_flechecorriige.png">
	<a title="<?php echo get_the_title(11); ?>" href="<?php echo get_permalink(11); ?>"></a>
</div>

<div class="tous edcSetup">
	<div class="objet chichiEntree2">
		<a href="#" data-name="chichi" class="bt-popup edc bt-popup-chichi click"></a>
		<img src="<?php echo get_template_directory_uri(); ?>/edc/medias/entree/setup2-entree-chichi.png" alt="">
	</div>
	<div class="objet tibrasEntree2">
		<a href="#" data-name="tibras" class="bt-popup edc bt-popup-tibras click"></a>
		<img src="<?php echo get_template_directory_uri(); ?>/edc/medias/entree/setup2-entree-tibras.png" alt="">
	</div>
	<div class="objet stagiaireEntree2">
		<a href="#" data-name="stagiaire" class="bt-popup bt-popup-stagiaire click"></a>
		<img src="<?php echo get_template_directory_uri(); ?>/edc/medias/entree/setup2-entree-stagiaire.png" alt="">
	</div>

	<a target="_blank" href="http://lesenfantsdechienne.com/" title="" class="objet drapeau1">
		<img src="<?php echo get_template_directory_uri(); ?>/edc/medias/entree/setup2-entree-drapeau-droit.png" alt="">
	</a>

	<a target="_blank" href="http://lesenfantsdechienne.com/" title="" class="objet drapeau2">
		<img src="<?php echo get_template_directory_uri(); ?>/edc/medias/entree/setup2-entree-drapeau-gauche.png" alt="">
	</a>

	<div class="objet tag">
		<img src="<?php echo get_template_directory_uri(); ?>/edc/medias/entree/setup2-entree-tag.png" alt="">
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

		<div class="objet opEntree2">
			<a href="#" data-name="op" class="bt-popup edc bt-popup-op click"></a>
			<img src="<?php echo get_template_directory_uri(); ?>/edc/medias/entree/setup2-entree-op.png" alt="">
		</div>
		
		<div class="objet lebaquetEntree2">
			<a href="#" data-name="lebaquet" class="bt-popup edc bt-popup-lebaquet click"></a>
			<img src="<?php echo get_template_directory_uri(); ?>/edc/medias/entree/setup2-entree-lebaquet.png" alt="">
		</div>

		<div class="objet baraeau">
			<img src="<?php echo get_template_directory_uri(); ?>/images/baraeau.png" alt="">
		</div>

	</div>

</div><!-- #sol -->

<div class="popup">
	<div class="entry-content">
		<a href="#" class="close" title="Fermer"><span>x</span></a>
		<div data-name="stagiaire" class="texte texte-stagiaire">
			<p>
				<img class="alignleft size-full wp-image-265" src="<?php echo get_template_directory_uri(); ?>/edc/medias/entree/visage_stagiaire_lol.png" alt="" width="58" height="60" />
				<strong>Stagiaire_nonrémunéré(e)?:</strong>
			</p>
			<p>Sortez-moi d’ici!</p>
		</div>
		<div data-name="chichi" class="texte texte-chichi">
			<p>
				<img class="alignleft size-full wp-image-265" src="<?php echo get_template_directory_uri(); ?>/edc/medias/entree/visage-chichi.png" alt="" width="58" height="60" />
				<strong>Chichi:</strong>
			</p>
			<p>Prends une carte, farme ta yeule!</p>
		</div>
		<div data-name="lebaquet" class="texte texte-lebaquet">
			<p>
				<img class="alignleft size-full wp-image-265" src="<?php echo get_template_directory_uri(); ?>/edc/medias/entree/visage-lebaquet.png" alt="" width="58" height="60" />
				<strong>Le Baquet:</strong>
			</p>
			<p>Ma contribution au monde de l’art!</p>
		</div>
		<div data-name="op" class="texte texte-op">
			<p>
				<img class="alignleft size-full wp-image-265" src="<?php echo get_template_directory_uri(); ?>/edc/medias/entree/visage-op.png" alt="" width="58" height="60" />
				<strong>O.P.:</strong>
			</p>
			<p>TCA, Taking Care of Art.</p>
		</div>
		<div data-name="tibras" class="texte texte-tibras">
			<p>
				<img class="alignleft size-full wp-image-265" src="<?php echo get_template_directory_uri(); ?>/edc/medias/entree/visage-tibras.png" alt="" width="58" height="60" />
				<strong>Ti-Bras:</strong>
			</p>
			<p><a href="http://lesenfantsdechienne.com/dons/">Tu veux passer? Paye ostie!</a></p>
		</div>
	</div>
	<div class="overlay"></div>
</div><!-- .popup -->

<?php get_footer(); ?>
