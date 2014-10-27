
jQuery(document).ready(function(jQuery) {

	// Your JavaScript goes here
    jQuery("#nav_collapse").click(showHideNav);

    headlineSwap();

});


function showHideNav() {
    var id = jQuery(this).attr("href");
    jQuery(id).toggle();
    return false;
}

function headlineSwap() {
    jQuery("#hgroup h2").insertBefore("#hgroup h1");
}


