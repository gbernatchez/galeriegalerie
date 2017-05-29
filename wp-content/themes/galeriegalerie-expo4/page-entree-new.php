<?php 
/*
* Template name: Entrée B34U D3551N
*/
get_header(); ?>

<script type="text/javascript">
	/*jQuery(document).ready(function(){
		jQuery('.old-porte').delay(2000).fadeOut(1500, function(){
			jQuery('.old-porte').hide();
			jQuery('.new-porte').fadeIn(1500);

		});
	}); */
</script>

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

		<h1 class="titre-expo">
			<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/clavie_titre.png">
			<span class="visuallyhidden">B34U D3551N</span>
		</h1>

		<div class="objet enseigne">
			<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/enseigne.png">
		</div>

		<div class="old-porte">
			<div id="porte1" class="objet porte">
				<img src="<?php echo get_template_directory_uri(); ?>/images/porte1.jpg" alt="">
			</div>

			<div id="porte2" class="objet porte">
				<img src="<?php echo get_template_directory_uri(); ?>/images/porte2.jpg" alt="">
			</div>

			<div id="porte3" class="objet porte">
				<img src="<?php echo get_template_directory_uri(); ?>/images/porte3.jpg" alt="">
			</div>
		</div>

		<div class="new-porte">
			<a href="#" id="porte1">
				<img src="<?php echo get_template_directory_uri(); ?>/images/porte1.jpg" alt="">
			</a>

			<a href="#" id="porte2">
				<img src="<?php echo get_template_directory_uri(); ?>/images/porte2.jpg" alt="">
			</a>

			<a href="#" id="porte3">
				<img src="<?php echo get_template_directory_uri(); ?>/images/porte3.jpg" alt="">
			</a>

			<a href="#" id="porte4">
				<img src="<?php echo get_template_directory_uri(); ?>/images/porte3.jpg" alt="">
			</a>

			<a href="#" id="porte5">
				<img src="<?php echo get_template_directory_uri(); ?>/images/porte3.jpg" alt="">
			</a>
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

		<div class="objet baraeau">
			<img src="<?php echo get_template_directory_uri(); ?>/images/baraeau.png" alt="">
		</div>

	</div>

</div><!-- #sol -->

<?php get_footer(); ?>
