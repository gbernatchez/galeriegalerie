<?php 
/*
* Template name: Grand Salon Party
*/
get_header(); ?>

<div class="ambiance">
	<div class="lum noir"></div>
	<div class="lum blanc"></div>
</div>

<div class="mur gauche sorti">
	<img alt="" class="titre-porte fleche-gauche" src="<?php echo get_template_directory_uri(); ?>/images/flece_solo.png">
	<a title="<?php echo get_the_title(7); ?>" href="<?php echo get_permalink(7); ?>"></a>
</div>

<div class="tous">

	<div class="objet chat1">
		<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/chat1.gif">
	</div>

	<div class="objet chat2">
		<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/chat2.gif">
	</div>

	<div class="objet fantome">
		<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/large.gif">
	</div>

	<div class="objet divan-archive">
		<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/divan_archive.png">
	</div>

	<div class="objet livre">
		<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/livres.png">
	</div>

	<div class="objet livre2">
		<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/livres2.png">
	</div>

	<div class="objet bipbip">
		<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/bipbip.gif">
	</div>

</div>

<div id="mur-fond">

	<div class="tous">

		<a href="<?php echo site_url(); ?>/toilette" title="Aller à la salle de bain" id="portet" class="objet porte click">
			<img class="signe" src="<?php echo get_template_directory_uri(); ?>/images/signe-toilette.jpg" alt="">
			<img src="<?php echo get_template_directory_uri(); ?>/images/porte-toilette.jpg" alt="">
		</a>

		<a href="#" data-name="oeuvre" class="bt-popup-oeuvre click objet deco-gif">
			<img alt="Andrée-Anne Mercier" src="<?php echo get_template_directory_uri(); ?>/images/andree-anne-mercier.gif">
		</a>

	</div>

</div><!-- #mur-fond -->

<div class="mur droit"></div>

<div id="sol" class="coin-droit coin-gauche">

	<div class="tous">

		<div class="objet bureau-archive">
			<a href="<?php echo site_url(); ?>/archives" title="Consulter les archives" class="click"></a>
			<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/archives.png">
		</div>

	</div>

</div>

<div class="popup">
	<div class="entry-content">
		<a href="#" class="close" title="Fermer"><span>x</span></a>
		<div data-name="oeuvre" class="texte texte-oeuvre">
			<?php the_field('oeuvre', 11); ?>
		</div>
	</div>
	<div class="overlay"></div>
</div><!-- .popup -->

<?php get_footer(); ?>
