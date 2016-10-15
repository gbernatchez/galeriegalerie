<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/chatroom.css">

<div id="zone-chatroom">

	<div class="bt-chatroom">CHAT ROUME</div>

	<div class="content entry-content">

		<div class="login-zone">

			<?php if (is_user_logged_in()) { ?>
				<a href="<?php echo wp_logout_url( get_permalink() ); ?>">Logout</a>

			<?php } else { get_template_part('ajax', 'auth'); ?>            	
				Tu veux te joindre au chat ? <a class="login_button" id="show_login" href="">Connecte toi</a>, ou 
				<a class="login_button" id="show_signup" href="">inscrit toi</a> ! Tu vas voir, c'est facile ;)
			<?php } ?>

		</div>

		<div class="form-chat">
		  
			<form id="login" class="ajax-auth group" action="login" method="post">
	   			<h1>Login</h1>
	    		<p class="status"></p>  
	   			<?php wp_nonce_field('ajax-login-nonce', 'security'); ?>  
				<label for="username">Username</label>
				<input id="username" type="text" class="required" name="username">
				<label for="password">Password</label>
				<input id="password" type="password" class="required" name="password">
				<a class="text-link" href="<?php echo wp_lostpassword_url(); ?>">Lost password?</a>
	    		<input class="submit_button" type="submit" value="LOGIN"> 
			</form>
	 
			<form id="register" class="ajax-auth group"  action="register" method="post">
			    <h1>Signup</h1>
			    <p class="status"></p>
			    <?php wp_nonce_field('ajax-register-nonce', 'signonsecurity'); ?>         
			    <label for="signonname">Username</label>
			    <input id="signonname" type="text" name="signonname" class="required">
			    <label for="email">Email</label>
			    <input id="email" type="text" class="required email" name="email">
			    <label for="signonpassword">Password</label>
			    <input id="signonpassword" type="password" class="required" name="signonpassword" >
			    <label for="password2">Confirm Password</label>
			    <input type="password" id="password2" class="required" name="password2">
			    <input class="submit_button" type="submit" value="SIGNUP">   
			</form>

		</div>

		<?php echo do_shortcode('[wise-chat theme="lightgray" show_users_counter="1" show_user_name="1" allow_post_links="1" allow_post_images="1" enable_images_uploader="1" enable_twitter_hashtags="1" show_message_submit_button="1" allow_change_user_name="1" emoticons_enabled="4" window_title="Expo Collective" enable_attachments_uploader="0" messages_time_mode="elapsed" enable_youtube="1" allow_change_text_color="0"]'); ?>

	</div><!-- .menu-content -->

</div><!-- #zone-chatroom -->