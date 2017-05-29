<?php 
/*
* Template name: Bureau Party
*/
get_header(); ?>

<div class="ambiance">
	<div class="lum noir"></div>
	<div class="lum blanc"></div>
</div>

<div class="tous">

	<div class="objet discoball">
		<img src="<?php echo get_template_directory_uri(); ?>/images/discoball.gif" alt="">
	</div>	

	<div class="objet foreveralone">
		<img src="<?php echo get_template_directory_uri(); ?>/images/foreveralone.gif" alt="">
	</div>
	
	<?php /* ?>
	<div class="objet stickman">
		<img src="<?php echo get_template_directory_uri(); ?>/images/stickdancer.gif" alt="">
	</div><?php */ ?>

	<div class="objet bureau">
		<img src="<?php echo get_template_directory_uri(); ?>/images/bureau.png" alt="">
	</div>

	<div class="objet chaise2">
		<img src="<?php echo get_template_directory_uri(); ?>/images/orange-office-chair.png" alt="">
	</div>

	<div class="objet bureau2">
		<a href="???" class="ordi-code click" onClick="MyWindow=window.open('http://www.galeriegalerieweb.com/259-2','????', 'location=no,top=100,titlebar=no,status=no,menubar=no,left=300,width=500,height=400'); return false;"></a>
		<img src="<?php echo get_template_directory_uri(); ?>/images/test_bureau.gif" alt="">
	</div>

</div>

<div id="mur-fond">

	<div class="tous">

		<div class="objet deco">
			<img src="<?php echo get_template_directory_uri(); ?>/images/cubeplant.png" alt="">
		</div>

		<a href="#" data-name="oeuvre" class="bt-popup-oeuvre click objet peinture">
			<img alt="Andrée-Anne Mercier" src="<?php echo get_template_directory_uri(); ?>/images/andre-anne-mercier-samourai.jpg">
		</a>

		<div class="objet conference">
			<img src="<?php echo get_template_directory_uri(); ?>/images/conferenceroom.png" alt="">
		</div>

	</div>

</div><!-- #mur-fond -->

<div class="mur droit sorti">
	<img alt="" class="entree titre-porte fleche-droite" src="<?php echo get_template_directory_uri(); ?>/images/archives_fleche2.png">
	<a title="<?php echo get_the_title(7); ?>" href="<?php echo get_permalink(7); ?>"></a>
</div>

<div id="sol" class="coin-gauche coin-droit">


</div><!-- #sol -->

<div class="popup">
	<div class="entry-content">
		<a href="#" class="close" title="Fermer"><span>x</span></a>
		<div data-name="oeuvre" class="texte texte-oeuvre">
			<?php the_field('oeuvre'); ?>
		</div>
	</div>
	<div class="overlay"></div>
</div><!-- .popup -->

<?php get_footer(); ?>