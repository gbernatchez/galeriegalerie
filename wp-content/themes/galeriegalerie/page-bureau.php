<?php 
/*
* Template name: Bureau
*/
get_header(); ?>

<div class="tous">

	<div class="objet stagiaire">
		<a href="#" class="bt-popup bt-popup-stagiaire click"></a>
		<img src="<?php echo get_template_directory_uri(); ?>/images/stagiaire_mage_maybe.png" alt="">
	</div>

	<div href="#" class="objet gabrielle">
		<a href="#" class="bt-popup bt-popup-gabrielle click"></a>
		<img src="<?php echo get_template_directory_uri(); ?>/images/avatar_gab.png" alt="">
	</div>

	<div class="objet charlotte">
		<a href="#" class="bt-popup bt-popup-charlotte click"></a>
		<img src="<?php echo get_template_directory_uri(); ?>/images/Marie-charlotte_renard_conseil.png" alt="">
	</div>

	<div class="objet sophie">
		<a href="#" class="bt-popup bt-popup-sophie click"></a>
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

		<a href="http://www.andreeannemercier.com/" target="_blank" title="Andrée-Anne Mercier" class="click objet peinture">
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

<div class="popup popup-sophie">
	<div class="entry-content">
		<a href="#" class="close close-sophie" title="Fermer"><span>x</span></a>
		<div class="texte">
			<h2><?php the_field('nom_sophie'); ?></h2>
			<?php the_field('sophie'); ?>
		</div>
	</div>
	<div class="overlay overlay-sophie"></div>
</div><!-- .popup-sophie -->

<div class="popup popup-gabrielle">
	<div class="entry-content">
		<a href="#" class="close close-gabrielle" title="Fermer"><span>x</span></a>
		<div class="texte">
			<h2><?php the_field('nom_gabi'); ?></h2>
			<?php the_field('gabrielle'); ?>
		</div>
	</div>
	<div class="overlay overlay-gabrielle"></div>
</div><!-- .popup-gabrielle -->

<div class="popup popup-stagiaire">
	<div class="entry-content">
		<a href="#" class="close close-stagiaire" title="Fermer"><span>x</span></a>
		<div class="texte">
			<h2><strong><?php the_field('nom_stagiaire'); ?></h2>
			<?php the_field('stagiaire'); ?>
		</div>
	</div>
	<div class="overlay overlay-stagiaire"></div>
</div><!-- .popup-stagiaire -->

<div class="popup popup-charlotte">
	<div class="entry-content">
		<a href="#" class="close close-charlotte" title="Fermer"><span>x</span></a>
		<div class="texte">
			<h2><strong><?php the_field('nom_charlotte'); ?></h2>
			<?php the_field('charlotte'); ?>
		</div>
	</div>
	<div class="overlay overlay-charlotte"></div>
</div><!-- .popup-charlotte -->

<?php get_footer(); ?>