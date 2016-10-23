<?php 
/*
* Template name: Party Roume
*/
get_header(); 
?>

<div id="container">

	<img class="missy" src="<?php echo get_template_directory_uri(); ?>/images/missy.gif">
	<img class="stagiaire" src="<?php echo get_template_directory_uri(); ?>/images/stagiaire_en.gif">

	<h1 class="titre-expo">
		<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/vernissageenligne.png">
		<span class="visuallyhidden">Vernissage en ligne</span>
	</h1>

	<div class="popup intro-photobooth">
		<div class="entry-content">
			<p><img class="alignleft size-full wp-image-266" src="http://www.galeriegalerieweb.com/wp-content/uploads/2015/12/visage_filleordi.png" alt="visage_filleordi" width="55" height="62"><strong>Coordination_01:</strong></p>
			<div data-name="sophie" class="texte texte-sophie visible">
				<p>Poste une photo ou une vidéo sur Instagram en utilisant #SiliconVallée pour joindre le party wall</p>
			</div>
		</div>
	</div>

	<div id="content">

		<?php echo wdi_feed(array('id'=>'1')); ?>

	</div><!-- #content -->

</div><!-- #container -->

<?php get_footer(); ?>
