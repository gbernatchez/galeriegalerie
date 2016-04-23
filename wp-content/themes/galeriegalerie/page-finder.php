<?php 
/*
* Template name: Finder
*/
get_header(); ?>

<?php if(have_posts()) while(have_posts()) : the_post(); ?>

	<div class="content">

		<h1><?php the_title(); ?></h1>

		<div class="dossiers">
			
			<a href="#" class="dossier">
				<img src="<?php echo get_template_directory_uri(); ?>/images/dossier.png">
				<h2>Allô allô</h2>
				<p class="date">12 février 2016</p>
			</a>

			<a href="#" class="dossier">
				<img src="<?php echo get_template_directory_uri(); ?>/images/dossier.png">
				<h2>Lancement</h2>
				<p class="date">25 mai 2015</p>
			</a>

			<a href="#" class="dossier">
				<img src="<?php echo get_template_directory_uri(); ?>/images/dossier.png">
				<h2>Surprise surprise</h2>
				<p class="date">10 juin 2015</p>
			</a>

		</div>

	</div>

<?php endwhile; ?>

<?php get_footer(); ?>
