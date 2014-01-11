$(function() {

	// On Generate click: Call for sample data in JSON
	$('button#generate').on('click', function() {
		var language = $('input.language:checked').attr('id');
		var book = Math.floor(Math.random() * (6 - 1 + 1)) + 1;
		$.getJSON( "./json/" + language + book + ".json", function(data) {
			var passage = data[Math.floor(Math.random() * (data.length - 0 + 1)) + 0];
			console.log(passage);
			$('textarea').html(passage);
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