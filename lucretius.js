$(function() {

	$('button#generate').on('click', function() {
		$.getJSON( "lucretius.json", function(data) {
			console.log(data);
			$('#latin').html(data.latin);
			$('#english').html(data.english);
		});
	});
	
});