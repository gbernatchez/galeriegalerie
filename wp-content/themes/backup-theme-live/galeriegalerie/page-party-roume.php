<?php 
/*
* Template name: Party Roume
*/
get_header(); 
?>

<div class="ambiance">
	<div class="dark"></div>
	<div class="lum rouge"></div>
	<div class="lum bleu"></div>
</div>

<div id="container">

	<div class="tous">
		<div class="objet missy">
			<img src="<?php echo get_template_directory_uri(); ?>/images/missy.gif">
		</div>
		<div class="objet stagiaire-party">
			<img src="<?php echo get_template_directory_uri(); ?>/images/stagiaire_en.gif">
		</div>
		<div class="objet gabi-party">
			<img src="<?php echo get_template_directory_uri(); ?>/images/gabi-balloune.gif">
		</div>
		<div class="objet squelette-party">
			<img src="<?php echo get_template_directory_uri(); ?>/images/squelette-dance.gif">
		</div>
		<div class="objet pizza-party">
			<img src="<?php echo get_template_directory_uri(); ?>/images/giphy13.gif">
		</div>
		<div class="objet drink1-party">
			<img src="<?php echo get_template_directory_uri(); ?>/images/giphy11.gif">
		</div>
		<div class="objet drink2-party">
			<img src="<?php echo get_template_directory_uri(); ?>/images/giphy12.gif">
		</div>
		<div class="objet drink3-party">
			<img src="<?php echo get_template_directory_uri(); ?>/images/giphy16.gif">
		</div>
		<div class="objet ovni-party">
			<img src="<?php echo get_template_directory_uri(); ?>/images/giphy5.gif">
		</div>
		<div class="objet dragon-party">
			<img src="<?php echo get_template_directory_uri(); ?>/images/giphy6.gif">
		</div>
		<div class="objet potion-party">
			<img src="<?php echo get_template_directory_uri(); ?>/images/potion.gif">
		</div>
		<div class="objet lisa">
			<img src="<?php echo get_template_directory_uri(); ?>/images/lisa.gif">
		</div>
		<div class="objet lune-party">
			<img src="<?php echo get_template_directory_uri(); ?>/images/lune.gif">
		</div>
	</div>

	<h1 class="titre-expo">
		<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/vernissageenligne.png">
		<span class="visuallyhidden">Vernissage en ligne</span>
	</h1>

	<div class="popup intro-photobooth">
		<div class="entry-content">
			<p><img class="alignleft size-full wp-image-266" src="http://www.galeriegalerieweb.com/wp-content/uploads/2015/12/visage_filleordi.png" alt="visage_filleordi" width="75"><strong>Coordination_01:</strong></p>
			<div data-name="sophie" class="texte texte-sophie visible">
				<p>Post une photo sur Instagram avec le hashtag #galeriegalerie et elle sera automatiquement affichée dans le party wall !!</p>
			</div>
		</div>
	</div>

	<div id="content">

		<?php echo wdi_feed(array('id'=>'1')); ?>

	</div><!-- #content -->

</div><!-- #container -->

<?php get_footer(); ?>
