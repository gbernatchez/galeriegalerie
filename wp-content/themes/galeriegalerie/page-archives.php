<?php 
/*
* Template name: Archives
*/
get_header(); ?>

<a title="Accueil" href="<?php echo get_template_directory_uri(); ?>/hall" class="mur gauche sorti"></a>

<div class="objet divan-archive">
	<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/divan archive.png">
</div>

<div class="objet livre">
	<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/livres.png">
</div>

<div class="objet livre2">
	<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/livres2.png">
</div>

<div id="mur-fond">

	<a href="<?php echo get_template_directory_uri(); ?>/toilette" title="Aller à la salle de bain" id="portet" class="objet porte click">
		<img class="signe" src="<?php echo get_template_directory_uri(); ?>/images/signe-toilette.jpg" alt="">
		<img src="<?php echo get_template_directory_uri(); ?>/images/porte-toilette.jpg" alt="">
	</a>

	<div class="objet deco-gif">
		<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/gif-décoratif.gif">
	</div>

</div><!-- #mur-fond -->

<div class="mur droit"></div>

<div id="sol" class="coin-droit coin-gauche">
	
	<div class="objet bureau-archive">
		<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/archives.png">
	</div>

</div>

<?php get_footer(); ?>
