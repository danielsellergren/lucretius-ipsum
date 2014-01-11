$(function() {

	// On Generate click: Call for sample data in JSON
	$('button#generate').on('click', function() {
		$.getJSON( "lucretius.json", function(data) {
			console.log(data);
			$('#latin').html(data.latin);
			$('#english').html(data.english);
		});
	});

	// Adds favicons for external links
	$("footer a[href^='http']").each(function() {
	    $(this).css({
	        background: "url(http://www.google.com/s2/u/0/favicons?domain=" + this.hostname + 
	        ") left center no-repeat",
	        "padding-left": "20px"
	    });    
	});

});