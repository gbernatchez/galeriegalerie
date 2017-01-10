<?php 
/*
* Template name: Archives EDC Setup 1
*/
get_header(); ?>

<div class="mur gauche sorti">
	<img alt="" class="titre-porte" src="<?php echo get_template_directory_uri(); ?>/images/flece_solo.png">
	<a title="<?php echo get_the_title(7); ?>" href="<?php echo get_permalink(7); ?>"></a>
</div>

<div class="tous">

	<div class="objet sticker">
		<img alt="" src="<?php echo get_template_directory_uri(); ?>/edc/medias/archives/setup1-arhives-sticker.png">
	</div>

	<div class="objet opArchives1">
		<a href="#" data-name="op" class="bt-popup bt-popup-op edc click"></a>
		<img alt="" src="<?php echo get_template_directory_uri(); ?>/edc/medias/archives/setup1-archives-op.png">
	</div>

	<div class="objet lebaquetArchives1">
		<img alt="" src="<?php echo get_template_directory_uri(); ?>/edc/medias/archives/setup1-archives-lebaquet.png">
	</div>

	<div class="objet feuLivre">
		<img alt="" src="<?php echo get_template_directory_uri(); ?>/edc/medias/archives/setup1-archives-feulivres.gif">
	</div>

	<div class="objet bieresArchives">
		<img alt="" src="<?php echo get_template_directory_uri(); ?>/edc/medias/archives/setup1-archives-beer.png">
	</div>

	<div class="objet divan-archive">
		<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/divan_archive.png">
	</div>

	<div class="objet livre">
		<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/livres.png">
	</div>

	<div class="objet livre2">
		<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/livres2.png">
	</div>

	<div class="objet bipbip">
		<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/bipbip.gif">
	</div>

</div>

<div id="mur-fond">

	<div class="tous">

		<a href="<?php echo get_template_directory_uri(); ?>/toilette" title="Aller à la salle de bain" id="portet" class="objet porte click">
			<img class="signe" src="<?php echo get_template_directory_uri(); ?>/images/signe-toilette.jpg" alt="">
			<img src="<?php echo get_template_directory_uri(); ?>/images/porte-toilette.jpg" alt="">
		</a>

		<div class="objet deco-gif">
			<img alt="Andrée-Anne Mercier" src="<?php echo get_template_directory_uri(); ?>/images/andree-anne-mercier.gif">
		</div>

	</div>

</div><!-- #mur-fond -->

<div class="mur droit"></div>

<div id="sol" class="coin-droit coin-gauche">

	<div class="tous">

		<div class="objet bureau-archive">
			<a href="<?php echo get_template_directory_uri(); ?>/finder" title="Consulter les archives" class="click"></a>
			<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/archives.png">
		</div>

	</div>

</div>

<div class="popup">
	<div class="entry-content">
		<a href="#" class="close" title="Fermer"><span>x</span></a>
		<div data-name="op" class="texte texte-op">
			<p>
				<img class="alignleft size-full wp-image-265" src="<?php echo get_template_directory_uri(); ?>/edc/medias/archives/visage-op.png" alt="" width="58" height="60" />
				<strong>O.P.:</strong>
			</p>
			<p>Fuck les livres culturés!</p>
		</div>
	</div>
	<div class="overlay"></div>
</div><!-- .popup -->

<?php get_footer(); ?>
