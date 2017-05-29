<?php 
/*
* Template name: Simon Provencher
*/
get_header(); ?>

<?php if(have_posts()) while(have_posts()) : the_post(); ?>

	<div id="page-simon">

		<div class="popup intro-photobooth">
			<div class="entry-content">
				<p><img class="alignleft wp-image-268" src="http://www.galeriegalerieweb.com/wp-content/uploads/2015/12/visage_stagiaire_lol.png" alt="visage_stagiaire_lol" width="78" height="93"><strong>Stagiaire_nonrémunéré(e)?:</strong></p>
				<div data-name="sophie" class="texte texte-sophie visible">
					<p>Tu aimes ce que tu vois ? Ce sont les créations de <strong>Simon Provencher</strong> ! Pour en voir plus, abonne-toi au Galerie Galerie Club ! </p>
				</div>
			</div>
		</div>
			
		<div class="gif">
			<img src="<?php echo get_template_directory_uri(); ?>/b34u-d355in/simon-provencher/autoportrait.gif">
			<img src="<?php echo get_template_directory_uri(); ?>/b34u-d355in/simon-provencher/bcbcs.gif">
			<img src="<?php echo get_template_directory_uri(); ?>/b34u-d355in/simon-provencher/jean-michel.gif">
		</div>

		<div id="mc_embed_signup">

			<form action="//online.us11.list-manage.com/subscribe/post?u=7db3addfbdf5cebea08e1f4d2&amp;id=2dd06301ba" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				<div class="group" id="mc_embed_signup_scroll">
					<div class="group">
						<label class="visuallyhidden" for="mce-EMAIL"><?php pll_e("Courriel"); ?></label>
						<div class="ze-email">
							<input autofocus type="email" placeholder="Email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
						</div>
						<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_7db3addfbdf5cebea08e1f4d2_2dd06301ba" tabindex="-1" value=""></div>
						<div class="blink-radient ze-submit">
							<input type="submit" value="<?php pll_e("M'abonner"); ?>" name="subscribe" id="mc-embedded-subscribe">
						</div>
					</div>

					<div id="mce-responses">
						<div class="response" id="mce-error-response" style="display:none"></div>
						<div class="response" id="mce-success-response" style="display:none"></div>
					</div>
				</div>
			</form>
		</div>
		<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
	</div>

<?php endwhile; ?>

<?php get_footer(); ?>
