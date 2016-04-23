<?php 
/*
* Template name: Hall
*/
get_header(); ?>

<a title="Salle gauche" href="<?php echo get_template_directory_uri(); ?>/bureau" class="mur gauche sorti"></a>

<div id="mur-fond">

	<div class="tous">

		<h1>Exposition Collective</h1>

		<a href="<?php echo get_template_directory_uri(); ?>/expo1" title="Expo 1" id="porte1" class="objet porte click">
			<h2></h2>
			<img src="<?php echo get_template_directory_uri(); ?>/images/porte1.jpg">
		</a>

		<a href="<?php echo get_template_directory_uri(); ?>/expo2" title="Expo 2" id="porte2" class="objet porte click">
			<h2></h2>
			<img src="<?php echo get_template_directory_uri(); ?>/images/porte2.jpg">
		</a>

		<a href="<?php echo get_template_directory_uri(); ?>/expo3" title="Expo 3" id="porte3" class="objet porte click">
			<h2></h2>
			<img src="<?php echo get_template_directory_uri(); ?>/images/porte3.jpg">
		</a>

	</div>

</div><!-- #mur-fond -->

<a title="Salle droite" href="<?php echo get_template_directory_uri(); ?>/archives" class="mur droit sorti"></a>

<div id="sol" class="coin-gauche coin-droit">

	<div class="tous">

		<div class="objet plante">
			<img src="<?php echo get_template_directory_uri(); ?>/images/plante.png" alt="Une plante">
		</div>

		<div class="objet chaise">
			<img src="<?php echo get_template_directory_uri(); ?>/images/chaise.png">
		</div>

		<a href="#" title="Fermer la radio" class="objet radio click">
			<img src="<?php echo get_template_directory_uri(); ?>/images/radio.gif" alt="Une radio">
		</a>

		<div class="objet table">
			<img src="<?php echo get_template_directory_uri(); ?>/images/table.png" alt="Une table">
		</div>

		<div class="objet fontaine">
			<img src="<?php echo get_template_directory_uri(); ?>/images/fontaine-deco.gif" alt="Une fontaine">
		</div>

		<div class="objet baraeau">
			<img src="<?php echo get_template_directory_uri(); ?>/images/baraeau.png" alt="Un bar à eau">
		</div>

	</div>

</div><!-- #sol -->

<?php get_footer(); ?>
