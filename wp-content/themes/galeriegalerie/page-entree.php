<?php 
/*
* Template name: Entrée
*/
get_header(); ?>

<div class="mur gauche sorti">
	<a title="<?php echo get_the_title(11); ?>" href="<?php echo get_permalink(11); ?>"></a>
</div>

<div class="tous">
	<div class="objet fontaine">
		<img src="<?php echo get_template_directory_uri(); ?>/images/fontaine-deco.gif" alt="Une fontaine">
	</div>
</div>

<div id="mur-fond">

	<div class="tous">

		<h1 class="visuallyhidden">Exposition Collective</h1>

		<a href="/expo-1" title="Expo 1" id="porte1" class="objet porte click">
			<h2></h2>
			<img src="<?php echo get_template_directory_uri(); ?>/images/porte1.jpg">
		</a>

		<a href="/expo-2" title="Expo 2" id="porte2" class="objet porte click">
			<h2></h2>
			<img src="<?php echo get_template_directory_uri(); ?>/images/porte2.jpg">
		</a>

		<a href="/expo-3" title="Expo 3" id="porte3" class="objet porte click">
			<h2></h2>
			<img src="<?php echo get_template_directory_uri(); ?>/images/porte3.jpg">
		</a>

	</div>

</div><!-- #mur-fond -->

<div class="mur droit sorti">
	<a title="<?php echo get_the_title(9); ?>" href="<?php echo get_permalink(9); ?>"></a>
</div>

<div id="sol" class="coin-gauche coin-droit">

	<div class="tous">

		<div class="objet plante">
			<img src="<?php echo get_template_directory_uri(); ?>/images/plante.png" alt="Une plante">
		</div>

		<div class="objet chaise">
			<img src="<?php echo get_template_directory_uri(); ?>/images/chaise.png">
		</div>

		<?php //if(get_field('pamphlet')) : ?>

			<a href="<?php the_field('pamphlet'); ?>" target="_blank" title="Visionner le pamphlet" class="objet pamphlet click">
				<img src="<?php echo get_template_directory_uri(); ?>/images/expo_encours_02.gif" alt="Pamphlet">
			</a>

		<?php //endif; ?>

		<a href="#" title="Fermer la radio" class="objet radio click">
			<img src="<?php echo get_template_directory_uri(); ?>/images/radio.gif" alt="Une radio">
		</a>

		<div class="objet table">
			<img src="<?php echo get_template_directory_uri(); ?>/images/table.png" alt="Une table">
		</div>

		<div class="objet baraeau">
			<img src="<?php echo get_template_directory_uri(); ?>/images/baraeau.png" alt="Un bar à eau">
		</div>

	</div>

</div><!-- #sol -->

<?php get_footer(); ?>
