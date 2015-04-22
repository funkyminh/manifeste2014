jQuery(window).load(function() {
	jQuery('#slider').nivoSlider({
		effect:'fold', //Specify sets like: 'fold,fade,sliceDown'
		slices:15,
		animSpeed:500, //Slide transition speed
		pauseTime:4000,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:true, //Next & Prev
		directionNavHide:true, //Only show on hover
		controlNav:false, //1,2,3...
		keyboardNav:true, //Use left & right arrows
		pauseOnHover:true, //Stop animation while hovering
		captionOpacity:0.8, //Universal caption opacity
        prevText: '<i class="icon-caret-left icon-large"></i>', // Prev directionNav text
        nextText: '<i class="icon-caret-right icon-large"></i>' // Next directionNav text
	});
	//jQuery('#slider').css("overflow","visible");
});
