<?php 
/*
* Template name: Inès Allard
*/
get_header(); ?>

<?php if(have_posts()) while(have_posts()) : the_post(); ?>

	<div class="scene-paint">
			
		<div class="tous">

			<a href="<?php echo get_template_directory_uri(); ?>/b34u-d355in/ines-allard/entrejambe.jpg" title="Entre-jambe" class="img1">
				<img src="<?php echo get_template_directory_uri(); ?>/b34u-d355in/ines-allard/entrejambe.jpg" alt="">
			</a>
			<a href="<?php echo get_template_directory_uri(); ?>/b34u-d355in/ines-allard/lit2.jpg" title="Lit" class="img2">
				<img src="<?php echo get_template_directory_uri(); ?>/b34u-d355in/ines-allard/lit2.jpg" alt="">
			</a>
			<a href="<?php echo get_template_directory_uri(); ?>/b34u-d355in/ines-allard/vaison.jpg" title="Vaison" class="img3">
				<img src="<?php echo get_template_directory_uri(); ?>/b34u-d355in/ines-allard/vaison.jpg" alt="">
			</a>
			<a href="<?php echo get_template_directory_uri(); ?>/b34u-d355in/ines-allard/tache.jpg" title="Tâche" class="img4">
				<img src="<?php echo get_template_directory_uri(); ?>/b34u-d355in/ines-allard/tache.jpg" alt="">
			</a>
			<a href="<?php echo get_template_directory_uri(); ?>/b34u-d355in/ines-allard/soupe 4.jpg" title="Soupe" class="img5">
				<img src="<?php echo get_template_directory_uri(); ?>/b34u-d355in/ines-allard/soupe 4.jpg" alt="">
			</a>
			<a href="<?php echo get_template_directory_uri(); ?>/b34u-d355in/ines-allard/perso.jpg" title="Perso" class="img6">
				<img src="<?php echo get_template_directory_uri(); ?>/b34u-d355in/ines-allard/perso.jpg" alt="">
			</a>
			<a href="<?php echo get_template_directory_uri(); ?>/b34u-d355in/ines-allard/matin.jpg" title="Matin" class="img7">
				<img src="<?php echo get_template_directory_uri(); ?>/b34u-d355in/ines-allard/matin.jpg" alt="">
			</a>
			<a href="<?php echo get_template_directory_uri(); ?>/b34u-d355in/ines-allard/leo.jpg" title="Leo" class="img8">
				<img src="<?php echo get_template_directory_uri(); ?>/b34u-d355in/ines-allard/leo.jpg" alt="">
			</a>
			<a href="<?php echo get_template_directory_uri(); ?>/b34u-d355in/ines-allard/jungle.jpg" title="Jungle" class="img9">
				<img src="<?php echo get_template_directory_uri(); ?>/b34u-d355in/ines-allard/jungle.jpg" alt="">
			</a>
			<a href="<?php echo get_template_directory_uri(); ?>/b34u-d355in/ines-allard/genre-non.jpg" title="Genre non" class="img10">
				<img src="<?php echo get_template_directory_uri(); ?>/b34u-d355in/ines-allard/genre-non.jpg" alt="">
			</a>

		</div>

	</div>

<?php endwhile; ?>

<?php get_footer(); ?>
