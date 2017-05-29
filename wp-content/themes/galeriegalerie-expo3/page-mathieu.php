<?php 
/*
* Template name: Mathieu P. Lapierre
*/
get_header(); ?>

<script type="text/javascript">
jQuery(document).ready(function(){
	var toux = "<?php echo get_template_directory_uri(); ?>/b34u-d355in/mathieu-p-lapierre/toux.wav";
	jQuery('.bt-popup-homme').click(function(){
		new Audio(toux).play();
	});
});
</script>

<?php if(have_posts()) while(have_posts()) : the_post(); ?>

<div class="tous">
	
	<div class="objet homme">
		<a href="#" data-name="homme" class="bt-popup-homme click"></a>
		<img src="<?php echo get_template_directory_uri(); ?>/b34u-d355in/mathieu-p-lapierre/homme.png">
		<div class="ombre"></div>
	</div>

	<div class="objet femme">
		<a href="#" data-name="femme" class="bt-popup bt-popup-femme click"></a>
		<img src="<?php echo get_template_directory_uri(); ?>/b34u-d355in/mathieu-p-lapierre/femme.png">
	</div>

	<div class="objet chat">
		<img src="<?php echo get_template_directory_uri(); ?>/b34u-d355in/mathieu-p-lapierre/chat.png">
		<div class="ombre"></div>
	</div>

	<div class="objet poub1">
		<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/poub1.png">
	</div>

	<div class="objet mouchoir1">
		<img alt="" src="<?php echo get_template_directory_uri(); ?>/b34u-d355in/mathieu-p-lapierre/mouchoir.png">
	</div>

	<div class="objet mouchoir2">
		<img alt="" src="<?php echo get_template_directory_uri(); ?>/b34u-d355in/mathieu-p-lapierre/mouchoir.png">
	</div>

	<div class="objet tache">
		<img alt="" src="<?php echo get_template_directory_uri(); ?>/b34u-d355in/mathieu-p-lapierre/tache.png">
	</div>

</div>

<div class="mur gauche"></div>

<div id="mur-fond">
	
	<div class="tous">

		<a href="<?php echo get_template_directory_uri(); ?>/b34u-d355in/mathieu-p-lapierre/comment-construire.png" title="Comment construire" class="oeuvre oeuvre1">
			<img src="<?php echo get_template_directory_uri(); ?>/b34u-d355in/mathieu-p-lapierre/comment-construire.png">
		</a>

		<a href="<?php echo get_template_directory_uri(); ?>/b34u-d355in/mathieu-p-lapierre/garage.png" title="Garage" class="oeuvre oeuvre2">
			<img src="<?php echo get_template_directory_uri(); ?>/b34u-d355in/mathieu-p-lapierre/garage.png">
		</a>

		<a href="<?php echo get_template_directory_uri(); ?>/b34u-d355in/mathieu-p-lapierre/le-jeu-est-possible.png" title="Le jeu est possible" class="oeuvre oeuvre3">
			<img src="<?php echo get_template_directory_uri(); ?>/b34u-d355in/mathieu-p-lapierre/le-jeu-est-possible.png">
		</a>

		<a href="<?php echo get_template_directory_uri(); ?>/b34u-d355in/mathieu-p-lapierre/naissance.png" title="Naissance" class="oeuvre oeuvre4">
			<img src="<?php echo get_template_directory_uri(); ?>/b34u-d355in/mathieu-p-lapierre/naissance.png">
		</a>

	</div>

</div>

<div class="mur droit"></div>
<div id="sol" class="coin-droit coin-gauche"></div>

<div class="popup">
	<div class="entry-content">
		<a href="#" class="close" title="Fermer"><span>x</span></a>
		<div data-name="femme" class="texte texte-femme">
			<p class="no-padding">
				<img class="alignleft size-full wp-image-265" src="<?php echo get_template_directory_uri(); ?>/b34u-d355in/mathieu-p-lapierre/face-femme.png" alt="" width="58" height="60" />
				<strong>Mécène:</strong>
			</p>
			<p>Crime c'est tu le chat qui a joué dans Retour au bercail 2 ?</p>
		</div>
	</div>
	<div class="overlay"></div>
</div><!-- .popup -->

<?php endwhile; ?>

<?php get_footer(); ?>
