<?php 
/*
* Template name: Bureau
*/
get_header(); ?>

<a href="#" class="objet stagiaire bt-popup-stagiaire click">
	<img src="<?php echo get_template_directory_uri(); ?>/images/stagiaire.png" alt="">
</a>

<a href="#" class="objet gabrielle bt-popup-gabrielle click">
	<img src="<?php echo get_template_directory_uri(); ?>/images/avatar_gab.png" alt="">
</a>

<div id="mur-fond">

	<div class="objet deco">
		<img src="<?php echo get_template_directory_uri(); ?>/images/cubeplant.png" alt="">
	</div>

	<div class="objet peinture">
		<img src="<?php echo get_template_directory_uri(); ?>/images/devin-troy-strother.jpg" alt="">
	</div>

	<div class="objet conference">
		<img src="<?php echo get_template_directory_uri(); ?>/images/conferenceroom.png" alt="">
	</div>

</div><!-- #mur-fond -->

<a title="Accueil" href="<?php echo get_template_directory_uri(); ?>/hall" class="mur droit sorti"></a>

<div id="sol" class="coin-gauche coin-droit">

	<div class="objet bureau">
		<img src="<?php echo get_template_directory_uri(); ?>/images/bureau.png" alt="">
	</div>

	<div class="objet chaise2">
		<img src="<?php echo get_template_directory_uri(); ?>/images/orange-office-chair.png" alt="">
	</div>

	<div class="objet bureau2">
		<img src="<?php echo get_template_directory_uri(); ?>/images/test bureau.gif" alt="">
	</div>

	<a href="#" class="objet sophie bt-popup-sophie click">
		<img src="<?php echo get_template_directory_uri(); ?>/images/sophie_avatar.png" alt="">
	</a>

</div><!-- #sol -->

<div class="popup popup-sophie">

	<div class="content">

		<a href="#" class="close close-sophie" title="Fermé"><span>x</span> Fermé</a>

		<?php the_field('sophie'); ?>

	</div>

	<div class="overlay overlay-sophie"></div>

</div><!-- .popup-sophie -->

<div class="popup popup-gabrielle">

	<div class="content">

		<a href="#" class="close close-gabrielle" title="Fermé"><span>x</span> Fermé</a>

		<?php the_field('gabrielle'); ?>

	</div>

	<div class="overlay overlay-gabrielle"></div>

</div><!-- .popup-gabrielle -->

<div class="popup popup-stagiaire">

	<div class="content">

		<a href="#" class="close close-stagiaire" title="Fermé"><span>x</span> Fermé</a>

		<?php the_field('stagiaire'); ?>

	</div>

	<div class="overlay overlay-stagiaire"></div>

</div><!-- .popup-stagiaire -->

<?php get_footer(); ?>