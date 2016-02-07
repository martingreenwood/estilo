var $j = jQuery;

// Bind to the dom ready

$j(window).load(function() {

    // get the hight of the feature image div
    var img_height = $j('#news-intro .img').height();

    // make the contet div match 
    $j('#news-intro .tweet').height(img_height);

});

// Bind to the resize event of the window object
$j(window).on("resize", function () {
    
    // get the hight of the feature image div
    var img_height = $j('#news-intro .img').height();

    // make the contet div match 
	$j('#news-intro .tweet').height(img_height);
});