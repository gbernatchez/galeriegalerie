<?php 
/*
* Template name: Accueil
*/
get_header(); ?>

<div id="pre-accueil">

	<div class="intro">

		<?php 
		if(have_posts()) while(have_posts()): the_post();
			the_content();
		endwhile; 
		?>

	</div>

	<div class="bt">

		<a class="enter" href="<?php echo get_template_directory_uri(); ?>/hall" title="Entre !">Entre !</a>

	</div>

	<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
	<!--End mc_embed_signup-->  

</div>

<?php get_footer(); ?>
