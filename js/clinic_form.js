$(document).ready(function() {
	
	$('#photoimg').live('change', function() {
		$("#preview").html('');
		$("#preview").html('uploading');
		$("#imageform").ajaxForm({
			target : '#preview'
		}).submit();
	});
	
	
	
});

$(document).ajaxStart(function(){
	console.log('started');
});

$(document).ajaxStop(function(){
	console.log('done');
});