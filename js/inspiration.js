var $j = jQuery;

if ((screen.width>680))
{
	
	// Bind to the dom ready

	$j(window).load(function() {
	    
	    // get the hight of the feature image div
	    var img_height = $j('#inspiration-content .feat-img').height();

	    // make the contet div match 
	    $j('#inspiration-content  .content').height(img_height);

	});

	// Bind to the resize event of the window object
	$j(window).on("resize", function () {
	    
	    // get the hight of the feature image div
	    var img_height = $j('#inspiration-content .feat-img').height();

	    // make the contet div match 
	    $j('#inspiration-content  .content').height(img_height);

	});

}