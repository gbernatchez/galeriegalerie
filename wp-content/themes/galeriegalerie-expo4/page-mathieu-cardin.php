<?php 
/*
* Template name: Mathieu Cardin
*/
get_header(); 
wp_enqueue_script('jquery-ui-draggable');
?>

<script type="text/javascript">
	jQuery(document).ready(function(){

		jQuery('.popup-action').click(function() {
			jQuery('.fenetre').each(function(i) {
				var $section = jQuery(this);
				setTimeout(function() {
					var positionX = $section.attr('data-x');
					var positionY = $section.attr('data-y');
					$section.css('margin-top', parseInt(positionX));
					$section.css('margin-left', parseInt(positionY));

					$section.addClass('open');
				}, i*250);
			});
		});




		jQuery('.fenetre.fenetre2 .content').append('<iframe width="560" height="315" src="https://www.youtube.com/embed/KtuA6Qylpyo?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=1" frameborder="0" allowfullscreen></iframe>')

		jQuery('.fenetre').draggable({ handle: ".handle" });

		var cptZindex = 1;
		jQuery('.fenetre header').bind('click mousedown',function(){
			jQuery(this).parent().css('z-index', cptZindex);
			cptZindex++;
		});

		jQuery('.fermer').click(function(){
			var fenetre = jQuery(this).parent().parent();
			fenetre.remove();
		});
	});
</script>

<style type="text/css">

	.popup-action {
		text-align: center;
		margin: 3em;
		font-size: 2em;
	}


	.fenetre {
		position: fixed;
		width: 35em;
		height: 35em;
		box-shadow: 0 0 5em -1em #ababab;
		/*transform: translate(-50%, -50%);*/
		border-radius: 0.25em;
		/*left: 50%;
  		top: 50%;*/
  		background-color: #fff;
  		border: thin solid #d5d5d5;
  		/*transition: all 0.25s ease;
  		font-size: 0%;*/
  		display: none;
	}

	.fenetre.open {
		font-size: 100%;
		display: block;
	}

	.fenetre header {
		border-radius: 0.25em 0.25em 0 0;
		text-align: center;
		font-family: helvetica;
		color: #000;
		font-size: 0.75em;
		padding: 0.5em 0.1em 0 0.1em;
		background-color: #d5d5d5;
		cursor: move;
	}

	.fenetre .url {
		border: thin solid #b7b7b7;
		border-radius: 0.25em;
		background-color: #fff;
		padding: 0.5em;
		margin: 0.25em 0 0.5em 0;
		text-align: left;
		cursor: text;
		width: 100%;
	}

	.fenetre .url:before {
		content: 'i';
		font-family: code;
		border: 0.15em solid #000;
		border-radius: 100%;
		padding: 0 0.45em;
		margin-right: 0.5em;
	}

	.fenetre .button {
		position: absolute;
		top: 0.4em;
		left: 0.5em;

	}

	.fenetre .fermer {
		width: 0.75em;
		height: 0.75em;
		background-color: #fd5b58;
		border-radius: 100%;
		display: block;
		border: thin solid #dd3d3d;
	}


</style>

<?php if(have_posts()) while(have_posts()) : the_post(); ?>

	<a href="#" class="popup-action">test popup</a>

	<section class="fenetre fenetre3" data-x="120" data-y="50">
		<div class="button">
			<a class="fermer" href="#"></a>
		</div>
		<header>
			<div class="handle">Code - Galerie Galerie 3</div>
			<div class="url">www.galeriegalerieweb.com/25dddd9-2/</div>
		</header>
		
		<div class="content">
			dsadsadasdsad
		</div>

	</section>

	<section class="fenetre fenetre2" data-x="100" data-y="300">
		<div class="button">
			<a class="fermer" href="#"></a>
		</div>
		<header>
			<div class="handle">Code - Galerie Galerie 2</div>
			<div class="url">www.galeriegalerieweb.com/dsadsa259-2/</div>
		</header>
		
		<div class="content"></div>

	</section>

	<section class="fenetre fenetre1" data-x="20" data-y="30">
		<div class="button">
			<a class="fermer" href="#"></a>
		</div>
		<header>
			<div class="handle">Code - Galerie Galerie</div>
			<div class="url">www.galeriegalerieweb.com/259-2/</div>
		</header>
		
		<div class="content">
			adjskdjks
		</div>

	</section>

<?php endwhile; ?>

<?php get_footer(); ?>
