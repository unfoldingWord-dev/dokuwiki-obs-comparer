jQuery(document).ready(function(){
	jQuery('.language > .container > .toggle-container > a.toggle').click(function(){
		jQuery(this).parents('.container').first().siblings('.chapters').toggle();
		if(jQuery(this).html() == "▲")
			jQuery(this).html("▼");
		else
			jQuery(this).html("▲");
		return false;
	});

	jQuery('.chapter > .container >  .toggle-container > a.toggle').click(function(){
		jQuery(this).parents('.container').first().siblings('.frames').toggle();
		if(jQuery(this).html() == "▲")
			jQuery(this).html("▼");
		else
			jQuery(this).html("▲");
		return false;
	});

	jQuery('.frame > .container >  .toggle-container > a.toggle').click(function(){
		jQuery(this).parents('.container').first().siblings('.sentences').toggle();
		if(jQuery(this).html() == "▲")
			jQuery(this).html("▼");
		else
			jQuery(this).html("▲");
		return false;
	});
});
