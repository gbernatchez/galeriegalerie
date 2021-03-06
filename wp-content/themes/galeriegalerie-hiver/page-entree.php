<?php 
/*
* Template name: Entrée
*/
get_header(); ?>

<div class="mur gauche sorti">
	<img alt="" class="titre-porte" src="<?php echo get_template_directory_uri(); ?>/images/archives_flechecorriige.png">
	<a title="<?php echo get_the_title(11); ?>" href="<?php echo get_permalink(11); ?>"></a>
</div>

<div class="tous">
	<div class="objet fontaine">
		<img src="<?php echo get_template_directory_uri(); ?>/images/fontaine-deco.gif" alt="">
	</div>
</div>


<div id="mur-fond">

	<div class="tous">

		<h1 class="visuallyhidden">Exposition Collective</h1>

		<div class="inntro">
			♡☆ Exposition à venir, fin octobre 2016 ☆♡
		</div>

		<div class="objet enseigne">
			<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/enseigne.png">
		</div>

		<div class="objet danger danger1">
			<img src="<?php echo get_template_directory_uri(); ?>/images/danger.png" alt="">
		</div>

		<div class="objet danger danger2">
			<img src="<?php echo get_template_directory_uri(); ?>/images/danger.png" alt="">
		</div>

		<div id="porte1" class="objet porte click">
			<img src="<?php echo get_template_directory_uri(); ?>/images/porte1.jpg" alt="">
		</div>

		<div id="porte2" class="objet porte click">
			<img src="<?php echo get_template_directory_uri(); ?>/images/porte2.jpg" alt="">
		</div>

		<div id="porte3" class="objet porte click">
			<img src="<?php echo get_template_directory_uri(); ?>/images/porte3.jpg" alt="">
		</div>

	</div>

</div><!-- #mur-fond -->

<div class="mur droit sorti">
	<img alt="" class="archive titre-porte" src="<?php echo get_template_directory_uri(); ?>/images/archives_fleche.png">
	<a title="<?php echo get_the_title(9); ?>" href="<?php echo get_permalink(9); ?>"></a>
</div>

<div id="sol" class="coin-gauche coin-droit">

	<div class="tous">

		<div class="objet cone cone1">
			<img src="<?php echo get_template_directory_uri(); ?>/images/cone.png" alt="">
		</div>

		<div class="objet cone cone2">
			<img src="<?php echo get_template_directory_uri(); ?>/images/cone.png" alt="">
		</div>

		<div class="objet cone cone3">
			<img src="<?php echo get_template_directory_uri(); ?>/images/cone.png" alt="">
		</div>

		<div class="objet plante">
			<img src="<?php echo get_template_directory_uri(); ?>/images/plante.png" alt="">
		</div>

		<div class="objet chaise">
			<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/chaise.png">
		</div>

		<?php if(get_field('pamphlet')) : ?>

			<a href="<?php the_field('pamphlet'); ?>" target="_blank" title="Visionner le pamphlet" class="objet pamphlet click">
				<img src="<?php echo get_template_directory_uri(); ?>/images/expo_encours_02.gif" alt="">
			</a>

		<?php endif; ?>

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

<?php get_footer(); ?>
