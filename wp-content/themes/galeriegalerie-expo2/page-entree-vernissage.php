<?php 
/*
* Template name: Entrée Chatroom vernissage
*/
get_header(); ?>

<?php echo get_template_part('chatroom'); ?>

<div class="ambiance">
	<div class="dark"></div>
	<div class="lum rouge"></div>
	<div class="lum bleu"></div>
</div>

<div class="mur gauche sorti">
	<img alt="" class="titre-porte party-fleche" src="<?php echo get_template_directory_uri(); ?>/images/photomaton.png">
	<a title="<?php echo get_the_title(734); ?>" href="<?php echo get_permalink(734); ?>"></a>
</div>

<div class="tous">
	<div class="objet danseuse">
		<img src="<?php echo get_template_directory_uri(); ?>/images/itsmylife.gif" alt="">
	</div>

	<div class="objet glitter">
		<img src="<?php echo get_template_directory_uri(); ?>/images/glitter_construction.gif" alt="">
	</div>

	<div class="objet animal">
		<img src="<?php echo get_template_directory_uri(); ?>/images/bobdance.gif" alt="">
	</div>

	<div class="objet cake">
		<img src="<?php echo get_template_directory_uri(); ?>/images/birthdaycake.png" alt="">
	</div>

	<div class="objet cake cake1">
		<img src="<?php echo get_template_directory_uri(); ?>/images/birthdaycake.png" alt="">
	</div>

	<div class="objet cake cake2">
		<img src="<?php echo get_template_directory_uri(); ?>/images/birthdaycake.png" alt="">
	</div>

	<div class="objet cake cake3">
		<img src="<?php echo get_template_directory_uri(); ?>/images/birthdaycake.png" alt="">
	</div>

	<div class="objet verre">
		<img src="<?php echo get_template_directory_uri(); ?>/images/verre.gif" alt="">
	</div>

</div>


<div id="mur-fond">

	<div class="tous">

		<h1 class="titre-expo">
			<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/siliconvallee.png">
			<span class="visuallyhidden">Silicon Vallée</span>
		</h1>

		<div class="objet enseigne">
			<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/neon_logo_rose.png">
		</div>

		<a href="http://www.galeriegalerieweb.com/marie-darsigny/felicitations" id="porte1" class="objet porte click">
			<h2>Marie Darsigny</h2>
			<img src="<?php echo get_template_directory_uri(); ?>/images/porte1.jpg" alt="">
		</a>

		<a href="http://www.galeriegalerieweb.com/jess-mac" id="porte2" class="objet porte click">
			<h2>Jess Mac</h2>
			<img src="<?php echo get_template_directory_uri(); ?>/images/porte2.jpg" alt="">
		</a>

		<a onClick="MyWindow=window.open('http://backdoortrojan.net','Backdoortrojan.net', 'location=no,top=100,status=no,menubar=no,left=50,width=1000,height=1000'); return false;" href="http://backdoortrojan.net" id="porte3" class="objet porte click">
			<h2>Émilie Gervais <br>& Laure Bardou</h2>
			<img src="<?php echo get_template_directory_uri(); ?>/images/porte3.jpg" alt="">
		</a>

	</div>

</div><!-- #mur-fond -->

<div class="mur droit sorti">
	<img alt="" class="archive titre-porte" src="<?php echo get_template_directory_uri(); ?>/images/archives_fleche.png">
	<a title="<?php echo get_the_title(9); ?>" href="<?php echo get_permalink(9); ?>"></a>
</div>

<div id="sol" class="coin-gauche coin-droit">

	<div class="tous">

		<div class="objet ballons">
			<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/balloon-rose.gif">
		</div>

		<div class="objet plante">
			<img src="<?php echo get_template_directory_uri(); ?>/images/plante.png" alt="">
		</div>

		<div class="objet chaise">
			<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/chaise.png">
		</div>

		<a href="http://www.galeriegalerieweb.com/silicon_vallee.pdf" target="_blank" title="Visionner le pamphlet" class="objet pamphlet click">
			<img src="<?php echo get_template_directory_uri(); ?>/images/iconepdf.png" alt="Silicon Vallée">
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
