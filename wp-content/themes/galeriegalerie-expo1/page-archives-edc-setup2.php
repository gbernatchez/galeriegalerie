<?php 
/*
* Template name: Archives EDC Setup 3
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

	<div class="objet bieresArchives">
		<img alt="" src="<?php echo get_template_directory_uri(); ?>/edc/medias/archives/setup1-archives-beer.png">
	</div>

	<div class="objet bieresArchives2">
		<img alt="" src="<?php echo get_template_directory_uri(); ?>/edc/medias/archives/setup1-archives-beer.png">
	</div>

	<div class="objet bieresArchives3">
		<img alt="" src="<?php echo get_template_directory_uri(); ?>/edc/medias/archives/setup1-archives-beer.png">
	</div>

	<div class="objet caissesBieresArchives">
		<img alt="" src="<?php echo get_template_directory_uri(); ?>/edc/medias/archives/setup3-archives-caissebeer.png">
	</div>

	<div class="objet filleSaoule">
		<img alt="" src="<?php echo get_template_directory_uri(); ?>/edc/medias/archives/setup3-archives-hangaround02.png">
	</div>

	<div class="objet stagiaireArchive">
		<a href="#" data-name="stagiaire" class="bt-popup bt-popup-stagiaire click"></a>
		<img alt="" src="<?php echo get_template_directory_uri(); ?>/edc/medias/archives/setup3-archives-stagiaire.png">
	</div>

	<div class="objet divan-archive">
		<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/divan_archive.png">
	</div>

	<div class="objet livre2">
		<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/livres2.png">
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
		<div data-name="stagiaire" class="texte texte-stagiaire">
			<p>
				<img class="alignleft size-full wp-image-265" src="<?php echo get_template_directory_uri(); ?>/edc/medias/archives/visage_stagiaire_lol.png" alt="" width="58" height="60" />
				<strong>Stagiaire_nonrémunéré(e)?:</strong>
			</p>
			<p>C’est tu vraiment ça les oeuvres d’art des Enfants de Chienne!?</p>
		</div>
	</div>
	<div class="overlay"></div>
</div><!-- .popup -->

<?php get_footer(); ?>
