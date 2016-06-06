<?php 
/*
* Template name: Accueil
*/
get_header(); ?>

<div id="pre-accueil">

	<div class="intro entry-content">

		<?php 
		if(have_posts()) while(have_posts()): the_post();
			the_content();
		endwhile; 
		?>

		<div id="mc_embed_signup">

			<h2>M'abonner</h2>

			<form action="//online.us11.list-manage.com/subscribe/post?u=7db3addfbdf5cebea08e1f4d2&amp;id=2dd06301ba" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				<div class="group" id="mc_embed_signup_scroll">
					
					<label class="visuallyhidden" for="mce-EMAIL">Courriel</label>
					<input type="email" placeholder="@" value="" name="EMAIL" class="required email" id="mce-EMAIL">
				
					<div id="mce-responses">
						<div class="response" id="mce-error-response" style="display:none"></div>
						<div class="response" id="mce-success-response" style="display:none"></div>
					</div>
					<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_7db3addfbdf5cebea08e1f4d2_2dd06301ba" tabindex="-1" value=""></div>
					<input type="submit" value="❤" name="subscribe" id="mc-embedded-subscribe">
				</div>
			</form>
		</div>
		<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>

		<h2>Soutenir le projet</h2>

		<a class="enter bt-soutenir" href="http://www.galeriegalerieweb.com/soutenir/" title="Soutenir le projet">
			<div>Comment nous soutenir ?</div>
		</a>

	</div>

	<div class="bt">

		<a class="enter" href="<?php echo get_permalink(7); ?>" title="Entre !">
			<div>
				<span class="e">E</span><span class="n">n</span><span class="t">t</span><span class="r">r</span><span class="e2">e</span>
			</div>
		</a>

	</div>

</div>

<?php get_footer(); ?>
