<?php 
/*
* Template name: Bureau
*/
get_header(); ?>

<div class="tous">

	<div class="objet stagiaire">
		<a href="#" data-name="stagiaire" class="bt-popup bt-popup-stagiaire click"></a>
		<img src="<?php echo get_template_directory_uri(); ?>/images/stagiaire_mage_maybe.png" alt="">
	</div>

	<div href="#" class="objet gabrielle">
		<a href="#" data-name="gabrielle" class="bt-popup bt-popup-gabrielle click"></a>
		<img src="<?php echo get_template_directory_uri(); ?>/images/avatar_gab.png" alt="">
	</div>

	<div class="objet charlotte">
		<a href="#" data-name="charlotte" class="bt-popup bt-popup-charlotte click"></a>
		<img src="<?php echo get_template_directory_uri(); ?>/images/Marie-charlotte_renard_conseil.png" alt="">
	</div>

	<div class="objet sophie">
		<a href="#" data-name="sophie" class="bt-popup bt-popup-sophie click"></a>
		<img src="<?php echo get_template_directory_uri(); ?>/images/sophie_avatar.png" alt="">
	</div>

	<div class="objet bureau">
		<img src="<?php echo get_template_directory_uri(); ?>/images/bureau.png" alt="">
	</div>

	<div class="objet chaise2">
		<img src="<?php echo get_template_directory_uri(); ?>/images/orange-office-chair.png" alt="">
	</div>

	<div class="objet bureau2">
		<a href="???" class="ordi-code click" onClick="MyWindow=window.open('http://www.galeriegalerieweb.com/259-2','????', 'location=no,top=100,titlebar=no,status=no,menubar=no,left=300,width=500,height=400'); return false;"></a>
		<img src="<?php echo get_template_directory_uri(); ?>/images/test bureau.gif" alt="">
	</div>

</div>

<div id="mur-fond">

	<div class="tous">

		<div class="objet deco">
			<img src="<?php echo get_template_directory_uri(); ?>/images/cubeplant.png" alt="">
		</div>

		<a href="#" target="_blank" title="Oeuvre de Andrée-Anne Mercier" class="click objet peinture">
			<img alt="Andrée-Anne Mercier" src="<?php echo get_template_directory_uri(); ?>/images/andre-anne-mercier-samourai.jpg" alt="">
		</a>

		<div class="objet conference">
			<img src="<?php echo get_template_directory_uri(); ?>/images/conferenceroom.png" alt="">
		</div>

	</div>

</div><!-- #mur-fond -->

<div class="mur droit sorti">
	<a title="<?php echo get_the_title(7); ?>" href="<?php echo get_permalink(7); ?>"></a>
</div>

<div id="sol" class="coin-gauche coin-droit">


</div><!-- #sol -->

<div class="popup">
	<div class="entry-content">
		<a href="#" class="close" title="Fermer"><span>x</span></a>
		<div data-name="sophie" class="texte texte-sophie">
			<?php the_field('sophie'); ?>
		</div>
		<div data-name="gabrielle" class="texte texte-gabi">
			<?php the_field('gabrielle'); ?>
		</div>
		<div data-name="stagiaire" class="texte texte-stagiaire">
			<?php the_field('stagiaire'); ?>
		</div>
		<div data-name="charlotte" class="texte texte-charlotte">
			<?php the_field('charlotte'); ?>
		</div>
	</div>
	<div class="overlay"></div>
</div><!-- .popup-sophie -->

<?php get_footer(); ?>