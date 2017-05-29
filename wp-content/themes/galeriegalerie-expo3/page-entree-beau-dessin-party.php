<?php 
/*
* Template name: Entrée B34U D3551N Party
*/
get_header(); ?>

<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('.old-porte').delay(1000).fadeOut(750, function(){
			jQuery('.old-porte').remove();
			jQuery('.new-porte').fadeIn(750);

		});
		jQuery('.glitter').delay(500).fadeIn(1500, function(){
			jQuery('.glitter').delay(500).fadeOut(750).remove();
		});
	});
</script>

<div class="ambiance">
	<div class="lum noir"></div>
	<div class="lum blanc"></div>
</div>

<div class="tous">
		
	<div class="objet beer1">
		<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/beer.png">
	</div>

	<div class="objet beer2">
		<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/beer.png">
	</div>

	<div class="objet beer3">
		<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/beer.png">
	</div>

	<div class="objet beer4">
		<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/beer.png">
	</div>
	<div class="objet bones">
		<img src="<?php echo get_template_directory_uri(); ?>/images/bones.gif" alt="">
	</div>
	<div class="objet chat3">
		<img src="<?php echo get_template_directory_uri(); ?>/images/dance-chat.gif" alt="">
	</div>
	<div class="objet sheep">
		<img src="<?php echo get_template_directory_uri(); ?>/images/dancing-sheep.gif" alt="">
	</div>
	<div class="objet cochons">
		<img src="<?php echo get_template_directory_uri(); ?>/images/cochons.gif" alt="">
	</div>
	<div class="objet moonwalk">
		<img src="<?php echo get_template_directory_uri(); ?>/images/moonwalk.gif" alt="">
	</div>


</div>

<div class="mur gauche sorti">
	<img alt="" class="titre-porte fleche-gauche" src="<?php echo get_template_directory_uri(); ?>/images/archives_flechecorriige.png">
	<a title="<?php echo get_the_title(11); ?>" href="<?php echo get_permalink(11); ?>"></a>
</div>

<div class="tous">
	<div class="objet fontaine">
		<img src="<?php echo get_template_directory_uri(); ?>/images/fontaine-deco.gif" alt="">
	</div>

</div>

<div id="mur-fond">

	<div class="tous">

		<div class="objet enseigne">
			<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/enseigne.png">
		</div>

		<h1 class="titre-expo">
			<img src="<?php echo get_template_directory_uri(); ?>/images/beaudessin.png" alt="">
			<span class="visuallyhidden">B34U D3551N</span>
		</h1>

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

		<div class="objet glitter">
			<img src="<?php echo get_template_directory_uri(); ?>/images/glitter_construction.gif" alt="">
		</div>

		<div class="new-porte">

			<a href="<?php echo site_url(); ?>/mathieu_p_lapierre" id="expo1">
				<img src="<?php echo get_template_directory_uri(); ?>/images/vignette_mathieu.jpg" alt="">
				<span class="visuallyhidden">Mathieu P. Lapierre</span>
			</a>
			<a href="<?php echo site_url(); ?>/megane_voghell" id="expo2">
				<img src="<?php echo get_template_directory_uri(); ?>/images/vignette_megane.jpg" alt="">
				<span class="visuallyhidden">Mégane Voghell</span>
			</a>
			<a href="<?php echo site_url(); ?>/adriana_smith" id="expo3">
				<img src="<?php echo get_template_directory_uri(); ?>/images/vignette_adriana.jpg" alt="">
				<span class="visuallyhidden">Adriana Smith</span>
			</a>
			<a href="<?php echo site_url(); ?>/alban_loosli" id="expo4">
				<img src="<?php echo get_template_directory_uri(); ?>/images/vignette_alban.jpg" alt="">
				<span class="visuallyhidden">Alban Loosli</span>
			</a>
			<a href="<?php echo site_url(); ?>/ines_allard" id="expo5">
				<img src="<?php echo get_template_directory_uri(); ?>/images/vignette_ines.jpg" alt="">
				<span class="visuallyhidden">Inès Allard</span>
			</a>

		</div>

	</div>

</div><!-- #mur-fond -->

<div class="mur droit sorti">
	<img alt="" class="archive titre-porte fleche-droite" src="<?php echo get_template_directory_uri(); ?>/images/archives_fleche.png">
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

		<a href="http://www.galeriegalerieweb.com/B34UD355IN.pdf" target="_blank" title="Visionner le pamphlet" class="objet pamphlet click">
			<img src="<?php echo get_template_directory_uri(); ?>/images/pdfallo.png" alt="">
			<img alt="" class="titre-pdf" src="<?php echo get_template_directory_uri(); ?>/images/flece_solo.png">
		</a>

		<a href="<?php echo site_url(); ?>/livre-dor/" title="Ouvrir le livre d'or" class="objet guestbook click">
			<img src="<?php echo get_template_directory_uri(); ?>/images/guestbook.gif" alt="">
			<img alt="" class="titre-pdf" src="<?php echo get_template_directory_uri(); ?>/images/flece_solo.png">
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
