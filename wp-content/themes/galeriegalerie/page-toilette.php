<?php 
/*
* Template name: Toilettes
*/
get_header(); ?>

<div class="objet toilette1">
	<img src="<?php echo get_template_directory_uri(); ?>/images/toilette1.png" alt="">
</div>

<div class="objet toilette2">
	<img src="<?php echo get_template_directory_uri(); ?>/images/toilette2.png" alt="">
</div>

<div class="mur gauche"></div>

<div id="murFond">

	<div class="objet fenetre">
		<img src="<?php echo get_template_directory_uri(); ?>/images/fenetre.jpg" alt="">
	</div>

	<div class="objet miroire">
		<img src="<?php echo get_template_directory_uri(); ?>/images/miroire.png" alt="">
	</div>

</div>

<div class="mur droit"></div>

<div id="sol" class="coin-droit coin-gauche">

	<div class="objet lavabo">
		<img src="<?php echo get_template_directory_uri(); ?>/images/lavabo.png" alt="">
	</div>

</div>

<?php get_footer(); ?>
