jQuery(document).ready(function(){

	var feed = new Instafeed({
		get: 'tagged',
		tagName: 'bum',
		accessToken: '32643731.55fda44.a944a46e15624193a6526d7099a30e74',
		limit: 20,
		resolution: 'standard_resolution',
		mock: true,
		success: function(data){
			jQuery.each(data, function(i, item) {
				jQuery.each(item, function(k, v){
					console.log(k);
					if(v instanceof Object == true) {

						var link = v.link;
						var img = v.images.standard_resolution.url;
						var output = '<img alt="" src="'+img+'" />';
						/*if(v.caption != null) { var quote = v.caption.text; }

						var link = v.link;
						var img = v.images.standard_resolution.url;

						if(quote != null) {
							var output = '<section><div class="content"><div class="bulle"><div class="quote">'+quote+'</div></div><div class="img-wrapper"><div class="img"><img alt="" src="'+img+'" /></div></div></div></section>';
						} else {
							var output = '<section><div class="content"></div><div class="img-wrapper"><div class="img"><img alt="" src="'+img+'" /></div></div></div></section>';
						} */

						jQuery('#content').append(output);
					}
				});
			});
		}
	});

	feed.run();
})