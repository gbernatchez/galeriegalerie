<?php 
/*
* Template name: Guestbook
*/
get_header(); 
?>
<link href="https://fonts.googleapis.com/css?family=Give+You+Glory" rel="stylesheet">

<div id="container">

	<div id="content" class="group">

		<h1 class="titre-expo">Livre d'or</h1>

		<?php if(have_posts()) while(have_posts()) : the_post();
			the_content();
		endwhile; ?>

	</div><!-- #content -->

</div><!-- #container -->

<?php get_footer(); ?>
