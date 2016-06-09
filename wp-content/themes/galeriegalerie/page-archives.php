<?php 
/*
* Template name: Archives
*/
get_header(); ?>

<div class="mur gauche sorti">
	<a title="<?php echo get_the_title(7); ?>" href="<?php echo get_permalink(7); ?>"></a>
</div>

<div class="tous">

	<div class="objet divan-archive">
		<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/divan archive.png">
	</div>

	<div class="objet livre">
		<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/livres.png">
	</div>

	<div class="objet livre2">
		<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/livres2.png">
	</div>

</div>

<div id="mur-fond">

	<div class="tous">

		<a href="<?php echo get_template_directory_uri(); ?>/toilette" title="Aller à la salle de bain" id="portet" class="objet porte click">
			<img class="signe" src="<?php echo get_template_directory_uri(); ?>/images/signe-toilette.jpg" alt="">
			<img src="<?php echo get_template_directory_uri(); ?>/images/porte-toilette.jpg" alt="">
		</a>

		<a href="http://www.andreeannemercier.com/" target="_blank" title="Andrée-Anne Mercier" class="click objet deco-gif">
			<img alt="Andrée-Anne Mercier" src="<?php echo get_template_directory_uri(); ?>/images/andree-anne-mercier.gif">
		</a>

	</div>

</div><!-- #mur-fond -->

<div class="mur droit"></div>

<div id="sol" class="coin-droit coin-gauche">

	<div class="tous">

		<a href="<?php echo get_template_directory_uri(); ?>/finder" title="Consulter les archives" class="objet bureau-archive click">
			<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/archives.png">
		</a>

	</div>

</div>

<?php get_footer(); ?>
