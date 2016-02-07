// FUNCTIONS

$(document).ready(function(){

	// VARIABLES:
	var display = $(".display");
	var form = $("#chat");
	var textField = $("#textField");

	$('#send').on('click', function(e) {
		e.preventDefault();
		display.append("<div class='sent'> " + $('#textField').val() + " </div>");
		display[0].scrollTop = display[0].scrollHeight;
	});
	
	/*$('textarea').on( 'keyup', function (e){
		e.preventDefault();
	  	e = e || event;
	  	if (e.keyCode === 13 && !e.ctrlKey) {
			$.ajax({
				url: 'sub/twrie.php',
				type: 'POST',
				cache: true,
				data: form.serialize(),
				beforeSend: function(){
					// MIGHT USE THIS LATER
				},
				success: function(data){
					var newMessage = $(data).hide().fadeIn(800);
					display.append(newMessage);
					display[0].scrollTop = display[0].scrollHeight;
				}
			});
		textField.val('');
	  	} else {
		    $(this).css('height', 'auto' );
			$(this).height(this.scrollHeight -18);
	  	}
 	});

	/***************** READ.PHP *****************/
 /*
	setInterval(function(){
			$.ajax({
		        async: true,
		        url: 'sub/read.php',
		        success: function( data )  {
		        	if (data == "looking.php") {
		        		window.location.href = data;
		        	}if (data.length > 0){
						var newMessage = $(data).hide().fadeIn(800);
						display.append(newMessage);
						display[0].scrollTop = display[0].scrollHeight;
					}
		        }
		    });
		},1000
	);
*/
});