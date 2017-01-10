<?php 
/*
* Template name: Entrée Noël
*/
get_header(); ?>

<div class="mur gauche sorti">
	<img alt="" class="titre-porte" src="<?php echo get_template_directory_uri(); ?>/images/archives_flechecorriige.png">
	<a title="<?php echo get_the_title(11); ?>" href="<?php echo get_permalink(11); ?>"></a>
</div>

<div class="tous">
	<div class="objet pere-noel">
		<img src="<?php echo get_template_directory_uri(); ?>/images/pere-noel.gif" alt="">
	</div>
	<div class="objet neige4">
		<img src="<?php echo get_template_directory_uri(); ?>/images/neige2.png" alt="">
	</div>
	<div class="objet neige5">
		<img src="<?php echo get_template_directory_uri(); ?>/images/snow.png" alt="">
	</div>

	<div class="objet neige6">
		<img src="<?php echo get_template_directory_uri(); ?>/images/snow.png" alt="">
	</div>

	<div class="objet neige7">
		<img src="<?php echo get_template_directory_uri(); ?>/images/snow.png" alt="">
	</div>
</div>


<div id="mur-fond">

	<div class="tous">

		<h1 class="visuallyhidden">Exposition Collective</h1>

		<div class="inntro">
			♡☆ Joyeuses Fêtes ! ☆♡
		</div>

		<div class="objet enseigne">
			<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/enseigne.png">
		</div>

		<div id="porte1" class="objet porte click">

			<img src="<?php echo get_template_directory_uri(); ?>/images/porte1glace.jpg" alt="">
		</div>

		<div id="porte2" class="objet porte click">
			<img src="<?php echo get_template_directory_uri(); ?>/images/porte2glace.jpg" alt="">
		</div>

		<div id="porte3" class="objet porte click">
			<img src="<?php echo get_template_directory_uri(); ?>/images/porte3glace.jpg" alt="">
		</div>

	</div>

</div><!-- #mur-fond -->

<div class="mur droit sorti">
	<img alt="" class="archive titre-porte" src="<?php echo get_template_directory_uri(); ?>/images/archives_fleche.png">
	<a title="<?php echo get_the_title(9); ?>" href="<?php echo get_permalink(9); ?>"></a>
</div>

<div id="sol" class="coin-gauche coin-droit">

	<div class="tous">

		<div class="objet plante">
			<img class="boucle" src="<?php echo get_template_directory_uri(); ?>/images/boucle.gif">
			<img src="<?php echo get_template_directory_uri(); ?>/images/plante.png" alt="">
		</div>

		<div class="objet chaise">
			<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/chaise.png">
		</div>

		<div class="objet renne">
			<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/renne.gif">
		</div>

		<a href="#" title="Fermer la radio" class="objet radio click">
			<img src="<?php echo get_template_directory_uri(); ?>/images/radio.gif" alt="">
		</a>

		<div class="objet table">
			<img class="zelda" src="<?php echo get_template_directory_uri(); ?>/images/zelda_glace.png" alt="">
			<img class="globe" src="<?php echo get_template_directory_uri(); ?>/images/globe.gif" alt="">
			<img src="<?php echo get_template_directory_uri(); ?>/images/table.png" alt="">
		</div>

		<div class="objet decorating-tree">
			<img src="<?php echo get_template_directory_uri(); ?>/images/decorating-tree.gif" alt="">
		</div>

	</div>

</div><!-- #sol -->

<?php get_footer(); ?>
